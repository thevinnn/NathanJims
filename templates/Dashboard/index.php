<?php
/**
 * @var \App\View\AppView $this
 */
?>
<div class="row">
    <div class="column column-80">
        <div class="organisations view content">
            <h1>Dashboard</h1><br>
            <div class="related">
                <h4><?= $this->Html->link(__('Organisations'), ['controller' => 'Organisations','action' => 'index'], ['class' => 'side-nav-item']) ?></h4>
                <?php if (!empty($organisations)) : ?>
                    <div class="table-responsive mt-4">
                        <table id="stylingTable" class="table table-striped table-bordered">
                            <tr>
                                <th><?= __('Business Name') ?></th>
                                <th><?= __('Contact First Name') ?></th>
                                <th><?= __('Contact Last Name') ?></th>
                                <th><?= __('Contact Email') ?></th>
                                <th><?= __('Current Website') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                            <?php foreach ($organisations as $organisation) : ?>
                                <tr>
                                    <td><?= h($organisation->business_name) ?></td>
                                    <td><?= h($organisation->contact_first_name) ?></td>
                                    <td><?= h($organisation->contact_last_name) ?></td>
                                    <td><?= h($organisation->contact_email) ?></td>
                                    <td><?= h($organisation->current_website) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link(__('View'), ['controller' => 'Organisations', 'action' => 'view', $organisation->id],['class' => 'btn btn-sm btn-info']) ?>
                                        <?= $this->Html->link(__('Edit'), ['controller' => 'Organisations', 'action' => 'edit', $organisation->id],['class' => 'btn btn-sm btn-warning']) ?>
                                        <?= $this->Form->postLink(__('Delete'),
                                            ['controller' => 'Organisations', 'action' => 'delete', $organisation->id],
                                            ['confirm' => __('Are you sure you want to delete # {0}?', $organisation->business_name), 'class' => 'btn btn-sm btn-danger'],
                                        ) ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= $this->Html->link(__('Projects'), ['controller' => 'Projects','action' => 'index'], ['class' => 'side-nav-item']) ?></h4>
                <?php if (!empty($projects)) : ?>
                    <div class="table-responsive mt-4">
                        <table id="stylingTable" class="table table-striped table-bordered">
                            <tr>
                                <th><?= __('Project Name') ?></th>
                                <th><?= __('Description') ?></th>
                                <th><?= __('Management Tool Link') ?></th>
                                <th><?= __('Project Due Date') ?></th>
                                <th><?= __('Last Checked') ?></th>
                                <th><?= __('Complete') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                            <?php foreach ($projects as $project) : ?>
                                <tr>
                                    <td><?= h($project->project_name) ?></td>
                                    <td><?= h($project->description) ?></td>
                                    <td><?= h($project->management_tool_link) ?></td>
                                    <td><?= h($project->project_due_date) ?></td>
                                    <td><?= h($project->last_checked) ?></td>
                                    <td><?= h($project->complete ? 'Yes' : 'No') ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link(__('View'), ['controller' => 'Projects', 'action' => 'view', $project->id],['class' => 'btn btn-sm btn-info']) ?>
                                        <?= $this->Html->link(__('Edit'), ['controller' => 'Projects', 'action' => 'edit', $project->id],['class' => 'btn btn-sm btn-warning']) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projects', 'action' => 'delete', $project->id], ['confirm' => __('Are you sure you want to delete # {0}?', $project->project_name), 'class' => 'btn btn-sm btn-danger']) ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= $this->Html->link(__('Contractors'), ['controller' => 'Contractors','action' => 'index'], ['class' => 'side-nav-item']) ?></h4>
                <?php if (!empty($contractors)) : ?>
                    <div class="table-responsive mt-4">
                        <table id="stylingTable" class="table table-striped table-bordered">
                            <tr>
                                <th><?= __('First Name') ?></th>
                                <th><?= __('Last Name') ?></th>
                                <th><?= __('Phone Number') ?></th>
                                <th><?= __('Email') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                            <?php foreach ($contractors as $contractor) : ?>
                                <tr>
                                    <td><?= h($contractor->first_name) ?></td>
                                    <td><?= h($contractor->last_name) ?></td>
                                    <td><?= h($contractor->phone_number) ?></td>
                                    <td><?= h($contractor->email) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link(__('View'), ['controller' => 'Projects', 'action' => 'view', $contractor->id],['class' => 'btn btn-sm btn-info']) ?>
                                        <?= $this->Html->link(__('Edit'), ['controller' => 'Projects', 'action' => 'edit', $contractor->id],['class' => 'btn btn-sm btn-warning']) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projects', 'action' => 'delete', $contractor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contractor->first_name.' '.$contractor->last_name), 'class' => 'btn btn-sm btn-danger']) ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= $this->Html->link(__('Contact Us Forms'), ['controller' => 'Contacts','action' => 'index'], ['class' => 'side-nav-item']) ?></h4>
                <?php if (!empty($contacts)) : ?>
                <div class="table-responsive mt-4">
                    <table id="stylingTable" class="table table-striped table-bordered">
                        <tr>
                            <th><?= __('First Name') ?></th>
                            <th><?= __('Last Name') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Phone Number') ?></th>
                            <th><?= __('Message') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($contacts as $contact) : ?>
                        <tr>
                            <td><?= h($contact->first_name) ?></td>
                            <td><?= h($contact->last_name) ?></td>
                            <td><?= h($contact->email) ?></td>
                            <td><?= h($contact->phone_number) ?></td>
                            <td><?= h($contact->message) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Contacts', 'action' => 'view', $contact->id],['class' => 'btn btn-sm btn-info']) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Contacts', 'action' => 'edit', $contact->id],['class' => 'btn btn-sm btn-warning']) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Contacts', 'action' => 'delete', $contact->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contact->first_name.' '.$contact->last_name), 'class' => 'btn btn-sm btn-danger']) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= $this->Html->link(__('Business Registrations'), ['controller' => 'BusinessRegistrations','action' => 'index'], ['class' => 'side-nav-item']) ?></h4>
                <?php if (!empty($businessRegistrations)) : ?>
                    <div class="table-responsive mt-4">
                        <table id="stylingTable" class="table table-striped table-bordered">
                            <tr>
                                <th><?= __('Business Name') ?></th>
                                <th><?= __('Contact First Name') ?></th>
                                <th><?= __('Contact Last Name') ?></th>
                                <th><?= __('Contact Email') ?></th>
                                <th><?= __('Current Website') ?></th>
                                <th><?= __('Industry') ?></th>
                                <th><?= __('Description') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                            <?php foreach ($businessRegistrations as $registration) : ?>
                                <tr>
                                    <td><?= h($registration->business_name) ?></td>
                                    <td><?= h($registration->contact_first_name) ?></td>
                                    <td><?= h($registration->contact_last_name) ?></td>
                                    <td><?= h($registration->contact_email) ?></td>
                                    <td><?= h($registration->current_website) ?></td>
                                    <td><?= h($registration->industry) ?></td>
                                    <td><?= h($registration->description) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link(__('View'), ['controller' => 'BusinessRegistrations', 'action' => 'view', $registration->id],['class' => 'btn btn-sm btn-info']) ?>
                                        <?= $this->Html->link(__('Edit'), ['controller' => 'BusinessRegistrations', 'action' => 'edit', $registration->id],['class' => 'btn btn-sm btn-warning']) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'BusinessRegistrations', 'action' => 'delete', $registration->id], ['confirm' => __('Are you sure you want to delete # {0}?', $registration->business_name), 'class' => 'btn btn-sm btn-danger']) ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                <?php endif; ?>
            </div>

            <div class="related">
                <h4><?= $this->Html->link(__('Contractor Registrations'), ['controller' => 'ContractorRegistrations','action' => 'index'], ['class' => 'side-nav-item']) ?></h4>
                <?php if (!empty($contractorRegistrations)) : ?>
                    <div class="table-responsive mt-4">
                        <table id="stylingTable" class="table table-striped table-bordered">
                            <tr>
                                <th><?= __('First Name') ?></th>
                                <th><?= __('Last Name') ?></th>
                                <th><?= __('Email') ?></th>
                                <th><?= __('Phone Number') ?></th>
                                <th><?= __('Specialised In') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                            <?php foreach ($contractorRegistrations as $registration) : ?>
                                <tr>
                                    <td><?= h($registration->first_name) ?></td>
                                    <td><?= h($registration->last_name) ?></td>
                                    <td><?= h($registration->email) ?></td>
                                    <td><?= h($registration->phone_number) ?></td>
                                    <td><?= h($registration->specialised_in) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link(__('View'), ['controller' => 'ContractorRegistrations', 'action' => 'view', $registration->id],['class' => 'btn btn-sm btn-info']) ?>
                                        <?= $this->Html->link(__('Edit'), ['controller' => 'ContractorRegistrations', 'action' => 'edit', $registration->id],['class' => 'btn btn-sm btn-warning']) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'ContractorRegistrations', 'action' => 'delete', $registration->id], ['confirm' => __('Are you sure you want to delete # {0}?', $registration->first_name.' '.$registration->last_name), 'class' => 'btn btn-sm btn-danger']) ?>
                                    </td>

                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                <?php endif; ?>
            </div>        </div>
    </div>
</div>
<style>
    .custom-container {
        max-width: 90%; /* Set your desired max width */
        margin: 0 auto; /* Center the container */
        padding: 0 15px; /* Optional: add some padding */
    }
</style>
<!-- DataTables CSS and JS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        $('#stylingTable').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "pageLength": 10,
            "language": {
                "paginate": {
                    "previous": "Previous",
                    "next": "Next"
                }
            }
        });
    });
</script>
