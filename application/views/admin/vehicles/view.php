<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('layout_admin/head'); ?>
    <link href="<?=base_url()?>assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />

    <style>
        .thumb{
            margin-top: 0 !important;
        }
        .image-container{
            height: 200px !important;
        }
        .thumb-img{
            width:  100%;
            height: 200px;
            object-fit:scale-down;
        }
    </style>
</head>

<body class="fixed-left">

<!-- Begin page -->
<div id="wrapper">
    <?php $this->load->view('layout_admin/topbar'); ?>
    <?php $this->load->view('layout_admin/sidebar'); ?>
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Vechiles Details</h4>
                        <ol class="breadcrumb">

                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card-box">
                            <div class="contact-card">
                                <a class="pull-left" href="#">
                                    <img class="img-circle" src="<?=base_url()?>assets/images/profile.png" alt="">
                                </a>
                                <div class="member-info">
                                    <h4 class="m-t-0 m-b-5 header-title"><b><?= $vehicle_data->fullname; ?></b></h4>
                                    <p class="text-muted"><?= $vehicle_data->email_address; ?></p>
                                    <p class="text-dark"><i class="md md-business m-r-10"></i><small><?= $vehicle_data->name; ?></small></p>
                                </div>
                            </div>
                            <div class="">
                                <div class="p-20">
                                    <h5 class="text-muted text-uppercase m-t-0 m-b-20"><b>Car Details</b></h5>
                                    <div class="form-group m-b-20 row">
                                        <span class="col-md-5">Car Plate No.</span>
                                        <div class="col-sm-7">
                                            <b><?= $vehicle_data->car_plate_no; ?></b>
                                        </div>
                                    </div>
                                    <div class="form-group m-b-20 row">
                                        <span class="col-md-5">Owner Id</span>
                                        <div class="col-sm-7">
                                            <b><?= $vehicle_data->owner_id; ?></b>
                                        </div>
                                    </div>
                                    <div class="form-group m-b-20 row">
                                        <span class="col-md-5">Asking Price</span>
                                        <div class="col-sm-7">
                                            <b><?= $vehicle_data->asking_price; ?></b>
                                        </div>
                                    </div>

                                    <div class="form-group m-b-20 row">
                                        <span class="col-md-5">Status</span>
                                        <div class="col-sm-7">
                                            <?php if($vehicle_data->admin_status == 0): ?>
                                                <span class="label label-danger" title="Please Upload Image(s)">Need Images</span>
                                            <?php endif; ?>
                                            <?php if($vehicle_data->admin_status == 1): ?>
                                                <span class="label label-warning" title="Need admin verification">Pending</span>
                                            <?php endif; ?>
                                            <?php if($vehicle_data->admin_status == 2): ?>
                                                <span class="label label-primary" title="Need admin verification">Available</span>
                                            <?php endif; ?>
                                            <?php if($vehicle_data->admin_status == 3): ?>
                                            <span class="label label-danger" title="Contact Administrator">Blocked</span>
                                            <?php endif; ?>
                                            <?php if($vehicle_data->admin_status == 5): ?>
                                                <span class="label label-danger" title="Contact Administrator">Denied</span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="m-t-20">
                                <?php if($vehicle_data->admin_status != 2): ?>
                                    <a href="javascript:void(0)" class="btn btn-purple waves-effect waves-light btn-sm btn_accept" id="<?= $vehicle_data->vc_id; ?>">Accept</a>
                                    <a href="javascript:void(0)" class="btn btn-success waves-effect waves-light btn-sm m-l-5 btn_deny" id="<?= $vehicle_data->vc_id; ?>">Deny</a>
                                    <a href="#" class="btn btn-pink waves-effect waves-light btn-sm m-l-5">For Verification</a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="portfolioContainer">
                                <?php $photos = json_decode($vehicle_data->images); ?>
                                <?php foreach ($photos as $photo): ?>
                                    <div class="col-sm-6 col-lg-3 col-md-4 mobiles">
                                        <div class="product-list-box thumb">
                                            <div class="detail">
                                                <div class="image-container">
                                                    <a href="<?=$photo->url?>" class="image-popup" title="Screenshot-1">
                                                        <img src="<?=$photo->url?>" class="thumb-img" alt="work-thumbnail">
                                                    </a>
                                                </div>
                                                <h4 class="m-t-0 m-b-5"><a href="" class="text-dark">file size here</a> </h4>
                                            </div>
                                            <a href="#" class="btn btn-success btn-sm"><i class="md md-mode-edit"></i></a>
                                            <a href="#" class="btn btn-danger btn-sm"><i class="md md-close"></i></a>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>


            </div> <!-- container -->

        </div> <!-- content -->

        <?php $this->load->view('layout_admin/footer'); ?>

    </div>

</div>
<!-- END wrapper -->

<script>
    var resizefunc = [];
</script>

<?php $this->load->view('layout_admin/script'); ?>
<script src="<?=base_url()?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>assets/plugins/datatables/dataTables.bootstrap.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#datatable').dataTable({
            "order" : []
        });

        $(".btn_accept").click(function(){
            var ID=this.id;
            Swal.fire({
                title: 'Accept Vehicle?',
                text: "You are about to accept vehicle ads and it will be mark as Available.",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#32243d',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes',
                cancelButtonText: 'No',
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        type: "POST",
                        url: "<?= base_url() ?>general/onUpdateStatus",
                        data: {id : ID,t : 'vhc', stat : 2}, // serializes the form's elements.
                        success: function(data) {
                            if(data.success){
                                document.getElementById('overlay').style.display = "none";
                                carlist_alert('Awesome!',data.message,'success','admin/vehicles');
                            }else{
                                carlist_alert('Snap!',data.message,'error');
                            }
                        },
                        beforeSend: function() {
                            $("#overlay_message").text('Updating...');
                            document.getElementById('overlay').style.display = "flex";
                        },
                    });
                }
            });
        });


        $(".btn_deny").click(function(){
            var ID=this.id;
            Swal.fire({
                title: 'Deny Vehicle?',
                text: "You are about to deny this vehicle ads and it will mark as Denied on dealers account.",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#32243d',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes',
                cancelButtonText: 'No',
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        type: "POST",
                        url: "<?= base_url() ?>general/onUpdateStatus",
                        data: {id : ID,t : 'vhc', stat : 5}, // serializes the form's elements.
                        success: function(data) {
                            if(data.success){
                                document.getElementById('overlay').style.display = "none";
                                carlist_alert('Awesome!',data.message,'success','admin/vehicles');
                            }else{
                                carlist_alert('Snap!',data.message,'error');
                            }
                        },
                        beforeSend: function() {
                            $("#overlay_message").text('Updating...');
                            document.getElementById('overlay').style.display = "flex";
                        },
                    });
                }
            });
        });
    });
</script>

</body>
</html>