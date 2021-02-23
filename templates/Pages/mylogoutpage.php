<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.10.0
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Http\Exception\NotFoundException;

$this->disableAutoLayout();

if (!Configure::read('debug')) :
    throw new NotFoundException(
        'Please replace templates/Pages/home.php with your own version or re-enable debug mode.'
    );
endif;

$cakeDescription = 'CakePHP: the rapid development PHP framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <?= $this->Html->css(['normalize.min', 'milligram.min', 'cake', 'home']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <header>
        <div class="container text-center">
            <a href="https://cakephp.org/" target="_blank" rel="noopener">
                <img alt="CakePHP" src="https://cakephp.org/v2/img/logos/CakePHP_Logo.svg" width="350" />
            </a>
            <h1>
                Logged out from<br/>CakePHP <?php echo Configure::version() ?> Strawberry (🍓)
            </h1>
        </div>
    </header>
    <main class="main">
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="column">
                        <h4>Books Controller</h4>
                        <ul>
                            <li class="bullet sst">
                                <?= $this->Html->link(__('/books/index'), [
                                    "controller" => "Books",
                                    "action" => "index"
                                ]); ?>
                            </li>
                        </ul>
                    </div>
                    <div class="column">
                        <h4>User Controller</h4>
                        <ul>
                            <li class="bullet sst">
                                <?= $this->Html->link(__('Login'), [
                                    "plugin" => "CakeDC/Users",
                                    "controller" => "Users",
                                    "action" => "login"
                                ]); ?>
                            </li>
                            <li class="bullet sst">
                                <?= $this->Html->link(__('Logout'), [
                                    "plugin" => "CakeDC/Users",
                                    "controller" => "Users",
                                    "action" => "logout"
                                ]); ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
