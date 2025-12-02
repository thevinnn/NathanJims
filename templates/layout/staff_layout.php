<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->Html->charset() ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $this->fetch('title') ?></title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/startbootstrap-sb-admin-2@1.0.8/css/sb-admin-2.min.css">


    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" rel="stylesheet"/>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js"></script></head>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>

    <style>
        #main-content {
            display: flex;
            height: calc(100vh - 60px);
            overflow: hidden;
        }

        #accordionSidebar {
            width: 250px;
            background-color: #2e59d9;
            color: #fff;
        }

        #accordionSidebar .nav-item {
            margin: 3px 0;
        }

        #accordionSidebar .nav-link {
            color: #e4e9f0;
            font-size: 1rem;
            padding: 10px 20px;
            border-radius: 4px;
            transition: background-color 0.2s ease;
        }

        #accordionSidebar .nav-link:hover {
            background-color: #1d4bb8;
            color: #ffffff;
        }

        #accordionSidebar .sidebar-heading {
            font-size: 0.9rem;
            font-weight: bold;
            text-transform: uppercase;
            padding: 20px 20px 5px;
            color: #cbd1dc;
        }

        #content-wrapper {
            flex: 1;
            overflow-y: auto;
            padding: 20px;
        }

        header.navbar {
            height: 70px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 0 20px;
        }

        header .navbar-brand {
            font-size: 1.4rem;
            font-weight: bold;
        }

        .sidebar-divider {
            margin: 0 15px;
            background-color: #1c3b85;
        }
    </style>
</head>

<body id="page-top">

<!-- Header -->
<header class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand ms-3" href="<?= $this->Url->build('/') ?>">Nathan's B2B</a>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav ms-auto me-3">
            <li class="nav-item">
                <a class="nav-link" href="<?= $this->Url->build('/dashboard') ?>">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= $this->Url->build('/projects') ?>">Projects</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= $this->Url->build('/contractors') ?>">Contractors</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= $this->Url->build('/organisations') ?>">Organisations</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= $this->Url->build('/contacts') ?>">Contacts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= $this->Url->build('/contractorRegistrations') ?>">Contractor Registrations</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= $this->Url->build('/businessRegistrations') ?>">Business Registrations</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-danger" href="<?= $this->Url->build('/users/logout') ?>">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
            </li>
        </ul>
    </div>
</header>
<!-- End of Header -->

<!-- Main Content Wrapper -->
<div id="main-content">

    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Dashboard Link -->
        <li class="nav-item">
            <a class="nav-link" href="<?= $this->Url->build('/dashboard') ?>">
                <i class="fas fa-tachometer-alt"></i><span> Dashboard</span>
            </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">Manage</div>

        <!-- Projects Link -->
        <li class="nav-item">
            <a class="nav-link" href="<?= $this->Url->build('/projects') ?>">
                <i class="fas fa-clipboard"></i><span> Projects</span>
            </a>
        </li>

        <!-- Contractors Link -->
        <li class="nav-item">
            <a class="nav-link" href="<?= $this->Url->build('/contractors') ?>">
                <i class="fas fa-users"></i><span> Contractors</span>
            </a>
        </li>

        <!-- Organisations Link -->
        <li class="nav-item">
            <a class="nav-link" href="<?= $this->Url->build('/organisations') ?>">
                <i class="fas fa-building"></i><span> Organisations</span>
            </a>
        </li>

        <!-- Contacts Link -->
        <li class="nav-item">
            <a class="nav-link" href="<?= $this->Url->build('/contacts') ?>">
                <i class="fa-solid fa-address-card"></i><span> Contacts</span>
            </a>
        </li>

        <!-- Contractor Registrations Link -->
        <li class="nav-item">
            <a class="nav-link" href="<?= $this->Url->build('/contractorRegistrations') ?>">
                <i class="fa-solid fa-user-plus"></i><span> Contractor Registrations</span>
            </a>
        </li>

        <!-- Business Registrations Link -->
        <li class="nav-item">
            <a class="nav-link" href="<?= $this->Url->build('/businessRegistrations') ?>">
                <i class="fa-regular fa-building"></i><span> Business Registrations</span>
            </a>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">Public</div>

        <!-- Home Link -->
        <li class="nav-item">
            <a class="nav-link" href="<?= $this->Url->build('/pages/home') ?>">
                <i class="fa-solid fa-house"></i><span> Home</span>
            </a>
        </li>

        <!-- Contact Us Link -->
        <li class="nav-item">
            <a class="nav-link" href="<?= $this->Url->build('/contacts/contact-us') ?>">
                <i class="fa-solid fa-address-card"></i><span> Contact Us</span>
            </a>
        </li>

        <!-- Contractor Registrations Link -->
        <li class="nav-item">
            <a class="nav-link" href="<?= $this->Url->build('/contractorRegistrations/register') ?>">
                <i class="fa-solid fa-user-plus"></i><span> Contractor Registrations</span>
            </a>
        </li>

        <!-- Business Registrations Link -->
        <li class="nav-item">
            <a class="nav-link" href="<?= $this->Url->build('/businessRegistrations/register') ?>">
                <i class="fa-regular fa-building"></i><span> Business Registrations</span>
            </a>
        </li>

        <!-- Contractor Registrations Link -->
        <li class="nav-item">
            <a class="nav-link" href="<?= $this->Url->build('/pages/about-us') ?>">
                <i class="fas fa-info-circle"></i><span> About Us</span>            </a>
        </li>


        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">


    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper">

        <!-- Main Content -->
        <div id="content">
            <div class="container-fluid">
                <?= $this->Flash->render() ?>
                <?= $this->fetch('content') ?>
            </div>
        </div>


        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Nathan's B2B 2024</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/startbootstrap-sb-admin-2@1.0.8/js/sb-admin-2.min.js"></script>

<?= $this->fetch('script') ?>

</body>
</html>
