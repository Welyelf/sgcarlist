<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('layout_dealer/head'); ?>
    <!-- DataTables -->
    <link href="<?=base_url()?>assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <style>
        .thumb {
            background-color: #ebeff2 !important;
        }
        .adjust2{
            width: 100%;
            margin-bottom: 0;
            height: 300px;
        }
        .thumbnail {
            display: block;
            padding: 4px;
            margin-bottom: 20px;
            line-height: 1.42857143;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 4px;
            -webkit-transition: border .2s ease-in-out;
            -o-transition: border .2s ease-in-out;
            transition: border .2s ease-in-out;
            margin-right: 2px;
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
                        <h4 class="page-title">Add Vehicle</h4>
                        <p class="text-muted page-title-alt">Fill up this form to create new vehicle.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="search-result-box m-t-40">
                            <ul class="nav nav-tabs">
                                <li class="active" id="nav_home">
                                    <a href="#home" data-toggle="tab" aria-expanded="true">
                                        <span class="visible-xs"><i class="fa fa-home"></i></span>
                                        <span class="hidden-xs"><b>Car Information</b></span>
                                    </a>
                                </li>
                                <li class="" id="nav_image">
                                    <a href="#users" data-toggle="tab" aria-expanded="false">
                                        <span class="visible-xs"><i class="fa fa-user"></i></span>
                                        <span class="hidden-xs"><b>Images</b></span>
                                    </a>
                                </li>
                                <li class="" id="nav_payment">
                                    <a href="#payment-tab" data-toggle="tab" aria-expanded="false">
                                        <span class="visible-xs"><i class="fa fa-user"></i></span>
                                        <span class="hidden-xs"><b>Payment</b></span>
                                    </a>
                                </li>
                                <li class="" id="nav_other">
                                    <a href="#other-tab" data-toggle="tab" aria-expanded="false">
                                        <span class="visible-xs"><i class="fa fa-user"></i></span>
                                        <span class="hidden-xs"><b>Other Information</b></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="home">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <form id="vechicle_form">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="card-box">
                                                            <h5 class="text-muted text-uppercase m-t-0 m-b-20"><b>General</b></h5>

                                                            <div class="form-group m-b-20 row">
                                                                <label class="col-md-5">Car Plate No. <span class="text-danger">*</span></label>
                                                                <div class="col-sm-7">
                                                                    <input type="text" class="form-control" name="car_plate_no" required style="text-transform:uppercase">
                                                                </div>

                                                            </div>
                                                            <div class="form-group m-b-20 row">
                                                                <label class="col-md-5">Owner Type ID <span class="text-danger">*</span></label>
                                                                <div class="col-sm-7">
                                                                    <select class="form-control" name="owner_id_type" required>
                                                                        <option value="">Please Select</option>
                                                                        <option value="1">Business (e.g. 51234567M)</option>
                                                                        <option value="2">Club/Association/Organisation (e.g. T08PQ1234A)</option>
                                                                        <option value="3">Company (e.g. 198912345K)</option>
                                                                        <option value="4">Foreign Company (e.g. T08FC1234A)</option>
                                                                        <option value="5">Foreign Identification Number (e.g. F/G1234567N)</option>
                                                                        <option value="6">Government (e.g. T08GA1234A)</option>
                                                                        <option value="7">Limited Liability Partnership (e.g. T08LL1234A)</option>
                                                                        <option value="8">Limited Partnership (e.g. T08LP1234A)</option>
                                                                        <option value="9">Professional (e.g. T08PQ1234A)</option>
                                                                        <option value="10" selected="selected">Singapore NRIC (e.g. S1234567D)</option>
                                                                        <option value="11">Statutory Board (e.g. T08GB1234A)</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group m-b-20 row">
                                                                <label class="col-md-5">Owner ID <span class="text-danger">*</span></label>
                                                                <div class="col-sm-7">
                                                                    <input type="text" class="form-control" name="owner_id" required>
                                                                </div>
                                                            </div>

                                                            <div class="form-check">
                                                                <input class="form-check-input details_to_use" type="radio" name="details_use" id="details1" value="1" checked>
                                                                Use my carplate number and owner ID to fill my car details automatically

                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input details_to_use" type="radio" name="details_use" id="details2" value="2">
                                                                I wish to manually input all my car details
                                                            </div>
                                                            <br>
                                                            <div id="manual_car_details" style="display: none;">

                                                                <div class="form-group row">
                                                                    <label class="col-md-5">Registration Date</label>
                                                                    <div class="col-sm-2">
                                                                        <label>Day</label>
                                                                        <select class="form-control" name="reg_day" id="reg_day">
                                                                            <option value=""></option>
                                                                            <?php for($x=1;$x<=31;$x++): ?>
                                                                                <option value="<?=$x;?>"><?=$x;?></option>
                                                                            <?php endfor; ?>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-sm-2">
                                                                        <label for="contact_number" class="col-form-label">Month</label>
                                                                        <select class="form-control" name="reg_month">
                                                                            <option value=""></option>
                                                                            <?php for($x=1;$x<=12;$x++): ?>
                                                                                <option value="<?=$x;?>"><?=$x;?></option>
                                                                            <?php endfor; ?>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-sm-3">
                                                                        <label for="contact_number" class="col-form-label">Year</label>
                                                                        <select class="form-control" name="reg_year">
                                                                            <option value=""></option>
                                                                            <?php for($x=date("Y");$x>=1927;$x--): ?>
                                                                                <option value="<?=$x;?>"><?=$x;?></option>
                                                                            <?php endfor; ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group m-b-20 row">
                                                                    <label for="omv" class="col-sm-5">OMV</label>
                                                                    <div class="col-sm-7">
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon" id="basic-addon1">$</span>
                                                                            <input type="number" step="any" min="0" class="form-control " name="omv" id="omv"  aria-describedby="basic-addon1">
                                                                        </div>
                                                                        <i>Leave blank if unavailable</i>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group m-b-20 row">
                                                                    <label for="arf" class="col-sm-5">ARF</label>
                                                                    <div class="col-sm-7">
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon" id="basic-addon1">$</span>
                                                                            <input type="number" step="any" min="0" class="form-control" name="arf" id="arf"  aria-describedby="basic-addon1">
                                                                        </div>
                                                                        <i>Leave blank if unavailable</i>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group m-b-20 row">
                                                                    <label for="coe" class="col-sm-5 col-form-label">COE</label>
                                                                    <div class="col-sm-7">
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon" id="basic-addon1">$</span>
                                                                            <input type="number" step="any" min="0" class="form-control" name="coe" id="coe" aria-describedby="basic-addon1">
                                                                        </div>
                                                                        <i>Leave blank if unavailable</i>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group m-b-20 row">
                                                                    <label for="coe_day" class="col-sm-5 col-form-label">COE Expiry Date</label>
                                                                    <div class="col-sm-2">
                                                                        <label for="contact_number" class="col-form-label">Day</label>
                                                                        <select class="form-control" name="coe_exp_day" id="coe_exp_day">
                                                                            <option value=""></option>
                                                                            <?php for($x=1;$x<=31;$x++): ?>
                                                                                <option value="<?=$x;?>"><?=$x;?></option>
                                                                            <?php endfor; ?>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-sm-2">
                                                                        <label for="coe_month" class="col-form-label">Month</label>
                                                                        <select class="form-control" name="coe_exp_month" id="coe_exp_month">
                                                                            <option value=""></option>
                                                                            <?php for($x=1;$x<=12;$x++): ?>
                                                                                <option value="<?=$x;?>"><?=$x;?></option>
                                                                            <?php endfor; ?>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-sm-3">
                                                                        <label for="coe_year" class="col-form-label">Year </label>
                                                                        <select class="form-control" name="coe_exp_year" id="coe_exp_year">
                                                                            <option value=""></option>
                                                                            <?php for($x=date("Y");$x>=1927;$x--): ?>
                                                                                <option value="<?=$x;?>"><?=$x;?></option>
                                                                            <?php endfor; ?>
                                                                        </select>
                                                                        <i>(for car with re-newed COE)</i>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group m-b-20 row">
                                                                    <label for="no_of_owner" class="col-sm-5 col-form-label">No. of Owners <span class="required">*</span></label>
                                                                    <div class="col-sm-7">
                                                                        <select class="form-control" name="no_of_owner" id="no_of_owner">
                                                                            <option value="">Select</option>
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option value="4">4</option>
                                                                            <option value="5">5</option>
                                                                            <option value="6">6</option>
                                                                            <option value="10">More than 6</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group m-b-20 row">
                                                                    <label for="vehicle_type" class="col-sm-5 col-form-label">Type of Vehicle <span class="required">*</span></label>
                                                                    <div class="col-sm-7">
                                                                        <select name="vehicle_type" id="vehicle_type" class="form-control">
                                                                            <option value="">Select</option>
                                                                            <option value="Sedan">Mid-Sized Sedan</option>
                                                                            <option value="Luxury">Luxury Sedan</option>
                                                                            <option value="Hatchback">Hatchback</option>
                                                                            <option value="SUV">SUV</option>
                                                                            <option value="MPV">MPV</option>
                                                                            <option value="Sports">Sports</option>
                                                                            <option value="Stationwagon">Stationwagon</option>
                                                                            <option value="Others">Others</option>
                                                                            <option value="Van">Van</option>
                                                                            <option value="Truck">Truck</option>
                                                                            <option value="Bus">Bus</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group m-b-20 row">
                                                                <label class="col-md-5">Car Model <span class="text-danger">*</span></label>
                                                                <div class="col-sm-7">
                                                                    <input type="text" class="form-control" name="car_model" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="asking_price" class="col-sm-5 col-form-label">Asking Price</label>
                                                                <div class="col-sm-7">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon" id="basic-addon1">$</span>
                                                                        <input type="number" step="any" min="0" class="form-control" name="asking_price" id="asking_price"  aria-describedby="basic-addon1">
                                                                    </div>
                                                                    <small>Leave blank if you prefer buyers to quote you their price</small>
                                                                </div>
                                                            </div>
                                                            <div class="form-group m-b-20 row">
                                                                <label class="col-md-5">Depreciation <span class="text-danger">*</span></label>
                                                                <div class="col-sm-7">
                                                                    <select name="depreciation" class="form-control">
                                                                        <option value="">Select</option>
                                                                        <option value="0-10">Below $10k /yr</option>
                                                                        <option value="10-11">$10k to $11k /yr</option>
                                                                        <option value="11-12">$11k to $12k /yr</option>
                                                                        <option value="12-14">$12k to $14k /yr</option>
                                                                        <option value="14-16">$14k to $16k /yr</option>
                                                                        <option value="16-18">$16k to $18k /yr</option>
                                                                        <option value="18-20">$18k to $20k /yr</option>
                                                                        <option value="20-25">$20k to $25k /yr</option>
                                                                        <option value="25-30">$25k to $30k /yr</option>
                                                                        <option value="30-40">$30k to $40k /yr</option>
                                                                        <option value="40-50">$40k to $50k /yr</option>
                                                                        <option value="50-60">$50k to $60k /yr</option>
                                                                        <option value="60-500">Above $60k /yr</option>
                                                                        <option value="any">Any</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="form-group m-b-20 row">
                                                                <label class="col-md-5">Block carplate from photos? </label>
                                                                <div class="col-sm-7">
                                                                    <div class="radio radio-inline">
                                                                        <input type="radio" id="inlineRadio2" value="1" name="is_block_carplate">
                                                                        <label for="inlineRadio2"> Yes </label>
                                                                    </div>
                                                                    <div class="radio radio-inline">
                                                                        <input type="radio" id="inlineRadio1" value="0" name="is_block_carplate" checked="">
                                                                        <label for="inlineRadio1"> No </label>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="form-group m-b-20 row">
                                                                <label class="col-md-5">Availability </label>
                                                                <div class="col-sm-7">
                                                                    <div class="radio radio-inline">
                                                                        <input type="radio" id="inlineRadio1" value="0" name="status" checked="" >
                                                                        <label for="inlineRadio1"> Available </label>
                                                                    </div>
                                                                    <div class="radio radio-inline">
                                                                        <input type="radio" id="inlineRadio2" value="1" name="status">
                                                                        <label for="inlineRadio2"> Sold </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group m-b-20 row">
                                                                <label class="col-md-5">Current Rebate </label>
                                                                <div class="col-sm-7">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon" id="basic-addon1">$</span>
                                                                        <input type="number" step="any" min="0" class="form-control" name="current_rebate" id="current_rebate"  aria-describedby="basic-addon1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group m-b-20 row">
                                                                <label class="col-md-5">Transfer Fee </label>
                                                                <div class="col-sm-7">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon" id="basic-addon1">$</span>
                                                                        <input type="number" step="any" min="0" class="form-control" name="transfer_fee" id="transfer_fee"  aria-describedby="basic-addon1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="card-box">
                                                            <div class="form-group m-b-20 row">
                                                                <label class="col-md-5">Engine Capacity <span class="text-danger">*</span></label>
                                                                <div class="col-sm-7">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon" id="basic-addon1">cc</span>
                                                                        <input type="number" step="any" min="0" class="form-control" name="engine_cap" id="engine_cap"  aria-describedby="basic-addon1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group m-b-20 row">
                                                                <label class="col-md-5">Gear <span class="text-danger">*</span></label>
                                                                <div class="col-sm-7">
                                                                    <select class="form-control" name="transmission" id="transmission">
                                                                        <option value="Auto">Auto</option>
                                                                        <option value="Manual">Manual</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group m-b-20 row">
                                                                <label class="col-md-5">Fuel Type <span class="text-danger">*</span></label>
                                                                <div class="col-sm-7">
                                                                    <select class="form-control" name="fuel_type" id="fuel_type">
                                                                        <option value="Petrol">Petrol</option>
                                                                        <option value="Diesel">Diesel</option>
                                                                        <option value="Petrol-Electric">Petrol-Electric</option>
                                                                        <option value="Diesel-Electric">Diesel-Electric</option>
                                                                        <option value="Electric">Electric</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group m-b-20 row">
                                                                <label class="col-md-5">Mileage </label>
                                                                <div class="col-sm-7">
                                                                   <div class="input-group">
                                                                        <span class="input-group-addon" id="basic-addon1">km</span>
                                                                        <input type="number" step="any" min="0" class="form-control" name="mileage" id="mileage"  aria-describedby="basic-addon1">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group m-b-20 row">
                                                                <label class="col-md-5">Vehicle Features</label>
                                                                <div class="col-sm-7">
                                                                    <textarea class="form-control" rows="5" placeholder="Please enter description" name="features"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="form-group m-b-20 row">
                                                                <label class="col-md-5">Accessories </label>
                                                                <div class="col-sm-7">
                                                                    <textarea class="form-control" rows="5" placeholder="Please enter description" name="accessories"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="form-group m-b-20 row">
                                                                <label class="col-md-5">Description </label>
                                                                <div class="col-sm-7">
                                                                    <textarea class="form-control" rows="5" placeholder="Please enter description" name="description"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <hr />
                                                        <div class="text-center p-20">
                                                            <button type="button" class="btn w-sm btn-white waves-effect"><i class="fa fa-times"></i> Cancel</button>
                                                            <button type="submit" class="btn w-sm btn-primary waves-effect waves-light"><i class="fa fa-paper-plane-o"></i> Save</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <!-- end All results tab -->
                                <!-- Users tab -->
                                <div class="tab-pane" id="users">
                                    <div class="row port">
                                        <i>
                                            Photos are optional. Leave blank if unavailable. Only actual photos of the vehicle for sale will be accepted.
                                            If your images do not fit the below upload requirements, please email them to admin@sgcarmart.com
                                            with your carplate number as the title after you have made payment.
                                        </i>
                                        <p>
                                            <strong>Upload requirements: 	Image file size should not exceed 5MB and it's dimension should not exceed (4800 x 3600)pixels.</strong>
                                        </p>
                                        <div class="portfolioContainer">
                                            <div class="col-md-2 thumbnail">
                                                <div class="gal-detail thumb">
                                                    <img id="image1-holder" src="<?=base_url()?>assets/images/icon.png" class="thumb-img text-center" alt="work-thumbnail">
                                                </div>
                                                <input type="file" class="form-control" id="image1" name="image1" >
                                                <input type="button" data-imageid="image1" class="btn btn-primary image1-uploader" value="Upload" />
                                            </div>

                                            <div class="col-md-2 thumbnail">
                                                <div class="gal-detail thumb">
                                                    <img id="image2-holder" src="<?=base_url()?>assets/images/icon.png" class="thumb-img text-center" alt="work-thumbnail">
                                                </div>
                                                <input type="file" class="form-control" id="image2" name="image2" >
                                                <input type="button" data-imageid="image2" class="btn btn-primary image1-uploader" value="Upload" />
                                            </div>
                                            <div class="col-md-2 thumbnail">
                                                <div class="gal-detail thumb">
                                                    <a href="<?=base_url()?>assets/images/icon.png" class="image-popup" title="Screenshot-1">
                                                        <img id="image3-holder" src="<?=base_url()?>assets/images/icon.png" class="thumb-img text-center" alt="work-thumbnail">
                                                    </a>
                                                </div>
                                                <input type="file" class="form-control" id="image3" name="image3" >
                                                <input type="button" data-imageid="image3" class="btn btn-primary image1-uploader" value="Upload" />
                                            </div>
                                            <div class="col-md-2 thumbnail">
                                                <div class="gal-detail thumb">
                                                    <a href="<?=base_url()?>assets/images/icon.png" class="image-popup" title="Screenshot-1">
                                                        <img id="image4-holder" src="<?=base_url()?>assets/images/icon.png" class="thumb-img text-center" alt="work-thumbnail">
                                                    </a>
                                                </div>
                                                <input type="file" class="form-control" id="image4" name="image4" >
                                                <input type="button" data-imageid="image4" class="btn btn-primary image1-uploader" value="Upload" />
                                            </div>
                                            <div class="col-md-2 thumbnail">
                                                <div class="gal-detail thumb">
                                                    <a href="<?=base_url()?>assets/images/icon.png" class="image-popup" title="Screenshot-1">
                                                        <img id="image5-holder" src="<?=base_url()?>assets/images/icon.png" class="thumb-img text-center" alt="work-thumbnail">
                                                    </a>
                                                </div>
                                                <input type="file" class="form-control" id="image5" name="image5" >
                                                <input type="button" data-imageid="image5" class="btn btn-primary image1-uploader" value="Upload" />
                                            </div>
                                            <div class="col-md-2 thumbnail">
                                                <div class="gal-detail thumb">
                                                    <a href="<?=base_url()?>assets/images/icon.png" class="image-popup" title="Screenshot-1">
                                                        <img id="image6-holder" src="<?=base_url()?>assets/images/icon.png" class="thumb-img text-center" alt="work-thumbnail">
                                                    </a>
                                                </div>
                                                <input type="file" class="form-control" id="image6" name="image6" >
                                                <input type="button" data-imageid="image6" class="btn btn-primary image1-uploader" value="Upload" />
                                            </div>
                                            <div class="col-md-2 thumbnail">
                                                <div class="gal-detail thumb">
                                                    <a href="<?=base_url()?>assets/images/icon.png" class="image-popup" title="Screenshot-1">
                                                        <img id="image7-holder" src="<?=base_url()?>assets/images/icon.png" class="thumb-img text-center" alt="work-thumbnail">
                                                    </a>
                                                </div>
                                                <input type="file" class="form-control" id="image7" name="image7" >
                                                <input type="button" data-imageid="image7" class="btn btn-primary image1-uploader" value="Upload" />
                                            </div>
                                            <div class="col-md-2 thumbnail">
                                                <div class="gal-detail thumb">
                                                    <a href="<?=base_url()?>assets/images/icon.png" class="image-popup" title="Screenshot-1">
                                                        <img id="image8-holder" src="<?=base_url()?>assets/images/icon.png" class="thumb-img text-center" alt="work-thumbnail">
                                                    </a>
                                                </div>
                                                <input type="file" class="form-control" id="image8" name="image8" >
                                                <input type="button" data-imageid="image8" class="btn btn-primary image1-uploader" value="Upload" />
                                            </div>
                                            <div class="col-md-2 thumbnail">
                                                <div class="gal-detail thumb">
                                                    <a href="<?=base_url()?>assets/images/icon.png" class="image-popup" title="Screenshot-1">
                                                        <img id="image9-holder" src="<?=base_url()?>assets/images/icon.png" class="thumb-img text-center" alt="work-thumbnail">
                                                    </a>
                                                </div>
                                                <input type="file" class="form-control" id="image9" name="image9" >
                                                <input type="button" data-imageid="image9" class="btn btn-primary image1-uploader" value="Upload" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <button type="button" class="btn w-sm btn-white waves-effect"><i class="fa fa-arrow-right"></i> Next</button>
                                    </div>
                                </div>
                                <!-- end Users tab -->
                                <div class="tab-pane" id="payment-tab">
                                <div class="row">
                                    <!-- Pricing Item -->
                                    <div class="col-sm-6 col-md-6 col-lg-3">
                                        <div class="pricing-item">
                                            <div class="pricing-item-inner">
                                            <div class="pricing-wrap">
                                                <div class="pricing-title text-success">Normal AD</div>          
                                                <!-- Pricing Features -->
                                                <div class="pricing-features">
                                                    <ul class="sf-list pr-list">
                                                        <li><strong>$6</strong><br><small>Insertion or Refresh</small> </li>
                                                        <li><strong>$1.15 /day</strong><br><small>Hosting Fee</small></li>
                                                        <li><strong>$2.00</strong><br><small>Deletion Fee</small></li>
                                                        <li><strong>9</strong><br><small>No. of Photos</small></li>
                                                        <li><strong>Normal</strong><br><small>Search Priority</small></li>
                                                    </ul>
                                                </div>
                                                <div class="pr-button">
                                                    <button class="btn btn-success w-md waves-effect waves-light">Select</button>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                <!-- End Pricing Item -->

                                <!-- Pricing Item -->
                                    <div class="col-sm-6 col-md-6 col-lg-3">
                                        <div class="pricing-item">
                                            <div class="pricing-item-inner">
                                            <div class="pricing-wrap">
                                                <div class="pricing-title text-purple">Premium Ad</div>          
                                                <!-- Pricing Features -->
                                                <div class="pricing-features">
                                                <ul class="sf-list pr-list">
                                                        <li><strong>$10</strong><br><small>Insertion or Refresh</small> </li>
                                                        <li><strong>$1.15 /day</strong><br><small>Hosting Fee</small></li>
                                                        <li><strong>$2.00</strong><br><small>Deletion Fee</small></li>
                                                        <li><strong>9</strong><br><small>No. of Photos</small></li>
                                                        <li><strong>Higher</strong><br><small>Search Priority</small></li>
                                                    </ul>
                                                </div>                   
                                                <div class="pr-button">
                                                    <button class="btn btn-purple w-md waves-effect waves-light">Select</button>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                <!-- End Pricing Item -->

                                <!-- Pricing Item -->
                                    <div class="col-sm-6 col-md-6 col-lg-3">
                                        <div class="pricing-item">
                                            <div class="pricing-item-inner">
                                            <div class="pricing-wrap">
                                                <div class="pricing-title text-pink">Consignment</div>          
                                                <!-- Pricing Features -->
                                                <div class="pricing-features">
                                                <ul class="sf-list pr-list">
                                                        <li><strong>$9</strong><br><small>Insertion or Refresh</small> </li>
                                                        <li><strong>$1.35 /day</strong><br><small>Hosting Fee</small></li>
                                                        <li><strong>FREE</strong><br><small>Deletion Fee</small></li>
                                                        <li><strong>9</strong><br><small>No. of Photos</small></li>
                                                        <li><strong>Highest</strong><br><small>Search Priority</small></li>
                                                    </ul>
                                                </div>
                                                <div class="pr-button">
                                                <button class="btn btn-pink w-md waves-effect waves-light">Select</button>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                <!-- End Pricing Item -->

                                <!-- Pricing Item -->
                                    <div class="col-sm-6 col-md-6 col-lg-3">
                                        <div class="pricing-item">
                                            <div class="pricing-item-inner">
                                            <div class="pricing-wrap">
                                                <div class="pricing-title text-warning">Import Used</div>          
                                                <!-- Pricing Features -->
                                                <div class="pricing-features">
                                                <ul class="sf-list pr-list">
                                                        <li><strong>$11</strong><br><small>Insertion or Refresh</small> </li>
                                                        <li><strong>$1.15 /day</strong><br><small>Hosting Fee</small></li>
                                                        <li><strong>$2</strong><br><small>Deletion Fee</small></li>
                                                        <li><strong>9</strong><br><small>No. of Photos</small></li>
                                                        <li><strong>Normal</strong><br><small>Search Priority</small></li>
                                                    </ul>
                                                </div>                    
                                                <div class="pr-button">
                                                    <button class="btn btn-warning w-md waves-effect">Select</button>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                <!-- End Pricing Item -->
                                
                                </div>
                                </div>
                                <!-- end Users tab -->
                                <div class="tab-pane" id="other-tab">
                                </div>

                            </div>
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
        $(".image1-uploader").click(function(){
            var img = $(this).data('imageid');
            console.log(img);

            // The Javascript
            var fileInput = document.getElementById(img);
            var file = fileInput.files[0];
            var formDatas = new FormData();
            formDatas.append('file', file);
            $.ajax({
                type: "POST",
                enctype: 'multipart/form-data',
                url: "<?= base_url() ?>general/uploadToS3BucketDealer",
                data: formDatas,
                processData: false,
                contentType: false,
                beforeSend: function() {
                    $("#overlay_message").text('Uploading...');
                    document.getElementById('overlay').style.display = "flex";
                },
                success: function (data) {
                    console.log(data);
                    //$('#attachment').val('/'+data);
                    $("#"+img+"-holder").attr("src",data.file_url);
                    document.getElementById('overlay').style.display = "none";
                },
                error: function (e) {
                    //$("#result").text(e.responseText);
                    console.log("ERROR : ", e);
                    document.getElementById('overlay').style.display = "none";
                    // $("#btnSubmit").prop("disabled", false);
                }
            });
        });

        $("#vechicle_form").submit(function(e) {
            e.preventDefault(); // avoid to execute the actual submit of the form.
            var form = $(this);
            $.ajax({
                type: "POST",
                url:  "<?=base_url()?>general/onAddorEditVehicle",
                data: form.serialize(), // serializes the form's elements.
                beforeSend: function() {
                    $("#overlay_message").text('Saving...');
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

        $('#datatable').dataTable({
            'order' : []
        });
        $('.details_to_use').on( 'change', function () {
            var method = this.value;
            if(method === "2"){
                $("#manual_car_details").show('slow');
            }else{
                $("#manual_car_details").hide('slow');
            }
        });
    } );
</script>
</body>
</html>