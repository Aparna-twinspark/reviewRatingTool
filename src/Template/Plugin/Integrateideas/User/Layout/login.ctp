<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Reviews and Ratings | Application';
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Review and Ratings | Login</title>

    <?= $this->Html->css('bootstrap.min') ?>
    <?= $this->Html->css('font-awesome/css/font-awesome.css') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->css('animate.css') ?>

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <?= $this->Flash->render('auth', ['element' => 'Flash/error']) ?>
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
    </div>

    <!-- Mainly scripts -->
    <?= $this->Html->script('jquery-2.1.1') ?>
    <?= $this->Html->script('bootstrap.min') ?>

</body>

</html>
