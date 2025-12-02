<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Contractor> $contractors
 * @var \App\Model\Entity\Contractor $contractor
 * @var \Cake\Collection\CollectionInterface|string $ContractorSkills
 */
?>

<div class="contractors index content">
    <?= $this->Html->link(__('New Contractor'), ['action' => 'add'], ['class' => 'btn btn-primary float-right']) ?>
    <h3 class="mt-3"><?= __('Contractors') ?></h3>

    <?= $this->Form->create($contractor, ['class' => 'form-inline']) ?>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <?= $this->Form->control('contractor_name', [
                    'placeholder' => 'Enter First or Last Name',
                    'label' => 'Contractor Name',
                    'class' => 'form-control'
                ]) ?>
            </div>
            <div class="col-md-3">
                <?= $this->Form->control('email', [
                    'placeholder' => 'Enter email',
                    'label' => 'Contractor Email',
                    'class' => 'form-control'
                ]) ?>
            </div>
            <div class="col-md-3 d-flex justify-content-end align-items-end">
                <?= $this->Form->button(__('Search'), ['class' => 'btn btn-primary']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
        <fieldset>
            <div class="select2-row">
                <label>Skills</label>
                <select name="skills[]" class="form-control select2" id="skills" multiple="multiple">
                    <?php foreach ($ContractorSkills as $id => $skillName): ?>
                        <option value="<?= h($id) ?>"><?= h($skillName) ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </fieldset>
    </div>

    <div class="table-responsive mt-4">
        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th><?= $this->Paginator->sort('first_name', 'First Name') ?></th>
                <th><?= $this->Paginator->sort('last_name', 'Last Name') ?></th>
                <th><?= $this->Paginator->sort('phone_number', 'Phone Number') ?></th>
                <th><?= $this->Paginator->sort('email', 'Email') ?></th>
                <th><?= $this->Paginator->sort('project_count', 'Project Count') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($contractors as $contractor): ?>
                <tr>
                    <td><?= h($contractor->first_name) ?></td>
                    <td><?= h($contractor->last_name) ?></td>
                    <td><?= h($contractor->phone_number) ?></td>
                    <td><?= h($contractor->email) ?></td>
                    <td><?= h($contractor->project_count) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $contractor->id], ['class' => 'btn btn-sm btn-info']) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contractor->id], ['class' => 'btn btn-sm btn-warning']) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contractor->id], [
                            'confirm' => __('Are you sure you want to delete # {0}?', $contractor->first_name.' '.$contractor->last_name),
                            'class' => 'btn btn-sm btn-danger'
                        ]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <div class="paginator">
        <ul class="pagination justify-content-center">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p class="text-center"><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>

<style>
    .custom-container {
        max-width: 60%;
        margin: 0 auto;
        padding: 0 15px;
    }

    .dropdown-checkboxes {
        position: relative;
        display: inline-block;
    }

    .btn-toggle {
        background-color: #ffffff;
        border: 1px solid #d1d1d1 !important;
        color: black;
        font-weight: bold;
        font-size: small;
    }

    .checkbox-list {
        background-color: white;
        border: 1px solid #ccc;
        position: absolute;
        border-radius: 5px;
        top: 100%;
        left: 0;
        width: 250px;
        max-height: 200px;
        overflow-y: auto;
        display: none;
        box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1);
    }

    .checkbox-list label {
        padding: 5px;
    }
</style>

<script>
    $('.select2[multiple]').select2({
        width: '100%',
        closeOnSelect: false,
        placeholder: 'Search Skills',
        allowClear: true
    })
</script>
