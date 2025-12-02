<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Organisation $organisation
 */
?>
<div class="container custom-container mt-5">
    <div class="row">
        <aside class="col-md-3 mb-4">
            <div class="list-group">
                <h4 class="heading"><?= __('Actions') ?></h4>
                <?= $this->Html->link(__('Edit Organisation'), ['action' => 'edit', $organisation->id], ['class' => 'list-group-item list-group-item-action']) ?>
                <?= $this->Form->postLink(__('Delete Organisation'), ['action' => 'delete', $organisation->id], [
                    'confirm' => __('Are you sure you want to delete # {0}?', $organisation->business_name),
                    'class' => 'list-group-item list-group-item-action text-danger'
                ]) ?>
                <?= $this->Html->link(__('List Organisations'), ['action' => 'index'], ['class' => 'list-group-item list-group-item-action']) ?>
                <?= $this->Html->link(__('New Organisation'), ['action' => 'add'], ['class' => 'list-group-item list-group-item-action']) ?>
            </div>
        </aside>

        <div class="col-md-9">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h3 class="card-title"><?= h($organisation->business_name) ?></h3>
                </div>
                <div class="card-body">
                    <table class="table table-borderless">
                        <tr>
                            <th><?= __('Business Name') ?></th>
                            <td><?= h($organisation->business_name) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Contact First Name') ?></th>
                            <td><?= h($organisation->contact_first_name) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Contact Last Name') ?></th>
                            <td><?= h($organisation->contact_last_name) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Contact Email') ?></th>
                            <td><?= h($organisation->contact_email) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Current Website') ?></th>
                            <td><?= h($organisation->current_website) ?></td>
                        </tr>
                    </table>

                    <div class="text mt-4">
                        <strong><?= __('Industry') ?></strong>
                        <blockquote class="blockquote">
                            <?= $this->Text->autoParagraph(h($organisation->industry)); ?>
                        </blockquote>
                    </div>

                    <div class="mt-4">
                        <h4><?= __('Related Contacts') ?></h4>
                        <?php if (!empty($organisation->contacts)) : ?>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th><?= __('First Name') ?></th>
                                        <th><?= __('Last Name') ?></th>
                                        <th><?= __('Email') ?></th>
                                        <th><?= __('Phone Number') ?></th>
                                        <th><?= __('Message') ?></th>
                                        <th class="actions"><?= __('Actions') ?></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($organisation->contacts as $contact) : ?>
                                        <tr>
                                            <td><?= h($contact->first_name) ?></td>
                                            <td><?= h($contact->last_name) ?></td>
                                            <td><?= h($contact->email) ?></td>
                                            <td><?= h($contact->phone_number) ?></td>
                                            <td><?= h($contact->message) ?></td>
                                            <td class="actions">
                                                <?= $this->Html->link(__('View'), ['controller' => 'Contacts', 'action' => 'view', $contact->id], ['class' => 'btn btn-sm btn-info']) ?>
                                                <?= $this->Html->link(__('Edit'), ['controller' => 'Contacts', 'action' => 'edit', $contact->id], ['class' => 'btn btn-sm btn-warning']) ?>
                                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Contacts', 'action' => 'delete', $contact->id], [
                                                    'confirm' => __('Are you sure you want to delete # {0}?', $contact->first_name.' '.$contact->last_name),
                                                    'class' => 'btn btn-sm btn-danger'
                                                ]) ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        <?php else : ?>
                            <p class="text-muted"><?= __('No Related Contacts Available') ?></p>
                        <?php endif; ?>
                    </div>

                    <div class="mt-4">
                        <h4><?= __('Related Projects') ?></h4>
                        <?php if (!empty($organisation->projects)) : ?>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th><?= __('Project Name') ?></th>
                                        <th><?= __('Description') ?></th>
                                        <th><?= __('Management Tool Link') ?></th>
                                        <th><?= __('Project Due Date') ?></th>
                                        <th><?= __('Last Checked') ?></th>
                                        <th><?= __('Complete') ?></th>
                                        <th class="actions"><?= __('Actions') ?></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($organisation->projects as $project) : ?>
                                        <tr>
                                            <td><?= h($project->project_name) ?></td>
                                            <td><?= h($project->description) ?></td>
                                            <td><?= h($project->management_tool_link) ?></td>
                                            <td><?= h($project->project_due_date) ?></td>
                                            <td><?= h($project->last_checked) ?></td>
                                            <td><?= $project->complete ? __('Yes') : __('No'); ?></td>
                                            <td class="actions">
                                                <?= $this->Html->link(__('View'), ['controller' => 'Projects', 'action' => 'view', $project->id], ['class' => 'btn btn-sm btn-info']) ?>
                                                <?= $this->Html->link(__('Edit'), ['controller' => 'Projects', 'action' => 'edit', $project->id], ['class' => 'btn btn-sm btn-warning']) ?>
                                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projects', 'action' => 'delete', $project->id], [
                                                    'confirm' => __('Are you sure you want to delete # {0}?', $project->project_name),
                                                    'class' => 'btn btn-sm btn-danger'
                                                ]) ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        <?php else : ?>
                            <p class="text-muted"><?= __('No Related Projects Available') ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .custom-container {
        max-width: 80%;
    }
</style>
