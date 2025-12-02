<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Project> $projects
 * @var \App\Model\Entity\Project $project
 * @var \Cake\Collection\CollectionInterface|string $ProjectSkills
 */
?>
<div class="projects index content">
    <?= $this->Html->link(__('New Project'), ['action' => 'add'], ['class' => 'btn btn-primary float-right']) ?>
    <h3 class="mt-3"><?= __('Projects') ?></h3>

    <?= $this->Form->create($project, ['class' => 'form-inline']) ?>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <?= $this->Form->control('skill_keyword', ['placeholder' => 'Enter Skill', 'label' => 'Skills', 'class' => 'form-control']) ?>
            </div>
            <div class="col-md-3">
                <?= $this->Form->control('status', [
                    'type' => 'select',
                    'options' => ['1' => 'Yes', '0' => 'No'],
                    'empty' => '-',
                    'label' => 'Complete?',
                    'class' => 'form-control'
                ]) ?>
            </div>
            <div class="col-md-3">
                <?= $this->Form->control('start_date', ['type' => 'date', 'label' => 'Start Date', 'class' => 'form-control']) ?>
            </div>
            <div class="col-md-3"
                <?= $this->Form->control('end_date', ['type' => 'date', 'label' => 'End Date', 'class' => 'form-control']) ?>
            </div>
        </div>
        <fieldset>
            <div class="select2-row">
                <label>Skills</label>
                <select name="skills[]" class="form-control select2" id="skills" multiple="multiple">
                    <?php foreach ($ProjectSkills as $id => $skillName): ?>
                        <option value="<?= h($id) ?>"><?= h($skillName) ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </fieldset>
        <div class="col-md-12 mt-3 text-right">
            <?= $this->Form->button(__('Search'), ['class' => 'btn btn-primary']) ?>
            <?= $this->Form->end() ?>
        </div
    </div>

    <div class="table-responsive mt-4">
        <table id="projectsTable" class="table table-striped table-bordered">
            <thead>
            <tr>
                <th><?= $this->Paginator->sort('project_name') ?></th>
                <th><?= $this->Paginator->sort('management_tool_link') ?></th>
                <th><?= $this->Paginator->sort('project_due_date') ?></th>
                <th><?= $this->Paginator->sort('last_checked') ?></th>
                <th><?= $this->Paginator->sort('complete') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($projects as $project): ?>
                <tr>
                    <td><?= h($project->project_name) ?></td>
                    <td><?= h($project->management_tool_link) ?></td>
                    <td><?= h($project->project_due_date) ?></td>
                    <td><?= h($project->last_checked) ?></td>
                    <td><?= h($project->complete_display) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $project->id], ['class' => 'btn btn-sm btn-info']) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $project->id], ['class' => 'btn btn-sm btn-warning']) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $project->id], [
                            'confirm' => __('Are you sure you want to delete # {0}?', $project->project_name),
                            'class' => 'btn btn-sm btn-danger'
                        ]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- DataTables CSS and JS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        $('#projectsTable').DataTable({
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
<script>
    $('.select2[multiple]').select2({
        width: '100%',
        closeOnSelect: false,
        placeholder: 'Search Skills',
        allowClear: true
    })
</script>