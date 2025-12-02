<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Contact> $contacts
 */
?>
<div class="contacts index content">
    <?= $this->Html->link(__('New Contact'), ['action' => 'add'], ['class' => 'btn btn-primary float-right']) ?>
    <h3 class="mt-3"><?= __('Contacts') ?></h3>

    <?= $this->Form->create($contacts, ['class' => 'form-inline']) ?>
    <div class="table-responsive mt-4">
        <table id="contactsTable" class="table table-striped table-bordered">
            <thead>
                <tr>
<!--                    <th>--><?php //= $this->Paginator->sort('id') ?><!--</th>-->
<!--                    <th>--><?php //= $this->Paginator->sort('organisation_id') ?><!--</th>-->
<!--                    <th>--><?php //= $this->Paginator->sort('contractor_id') ?><!--</th>-->
                    <th><?= $this->Paginator->sort('first_name') ?></th>
                    <th><?= $this->Paginator->sort('last_name') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('phone_number') ?></th>
                    <th><?= $this->Paginator->sort('replied') ?></th>
                    <th><?= $this->Paginator->sort('message') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($contacts as $contact): ?>
                <tr>
<!--                    <td>--><?php //= $this->Number->format($contact->id) ?><!--</td>-->
<!--                    <td>--><?php //= $contact->hasValue('organisation') ? $this->Html->link($contact->organisation->id, ['controller' => 'Organisations', 'action' => 'view', $contact->organisation->id]) : '' ?><!--</td>-->
<!--                    <td>--><?php //= $contact->hasValue('contractor') ? $this->Html->link($contact->contractor->id, ['controller' => 'Contractors', 'action' => 'view', $contact->contractor->id]) : '' ?><!--</td>-->
                    <td><?= h($contact->first_name) ?></td>
                    <td><?= h($contact->last_name) ?></td>
                    <td><?= h($contact->email) ?></td>
                    <td><?= h($contact->phone_number) ?></td>
                    <td><?= h($contact->replied ? 'Yes' : 'No') ?></td>
                    <td><?= h($contact->message)?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Toggle Replied'), ['action' => 'switchReplied', $contact->id, "index"],['class' => 'btn btn-sm btn-secondary']) ?>
                        <?= $this->Html->link(__('View'), ['action' => 'view', $contact->id],['class' => 'btn btn-sm btn-info']) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contact->id],['class' => 'btn btn-sm btn-warning']) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contact->id], ['confirm' => __('Are you sure you want to delete : {0}?', $contact->first_name.' '.$contact->last_name), 'class' => 'btn btn-sm btn-danger']) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
<style>
    .custom-container {
        max-width: 70%; /* Set your desired max width */
        margin: 0 auto; /* Center the container */
        padding: 0 15px; /* Optional: add some padding */
    }
</style>
<!-- DataTables CSS and JS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        $('#contactsTable').DataTable({
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
