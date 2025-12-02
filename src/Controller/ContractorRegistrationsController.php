<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ContractorRegistrations Controller
 *
 * @property \App\Model\Table\ContractorRegistrationsTable $ContractorRegistrations
 */
class ContractorRegistrationsController extends AppController
{

    public function initialize(): void
    {
        parent::initialize();
        $this->Authentication->allowUnauthenticated(['register']);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {

        $this->set('title', 'Contractor Registrations');

        $query = $this->ContractorRegistrations->find()
            ->contain(['Contractors']);
        $contractorRegistrations = $this->paginate($query);

        $this->set(compact('contractorRegistrations'));
    }

    /**
     * View method
     *
     * @param string|null $id Contractor Registration id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $contractorRegistration = $this->ContractorRegistrations->get($id, contain: ['Contractors']);
        $this->set(compact('contractorRegistration'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $contractorRegistration = $this->ContractorRegistrations->newEmptyEntity();
        if ($this->request->is('post')) {
            $contractorRegistration = $this->ContractorRegistrations->patchEntity($contractorRegistration, $this->request->getData());
            if ($this->ContractorRegistrations->save($contractorRegistration)) {
                $this->Flash->success(__('The contractor registration has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contractor registration could not be saved. Please, try again.'));
        }
        $contractors = $this->ContractorRegistrations->Contractors->find('list', limit: 200)->all();
        $this->set(compact('contractorRegistration', 'contractors'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Contractor Registration id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $contractorRegistration = $this->ContractorRegistrations->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contractorRegistration = $this->ContractorRegistrations->patchEntity($contractorRegistration, $this->request->getData());
            if ($this->ContractorRegistrations->save($contractorRegistration)) {
                $this->Flash->success(__('The contractor registration has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contractor registration could not be saved. Please, try again.'));
        }
        $contractors = $this->ContractorRegistrations->Contractors->find('list', limit: 200)->all();
        $this->set(compact('contractorRegistration', 'contractors'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Contractor Registration id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $contractorRegistration = $this->ContractorRegistrations->get($id);
        if ($this->ContractorRegistrations->delete($contractorRegistration)) {
            $this->Flash->success(__('The contractor registration has been deleted.'));
        } else {
            $this->Flash->error(__('The contractor registration could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function register()
    {
        $this->viewBuilder()->setLayout('public_layout');
        $contractorRegistration = $this->ContractorRegistrations->newEmptyEntity();
        if ($this->request->is('post')) {
            $contractorRegistration = $this->ContractorRegistrations->patchEntity($contractorRegistration, $this->request->getData());
            if ($this->ContractorRegistrations->save($contractorRegistration)) {
                $this->Flash->success(__('The contractor registration has been saved.'));

                return $this->redirect(['action' => 'register']);
            }
            $this->Flash->error(__('The contractor registration could not be saved. Please, try again.'));
        }
        $contractors = $this->ContractorRegistrations->Contractors->find('list', limit: 200)->all();
        $this->set(compact('contractorRegistration', 'contractors'));
    }
}
