<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contact $contact
 * @var \Cake\Collection\CollectionInterface|string[] $organisations
 * @var \Cake\Collection\CollectionInterface|string[] $contractors
 */
?>

<div class="container custom-container my-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white text-center">
                    <h3 class="mb-0">Contact Us</h3>
                </div>
                <div class="card-body">
                    <?= $this->Form->create($contact, ['class' => 'needs-validation', 'novalidate' => true]) ?>
                    <fieldset>
                        <legend class="text-center mb-4"><?= __('Please enter the contact details') ?></legend>

                        <div class="form-group mb-3">
                            <?= $this->Form->control('organisation_id', [
                                'options' => $organisations,
                                'empty' => 'Select Organisation',
                                'label' => 'Organisation',
                                'class' => 'form-select',
                                'required' => true
                            ]) ?>
                        </div>

                        <div class="form-group mb-3">
                            <?= $this->Form->control('contractor_id', [
                                'options' => $contractors,
                                'empty' => 'Select Contractor',
                                'label' => 'Contractor',
                                'class' => 'form-select',
                                'required' => true
                            ]) ?>
                        </div>

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
                            <?= $this->Form->control('email', [
                                'label' => 'Email',
                                'class' => 'form-control',
                                'placeholder' => 'Enter email',
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
                            <?= $this->Form->control('message', [
                                'label' => 'Message',
                                'class' => 'form-control',
                                'placeholder' => 'Enter message',
                                'type' => 'textarea',
                                'rows' => 3,
                                'required' => true
                            ]) ?>
                        </div>

                        <div class="form-group mb-3">
                            <?= $this->Form->control('replied', [
                                'type' => 'checkbox',
                                'label' => 'Replied',
                                'class' => 'form-check-input',
                                'required' => false
                            ]) ?>
                        </div>
                    </fieldset>

                    <div class="d-grid">
                        <?= $this->Form->button(__('Add'), ['class' => 'btn btn-primary btn-lg']) ?>
                    </div>

                    <?= $this->Form->end() ?>
                </div>
                <div class="card-footer text-center">
                    <?= $this->Html->link(__('Back to Contacts List'), ['action' => 'index'], ['class' => 'btn btn-secondary']) ?>
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
