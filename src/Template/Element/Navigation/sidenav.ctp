<?php
$this->start('nav');
?>

<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">  
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear"> 
                            <span class="block m-t-xs"> 
                                <h2 class="font-bold">
                                    <?= \Cake\Utility\Inflector::humanize($sideNavData['name']) ?>    
                                </h2>
                            </span> 
                            <span class="text-muted text-xs block">
                                <?= $sideNavData['role'] ?> <b class="caret"></b>
                            </span> 
                        </span> 
                    </a>
                </div>
            <div class="logo-element" >
                <?= $this->Html->image('UAE_Fullcolor_reverse.png', ['style' => 'width:54px; height:48px;', 'alt'=>'image'])?>
            </div>
        </li>
        <?php if($sideNavData['role'] == 'Super Admin'){
                echo $this->element('Navigation/superadmin-sidenav');
               }
        ?>
    </ul>
</div>
</nav>

<?php 
$this->end();

$this->Html->scriptStart(['block' => 'scriptBottom']);
   echo "$(function () {
            $('#side-menu').metisMenu();
          });";
$this->Html->scriptEnd();

?>
