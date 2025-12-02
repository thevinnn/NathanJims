<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contractor $contractor
 */
?>
<div class="container custom-container mt-5">
    <div class="row">
        <aside class="col-md-3 mb-4">
            <div class="list-group">
                <h4 class="heading"><?= __('Actions') ?></h4>
                <?= $this->Html->link(__('Edit Contractor'), ['action' => 'edit', $contractor->id], ['class' => 'list-group-item list-group-item-action']) ?>
                <?= $this->Form->postLink(__('Delete Contractor'), ['action' => 'delete', $contractor->id], [
                    'confirm' => __('Are you sure you want to delete # {0}?',$contractor->first_name.' '.$contractor->last_name),
                    'class' => 'list-group-item list-group-item-action text-danger'
                ]) ?>
                <?= $this->Html->link(__('List Contractors'), ['action' => 'index'], ['class' => 'list-group-item list-group-item-action']) ?>
                <?= $this->Html->link(__('New Contractor'), ['action' => 'add'], ['class' => 'list-group-item list-group-item-action']) ?>
            </div>
        </aside>

        <div class="col-md-9">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h3 class="card-title"><?= h($contractor->first_name . ' ' . $contractor->last_name) ?></h3>
                </div>
                <div class="card-body">
                    <table class="table table-borderless">
                        <tr>
                            <th><?= __('First Name') ?></th>
                            <td><?= h($contractor->first_name) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Last Name') ?></th>
                            <td><?= h($contractor->last_name) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Phone Number') ?></th>
                            <td><?= h($contractor->phone_number) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Email') ?></th>
                            <td><?= h($contractor->email) ?></td>
                        </tr>
                    </table>

                    <div class="mt-4">
                        <h4><?= __('Skills') ?></h4>
                        <?php if (!empty($contractor->skills)) : ?>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th><?= __('Skill Name') ?></th>
                                        <th class="actions"><?= __('Actions') ?></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($contractor->skills as $skill) : ?>
                                        <tr>
                                            <td><?= h($skill->skill_name) ?></td>
                                            <td class="actions">
                                                <?= $this->Html->link(__('View'), ['controller' => 'Skills', 'action' => 'view', $skill->id], ['class' => 'btn btn-sm btn-info']) ?>
                                                <?= $this->Html->link(__('Edit'), ['controller' => 'Skills', 'action' => 'edit', $skill->id], ['class' => 'btn btn-sm btn-warning']) ?>
                                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Skills', 'action' => 'delete', $skill->id], [
                                                    'confirm' => __('Are you sure you want to delete # {0}?', $skill->skill_name),
                                                    'class' => 'btn btn-sm btn-danger'
                                                ]) ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        <?php else : ?>
                            <p class="text-muted"><?= __('No Skills Available') ?></p>
                        <?php endif; ?>
                    </div>

                    <div class="mt-4">
                        <h4><?= __('Contact Us Forms') ?></h4>
                        <?php if (!empty($contractor->contacts)) : ?>
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
                                    <?php foreach ($contractor->contacts as $contact) : ?>
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
                            <p class="text-muted"><?= __('No Contact Forms Available') ?></p>
                        <?php endif; ?>
                    </div>

                    <div class="mt-4">
                        <h4><?= __('Projects') ?></h4>
                        <?php if (!empty($contractor->projects)) : ?>
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
                                    <?php foreach ($contractor->projects as $project) : ?>
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
                            <p class="text-muted"><?= __('No Projects Available') ?></p>
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
