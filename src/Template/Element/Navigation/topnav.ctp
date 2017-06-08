<nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars" id="sideNav"></i> </a>
            <!--<form role="search" class="navbar-form-custom" action="search_results.html">
                <div class="form-group">
                    <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                </div>
            </form> -->
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                 <?= $this->Html->link(__('Logout'), ['controller' => 'Users', 'action' => 'logout'], ['class' => ['fa', 'fa-sign-out']]) ?>
                </li>
            </ul>

</nav>