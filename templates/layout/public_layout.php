<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->Html->charset() ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->fetch('title') ?> - Nathan's B2B</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body id="page-top">
<!-- Header Section -->
<header class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand ms-3" href="<?= $this->Url->build('/') ?>">Nathan's B2B</a>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav ms-auto me-3">
            <li class="nav-item">
                <a class="nav-link" href="<?= $this->Url->build('/pages/home') ?>">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= $this->Url->build('/contacts/contact-us') ?>">Contact Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= $this->Url->build('/contractorRegistrations/register') ?>">Register Contractor</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= $this->Url->build('/businessRegistrations/register') ?>">Register Business</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= $this->Url->build('/pages/about-us') ?>">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-success" href="<?= $this->Url->build('/users/login') ?>">
                    <i class="fas fa-sign-in-alt"></i> Login
                </a>
            </li>
        </ul>
    </div>
</header>

<main class="container py-5">
    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>
</main>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
