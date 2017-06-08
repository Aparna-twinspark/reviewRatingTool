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
                        <br></br>
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
                <div class="ibox-title">
                <h5><?= __('Add Staff Admin') ?></h5>
                </div>
                <?= $this->Inspinia->horizontalRule(); ?>
                   <div class="form-group">
                    <?= $this->Form->label('last_name', __('Last Name'), ['class' => ['col-sm-2', 'control-label']]); ?>
                    <div class="col-sm-10">
                       <?= $this->Form->input('business_users[0].user.last_name', ['label' => false, 'required' => true, 'class' => ['form-control']]); ?>
                    </div>
                </div>
                <?= $this->Inspinia->horizontalRule(); ?>
                <div class="form-group">
                <?= $this->Form->label('first_name', __('First Name'), ['class' => ['col-sm-2', 'control-label']]); ?>
                    <div class="col-sm-10">
                       <?= $this->Form->input('business_users[0].user.first_name', ['label' => false, 'required' => true, 'class' => ['form-control']]); ?>
                    </div>
                </div>
                <?= $this->Inspinia->horizontalRule(); ?>
                <div class="form-group">
                    <?= $this->Form->label('email', __('Email'), ['class' => ['col-sm-2', 'control-label']]); ?>
                    <div class="col-sm-10">
                       <?= $this->Form->input('business_users[0].user.email', ['label' => false, 'required' => true, 'class' => ['form-control']]); ?>
                    </div>
                </div>
                <?= $this->Inspinia->horizontalRule(); ?>
                 <div class="form-group">
                    <?= $this->Form->label('password', __('Password'), ['class' => ['col-sm-2', 'control-label']]); ?>
                    <div class="col-sm-10">
                       <?= $this->Form->input('business_users[0].user.password', ['label' => false, 'data-minlength' => 8, 'required' => true,'class' => ['form-control']]); ?>
                       <div class="help-block">Minimum of 8 characters</div>
                    </div>
                </div>
                <?= $this->Inspinia->horizontalRule(); ?>
                <div class="form-group">
                    <?= $this->Form->label('phone', __('Phone'), ['class' => ['col-sm-2', 'control-label']]); ?>
                    <div class="col-sm-10">
                       <?= $this->Form->input('business_users[0].user.phone', array(
                                                "label" => false,
                                                'required' => true, 
                                                "placeholder" => "1(800)233-2742",
                                                "class" => "form-control"));
                        ?>
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

<style type ="text/style">
    
.img-thumbnail {
background: #fff none repeat scroll 0 0;
height: 200px;
margin: 10px 5px;
padding: 0;
position: relative;
width: 200px;
}
.img-thumbnail img {
border: 1px solid #dcdcdc;
max-width: 100%;
object-fit: cover;
}
</style>


<script type ="text/javascript">
    /**
    * @method uploadImage
    @return null
    */    
    function uploadImage(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#upload-img').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $("#imgChange").change(function(){
        uploadImage(this);
    });
</script>
