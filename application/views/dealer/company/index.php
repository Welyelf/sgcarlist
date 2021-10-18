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
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Company Info</h4>
                        <p class="text-muted page-title-alt"></p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12" style="margin-bottom: 20px;"></div>
                    <div class="col-md-12">
                    <form id="company_form">
                        <h5 class="text-muted text-uppercase m-t-0 m-b-20"><b>General Information</b></h5>
                        <div class="form-group m-b-20 row">
                            <label class="col-md-2">Dealer Code <span class="text-danger">*</span></label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="dealer_code" value="<?=$dealer_code?>" required readonly>
                            </div>
                        </div>
                        <div class="form-group m-b-20 row">
                            <label class="col-md-2">Company Name <span class="text-danger">*</span></label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="name" required value="<?= !empty($company_info) ? $company_info->name : ''; ?>">
                            </div>
                        </div>
                        <div class="form-group m-b-20 row">
                            <label class="col-md-2">Address <span class="text-danger">*</span></label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="address" required value="<?= !empty($company_info) ? $company_info->address : ''; ?>">
                            </div>
                        </div>
                        <div class="form-group m-b-20 row">
                            <label class="col-md-2">Office Number </label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="office_number" value="<?= !empty($company_info) ? $company_info->office_number : ''; ?>">
                            </div>
                        </div>
                        <div class="form-group m-b-20 row">
                            <label class="col-md-2">Fax Number </label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="fax_number" value="<?= !empty($company_info) ? $company_info->fax_number : ''; ?>">
                            </div>
                        </div>
                        <div class="form-group m-b-20 row">
                            <label class="col-md-2">Website </label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="website" value="<?= !empty($company_info) ? $company_info->website : ''; ?>">
                            </div>
                        </div>
                        <div class="form-group m-b-20 row">
                            <label class="col-md-2">Pre-set Owner ID </label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="preset_owner_id" value="<?= !empty($company_info) ? $company_info->preset_owner_id : ''; ?>">
                            </div>
                        </div>
                        <div class="form-group m-b-20 row">
                            <label class="col-md-2">Online Enquiry Form </label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="oef">
                            </div>
                        </div>
                        <h5 class="text-muted text-uppercase m-t-0 m-b-20"><b>Email Address for enquiries</b></h5>
                        <div class="form-group m-b-20 row">
                            <label class="col-md-2">Superadmin <span class="text-danger">*</span></label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="superadmin" required value="<?= !empty($company_info) ? $company_info->superadmin : ''; ?>">
                            </div>
                        </div>
                        <div class="form-group m-b-20 row">
                            <label class="col-md-2">Main contact person <span class="text-danger">*</span></label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="main_contact" required value="<?= !empty($company_info) ? $company_info->main_contact : ''; ?>">
                            </div>
                        </div>
                        <input type="hidden" name="action" value="<?= !empty($company_info) ? $company_info->id : '0'; ?>">
                        <div class="row">
                            <div class="col-sm-12">
                                <hr />
                                <div class="text-center p-20">
                                    <button type="submit" class="btn w-sm btn-primary waves-effect waves-light"><i class="fa fa-paper-plane-o"></i> Save</button>
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
<script type="text/javascript">
    $(document).ready(function() {
        $("#company_form").submit(function(e) {
            e.preventDefault(); // avoid to execute the actual submit of the form.
            var form = $(this);
            $.ajax({
                type: "POST",
                url:  "<?=base_url()?>general/onAddorEditCompany",
                data: form.serialize(), // serializes the form's elements.
                beforeSend: function() {
                    $("#overlay_message").text('Saving company info...');
                    document.getElementById('overlay').style.display = "flex";
                },
                success: function (data) {
                    console.log(data);
                    if(data.success){
                        carlist_alert('Nice!',data.message,'success');
                        $("#nav_home").removeClass("active");
                        $("#nav_image").addClass("active");

                        $("#home").removeClass("active");
                        $("#users").addClass("active");
                    }
                    document.getElementById('overlay').style.display = "none";
                }
            });
        });
    } );
</script>
</body>
</html>