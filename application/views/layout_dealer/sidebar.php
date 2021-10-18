<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>
                <li class="text-muted menu-title">Navigation</li>
                <li><a href="<?=base_url('dashboard-dealer') ?>" class="waves-effect <?= $this->uri->segment(1) == 'dashboard-dealer' ? 'active' : '' ?>"><i class="ti-home"></i> <span> Dashboard </span> </a></li>
                <li><a href="<?=base_url('dealer/vehicles') ?>" class="waves-effect <?= $this->uri->segment(2) == 'vehicles' ? 'active' : '' ?>"><i class="fa fa-car"></i> <span> Vehicles </span> </a></li>
                <li><a href="<?=base_url('dealer/company') ?>" class="waves-effect <?= $this->uri->segment(2) == 'company' ? 'active' : '' ?>"><i class="fa fa-info-circle"></i> <span> Company Info </span> </a></li>
                <li><a href="<?=base_url('dealer/staff') ?>" class="waves-effect <?= $this->uri->segment(2) == 'staff' ? 'active' : '' ?>"><i class="fa fa-user"></i> <span> Staff </span> </a></li>
                <li><a href="<?=base_url('dealer/settings') ?>" class="waves-effect <?= $this->uri->segment(2) == 'settings' ? 'active' : '' ?>"><i class="fa fa-cogs"></i> <span> Settings </span> </a></li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- Left Sidebar End -->