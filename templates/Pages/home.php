<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->Html->charset() ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nathan's B2B - Home</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <style>
        #hero {
            position: relative;
            text-align: left;
            color: white;
            background-color: #006d5b;
            padding-top: 60px;
            padding-bottom: 60px;
        }

        #hero .hero-content {
            position: absolute;
            top: 20%;
            left: 10%;
            max-width: 40%;
        }

        #hero h2 {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        #hero p {
            font-size: 1.2rem;
            color: #e0e0e0;
            margin-bottom: 10px;
        }

        #hero img {
            width: 100%;
            height: auto;
        }

        .about-section {
            background-color: #f8f9fa;
            padding: 50px 0;
        }

        .about-section h3 {
            font-size: 2.2rem;
            font-weight: bold;
            margin-bottom: 20px;
            color: #333;
        }

        .about-section .about-text {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #555;
        }

        .about-section .about-content {
            padding: 30px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body id="page-top">


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
<main class="main">
    <!-- Hero Section -->
    <section id="hero" class="hero section">
        <div class="hero-content">
            <h2>Welcome to Nathan's B2B</h2>
            <p>Connecting Businesses with Projects, Contractors, and Opportunities.</p>
        </div>
        <img id="b2b-image" src="<?= $this->Url->build('/img/b2b2.jpg') ?>" alt="B2B" onerror="this.onerror=null; this.src='<?= $this->Url->build('webroot/img/b2b2.jpg') ?>';">    </section>

    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="about-content text-center">
                        <h3>About Us</h3>
                        <p class="about-text">
                            At Nathan’s B2B, we specialize in connecting businesses with the resources they need to thrive.
                            Our platform is designed to simplify the process of finding and managing projects, contractors,
                            and organizational support. Whether you’re a business seeking skilled contractors or a contractor
                            in search of reliable projects, we’re here to facilitate meaningful partnerships.
                        </p>
                        <p class="about-text">
                            Discover a seamless B2B experience with innovative solutions and industry insights tailored to foster
                            growth and success in today’s competitive market. Explore our platform and see how we’re redefining
                            the business landscape with trust, efficiency, and expertise.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
