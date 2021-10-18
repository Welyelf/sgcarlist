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
                        <h4 class="page-title">Sellers</h4>
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
                                    <th>Fullname</th>
                                    <th>Contact Number</th>
                                    <th>Email Address</th>
                                    <th>View Area</th>
                                    <th>Plate Number</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                                </thead>

                                <tbody>
                                <?php if(!empty($sellers)): ?>
                                    <?php foreach ($sellers as $seller): ?>
                                        <tr>
                                            <td><img class="img-circle" src="<?=base_url()?>assets/images/profile.png" alt="" width="50"></td>
                                            <td><?= $seller->fullname ?></td>
                                            <td><?= $seller->contact_no ?></td>
                                            <td><?= $seller->email_address ?></td>
                                            <td><?= $seller->view_area ?></td>
                                            <td><?= $seller->username ?></td>
                                            <td><?= $seller->status ?></td>
                                            <td>
                                                <a href="<?=base_url('')?>admin/sellers/view/<?=$seller->id?>">
                                                <button type="button" class="btn btn-default waves-effect waves-light">View</button>
                                                </a>
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