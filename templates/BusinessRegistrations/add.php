<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BusinessRegistration $businessRegistration
 * @var \Cake\Collection\CollectionInterface|string[] $organisations
 */
?>
<div class="container custom-container my-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white text-center">
                    <h3 class="mb-0">Add Business Registration</h3>
                </div>
                <div class="card-body">
                    <?= $this->Form->create($businessRegistration, ['class' => 'needs-validation', 'novalidate' => true]) ?>
                    <fieldset>
                        <legend class="text-center mb-4"><?= __('Please enter the Business Registration details') ?></legend>

                        <div class="form-group mb-3">
                            <?= $this->Form->control('business_name', [
                                'label' => 'Business Name',
                                'class' => 'form-control',
                                'placeholder' => 'Enter business name',
                                'required' => true
                            ]) ?>
                        </div>
                        <div class="form-group mb-3">
                            <?= $this->Form->control('contact_first_name', [
                                'label' => 'Contact First Name',
                                'class' => 'form-control',
                                'placeholder' => 'Enter business name',
                                'required' => true
                            ]) ?>
                        </div>
                        <div class="form-group mb-3">
                            <?= $this->Form->control('contact_last_name', [
                                'label' => 'Contact Last Name',
                                'class' => 'form-control',
                                'placeholder' => 'Enter business name',
                                'required' => true
                            ]) ?>
                        </div><div class="form-group mb-3">
                            <?= $this->Form->control('contact_email', [
                                'label' => 'Contact Email',
                                'class' => 'form-control',
                                'placeholder' => 'Enter business name',
                                'required' => true
                            ]) ?>
                        </div>
                        <div class="form-group mb-3">
                            <?= $this->Form->control('current_website', [
                                'label' => 'Current Website',
                                'class' => 'form-control',
                                'placeholder' => 'Enter business name',
                                'required' => true
                            ]) ?>
                        </div>
                        <div class="form-group mb-3">
                            <?= $this->Form->control('industry', [
                                'label' => 'Industry',
                                'class' => 'form-control',
                                'placeholder' => 'Enter business name',
                                'required' => true
                            ]) ?>
                        </div>
                        <div class="form-group mb-3">
                            <?= $this->Form->control('description', [
                                'label' => 'Description',
                                'class' => 'form-control',
                                'placeholder' => 'Enter description',
                                'type' => 'textarea',
                                'rows' => 3,
                                'required' => true
                            ]) ?>
                        </div>

                    </fieldset>

                    <div class="d-grid">
                        <?= $this->Form->button(__('Add'), ['class' => 'btn btn-primary btn-lg']) ?>
                    </div>

                    <?= $this->Form->end() ?>
                </div>
                <div class="card-footer text-center">
                    <?= $this->Html->link(__('Back to Business Registrations List'), ['action' => 'index'], ['class' => 'btn btn-secondary']) ?>
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

