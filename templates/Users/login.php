<div class="container custom-container my-5">
    <div class="card shadow-sm">
        <div class="card-body">
            <h1 class="card-title text-center mb-4">Login</h1>
            <?= $this->Form->create(null, ['class' => 'needs-validation', 'novalidate' => true]) ?>
            <fieldset>
                <legend class="text-center mb-3"><?= __('Please enter your email and password') ?></legend>

                <div class="mb-3">
                    <?= $this->Form->control('email', [
                        'label' => 'Email',
                        'class' => 'form-control',
                        'placeholder' => 'Enter your email'
                    ]) ?>
                </div>

                <div class="mb-3">
                    <?= $this->Form->control('password', [
                        'label' => 'Password',
                        'class' => 'form-control',
                        'placeholder' => 'Enter your password'
                    ]) ?>
                </div>
            </fieldset>
            <div class="d-grid">
                <?= $this->Form->button(__('Login'), ['class' => 'btn btn-primary']) ?>
            </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

<style>
    .custom-container {
        max-width: 400px;
        margin: 0 auto;
    }
</style>
