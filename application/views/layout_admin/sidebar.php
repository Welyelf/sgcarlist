<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>
                <li class="text-muted menu-title">Navigation</li>
                <li><a href="<?=base_url('admin/dashboard') ?>" class="waves-effect <?= $this->uri->segment(2) == 'dashboard' ? 'active' : '' ?>"><i class="ti-home"></i> <span> Dashboard </span> </a></li>
                <li><a href="<?=base_url('admin/sellers') ?>" class="waves-effect <?= $this->uri->segment(2) == 'sellers' ? 'active' : '' ?>"><i class="fa fa-users"></i> <span> Sellers </span> </a></li>
                <li><a href="<?=base_url('admin/sellers') ?>" class="waves-effect <?= $this->uri->segment(2) == 'sellers' ? 'active' : '' ?>"><i class="fa fa-money"></i> <span> Sellers Ads </span> </a></li>
                <li><a href="<?=base_url('admin/dealers') ?>" class="waves-effect <?= $this->uri->segment(2) == 'dealers' ? 'active' : '' ?>"><i class="fa fa-users"></i> <span> Dealers </span> </a></li>
                <li class="has_sub">
                    <a href="#" class="waves-effect <?= $this->uri->segment(2) == 'vehicles' ? 'active' : '' ?>"><i class="fa fa-car"></i><span class="label label-danger pull-right">1</span><span> Vehicles </span></a>
                    <ul class="list-unstyled">
                        <li><a href="<?=base_url('admin/vehicles') ?>">All</a></li>
                        <li ><a href="#">Pending</a> </li>
                        <li><a href="#">Available</a></li>
                        <li><a href="#">Blocked</a></li>
                    </ul>
                </li>
                <li><a href="<?=base_url('dealer/settings') ?>" class="waves-effect <?= $this->uri->segment(2) == 'settings' ? 'active' : '' ?>"><i class="fa fa-cogs"></i> <span> Settings </span> </a></li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- Left Sidebar End -->