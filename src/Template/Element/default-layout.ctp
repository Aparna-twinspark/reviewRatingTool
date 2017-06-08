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

    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>

    <?= $this->Html->css('bootstrap.min.css') ?>
    <?php //$this->Html->css('font-awesome.min.css') ?>

    <?= $this->Html->css('plugins/toastr/toastr.min.css') ?>
    <?= $this->Html->css('animate') ?>

    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->css(['plugins/iCheck/custom', 'plugins/steps/jquery.steps']) ?>
    <?= $this->Html->css(["plugins/dataTables/datatables.min"]) ?>
    <!-- Inspenia Switchery for toggle buttons -->
    <?= $this->Html->css(['plugins/switchery/switchery'])?>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css" rel="stylesheet">
    <?= $this->Html->css('plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css') ?>
    
    <!-- Gritter -->
    <?= $this->Html->script('jquery-2.1.1') ?>

    <?= $this->Html->css('plugins/sweetalert/sweetalert') ?>
    <?= $this->Html->script('plugins/sweetalert/sweetalert.min') ?>


<?= $this->fetch('meta') ?>
<?= $this->fetch('css') ?>
<?= $this->fetch('script') ?>
</head>

<body <?= /*$sideNavData['role_name']!="admin" ? 'class="mini-navbar"' : */'' ?> >
    <div id="wrapper">

        <?=  $this->element('Navigation/sidenav', array('sideNavData' => $sideNavData)); ?>

        <?= $this->fetch('nav') ?>
        <div id="page-wrapper" class="gray-bg">

            <?=  $this->Form->hidden('baseUrl',['id'=>'baseUrl','value'=>$this->Url->build('/', true)]); ?>
            <div class="row border-bottom">
                <?= $this->element('Navigation/topnav'); ?>
            </div>
            <?= $this->element('titleband')?>
            <div class="wrapper wrapper-content animated fadeIn" id="pageWrapper">
             <?= $this->Flash->render('auth', ['element' => 'Flash/error']) ?>
             <?= $this->Flash->render() ?>

             <?= $this->fetch('content') ?>

         </div>
         <?= $this->element('footer'); ?>
     </div>

 </div>

 <!-- Scripts -->
 <!-- Metis Menu-->
 <?= $this->Html->script('bootstrap.min') ?>
 <?= $this->Html->script('jquery.cookie') ?>
 <?= $this->Html->script('plugins/dataTables/datatables.min') ?>
 <?= $this->Html->script(['/js/plugins/metisMenu/jquery.metisMenu', '/js/plugins/pace/pace.min.js', '/js/plugins/slimscroll/jquery.slimscroll.min', '/js/plugins/toastr/toastr.min', '/js/plugins/validator/validator.js', 'plugins/staps/jquery.steps.min']) ?>

 <!-- Jquery UI Script-->
 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<?= $this->Html->script('/integrateideas/user/js/user-management') ?>

 <!-- JS cookie -->
 <?= $this->Html->script('plugins/jsCookie/js-cookie') ?>

 <!-- Inspenia Switchery for toggle buttons -->
 <?= $this->Html->script(['plugins/switchery/switchery','plugins/switchery/ngSwitchery'])?>

 <?= $this->fetch('scriptBottom'); ?>
 
 <?= $this->Html->script('inspinia') ?>
 <script>
   $(function () {
    $('#side-menu').metisMenu();
});
</script>
</body>

</html>
