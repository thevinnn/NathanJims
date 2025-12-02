<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contact $contact
 */
?>
<div class="container custom-container mt-5">
    <div class="row">
        <aside class="col-md-3 mb-4">
            <div class="list-group">
                <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Contact'), ['action' => 'edit', $contact->id], ['class' => 'list-group-item list-group-item-action']) ?>
            <?= $this->Form->postLink(__('Delete Contact'), ['action' => 'delete', $contact->id], ['confirm' => __('Are you sure you want to delete : {0}?', $contact->first_name.' '.$contact->last_name), 'class' => 'list-group-item list-group-item-action text-danger']) ?>
            <?= $this->Html->link(__('List Contacts'), ['action' => 'index'], ['class' => 'list-group-item list-group-item-action']) ?>
            <?= $this->Html->link(__('New Contact'), ['action' => 'add'], ['class' => 'list-group-item list-group-item-action']) ?>
            <?= $this->Html->link(__('Toggle Replied'), ['action' => 'switchReplied', $contact->id, "view"], ['class' => 'list-group-item list-group-item-action']) ?>
            </div>
        </aside>

        <div class="col-md-9">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h3 class="card-title"><?= h($contact->first_name .' '.$contact->last_name) ?></h3>
                </div>
                <div class="card-body">
                    <table class="table table-borderless">
                        <tr>
                    <th><?= __('Organisation') ?></th>
                    <td><?= $contact->hasValue('organisation') ? $this->Html->link($contact->organisation->business_name, ['controller' => 'Organisations', 'action' => 'view', $contact->organisation->id]) : __('Not Assigned') ?></td>
                </tr>
                <tr>
                    <th><?= __('Contractor') ?></th>
                    <td><?= $contact->hasValue('contractor') ? $this->Html->link($contact->contractor->first_name . ' ' . $contact->contractor->last_name, ['controller' => 'Contractors', 'action' => 'view', $contact->contractor->id]) : __('Not Assigned') ?></td>
                </tr>
                <tr>
                    <th><?= __('First Name') ?></th>
                    <td><?= h($contact->first_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Last Name') ?></th>
                    <td><?= h($contact->last_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($contact->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone Number') ?></th>
                    <td><?= h($contact->phone_number) ?></td>
                </tr>
<!--                <tr>-->
<!--                    <th>--><?php //= __('Id') ?><!--</th>-->
<!--                    <td>--><?php //= $this->Number->format($contact->id) ?><!--</td>-->
<!--                </tr>-->
                <tr>
                    <th><?= __('Replied') ?></th>
                    <td><?= $contact->replied ? __('Yes') : __('No'); ?></td>
                </tr>
                    </table>
                    <div class="mt-4">
                        <h5><?= __('Description') ?></h5>
                        <p class="text-muted"><?= $this->Text->autoParagraph(h($contact->description)); ?></p>
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
