<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('layout_dealer/head'); ?>
    <!-- DataTables -->
    <link href="<?=base_url()?>assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <style>
        .contact-card .contact-action {
            display: block !important;
        }
    </style>
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
                        <a href="<?=base_url('dealer/staff/add') ?>">
                            <button type="button" class="btn btn-primary waves-effect waves-light pull-right"><i class="fa fa-plus-circle"></i> Add New Staff</button>
                        </a>
                        <h4 class="page-title">Staffs</h4>
                        <p class="text-muted page-title-alt"></p>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12" style="margin-bottom: 20px;"></div>

                    <?php foreach ($staffs as $staff): ?>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card-box">
                            <div class="contact-card">
                                <a class="pull-left" href="#">
                                    <img class="img-circle" src="<?=base_url()?>assets/images/profile.png" alt="">
                                </a>
                                <div class="member-info">
                                    <h4 class="m-t-0 m-b-5 header-title"><b><?= $staff->fullname; ?></b></h4>
                                    <p class="text-muted"><?= $staff->user_type == 3 ? 'Admin' : 'Staff'; ?></p>
                                    <p class="text-dark"><i class="md md-contacts m-r-10"></i><small><?= $staff->contact_no; ?></small></p>
                                    <div class="contact-action">
                                        <a href="#" class="btn btn-white btn-sm"><i class="md md-mode-edit"></i></a>
                                        <button id="<?= $staff->id; ?>" class="btn btn-danger btn-sm delete_staff"><i class="md md-close"></i></button>
                                    </div>
                                </div>
                                <ul class="social-links list-inline m-0">
                                    <li>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="WhatsApp"><i class="fa fa-whatsapp"></i></a>
                                    </li>
                                    <li>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Email"><i class="fa fa-envelope-o"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>


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
        $(".delete_staff").click(function(){
            var ID=this.id;
            Swal.fire({
                title: 'DELETE this staff?',
                text: "You will no longer retrieve this data.",
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
                        data: {id : ID,t : 'stf'}, // serializes the form's elements.
                        success: function(data)
                        {
                            if(data.success){
                                document.getElementById('overlay').style.display = "none";
                                carlist_alert('Awesome!',data.message,'success','dealer/staff');
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

        $('#datatable').dataTable({
            'order' : []
        });
    } );
</script>
</body>
</html>