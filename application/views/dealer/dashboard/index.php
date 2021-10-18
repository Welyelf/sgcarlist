<!DOCTYPE html>
<html>
    <head>
        <?php $this->load->view('layout_dealer/head'); ?>
    </head>


<body class="fixed-left">

<!-- Begin page -->
<div id="wrapper">
    <?php $this->load->view('layout_dealer/topbar'); ?>
    <?php $this->load->view('layout_dealer/sidebar'); ?>


    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Dashboard</h4>
                        <p class="text-muted page-title-alt">Welcome to SGCarlist !</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="widget-bg-color-icon card-box fadeInDown animated">
                            <div class="bg-icon bg-icon-info pull-left">
                                <i class="md md-attach-money text-info"></i>
                            </div>
                            <div class="text-right">
                                <h3 class="text-dark"><b class="counter">0</b></h3>
                                <p class="text-muted">Vehicle Sold</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="widget-bg-color-icon card-box">
                            <div class="bg-icon bg-icon-pink pull-left">
                                <i class="md md-add-shopping-cart text-pink"></i>
                            </div>
                            <div class="text-right">
                                <h3 class="text-dark"><b class="counter">0</b></h3>
                                <p class="text-muted">Vehicles Available</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="widget-bg-color-icon card-box">
                            <div class="bg-icon bg-icon-purple pull-left">
                                <i class="md md-equalizer text-purple"></i>
                            </div>
                            <div class="text-right">
                                <h3 class="text-dark">0</h3>
                                <p class="text-muted">Vehicles Inserted</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="widget-bg-color-icon card-box">
                            <div class="bg-icon bg-icon-success pull-left">
                                <i class="md md-remove-red-eye text-success"></i>
                            </div>
                            <div class="text-right">
                                <h3 class="text-dark"><b class="counter">0</b></h3>
                                <p class="text-muted">Car List Visits</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

            </div> <!-- container -->

        </div> <!-- content -->

        <?php $this->load->view('layout_dealer/footer'); ?>

    </div>

</div>
<!-- END wrapper -->
<?php $this->load->view('layout_dealer/script'); ?>
</body>
</html>