<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\ContractorRegistration> $contractorRegistrations
 */
?>
<div class="contractorRegistrations index content">

    <?= $this->Html->link(__('New Contractor Registration'), ['action' => 'add'], ['class' => 'btn btn-primary float-right']) ?>
    <h3 class="mt-3"><?= __('Contractor Registrations') ?></h3>

    <?= $this->Form->create($contractorRegistrations, ['class' => 'form-inline']) ?>
    <div class="table-responsive mt-4">
        <table id="contractorRegistrationsTable"  class="table table-striped table-bordered">
            <thead>
                <tr>
<!--                    <th>--><?php //= $this->Paginator->sort('id') ?><!--</th>-->
                    <th><?= $this->Paginator->sort('first_name') ?></th>
                    <th><?= $this->Paginator->sort('last_name') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('phone_number') ?></th>
                    <th><?= $this->Paginator->sort('specialised_in') ?></th>
                    <th><?= $this->Paginator->sort('contractor_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($contractorRegistrations as $contractorRegistration): ?>
                <tr>
<!--                    <td>--><?php //= $this->Number->format($contractorRegistration->id) ?><!--</td>-->
                    <td><?= h($contractorRegistration->first_name) ?></td>
                    <td><?= h($contractorRegistration->last_name) ?></td>
                    <td><?= h($contractorRegistration->email) ?></td>
                    <td><?= h($contractorRegistration->phone_number) ?></td>
                    <td><?= h($contractorRegistration->specialised_in) ?></td>
                    <td><?= $contractorRegistration->hasValue('contractor') ? $this->Html->link($contractorRegistration->contractor->first_name.' '.$contractorRegistration->contractor->last_name, ['controller' => 'Contractors', 'action' => 'view', $contractorRegistration->contractor->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $contractorRegistration->id],['class' => 'btn btn-sm btn-info']) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contractorRegistration->id],['class' => 'btn btn-sm btn-warning']) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contractorRegistration->id], ['confirm' => __('Are you sure you want to delete : {0}?', $contractorRegistration->first_name.' '.$contractorRegistration->last_name), 'class' => 'btn btn-sm btn-danger']) ?>
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
        $('#contractorRegistrationsTable').DataTable({
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
