<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5><?= __('Add Role') ?></h5>
            </div>
            <div class="ibox-content">
                <?= $this->Form->create($role, ['data-toggle'=>"validator", 'class' => 'form-horizontal']) ?>
                <div class="form-group">

                    <?= $this->Form->label('name', __('Name'), ['class' => ['col-sm-2', 'control-label']]); ?>
                    <div class="col-sm-10">
                       <?= $this->Form->input('name', ['label' => false, 'required' => true, 'class' => ['form-control']]); ?>
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                    <?= $this->Form->label('label', __('Label'), ['class' => ['col-sm-2', 'control-label']]); ?>
                    <div class="col-sm-10">
                       <?= $this->Form->input('label', ['label' => false, 'required' => true, 'class' => ['form-control']]); ?>
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                    <?= $this->Form->label('login_redirect_url', __('Login Redirect Url'), ['class' => ['col-sm-2', 'control-label']]); ?>
                    <div class="col-sm-10">
                       <?= $this->Form->input('login_redirect_url', ['label' => false, 'required' => false, 'class' => ['form-control']]); ?>
                    </div>
                </div>        
                <div class="hr-line-dashed"></div>
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
