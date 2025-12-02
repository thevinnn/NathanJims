<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\ORM\TableRegistry;

/**
 * Dashboard Controller
 *
 */
class DashboardController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->set('title', 'Dashboard');

        $contractors = TableRegistry::getTableLocator()->get('Contractors');
        $organisations = TableRegistry::getTableLocator()->get('Organisations');
        $projects = TableRegistry::getTableLocator()->get('Projects');
        $contacts = TableRegistry::getTableLocator()->get('Contacts');
        $contractorRegistrations = TableRegistry::getTableLocator()->get('ContractorRegistrations');
        $businessRegistrations = TableRegistry::getTableLocator()->get('BusinessRegistrations');

        $contractors = $contractors->find()->limit(3)->all();
        $projects = $projects->find()->orderBy('last_checked')->limit(3)->all();
        $organisations = $organisations->find()->limit(3)->all();
        $contacts = $contacts->find()->limit(3)->all();
        $contractorRegistrations = $contractorRegistrations->find()->limit(3)->all();
        $businessRegistrations = $businessRegistrations->find()->limit(3)->all();

        $this->set(compact('contractors', 'projects', 'organisations','contacts', 'contractorRegistrations', 'businessRegistrations'));
    }

}
