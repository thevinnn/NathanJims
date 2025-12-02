<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Project $project
 * @var \Cake\Collection\CollectionInterface|string[] $contractors
 * @var \Cake\Collection\CollectionInterface|string[] $organisations
 */
?>

<div class="container custom-container my-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white text-center">
                    <h3 class="mb-0">Add Project</h3>
                </div>
                <div class="card-body">
                    <?= $this->Form->create($project, ['class' => 'needs-validation', 'novalidate' => true]) ?>
                    <fieldset>
                        <legend class="text-center mb-4"><?= __('Please enter the project details') ?></legend>

                        <div class="form-group mb-3">
                            <?= $this->Form->control('contractor_id', [
                                'label' => 'Contractor',
                                'options' => $contractors,
                                'empty' => 'Select Contractor',
                                'class' => 'form-select',
                                'required' => true
                            ]) ?>
                        </div>

                        <div class="form-group mb-3">
                            <?= $this->Form->control('organisation_id', [
                                'label' => 'Organisation',
                                'options' => $organisations,
                                'empty' => 'Select Organisation',
                                'class' => 'form-select',
                                'required' => true
                            ]) ?>
                        </div>

                        <div class="form-group mb-3">
                            <?= $this->Form->control('project_name', [
                                'label' => 'Project Name',
                                'class' => 'form-control',
                                'placeholder' => 'Enter project name',
                                'required' => true
                            ]) ?>
                        </div>

                        <div class="form-group mb-3">
                            <?= $this->Form->control('description', [
                                'label' => 'Description',
                                'class' => 'form-control',
                                'placeholder' => 'Enter project description'
                            ]) ?>
                        </div>

                        <div class="form-group mb-3">
                            <?= $this->Form->control('management_tool_link', [
                                'label' => 'Management Tool Link',
                                'class' => 'form-control',
                                'placeholder' => 'Enter management tool link'
                            ]) ?>
                        </div>

                        <div class="form-group mb-3">
                            <?= $this->Form->control('project_due_date', [
                                'type' => 'date',
                                'label' => 'Project Due Date',
                                'class' => 'form-control'
                            ]) ?>
                        </div>

                        <div class="form-group mb-3">
                            <?= $this->Form->control('last_checked', [
                                'type' => 'date',
                                'label' => 'Last Checked',
                                'class' => 'form-control'
                            ]) ?>
                        </div>

                        <div class="form-group mb-4">
                            <?= $this->Form->control('complete', [
                                'type' => 'checkbox',
                                'label' => 'Complete',
                                'class' => 'form-check-input'
                            ]) ?>
                        </div>
                    </fieldset>

                    <div class="d-grid">
                        <?= $this->Form->button(__('Add'), ['class' => 'btn btn-primary btn-lg']) ?>
                    </div>

                    <?= $this->Form->end() ?>
                </div>
                <div class="card-footer text-center">
                    <?= $this->Html->link(__('Back to Projects List'), ['action' => 'index'], ['class' => 'btn btn-secondary']) ?>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .custom-container {
        max-width: 900px;
        margin: 0 auto;
    }
</style>
