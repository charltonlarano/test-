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

$cakeDescription = 'POS Sorsogon';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?> 

    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('bootstrap.css') ?>

    <?= $this->Html->css('sidebar.css') ?>
    <?= $this->Html->css('navbar-fixed-side.css') ?>
     <?= $this->Html->css('font-awesome.min.css') ?>


    <?= $this->Html->script('jquery.v3.2.0.min.js') ?>
    <?= $this->Html->script('bootstrap.min.js') ?>
     
    <?= $this->Html->css('modal.css') ?>
    <?= $this->Html->css('reveal.css') ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

</head>
<body>

<div class="nav">
<nav id="hideme" class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>

      <a class="navbar-brand" href="#"><?= $this->fetch('title') ?></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/posv2">Home</a></li>
        <!--<li><a href="/posv2/Users"></a></li>
        <li><a href="#">Page 2</a></li>-->
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/posv2/users/add"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <!--<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>-->
      </ul>
    </div>
  </div>
</nav>
</div>

      
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    
    <footer>

    </footer>
</body>
</html>
