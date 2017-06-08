<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5 id = 'editUsers'><?= __('Edit User') ?></h5>
            </div>
            <div class="ibox-content">
                <?= $this->Form->create($user, ['data-toggle'=>'validator','class' => 'form-horizontal'])?>
                <div class="form-group">
                    <?=$this->Form->button('Gen. Reset Password Link', ['type' => 'button', 'id' => 'forgotUserPassword','class' => ['btn', 'btn-primary', 'pull-right']])?>
                </div>
                <div class="form-group">
                    <?= $this->Form->label('name', __('First Name'), ['class' => ['col-sm-2', 'control-label'], 'id' => 'name']); ?>
                    <div class="col-sm-10">
                       <?= $this->Form->input('first_name', ['label' => false, 'required' => true, 'class' => ['form-control']]); ?>
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                    <?= $this->Form->label('name', __('Last Name'), ['class' => ['col-sm-2', 'control-label']]); ?>
                    <div class="col-sm-10">
                       <?= $this->Form->input('last_name', ['label' => false, 'required' => true, 'class' => ['form-control']]); ?>
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                    <?= $this->Form->label('name', __('Email'), ['class' => ['col-sm-2', 'control-label'], 'id' => 'email']); ?>
                    <div class="col-sm-10">
                       <?= $this->Form->input("email", array(
                                        "label" => false, 
                                        'required' => true,
                                        "class" => "form-control"));
                    ?>
                       <!-- <?= $this->Form->input('email', ['label' => false, 'required' => true, 'class' => ['form-control']]); ?> -->
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                    <?= $this->Form->label('name', __('Phone'), ['class' => ['col-sm-2', 'control-label'], 'id' => 'phoneNo']); ?>
                    <div class="col-sm-10">
                        <?= $this->Form->input("phone", array(
                                                "label" => false,
                                                'required' => true, 
                                                "placeholder" => "1(800)233-2742",
                                                "class" => "form-control"));
                        ?>
                      <!--  <?= $this->Form->input('phone', ['label' => false, 'required' => true, 'class' => ['form-control']]); ?> -->
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Roles</label>
                    <div class="col-sm-10">
                       <?= $this->Form->input('role_id', ['label' => false, 'required' => true, 'class' => ['form-control']]); ?>
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                    <div class="col-sm-10">
                        <label class="col-sm-offset-6">
                            <?= $this->Form->checkbox('status', ['label' => false]); ?> Active
                        </label>
                    </div>
                </div>

                <div class="hr-line-dashed"></div>
                <?= $this->Form->hidden('userId', ['label' => false, 'value'=> $user->id, 'required' => true, 'class' => ['form-control']]); ?>
                <?= $this->Form->hidden('forgotUsername', ['label' => false, 'id' => 'forgotUsername','value'=> $user->username, 'required' => true, 'class' => ['form-control']]); ?>
                <div class="col-sm-offset-2">
                  <button type="button" class="btn btn-warning btn-md" data-toggle="modal" data-target="#changePassword">Change Password</button>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                    <div class="col-sm-4 col-sm-offset-2">
                        <?= $this->Form->button(__('Submit'), ['class' => ['btn', 'btn-primary'], 'id' => 'saveUser']) ?>
                        <?= $this->Html->link('Cancel', $this->request->referer(),['class' => ['btn', 'btn-danger']]);?>
                    </div>
                </div>     
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>


<div class="modal inmodal" id="changePassword" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content animated bounceInRight">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Change Password</h4>
            </div>
            <?= $this->Form->create(null, ['class' => 'form-horizontal','data-toggle'=>"validator"]) ?>
            <div class="modal-body">
               <div class="alert" id="rsp_msg" style=''></div>
                <div class="form-group">
                    <?= $this->Form->label('name', __('Old Password'), ['class' => ['col-sm-4', 'control-label']]); ?>
                    <div class="col-sm-8">
                        <?= $this->Form->input("old_pwd", array(
                            "label" => false,
                            'required' => true,
                            'id'=>'old_pwd',
                            "type"=>"password",
                            "class" => "form-control",'data-minlength'=>8,
                            'placeholder'=>"Enter Old Password"));
                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <?= $this->Form->label('name', __('New Password'), ['class' => ['col-sm-4', 'control-label']]); ?>
                    <div class="col-sm-8">
                        <?= $this->Form->input("new_pwd", array(
                            "label" => false,
                            'id'=>'new_pwd',
                            "type"=>"password",
                            'required' => true,
                            "class" => "form-control",'data-minlength'=>8,
                            'placeholder'=>"Enter New Password"));
                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <?= $this->Form->label('name', __('Confirm New Password'), ['class' => ['col-sm-4', 'control-label']]); ?>
                    <div class="col-sm-8">
                        <?= $this->Form->input("cnf_new_pwd", array(
                            "label" => false,
                            "type"=>"password",
                            'id'=>'cnf_new_pwd',
                            'required' => true,
                            "class" => "form-control",'data-minlength'=>8,'data-match'=>"#new_pwd",'data-match-error'=>"__('MISMATCH')",'placeholder'=>"Confirm Password"));
                        ?>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                <?= $this->Form->button(__('Submit'), ['class' => ['btn', 'btn-primary'], 'type' => 'button','id'=>"saveUserPassword"]) ?>
            </div>
        </div>
        <?= $this->Form->end() ?>
    </div>
</div>