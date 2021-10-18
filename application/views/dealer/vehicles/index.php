<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('layout_dealer/head'); ?>
    <!-- DataTables -->
    <link href="<?=base_url()?>assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
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
                        <a href="<?=base_url('dealer/vehicles/add') ?>">
                            <button type="button" class="btn btn-primary waves-effect waves-light pull-right"><i class="fa fa-plus-circle"></i> Add Vehicle</button>
                        </a>
                        <h4 class="page-title">Vehicles</h4>
                        <p class="text-muted page-title-alt"></p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>Car Plate Number</th>
                                    <th>Model Name</th>
                                    <th>Price</th>
                                    <th>Contact</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php if(!empty($vehicles)): ?>
                                    <?php foreach ($vehicles as $vehicle): ?>
                                        <tr>
                                            <td>
                                                <?php 
                                                    $photos = json_decode($vehicle->images);
                                                    if(!empty($photos)){
                                                        ?> 
                                                            <img id="image1-holder" src="<?=$photos[0]->url?>" class="thumb-img" alt="work-thumbnail" style="width:100px;">
                                                        <?php
                                                    }
                                                ?>
                                            </td>
                                            <td><?= $vehicle->car_plate_no ?></td>
                                            <td><?= $vehicle->car_model ?></td>
                                            <td><?= $vehicle->asking_price ?></td>
                                            <td><?= $vehicle->asking_price ?></td>
                                            <td><?= date("d M Y",strtotime($vehicle->date_created));  ?></td>
                                            <td>
                                                <?php if($vehicle->status == 0 AND $vehicle->admin_status == 2): ?>
                                                    <span class="label label-primary">Available</span>
                                                <?php endif; ?>
                                                <?php if($vehicle->admin_status == 0): ?>
                                                    <span class="label label-danger" title="Please Upload Image(s)">Need Images</span>
                                                <?php endif; ?>
                                                <?php if($vehicle->admin_status == 1): ?>
                                                    <span class="label label-warning" title="Need admin verification">Pending</span>
                                                <?php endif; ?>
                                                <?php if($vehicle->admin_status == 3): ?>
                                                    <span class="label label-danger" title="Contact Administrator">Blocked</span>
                                                <?php endif; ?>
                                                <?php if($vehicle->admin_status == 5): ?>
                                                    <span class="label label-danger" title="Contact Administrator">Denied</span>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <div class="dropdown dropdown-btn text-center">
                                                        <button class="btn btn-default" type="button" id="dropdown-edit" data-toggle="dropdown" aria-expanded="true">
                                                           Manage <i class="fa fa-caret-down fa-sm"></i>
                                                        </button>
                                                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdown-edit">
                                                            <li role="presentation">
                                                                <a role="menuitem" tabindex="-1" href="<?= base_url('vehicle/add/').$vehicle->id; ?>" class="editJobTypeBtn editItemBtn">
                                                                    <span class="fa fa-pencil"></span> Edit
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="<?= base_url('job/job_preview/').$vehicle->id; ?>" class="editItemBtn">
                                                                    <span class="fa fa-search-plus"></span> Preview
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" id="<?= $vehicle->id; ?>" class="delete_vehicle editItemBtn">
                                                                    <span class="fa fa-trash"></span> Delete
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                                </tbody>
                            </table>
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
<script src="<?=base_url()?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>assets/plugins/datatables/dataTables.bootstrap.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#datatable').dataTable({
            'order' : []
        });

        $(".delete_vehicle").click(function(){
            var ID=this.id;
            Swal.fire({
                title: 'DELETE this vehicle?',
                text: "You will no longer retrieve this vehicle information once removed.",
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
                        url: "<?= base_url() ?>general/remove",
                        data: {id : ID,t : 'vhc'}, // serializes the form's elements.
                        success: function(data) {
                            if(data.success){
                                document.getElementById('overlay').style.display = "none";
                                carlist_alert('Awesome!',data.message,'success','dealer/vehicles');
                            }else{
                                carlist_alert('Snap!',data.message,'error');
                            }
                        },
                        beforeSend: function() {
                            $("#overlay_message").text('Removing...');
                            document.getElementById('overlay').style.display = "flex";
                        },
                    });
                }
            });
        });
    } );
</script>
</body>
</html>