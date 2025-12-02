<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contractor $contractor
 * @var string[]|\Cake\Collection\CollectionInterface $skills
 */
?>

<div class="container custom-container my-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white text-center">
                    <h3 class="mb-0">Edit Contractor</h3>
                </div>
                <div class="card-body">
                    <?= $this->Form->create($contractor, ['class' => 'needs-validation', 'novalidate' => true]) ?>
                    <fieldset>
                        <legend class="text-center mb-4"><?= __('Update contractor details') ?></legend>

                        <div class="form-group mb-3">
                            <?= $this->Form->control('first_name', [
                                'label' => 'First Name',
                                'class' => 'form-control',
                                'placeholder' => 'Enter first name',
                                'required' => true
                            ]) ?>
                        </div>

                        <div class="form-group mb-3">
                            <?= $this->Form->control('last_name', [
                                'label' => 'Last Name',
                                'class' => 'form-control',
                                'placeholder' => 'Enter last name',
                                'required' => true
                            ]) ?>
                        </div>

                        <div class="form-group mb-3">
                            <?= $this->Form->control('phone_number', [
                                'label' => 'Phone Number',
                                'class' => 'form-control',
                                'placeholder' => 'Enter phone number',
                                'required' => true
                            ]) ?>
                        </div>

                        <div class="form-group mb-3">
                            <?= $this->Form->control('email', [
                                'label' => 'Email',
                                'class' => 'form-control',
                                'placeholder' => 'Enter email',
                                'required' => true
                            ]) ?>
                        </div>

                        <div class="form-group mb-4">
                            <?= $this->Form->control('skills._ids', [
                                'type' => 'select',
                                'label' => 'Skills',
                                'options' => $skills,
                                'class' => 'form-select',
                                'style' => 'height: auto;'
                            ]) ?>
                            <small class="form-text text-muted">Hold Ctrl (Cmd on Mac) to select multiple skills.</small>
                        </div>
                    </fieldset>

                    <div class="d-grid">
                        <?= $this->Form->button(__('Update'), ['class' => 'btn btn-primary btn-lg']) ?>
                    </div>

                    <?= $this->Form->end() ?>
                </div>
                <div class="card-footer text-center">
                    <?= $this->Form->postLink(
                        __('Delete Contractor'),
                        ['action' => 'delete', $contractor->id],
                        [
                            'confirm' => __('Are you sure you want to delete # {0}?', $contractor->first_name.' '.$contractor->last_name),
                            'class' => 'btn btn-danger'
                        ]
                    ) ?>
                    <?= $this->Html->link(__('Back to Contractors List'), ['action' => 'index'], ['class' => 'btn btn-secondary']) ?>
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
