<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ContractorRegistration $contractorRegistration
 */
?>
<div class="container custom-container mt-5">
    <div class="row">
        <aside class="col-md-3 mb-4">
            <div class="list-group">
                <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Contractor Registration'), ['action' => 'edit', $contractorRegistration->id], ['class' => 'list-group-item list-group-item-action']) ?>
            <?= $this->Form->postLink(__('Delete Contractor Registration'), ['action' => 'delete', $contractorRegistration->id], ['confirm' => __('Are you sure you want to delete : {0}?', $contractorRegistration->first_name.' '.$contractorRegistration->last_name), 'class' => 'list-group-item list-group-item-action text-danger']) ?>
            <?= $this->Html->link(__('List Contractor Registrations'), ['action' => 'index'], ['class' => 'list-group-item list-group-item-action']) ?>
            <?= $this->Html->link(__('New Contractor Registration'), ['action' => 'add'], ['class' => 'list-group-item list-group-item-action']) ?>
            </div>
        </aside>

        <div class="col-md-9">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h3 class="card-title"><?= h($contractorRegistration->first_name .' '.$contractorRegistration->last_name) ?></h3>
                </div>
                <div class="card-body">
                    <table class="table table-borderless">
                        <tr>
                            <th><?= __('Contractor') ?></th>
                            <td><?= $contractorRegistration->hasValue('contractor') ? $this->Html->link($contractorRegistration->contractor->first_name . ' ' . $contractorRegistration->contractor->last_name, ['controller' => 'Contractors', 'action' => 'view', $contractorRegistration->contractor->id]) : __('Not Assigned') ?></td>
                        </tr>
                        <tr>
                            <th><?= __('First Name') ?></th>
                            <td><?= h($contractorRegistration->first_name) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Last Name') ?></th>
                            <td><?= h($contractorRegistration->last_name) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Email') ?></th>
                            <td><?= h($contractorRegistration->email) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Phone Number') ?></th>
                            <td><?= h($contractorRegistration->phone_number) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Replied') ?></th>
                            <td><?= $contractorRegistration->replied ? __('Yes') : __('No'); ?></td>
                        </tr>
                    </table>
                    <div class="mt-4">
                        <h5><?= __('Description') ?></h5>
                        <p class="text-muted"><?= $this->Text->autoParagraph(h($contractorRegistration->description)); ?></p>
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

