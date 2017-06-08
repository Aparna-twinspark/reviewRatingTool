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
    <?= $this->Html->css('animate.css') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->css(['plugins/iCheck/custom', 'plugins/steps/jquery.steps']) ?>
    <!-- Inspenia Switchery for toggle buttons -->
    <?= $this->Html->css(['plugins/switchery/switchery'])?>

    <?= $this->Html->css('super-admin.css') ?>
    <?= $this->Html->css('plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css') ?>
    <?= $this->Html->css(["plugins/dataTables/datatables.min"]) ?>
    
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css" rel="stylesheet">
    
    <!-- Bootstrap Tour -->
    <?= $this->Html->css(["plugins/bootstrapTour/bootstrap-tour.min"]) ?>
    <?= $this->Html->css("plugins/angular-flip-clock/angular-flip-clock") ?>

    <!-- Gritter -->
    <?= $this->Html->script('jquery-2.1.1') ?>

    <?= $this->Html->css('plugins/sweetalert/sweetalert') ?>
    <?= $this->Html->script('plugins/sweetalert/sweetalert.min') ?>

    <script src='//cdn.tinymce.com/4/tinymce.min.js'></script>
    <?= $this->Html->script('plugins/c3/c3.min.js') ?>
    <?= $this->Html->script('plugins/d3/d3.min.js') ?>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular-route.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular-cookies.js"></script>
    <!--User Voice-->
<!--     <script type="application/javascript" async="" defer="" src="https://by2.uservoice.com/t2/208620/web/track.js?_=1484140539961&amp;s=0&amp;c=__uvSessionData0&amp;d=eyJ1Ijp7Im8iOi0zMzB9LCJlIjp7InUiOiJodHRwOi8vc3RhZmYubGFtcGFyc2tpLmNvbS9QYXRpZW50TWFuYWdlbWVudCIsInIiOiJodHRwOi8vc3RhZmYubGFtcGFyc2tpLmNvbS9DbGllbnRNYW5hZ2VtZW50In19"></script>    
-->


<?= $this->fetch('meta') ?>
<?= $this->fetch('css') ?>
<?= $this->fetch('script') ?>
</head>

<body <?= $sideNavData['role_name']!="admin" ? 'class="mini-navbar"' : ''?> >
    <div id="wrapper">

        <?php if($sideNavData['role_name']=="admin") {
                    echo  $this->element('Navigation/sidenav', array('sideNavData' => $sideNavData));
                }else if($sideNavData['role_name']=="staff_admin"){
                    echo  $this->element('Navigation/staffadmin-sidenav', array('sideNavData' => $sideNavData));
                }else{
                    echo  $this->element('Navigation/staffmanager-sidenav', array('sideNavData' => $sideNavData));
                }
        ?>

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

 <?= $this->IdleTimer->idleTime($idleTime) ?>
 <?= $this->Html->script('bootstrap.min') ?>
 <?= $this->Html->script('super_admin') ?>
 <?= $this->Html->script('jquery.cookie') ?>
 <?= $this->Html->script('review_settings') ?>
 <?= $this->Html->script(['/js/plugins/metisMenu/jquery.metisMenu', '/js/plugins/pace/pace.min.js', '/js/plugins/slimscroll/jquery.slimscroll.min', '/js/plugins/toastr/toastr.min', '/js/plugins/validator/validator.js', 'plugins/staps/jquery.steps.min']) ?>

 <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.0/css/swiper.css"> -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.0/css/swiper.min.css">
 <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.0/js/swiper.js"></script> -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.0/js/swiper.min.js"></script>
 <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.0/js/swiper.jquery.js"></script> -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.0/js/swiper.jquery.min.js"></script>

 <!-- Jquery UI Script-->
 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

 <!-- JS cookie -->
 <?= $this->Html->script('plugins/jsCookie/js-cookie') ?>

 <!--Dashboard app scripts -->
 <?= $this->Html->script("plugins/dataTables/angular-datatables/jquery.dataTables.min") ?>
 <?= $this->Html->script(['/dashboardApp/js/app', '/dashboardApp/js/directive', '/dashboardApp/js/interceptor','plugins/dataTables/datatables.min']) ?>
 <?= $this->Html->script("plugins/dataTables/angular-datatables/angular-datatables.directive") ?>
 <?= $this->Html->script("plugins/dataTables/angular-datatables/angular-datatables.instances") ?>
 <?= $this->Html->script("plugins/dataTables/angular-datatables/angular-datatables.util") ?>
 <?= $this->Html->script("plugins/dataTables/angular-datatables/angular-datatables.renderer") ?>
 <?= $this->Html->script("plugins/dataTables/angular-datatables/angular-datatables.factory") ?>
 <?= $this->Html->script("plugins/dataTables/angular-datatables/angular-datatables.options") ?>
 <?= $this->Html->script("plugins/dataTables/angular-datatables/angular-datatables") ?>
 <?= $this->Html->script("plugins/angular-flip-clock/angular-flip-clock.full") ?>
 <!--Dashboard app contollers -->
 <?= $this->Html->script(['/dashboardApp/js/controller/menu', '/dashboardApp/js/controller/patient', '/dashboardApp/js/controller/profile', '/dashboardApp/js/controller/redemption', '/dashboardApp/js/controller/review', '/dashboardApp/js/controller/search', '/dashboardApp/js/controller/survey', '/dashboardApp/js/controller/tier', '/dashboardApp/js/controller/patient_history', '/dashboardApp/js/controller/manual', '/dashboardApp/js/controller/edit_profile', '/dashboardApp/js/controller/referral', '/dashboardApp/js/controller/old_buzzy_history', '/dashboardApp/js/controller/send_flower', '/dashboardApp/js/controller/patient_address']) ?>

 <!-- Dashboard app factories-->
 <?= $this->Html->script(['/dashboardApp/js/factory/patient', '/dashboardApp/js/factory/reward_products', '/dashboardApp/js/factory/search_results', '/dashboardApp/js/factory/vendor', '/dashboardApp/js/factory/plan', '/dashboardApp/js/factory/gift_coupons','/dashboardApp/js/factory/settings', '/dashboardApp/js/factory/isAuthorized','/dashboardApp/js/factory/tour']) ?>


 <!-- Bootstrap Tour -->
 <?= $this->Html->script(["plugins/bootstrapTour/bootstrap-tour.min"]) ?>

 <!-- Inspenia Switchery for toggle buttons -->
 <?= $this->Html->script(['plugins/switchery/switchery','plugins/switchery/ngSwitchery'])?>
 <!--Idle Timer Plugin-->
 <?= $this->Html->script(['plugins/idle-timer/idle-timer.min']) ?>
 <?= $this->fetch('scriptBottom'); ?>
 <?= $this->fetch('idleTimeHelperScript'); ?>
 
 <?= $this->Html->script('inspinia') ?>
 <script>
   $(function () {
    $('#side-menu').metisMenu();
});
</script>
</body>

</html>
