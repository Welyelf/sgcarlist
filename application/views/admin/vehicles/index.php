<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('layout_admin/head'); ?>
    <link href="<?=base_url()?>assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
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
                        <h4 class="page-title">Vechiles</h4>
                        <ol class="breadcrumb">

                        </ol>
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
                                                <?php if($vehicle->status == 0 AND $vehicle->admin_status !== 3): ?>

                                                <?php endif; ?>
                                                <?php if($vehicle->admin_status == 0): ?>
                                                    <span class="label label-danger" title="Please Upload Image(s)">Need Images</span>
                                                <?php endif; ?>
                                                <?php if($vehicle->admin_status == 1): ?>
                                                    <span class="label label-warning" title="Need admin verification">Pending</span>
                                                <?php endif; ?>
                                                <?php if($vehicle->admin_status == 2): ?>
                                                    <span class="label label-primary" title="Need admin verification">Available</span>
                                                <?php endif; ?>
                                                <?php if($vehicle->admin_status == 3): ?>
                                                    <span class="label label-danger" title="Contact Administrator">Blocked</span>
                                                <?php endif; ?>
                                                <?php if($vehicle->admin_status == 5): ?>
                                                    <span class="label label-danger" title="Contact Administrator">Denied</span>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <a href="<?=base_url('admin/vehicles/view/'.$vehicle->id) ?>"><button type="button" class="btn btn-inverse waves-effect waves-light"><i class="fa fa-search-plus"></i> View</button></a>
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
    });
</script>

</body>
</html>