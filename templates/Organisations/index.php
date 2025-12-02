<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Organisation> $organisations
 * @var \App\Model\Entity\Organisation $organisation
 */
?>
<div class="organisations index content">
    <?= $this->Html->link(__('New Organisation'), ['action' => 'add'], ['class' => 'btn btn-primary float-right']) ?>
    <h3 class="mt-3"><?= __('Organisations') ?></h3>

    <?= $this->Form->create($organisation, ['class' => 'form-inline']) ?>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <?= $this->Form->control('business_name', [
                    'placeholder' => 'Enter business name',
                    'label' => 'Business Name',
                    'class' => 'form-control'
                ]) ?>
            </div>
            <div class="col-md-12 mt-3 text-right">
                <?= $this->Form->button(__('Search'), ['class' => 'btn btn-primary']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>

    <div class="table-responsive mt-4">
        <table id="organisationsTable" class="table table-striped table-bordered">
            <thead>
            <tr>
                <th><?= $this->Paginator->sort('business_name', 'Business Name') ?></th>
                <th><?= $this->Paginator->sort('contact_first_name', 'Contact First Name') ?></th>
                <th><?= $this->Paginator->sort('contact_last_name', 'Contact Last Name') ?></th>
                <th><?= $this->Paginator->sort('contact_email', 'Contact Email') ?></th>
                <th><?= $this->Paginator->sort('current_website', 'Website') ?></th>
                <th>
                    <?= $this->Html->link(
                        __('Project Count'),
                        ['?' => ['sort' => 'project_count', 'direction' => $sortDirection]]
                    ) ?>
                </th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($organisations as $organisation): ?>
                <tr>
                    <td><?= h($organisation->business_name) ?></td>
                    <td><?= h($organisation->contact_first_name) ?></td>
                    <td><?= h($organisation->contact_last_name) ?></td>
                    <td><?= h($organisation->contact_email) ?></td>
                    <td><?= h($organisation->current_website) ?></td>
                    <td><?= h($organisation->project_count) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $organisation->id], ['class' => 'btn btn-sm btn-info']) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $organisation->id], ['class' => 'btn btn-sm btn-warning']) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $organisation->id], [
                            'confirm' => __('Are you sure you want to delete # {0}?', $organisation->business_name),
                            'class' => 'btn btn-sm btn-danger'
                        ]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        $('#organisationsTable').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "pageLength": 10
        });
    });
</script>

<style>
    .custom-container {
        max-width: 70%;
        margin: 0 auto;
        padding: 15px;
    }
</style>
