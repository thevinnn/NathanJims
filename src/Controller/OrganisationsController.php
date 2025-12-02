<?php
declare(strict_types=1);

namespace App\Controller;

class OrganisationsController extends AppController
{
    public function index()
    {
        $organisation = $this->Organisations->newEmptyEntity();
        $businessName = null;

        if ($this->request->is('post')) {
            $req = $this->request->getParsedBody();
            $businessName = $req['business_name'] ?? null;
        }

        $sortField = $this->request->getQuery('sort', 'project_count');
        $currentDirection = $this->request->getQuery('direction', 'asc');
        $sortDirection = ($currentDirection === 'asc') ? 'desc' : 'asc';

        $query = $this->Organisations->find('all');
        $query->select([
            'Organisations.id',
            'business_name',
            'contact_first_name',
            'contact_last_name',
            'contact_email',
            'current_website',
            'project_count' => $query->func()->count('Projects.id')
        ])
            ->contain(['Projects'])
            ->leftJoinWith('Projects')
            ->groupBy(['Organisations.id'])
            ->orderBy([$sortField => $sortDirection]);

        if ($businessName) {
            $query->where(['Organisations.business_name LIKE' => '%' . $businessName . '%']);
        }

        $organisations = $this->paginate($query);
        $this->set(compact('organisation', 'organisations', 'sortField', 'sortDirection'));
    }

    public function view($id = null)
    {
        $organisation = $this->Organisations->get($id, ['contain' => ['Contacts', 'Projects']]);
        $this->set(compact('organisation'));
    }

    public function add()
    {
        $organisation = $this->Organisations->newEmptyEntity();
        if ($this->request->is('post')) {
            $organisation = $this->Organisations->patchEntity($organisation, $this->request->getData());
            if ($this->Organisations->save($organisation)) {
                $this->Flash->success(__('The organisation has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The organisation could not be saved. Please, try again.'));
        }
        $this->set(compact('organisation'));
    }

    public function edit($id = null)
    {
        $organisation = $this->Organisations->get($id);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $organisation = $this->Organisations->patchEntity($organisation, $this->request->getData());
            if ($this->Organisations->save($organisation)) {
                $this->Flash->success(__('The organisation has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The organisation could not be saved. Please, try again.'));
        }
        $this->set(compact('organisation'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $organisation = $this->Organisations->get($id);
        if ($this->Organisations->delete($organisation)) {
            $this->Flash->success(__('The organisation has been deleted.'));
        } else {
            $this->Flash->error(__('The organisation could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    public function publicAdd()
    {
        $this->viewBuilder()->setLayout('public_layout');

        $organisation = $this->Organisations->newEmptyEntity();
        if ($this->request->is('post')) {
            $organisation = $this->Organisations->patchEntity($organisation, $this->request->getData());
            if ($this->Organisations->save($organisation)) {
                $this->Flash->success(__('The organisation has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The organisation could not be saved. Please, try again.'));
        }

        $this->set(compact('organisation'));
        $this->viewBuilder()->setTemplate('public_add');
    }
}
