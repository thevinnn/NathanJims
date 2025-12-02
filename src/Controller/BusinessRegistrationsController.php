<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * BusinessRegistrations Controller
 *
 * @property \App\Model\Table\BusinessRegistrationsTable $BusinessRegistrations
 */
class BusinessRegistrationsController extends AppController
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
        $this->set('title', 'Business Registrations');

        $query = $this->BusinessRegistrations->find()
            ->contain(['Organisations']);
        $businessRegistrations = $this->paginate($query);

        $this->set(compact('businessRegistrations'));
    }

    /**
     * View method
     *
     * @param string|null $id Business Registration id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $businessRegistration = $this->BusinessRegistrations->get($id, contain: ['Organisations']);
        $this->set(compact('businessRegistration'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $businessRegistration = $this->BusinessRegistrations->newEmptyEntity();
        if ($this->request->is('post')) {
            $businessRegistration = $this->BusinessRegistrations->patchEntity($businessRegistration, $this->request->getData());
            if ($this->BusinessRegistrations->save($businessRegistration)) {
                $this->Flash->success(__('The business registration has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The business registration could not be saved. Please, try again.'));
        }
        $organisations = $this->BusinessRegistrations->Organisations->find('list', limit: 200)->all();
        $this->set(compact('businessRegistration', 'organisations'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Business Registration id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $businessRegistration = $this->BusinessRegistrations->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $businessRegistration = $this->BusinessRegistrations->patchEntity($businessRegistration, $this->request->getData());
            if ($this->BusinessRegistrations->save($businessRegistration)) {
                $this->Flash->success(__('The business registration has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The business registration could not be saved. Please, try again.'));
        }
        $organisations = $this->BusinessRegistrations->Organisations->find('list', limit: 200)->all();
        $this->set(compact('businessRegistration', 'organisations'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Business Registration id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $businessRegistration = $this->BusinessRegistrations->get($id);
        if ($this->BusinessRegistrations->delete($businessRegistration)) {
            $this->Flash->success(__('The business registration has been deleted.'));
        } else {
            $this->Flash->error(__('The business registration could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function register()
    {
        $this->viewBuilder()->setLayout('public_layout');
        $businessRegistration = $this->BusinessRegistrations->newEmptyEntity();
        if ($this->request->is('post')) {
            $businessRegistration = $this->BusinessRegistrations->patchEntity($businessRegistration, $this->request->getData());
            if ($this->BusinessRegistrations->save($businessRegistration)) {
                $this->Flash->success(__('The business registration has been saved.'));

                return $this->redirect(['action' => 'register']);
            }
            $this->Flash->error(__('The business registration could not be saved. Please, try again.'));
        }
        $organisations = $this->BusinessRegistrations->Organisations->find('list', limit: 200)->all();
        $this->set(compact('businessRegistration', 'organisations'));
    }
}
