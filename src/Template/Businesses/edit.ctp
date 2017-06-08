<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5 class = "col-sm-offset-6"><?= __('Add Business') ?></h5>
            </div>
            <div class="ibox-content">
                <?= $this->Form->create($business, ['data-toggle'=>"validator",'class' => 'form-horizontal', 'enctype'=>"multipart/form-data"]) ?>
                <div class="form-group">
                    
                    <?= $this->Form->label('name', __('Organization Name'), ['class' => ['col-sm-2', 'control-label']]); ?>

                    <div class="col-sm-10">
                       <?= $this->Form->input('name', ['label' => false,'class' => ['form-control']]); ?>
                    </div>     
                </div>
                <?= $this->Inspinia->horizontalRule(); ?>
                <div class="form-group">
                    <?= $this->Form->label('image', __('Image'), ['class' => ['col-sm-2', 'control-label']]); ?>
                    <div class="col-sm-4">
                        <div class="img-thumbnail">
                            <?= $this->Html->image($business->image_url, array('height' => 100, 'width' => 100,'id'=>'upload-img')); ?>
                        </div>
                        <br>
                        <?= $this->Form->input('image_name', ['accept'=>"image/*",'label' => false,'required' => true,['class' => 'form-control'],'type' => "file",'id'=>'imgChange']); ?>
                    </div> 
                </div>
                <?= $this->Inspinia->horizontalRule(); ?>
                <div class="form-group">
                    <div class="col-sm-10">
                        <label class="col-sm-offset-6">
                            <?= $this->Form->checkbox('status', ['label' => false]); ?> 
                           Active
                        </label>
                    </div>
               </div>
               <?= $this->Inspinia->horizontalRule(); ?>
               <div class="form-group">
                    <div class="col-sm-4 col-sm-offset-2">
                        <?= $this->Form->button(__('Submit'), ['class' => ['btn', 'btn-primary']]) ?>
                        <?= $this->Html->link('Cancel',$this->request->referer(),['class' => ['btn', 'btn-danger']]);?>
                    </div>
                </div> 
               <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>