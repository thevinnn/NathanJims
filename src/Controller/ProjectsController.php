<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Console\ConsoleOutput;
/**
 * Projects Controller
 *
 * @property \App\Model\Table\ProjectsTable $Projects
 */
class ProjectsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \DateMalformedStringException
     */
    public function index()
    {
        $this->set('title', 'Projects');

        $output = new ConsoleOutput();
        $startDate = null;
        $endDate = null;
        $status = null;
        $checkbox = null;
        $skill_keyword = null;

        if($this->request->is('post')) {
            $req = $this->request->getParsedBody();
            $skill_keyword = $req['skill_keyword'] ?? null;
            $startDate = $req['start_date'] ?? null;
            $endDate = $req['end_date'] ?? null;
            $status = $req['status'];
            $checkbox = $req['skills'];
        }

        $query = $this->Projects->find('all')
            ->contain(['Contractors', 'Organisations', 'Skills']);

        if($skill_keyword) {
            $query->leftJoinWith('Skills')
                ->where(['Skills.skill_name LIKE'=> '%'.$skill_keyword.'%']);
        }

        if ($checkbox != "") {
            $query->innerJoinWith('ProjectsSkills')
                ->where(['ProjectsSkills.skill_id IN' => $checkbox]);
        }

        if ($status != null) {
            $query->where(['Projects.complete' => $status]);
        }
        if ($startDate && $endDate) {
            $startDate = new \DateTime($startDate);
            $endDate = new \DateTime($endDate);
            $query->where([
                    'AND' => [
                        'Projects.project_due_date >=' => $startDate->format('Y-m-d'),
                        'Projects.project_due_date <=' => $endDate->format('Y-m-d')
                    ]
            ]);
        }
        else if ($startDate) {
            $startDate = new \DateTime($startDate);
            $query->where(['Projects.project_due_date >=' => $startDate->format('Y-m-d')]);
        }
        else if ($endDate) {
            $endDate = new \DateTime($endDate);
            $query->where(['Projects.project_due_date <=' => $endDate->format('Y-m-d')]);
        }


        $ProjectSkills = $this->Projects->Skills->find('list', [
            'keyField' => 'id',
            'valueField' => 'skill_name'
        ])->toArray();

        $projects = $this->paginate($query);
        $this->set(compact('projects', 'ProjectSkills'));
        $project = $this->Projects->newEmptyEntity();
        $this->set(compact('projects', 'ProjectSkills', 'project'));
        $this->viewBuilder()->setLayout('staff_layout');


    }

    /**
     * View method
     *
     * @param string|null $id Project id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $project = $this->Projects->get($id);
        $project->last_checked = new \DateTime('now');
        $this->Projects->save($project);

        $project = $this->Projects->get($id, contain: ['Contractors', 'Organisations']);
        $this->set(compact('project'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $project = $this->Projects->newEmptyEntity();
        if ($this->request->is('post')) {
            $project = $this->Projects->patchEntity($project, $this->request->getData());
            if ($this->Projects->save($project)) {
                $this->Flash->success(__('The project has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The project could not be saved. Please, try again.'));
        }
        $contractors = $this->Projects->Contractors->find('list', limit: 200)->all();
        $organisations = $this->Projects->Organisations->find('list', limit: 200)->all();
        $this->set(compact('project', 'contractors', 'organisations'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Project id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $project = $this->Projects->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $project = $this->Projects->patchEntity($project, $this->request->getData());
            if ($this->Projects->save($project)) {
                $this->Flash->success(__('The project has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The project could not be saved. Please, try again.'));
        }
        $contractors = $this->Projects->Contractors->find('list', limit: 200)->all();
        $organisations = $this->Projects->Organisations->find('list', limit: 200)->all();
        $this->set(compact('project', 'contractors', 'organisations'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Project id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $project = $this->Projects->get($id);
        if ($this->Projects->delete($project)) {
            $this->Flash->success(__('The project has been deleted.'));
        } else {
            $this->Flash->error(__('The project could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
