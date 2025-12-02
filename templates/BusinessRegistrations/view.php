<div class="container custom-container mt-5">
    <div class="row">
        <aside class="col-md-3 mb-4">
            <div class="list-group">
                <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Business Registration'), ['action' => 'edit', $businessRegistration->id], ['class' => 'list-group-item list-group-item-action']) ?>
            <?= $this->Form->postLink(__('Delete Business Registration'), ['action' => 'delete', $businessRegistration->id], ['confirm' => __('Are you sure you want to delete : {0}?', $businessRegistration->business_name), 'class' => 'list-group-item list-group-item-action text-danger']) ?>
            <?= $this->Html->link(__('List Business Registrations'), ['action' => 'index'], ['class' => 'list-group-item list-group-item-action']) ?>
            <?= $this->Html->link(__('New Business Registration'), ['action' => 'add'], ['class' => 'list-group-item list-group-item-action']) ?>
            </div>
        </aside>

        <div class="col-md-9">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h3 class="card-title"><?= h($businessRegistration->business_name) ?></h3>
                </div>
                <div class="card-body">
                    <table class="table table-borderless">
                        <tr>
                    <th><?= __('Business Name') ?></th>
                    <td><?= h($businessRegistration->business_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Contact First Name') ?></th>
                    <td><?= h($businessRegistration->contact_first_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Contact Last Name') ?></th>
                    <td><?= h($businessRegistration->contact_last_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Contact Email') ?></th>
                    <td><?= h($businessRegistration->contact_email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Current Website') ?></th>
                    <td><?= h($businessRegistration->current_website) ?></td>
                </tr>
                <tr>
                    <th><?= __('Industry') ?></th>
                    <td><?= h($businessRegistration->industry) ?></td>
                </tr>
                <tr>
                    <th><?= __('Organisation') ?></th>
                    <td><?= $businessRegistration->hasValue('organisation') ? $this->Html->link($businessRegistration->organisation->business_name, ['controller' => 'Organisations', 'action' => 'view', $businessRegistration->organisation->id]) : '' ?></td>
                </tr>
                    </table>
                    <div class="mt-4">
                        <h5><?= __('Description') ?></h5>
                        <p class="text-muted"><?= $this->Text->autoParagraph(h($contact->description)); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .custom-container {
        max-width: 80%;
    }
</style>