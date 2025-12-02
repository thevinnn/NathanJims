<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\BusinessRegistration> $businessRegistrations
 */
?>
<div class="businessRegistrations index content">

    <?= $this->Html->link(__('New Business Registration'), ['action' => 'add'], ['class' => 'btn btn-primary float-right']) ?>
    <h3 class="mt-3"><?= __('Business Registrations') ?></h3>

    <?= $this->Form->create($businessRegistrations, ['class' => 'form-inline']) ?>
    <div class="table-responsive mt-4">
        <table id="businessRegistrationsTable" class="table table-striped table-bordered">
            <thead>
                <tr>
<!--                    <th>--><?php //= $this->Paginator->sort('id') ?><!--</th>-->
                    <th><?= $this->Paginator->sort('business_name') ?></th>
                    <th><?= $this->Paginator->sort('contact_first_name') ?></th>
                    <th><?= $this->Paginator->sort('contact_last_name') ?></th>
                    <th><?= $this->Paginator->sort('contact_email') ?></th>
                    <th><?= $this->Paginator->sort('current_website') ?></th>
                    <th><?= $this->Paginator->sort('industry') ?></th>
                    <th><?= $this->Paginator->sort('organisation_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($businessRegistrations as $businessRegistration): ?>
                <tr>
<!--                    <td>--><?php //= $this->Number->format($businessRegistration->id) ?><!--</td>-->
                    <td><?= h($businessRegistration->business_name) ?></td>
                    <td><?= h($businessRegistration->contact_first_name) ?></td>
                    <td><?= h($businessRegistration->contact_last_name) ?></td>
                    <td><?= h($businessRegistration->contact_email) ?></td>
                    <td><?= h($businessRegistration->current_website) ?></td>
                    <td><?= h($businessRegistration->industry) ?></td>
                    <td><?= $businessRegistration->hasValue('organisation') ? $this->Html->link($businessRegistration->organisation->business_name, ['controller' => 'Organisations', 'action' => 'view', $businessRegistration->organisation->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $businessRegistration->id],['class' => 'btn btn-sm btn-info']) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $businessRegistration->id],['class' => 'btn btn-sm btn-warning']) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $businessRegistration->id], ['confirm' => __('Are you sure you want to delete : {0}?', $businessRegistration->business_name), 'class' => 'btn btn-sm btn-danger']) ?>
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
        max-width: 80%; /* Set your desired max width */
        margin: 0 auto; /* Center the container */
        padding: 0 15px; /* Optional: add some padding */
    }
</style>
<!-- DataTables CSS and JS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        $('#businessRegistrationsTable').DataTable({
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
