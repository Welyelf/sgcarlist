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
                        <h4 class="page-title">Add Staff</h4>
                        <p class="text-muted page-title-alt"></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <form id="add_staff_form">
                            <div class="card-box">
                                <h5 class="text-muted text-uppercase m-t-0 m-b-20"><b>Staff Information</b></h5>
                                <div class="form-group m-b-20">
                                    <label>Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="fullname" id="fullname" required>
                                </div>
                                <div class="form-group m-b-20">
                                    <label>Contact Number <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" name="contact_no" id="contact_no" required>
                                </div>
                                <div class="form-group m-b-20">
                                    <label>Email Address <span class="text-muted">(optional)</span></label>
                                    <input type="text" class="form-control" name="email_address" id="email">
                                </div>
                                <div class="form-group m-b-20">
                                    <label>Username <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="username" id="username" required>
                                </div>
                                <div class="form-group m-b-20">
                                    <label>Password <span class="text-danger">*</span></label>
                                    <input type="password" class="form-control" name="password" id="password" required>
                                </div>
                                <div class="form-group m-b-20">
                                    <label>Staff Type <span class="text-danger">*</span></label>
                                    <select class="form-control" name="user_type" id="staff_type">
                                        <option value="3">Staff</option>
                                        <option value="4">Admin</option>
                                    </select>
                                </div>
                                <h5 class="text-muted text-uppercase m-t-0 m-b-20"><b>Permissions</b></h5>
                                <div class="form-group m-b-20">
                                    <label class="m-b-15">Manage Vehicles</label>
                                    <br/>
                                    <div class="radio radio-inline">
                                        <input type="radio" id="vehicles_yes" value="option1"  checked="">
                                        <label for="inlineRadio1"> Yes </label>
                                    </div>
                                    <div class="radio radio-inline">
                                        <input type="radio" id="vehicles_no" value="option2" >
                                        <label for="inlineRadio2"> No </label>
                                    </div>
                                </div>
                                <div class="form-group m-b-20">
                                    <label class="m-b-15">Manage Users </label>
                                    <br/>
                                    <div class="radio radio-inline">
                                        <input type="radio" id="manage_user_yes" value="option1"  >
                                        <label for="inlineRadio1">Yes </label>
                                    </div>
                                    <div class="radio radio-inline">
                                        <input type="radio" id="manage_user_no" value="option2" checked="">
                                        <label for="inlineRadio2">No </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <hr/>
                                        <div class="text-center p-20">
                                            <a href="<?=base_url('dealer/staff') ?>">
                                                <button type="button" class="btn w-sm btn-white waves-effect"><i class="fa fa-times"></i> Cancel</button>
                                            </a>
                                            <button type="submit" class="btn w-sm btn-default waves-effect waves-light"><i class="fa fa-paper-plane-o"></i> Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
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
    $("#add_staff_form").submit(function(e) {
        e.preventDefault(); // avoid to execute the actual submit of the form.
        var form = $(this);
        $.ajax({
            type: "POST",
            url:  "<?=base_url()?>general/onAddorEditStaff",
            data: form.serialize(), // serializes the form's elements.
            beforeSend: function() {
                $("#overlay_message").text('Saving...');
                document.getElementById('overlay').style.display = "flex";
            },
            success: function (data) {
                console.log(data);
                if(data.success){
                    carlist_alert('Nice!',data.message,'success','dealer/staff');
                }
                document.getElementById('overlay').style.display = "none";
            }
        });
    });
</script>
</body>
</html>