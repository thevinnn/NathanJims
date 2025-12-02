<?php
///**
// * @var \App\View\AppView $this
// * @var \App\Model\Entity\ContractorRegistration $contractorRegistration
// * @var string[]|\Cake\Collection\CollectionInterface $contractors
// */
//?>
<!--<div class="row">-->
<!--    <aside class="column">-->
<!--        <div class="side-nav">-->
<!--            <h4 class="heading">--><?php //= __('Actions') ?><!--</h4>-->
<!--            --><?php //= $this->Form->postLink(
//                __('Delete'),
//                ['action' => 'delete', $contractorRegistration->id],
//                ['confirm' => __('Are you sure you want to delete : {0}?', $contractorRegistration->first_name.' '.$contractorRegistration->last_name), 'class' => 'side-nav-item']
//            ) ?>
<!--            --><?php //= $this->Html->link(__('List Contractor Registrations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
<!--        </div>-->
<!--    </aside>-->
<!--    <div class="column column-80">-->
<!--        <div class="contractorRegistrations form content">-->
<!--            --><?php //= $this->Form->create($contractorRegistration) ?>
<!--            <fieldset>-->
<!--                <legend>--><?php //= __('Edit Contractor Registration') ?><!--</legend>-->
<!--                --><?php
//                    echo $this->Form->control('first_name');
//                    echo $this->Form->control('last_name');
//                    echo $this->Form->control('email');
//                    echo $this->Form->control('phone_number');
//                    echo $this->Form->control('specialised_in');
//                    echo $this->Form->control('contractor_id', ['options' => $contractors, 'empty' => '-- Not Selected --']);
//                ?>
<!--            </fieldset>-->
<!--            --><?php //= $this->Form->button(__('Search')) ?>
<!--            --><?php //= $this->Form->end() ?>
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--<style>-->
<!--    .custom-container {-->
<!--        max-width: 70%; /* Set your desired max width */-->
<!--        margin: 0 auto; /* Center the container */-->
<!--        padding: 0 15px; /* Optional: add some padding */-->
<!--    }-->
<!--</style>-->
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
                    <h3 class="mb-0">Edit Contractor Registration</h3>
                </div>
                <div class="card-body">
                    <?= $this->Form->create($contractorRegistration, ['class' => 'needs-validation', 'novalidate' => true]) ?>
                    <fieldset>
                        <legend class="text-center mb-4"><?= __('Update Contractor Registration details') ?></legend>

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
                        <?= $this->Form->button(__('Update'), ['class' => 'btn btn-primary btn-lg']) ?>
                    </div>

                    <?= $this->Form->end() ?>
                </div>
                <div class="card-footer text-center">
                    <?= $this->Form->postLink(
                        __('Delete Contractor Registration'),
                        ['action' => 'delete', $contractorRegistration->id],
                        [
                            'confirm' => __('Are you sure you want to delete # {0}?', $contractorRegistration->id),
                            'class' => 'btn btn-danger'
                        ]
                    ) ?>
                    <?= $this->Html->link(__('Back to Contractor Registrations List'), ['action' => 'index'], ['class' => 'btn btn-secondary']) ?>
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
