<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ContractorRegistration $contractorRegistration
 * @var \Cake\Collection\CollectionInterface|string[] $contractors
 */
?>
<div class="container custom-container my-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white text-center">
                    <h3 class="mb-0">Contractor Registration</h3>
                </div>
                <div class="card-body">
                    <?= $this->Form->create($contractorRegistration, ['class' => 'needs-validation', 'novalidate' => true]) ?>
                    <fieldset>
                        <legend class="text-center mb-4"><?= __('Please enter the Contractor Registration details') ?></legend>

                        <div class="form-group mb-3">
                            <?= $this->Form->control('first_name', [
                                'label' => 'First Name',
                                'class' => 'form-control',
                                'placeholder' => 'Enter First Name',
                                'required' => true
                            ]) ?>
                        </div>
                        <div class="form-group mb-3">
                            <?= $this->Form->control('last_name', [
                                'label' => 'Last Name',
                                'class' => 'form-control',
                                'placeholder' => 'Enter Last Name',
                                'required' => true
                            ]) ?>
                        </div><div class="form-group mb-3">
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
                            <?= $this->Form->control('specialised_in', [
                                'label' => 'Specialised In',
                                'class' => 'form-control',
                                'placeholder' => 'Enter specialisation',
                                'required' => true
                            ]) ?>
                        </div>
                    </fieldset>

                    <div class="d-grid">
                        <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary btn-lg']) ?>
                    </div>

                    <?= $this->Form->end() ?>
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
