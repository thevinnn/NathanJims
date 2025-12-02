<?php
declare(strict_types=1);

namespace App\Controller;

class ContractorsController extends AppController
{
    public function index()
    {
        $contractor = $this->Contractors->newEmptyEntity();
        $contractorName = null;
        $email = null;
        $checkbox = null;

        if ($this->request->is('post')) {
            $req = $this->request->getParsedBody();
            $contractorName = $req['contractor_name'] ?? null;
            $email = $req['email'] ?? null;
            $checkbox = $req['skills'];
        }

        $sortField = $this->request->getQuery('sort', 'project_count');
        $currentDirection = $this->request->getQuery('direction', 'asc');
        $sortDirection = ($currentDirection === 'asc') ? 'desc' : 'asc';

        $query = $this->Contractors->find('all');
        $query->select([
            'Contractors.id',
            'first_name',
            'last_name',
            'phone_number',
            'email',
            'project_count' => $query->func()->count('Projects.id')
        ]);

        if ($checkbox) {
            $query->innerJoinWith('ContractorsSkills')
                ->where(['ContractorsSkills.skill_id IN' => $checkbox]);
        }
        if ($contractorName) {
            $query->where([
                'OR' => [
                    'Contractors.first_name LIKE' => '%' . $contractorName . '%',
                    'Contractors.last_name LIKE' => '%' . $contractorName . '%'
                ]
            ]);
        }
        if ($email) {
            $query->where(['Contractors.email LIKE' => '%' . $email . '%']);
        }

        $query
            ->contain(['Projects'])
            ->leftJoinWith('Projects')
            ->group(['Contractors.id'])
            ->order([$sortField => $sortDirection]);

        $ContractorSkills = $this->Contractors->Skills->find('list', [
            'keyField' => 'id',
            'valueField' => 'skill_name'
        ])->toArray();

        $contractors = $this->paginate($query);
        $this->set(compact('contractors', 'ContractorSkills', 'sortField', 'sortDirection', 'contractor'));
    }

    public function view($id = null)
    {
        $contractor = $this->Contractors->get($id, ['contain' => ['Skills', 'Contacts', 'Projects']]);
        $this->set(compact('contractor'));
    }

    public function add()
    {
        $contractor = $this->Contractors->newEmptyEntity();
        if ($this->request->is('post')) {
            $contractor = $this->Contractors->patchEntity($contractor, $this->request->getData());
            if ($this->Contractors->save($contractor)) {
                $this->Flash->success(__('The contractor has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contractor could not be saved. Please, try again.'));
        }
        $skills = $this->Contractors->Skills->find('list', [
            'keyField' => 'id',
            'valueField' => 'skill_name'
        ])->toArray();

        $this->set(compact('contractor', 'skills'));
    }

    public function edit($id = null)
    {
        $contractor = $this->Contractors->get($id, ['contain' => ['Skills']]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contractor = $this->Contractors->patchEntity($contractor, $this->request->getData());
            if ($this->Contractors->save($contractor)) {
                $this->Flash->success(__('The contractor has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contractor could not be saved. Please, try again.'));
        }
        $skills = $this->Contractors->Skills->find('list', [
            'keyField' => 'id',
            'valueField' => 'skill_name'
        ])->toArray();

        $this->set(compact('contractor', 'skills'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $contractor = $this->Contractors->get($id);
        if ($this->Contractors->delete($contractor)) {
            $this->Flash->success(__('The contractor has been deleted.'));
        } else {
            $this->Flash->error(__('The contractor could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    public function publicAdd()
    {
        $this->viewBuilder()->setLayout('public_layout');

        $contractor = $this->Contractors->newEmptyEntity();
        if ($this->request->is('post')) {
            $contractor = $this->Contractors->patchEntity($contractor, $this->request->getData());
            if ($this->Contractors->save($contractor)) {
                $this->Flash->success(__('The contractor has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contractor could not be saved. Please, try again.'));
        }

        $skills = $this->Contractors->Skills->find('list', [
            'keyField' => 'id',
            'valueField' => 'skill_name'
        ])->toArray();

        $this->set(compact('contractor', 'skills'));

        $this->viewBuilder()->setTemplate('public_add');
    }
}
