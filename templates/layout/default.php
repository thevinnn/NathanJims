<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = '';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css(['normalize.min', 'milligram.min', 'fonts', 'cake']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" rel="stylesheet"/>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js"></script></head>
<body>
    <nav class="top-nav">
        <div class="top-nav-links">
            <?php if  ($this->request->getSession()->read('Auth')) {
                echo $this->Html->link('Home', ['controller' => 'Pages', 'action' => 'home']);
                echo $this->Html->link('Dashboard', ['controller' => 'Dashboard', 'action' => '']);
                echo $this->Html->link('Organisations', ['controller' => 'Organisations', 'action' => 'index']);
                echo $this->Html->link('Projects', ['controller' => 'Projects', 'action' => 'index']);
                echo $this->Html->link('Contractors', ['controller' => 'Contractors', 'action' => 'index']);
                echo $this->Html->link('Contacts', ['controller' => 'Contacts', 'action' => 'index']);
                echo $this->Html->link('BusinessRegistrations', ['controller' => 'BusinessRegistrations', 'action' => 'index']);
                echo $this->Html->link('ContractorRegistrations', ['controller' => 'ContractorRegistrations', 'action' => 'index']);
                echo $this->Html->link('About Us', ['controller' => 'Pages', 'action' => 'about_us']);
                echo $this->Html->link('Logout', ['controller' => 'Users', 'action' => 'logout']);
            } else {
                echo $this->Html->link('Home', ['controller' => 'Pages', 'action' => 'home']);
                echo $this->Html->link('Business Registration', ['controller' => 'BusinessRegistrations', 'action' => 'register']);
                echo $this->Html->link('Contractor Registration', ['controller' => 'ContractorRegistrations', 'action' => 'register']);
                echo $this->Html->link('Contact Us', ['controller' => 'Contacts', 'action' => 'ContactUs']);
                echo $this->Html->link('About Us', ['controller' => 'Pages', 'action' => 'about_us']);
                echo $this->Html->link('Login', ['controller' => 'Users', 'action' => 'login']);
            }
            ?>

        </div>
    </nav>
    <main class="main">
        <div class="custom-container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>
    <footer>
    </footer>
</body>
</html>

