<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class = "row">
<div class="col-lg-9">
    <div class="wrapper wrapper-content animated fadeInUp">
            <div class="ibox">
                <div class="ibox-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="m-b-md">
                                <h2><?= h($business->name) ?></h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <dl class="dl-horizontal">
                                <dt><?= __('Id') ?>:</dt> <dd> <?= h($business->id) ?> </dd>
                                <dt><?= __('Name') ?>:</dt> <dd> <?= h($business->name) ?> </dd>
                                <dt><?= __('Logo') ?>:</dt> <dd> <a href="<?= $business->image_url ?>" target="_blank"><?= $this->Html->image($business->image_url, array('height' => 100, 'width' => 100))?></a></dd>
                                <dt><?= __('Created') ?>:</dt> <dd> <?= h($business->created) ?> </dd>
                                <dt><?= __('Modified') ?>:</dt> <dd><?= h($business->modified) ?></dd>
                                <dt><?= __('Status') ?>:</dt> <dd><?= h($business->status)?'Enabled':'Disabled' ?></dd>
                            </dl>
                        </div>
                    </div> 
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <?= $this->Html->link('Back',$this->request->referer(),['class' => ['btn', 'btn-warning']]);?>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
    </div>
</div>