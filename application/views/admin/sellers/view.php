<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="<?=base_url()?>assets/images/icon.png">

    <title>SgCarlist Admin</title>

    <!-- DataTables -->
    <link href="<?=base_url()?>assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />


    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>assets/css/core.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>assets/css/components.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>assets/css/pages.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>assets/css/responsive.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script src="<?=base_url()?>assets/js/modernizr.min.js"></script>

</head>

<body class="fixed-left">

<!-- Begin page -->
<div id="wrapper">

    <!-- Top Bar Start -->
    <div class="topbar">

        <!-- LOGO -->
        <div class="topbar-left">
            <div class="text-center">
                <a href="#" class="logo">Admin</a>
            </div>
        </div>

        <!-- Button mobile view to collapse sidebar menu -->
        <div class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="">
                    <div class="pull-left">
                        <button class="button-menu-mobile open-left">
                            <i class="ion-navicon"></i>
                        </button>
                        <span class="clearfix"></span>
                    </div>
                    <ul class="nav navbar-nav navbar-right pull-right">
                        <li class="dropdown">
                            <a href="" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><img src="<?=base_url()?>assets/images/icon.png" alt="user-img" class="img-circle"> </a>
                            <ul class="dropdown-menu">
                                <li><a href="javascript:void(0)"><i class="ti-user m-r-5"></i> Profile</a></li>
                                <li><a href="javascript:void(0)"><i class="ti-settings m-r-5"></i> Settings</a></li>
                                <li><a href="javascript:void(0)"><i class="ti-power-off m-r-5"></i> Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </div>
    </div>
    <!-- Top Bar End -->


    <!-- ========== Left Sidebar Start ========== -->

    <div class="left side-menu">
        <div class="sidebar-inner slimscrollleft">
            <!--- Divider -->
            <div id="sidebar-menu">
                <ul>
                    <li class="text-muted menu-title">Navigation</li>
                    <li ><a href="#" class="waves-effect"><i class="ti-home"></i> <span> Dashboard </span> </a></li>
                    <li ><a href="#" class="waves-effect active"><i class="fa fa-user"></i> <span> Sellers </span> </a></li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- Left Sidebar End -->

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
                        <h4 class="page-title">Sellers</h4>
                        <ol class="breadcrumb">
                            <li>
                                <a href="<?=base_url('admin/sellers')?>">List</a>
                            </li>
                            <li class="active">
                                Details
                            </li>

                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box m-t-20">
                                    <h4 class="m-t-0 header-title"><b>Personal Information</b></h4>
                                    <div class="p-20">
                                        <div class="about-info-p">
                                            <strong>Full Name</strong>
                                            <br>
                                            <p class="text-muted"><?= $seller_data->fullname; ?></p>
                                        </div>
                                        <div class="about-info-p">
                                            <strong>Mobile</strong>
                                            <br>
                                            <p class="text-muted"><?= $seller_data->contact_no; ?></p>
                                        </div>
                                        <div class="about-info-p">
                                            <strong>Email</strong>
                                            <br>
                                            <p class="text-muted"><?= $seller_data->email_address; ?></p>
                                        </div>
                                        <div class="about-info-p m-b-0">
                                            <strong>Location</strong>
                                            <br>
                                            <p class="text-muted"><?= $seller_data->view_area; ?></p>
                                        </div>
                                    </div>
                                </div>
                        <div class="card-box m-t-20">
                            <h4 class="m-t-0 header-title"><b>Car Information</b></h4>
                            <div class="p-20">
                                <div class="about-info-p">
                                    <strong>Plate Number</strong>
                                    <br>
                                    <p class="text-muted"><?= $seller_data->car_plate_no; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="m-t-20">
                            <?php
                                $photos = json_decode($seller_data->images);
                            ?>
                            <?php foreach ($photos as $photo): ?>
                            <div class="col-sm-6 col-lg-3 col-md-4 mobiles">
                                <div class="product-list-box thumb">
                                    <a href="#" class="image-popup" title="Screenshot-1">
                                        <img src="<?=$photo->url?>" class="thumb-img" alt="work-thumbnail">
                                    </a>

                                    <div class="product-action">
                                        <a href="#" class="btn btn-success btn-sm"><i class="md md-mode-edit"></i></a>
                                        <a href="#" class="btn btn-danger btn-sm"><i class="md md-close"></i></a>
                                    </div>

                                    <div class="detail">
                                        <h4 class="m-t-0 m-b-5 text-center"><a href="" class="text-dark">Image</a> </h4>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div> <!-- container -->

        </div> <!-- content -->

        <footer class="footer">
            2021 © SgCarlist Admin.
        </footer>

    </div>

</div>
<!-- END wrapper -->

<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="<?=base_url()?>assets/js/jquery.min.js"></script>
<script src="<?=base_url()?>assets/js/bootstrap.min2.js"></script>
<script src="<?=base_url()?>assets/js/detect.js"></script>
<script src="<?=base_url()?>assets/js/fastclick.js"></script>
<script src="<?=base_url()?>assets/js/jquery.slimscroll.js"></script>
<script src="<?=base_url()?>assets/js/jquery.blockUI.js"></script>
<script src="<?=base_url()?>assets/js/waves.js"></script>
<script src="<?=base_url()?>assets/js/wow.min.js"></script>
<script src="<?=base_url()?>assets/js/jquery.nicescroll.js"></script>
<script src="<?=base_url()?>assets/js/jquery.scrollTo.min.js"></script>
<script src="<?=base_url()?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>assets/plugins/datatables/dataTables.bootstrap.js"></script>

<script src="<?=base_url()?>assets/js/jquery.core.js"></script>
<script src="<?=base_url()?>assets/js/jquery.app.js"></script>




<script type="text/javascript">
    $(document).ready(function() {
        $('#datatable').dataTable(
            {

            });
    } );
</script>

</body>
</html>