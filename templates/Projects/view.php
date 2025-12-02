<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Project $project
 */
?>
<div class="container custom-container mt-5">
    <div class="row">
        <aside class="col-md-3 mb-4">
            <div class="list-group">
                <h4 class="heading"><?= __('Actions') ?></h4>
                <?= $this->Html->link(__('Edit Project'), ['action' => 'edit', $project->id], ['class' => 'list-group-item list-group-item-action']) ?>
                <?= $this->Form->postLink(__('Delete Project'), ['action' => 'delete', $project->id], [
                    'confirm' => __('Are you sure you want to delete # {0}?', $project->project_name),
                    'class' => 'list-group-item list-group-item-action text-danger'
                ]) ?>
                <?= $this->Html->link(__('List Projects'), ['action' => 'index'], ['class' => 'list-group-item list-group-item-action']) ?>
                <?= $this->Html->link(__('New Project'), ['action' => 'add'], ['class' => 'list-group-item list-group-item-action']) ?>
            </div>
        </aside>

        <div class="col-md-9">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h3 class="card-title"><?= h($project->project_name) ?></h3>
                </div>
                <div class="card-body">
                    <table class="table table-borderless">
                        <tr>
                            <th><?= __('Contractor') ?></th>
                            <td><?= $project->hasValue('contractor') ? $this->Html->link($project->contractor->first_name . ' ' . $project->contractor->last_name, ['controller' => 'Contractors', 'action' => 'view', $project->contractor->id]) : __('N/A') ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Organisation') ?></th>
                            <td><?= $project->hasValue('organisation') ? $this->Html->link($project->organisation->business_name, ['controller' => 'Organisations', 'action' => 'view', $project->organisation->id]) : __('N/A') ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Project Name') ?></th>
                            <td><?= h($project->project_name) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Management Tool Link') ?></th>
                            <td><?= h($project->management_tool_link) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Project Due Date') ?></th>
                            <td><?= h($project->project_due_date) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Last Checked') ?></th>
                            <td><?= h($project->last_checked) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Complete') ?></th>
                            <td><?= $project->complete ? __('Yes') : __('No'); ?></td>
                        </tr>
                    </table>
                    <div class="mt-4">
                        <h5><?= __('Description') ?></h5>
                        <p class="text-muted"><?= $this->Text->autoParagraph(h($project->description)); ?></p>
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
