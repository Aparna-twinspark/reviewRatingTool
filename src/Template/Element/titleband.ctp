<?php 

//Inflecting the names of the controller
$underscore = \Cake\Utility\Inflector::underscore($this->request->params['controller']);
$humanize = \Cake\Utility\Inflector::humanize($underscore);

if($humanize == "Teachers"){
    $humanize = "Dashboard";
}

$underscoreAction = \Cake\Utility\Inflector::underscore($this->request->params['action']);
$humanizeAction = \Cake\Utility\Inflector::humanize($underscoreAction); 
?>

<div class="row wrapper border-bottom white-bg page-heading" id="titleBand">
    <div class="col-lg-10">
        <h2><?= $humanize ?></h2>
<?php if($humanize == "Dashboard"){ $humanize = "Teacher";} ?> 
<?php if(!($humanize == "Dashboard" && $humanizeAction == "Dashboard")){ ?>
        <ol class="breadcrumb">
            <li>
                <?= $this->Html->link(
                $humanize,
                "/".$this->request->params['controller']); ?>
            </li>
            <li class="active">
                <strong><?= $humanizeAction; //ucfirst($this->request->params['action']) ?></strong>
            </li>
        </ol>
<?php } ?>
    </div>
</div>