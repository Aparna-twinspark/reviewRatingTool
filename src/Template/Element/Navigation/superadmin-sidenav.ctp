<li class="">

	<a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Users</span></span></a>
    <ul class="nav nav-second-level">
        <li><?= $this->Html->link(__('View All'), ['plugin' => 'Integrateideas/User', "controller" => "Users","action" => "index"]) ?></li>
        <li><?= $this->Html->link(__('Add New User'), ['plugin' => 'Integrateideas/User', "controller" => "Users","action" => "add"]) ?></li>
    </ul>
</li>
<li class="">
	<a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Roles</span></span></a>
    <ul class="nav nav-second-level">
        <li><?= $this->Html->link(__('View All'), ['plugin' => 'Integrateideas/User', "controller" => "Roles","action" => "index"]) ?></li>
        <li><?= $this->Html->link(__('Add New Role'), ['plugin' => 'Integrateideas/User', "controller" => "Roles","action" => "add"]) ?></li>
    </ul>
</li>
<li class="">
    <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Businesses</span></span></a>
    <ul class="nav nav-second-level">
        <li><?= $this->Html->link(__('View All'), ['plugin' => null, "controller" => "Businesses","action" => "index"]) ?></li>
        <li><?= $this->Html->link(__('Add New Role'), ['plugin' => null, "controller" => "Businesses","action" => "add"]) ?></li>
    </ul>
</li>