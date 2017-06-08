<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5 id = 'addUsers'><?= __('Add User') ?></h5>
            </div>
            <div class="ibox-content">
                <?= $this->Form->create($user, ['data-toggle'=>'validator','class' => 'form-horizontal'])?>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Roles</label>
                    <div class="col-sm-10">
                       <?= $this->Form->input('role_id', ['label' => false, 'required' => true, 'class' => ['form-control']]); ?>
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
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
                    <?= $this->Form->label('name', __('Username'), ['class' => ['col-sm-2', 'control-label'], 'id' => 'userName']); ?>
                    <div class="col-sm-10">
                    <?= $this->Form->input("username", array(
                                        "label" => false, 
                                        'required' => true,
                                        "class" => "form-control"));
                    ?>

                       <!-- <?= $this->Form->input('username', ['label' => false, 'required' => true, 'class' => ['form-control']]); ?> -->
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                    <?= $this->Form->label('name', __('Password'), ['class' => ['col-sm-2', 'control-label'], 'id' => 'password']); ?>
                    <div class="col-sm-10">
                       <?= $this->Form->input("password", array(
                                                "label" => false,
                                                'data-minlength' => 8, 
                                                'required' => true,
                                                "placeholder" => "",
                                                "class" => "form-control"));
                        ?>
                        <div class="help-block">Minimum of 8 characters</div>
                       <!-- <?= $this->Form->input('password', ['label' => false, 'required' => true, 'class' => ['form-control']]); ?> -->
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