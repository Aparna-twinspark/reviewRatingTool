<div>
    <div>

        <h1 class="logo-name">TS</h1>

    </div>
    <h3>Welcome to Review and Ratings Tool</h3>
    <p>Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views.
        <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
    </p>
    <p>Login in. To see it in action.</p>
    <?= $this->Form->create(null, ['class' => 'm-t', 'id' => 'loginForm']); ?>
        <div class="form-group">
            <?= $this->Form->Input('username', ['class' => 'form-control', 'label' => false, 'placeholder' => 'Username', 'required'=>'required', 'id' => 'username']); ?>
        </div>
        <div class="form-group">
             <?= $this->Form->Input('password', ['type' => 'password', 'class' => 'form-control', 'label' => false, 'placeholder' => 'Password', 'required'=>'required']) ?>
        </div>
        <?= $this->Form->submit(__('Login'), ['class' => ['btn', 'btn-primary', 'block', 'full-width', 'm-b']]) ?>

        <button type="button" class="btn btn-default btn-block" data-toggle="modal" data-target="#forgotPassword">Forgot Password?</button>
    <?= $this->Form->end() ?>
</div>


<div class="modal fade" id="forgotPassword" tabindex="-1" role="dialog" data-backdrop = 'static' aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="color-line"></div>
            <?= $this->Form->create(null, ['class' => 'form-horizontal','data-toggle'=>"validator"]) ?>
            <div class="modal-header text-center">
                <h4 class="modal-title">Forgot Password</h4>
            </div>
            <div class="modal-body">
                <div class="alert" id="rsp_msg" style=''></div>
                <div class="form-group">
                <?= $this->Form->label('forgotUsername', __('Please enter your username'), ['class' => ['col-sm-4', 'control-label']]); ?>
                <div class="col-sm-8">
                  <?= $this->Form->input("forgotUsername", array(
                      "label" => false,
                      'required' => true,
                      'id'=>'forgotUsername',
                      "type"=>"text",
                      "class" => "form-control",'data-minlength'=>8,
                      'placeholder'=>"Enter Username"));
                  ?>
                </div>
              </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <?= $this->Form->button(__('Submit'), ['class' => ['btn', 'btn-primary'], 'type' => 'button','id'=>"forgotUserPassword"]) ?>
            </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>