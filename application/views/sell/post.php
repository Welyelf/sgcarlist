<?php $this->load->view('layout/head'); ?>
<?php $this->load->view('layout/header'); ?>
    <style>
        .adjust2{
            width: 100%;
            margin-bottom: 0;
            height: 300px;
        }
        .placeholder{
            width: 300px;
            height: 300px;
        }
        .image-row{
            padding-bottom: 20px;
        }
        .required{
            color: #CC0000;
            font-size: 18px;
        }


        #msform fieldset:not(:first-of-type) {
            display: none;
        }

        select.list-dt {
            border: none;
            outline: 0;
            border-bottom: 1px solid #ccc;
            padding: 2px 5px 3px 5px;
            margin: 2px
        }

        select.list-dt:focus {
            border-bottom: 2px solid skyblue
        }


        .fs-title {
            font-size: 25px;
            color: #2C3E50;
            margin-bottom: 10px;
            font-weight: bold;
            text-align: left
        }

        #progressbar {
            margin-bottom: 30px;
            overflow: hidden;
            color: lightgrey
        }

        #progressbar .active {
            color: #000000
        }

        #progressbar li {
            list-style-type: none;
            font-size: 12px;
            width: 33%;
            float: left;
            position: relative
        }

        #progressbar #account:before {
            font-family: FontAwesome;
            content: "\f007"
        }

        #progressbar #personal:before {
            font-family: FontAwesome;
            content: "\f009"
        }

        #progressbar #payment:before {
            font-family: FontAwesome;
            content: "\f09d"
        }


        #progressbar li:before {
            width: 50px;
            height: 50px;
            line-height: 45px;
            display: block;
            font-size: 18px;
            color: #ffffff;
            background: lightgray;
            border-radius: 50%;
            margin: 0 auto 10px auto;
            padding: 2px
        }

        #progressbar li:after {
            content: '';
            width: 100%;
            height: 2px;
            background: lightgray;
            position: absolute;
            left: 0;
            top: 25px;
            z-index: -1
        }

        #progressbar li.active:before,
        #progressbar li.active:after {
            background: skyblue
        }

        .radio-group {
            position: relative;
            margin-bottom: 25px
        }

        .radio {
            display: inline-block;
            width: 204px;
            height: 104px;
            border-radius: 0;
            background: lightblue;
            box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
            box-sizing: border-box;
            cursor: pointer;
            margin: 8px 2px
        }

        .radio:hover {
            box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.3)
        }

        .radio.selected {
            box-shadow: 1px 1px 2px 2px rgba(0, 0, 0, 0.1)
        }

    </style>

    <div class="container-fluid">
        <div style="position: relative;">
            <div style="position: inherit;" class="row content">
                <div id="carousel-example-generic" class="carousel" data-ride="carousel">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" >
                        <div class="item active">
                            <div class="row" >
                                <div class="col-xs-12">
                                    <div class="thumbnail adjust1" style="opacity: 0.7;background: rgba(0, 0, 0, 0) url('<?=base_url()?>assets/images/banner_private_seller.jpg') no-repeat scroll center center / cover;height: 150px;">
                                        <div class="hero__overlay"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       

        <div style="position: relative;">
            <div class="container-fluid" id="grad1">
                <div class="row justify-content-center mt-0">
                    <div class="col-md-12  p-0 mt-3 mb-2">
                        <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                            <br><br>
                            <h2 class="text-center"><strong>Post an Advertisement</strong></h2>
                            <p class="text-center">Fill all form field to go to next step</p>
                            <p class="text-center"><strong>For any enquiries on placing an ad, you may reach us at 8718 3818</strong></p>
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-8 mx-0" id="msform">
                                        <ul id="progressbar" class="text-center">
                                            <li class="active" id="account"><strong>Personal and Car Information</strong></li>
                                            <li id="personal"><strong>Upload Car Picture(s)</strong></li>
                                            <li id="payment"><strong>Payment</strong></li>
                                        </ul>
                                        <fieldset>
                                            <div class="row form-card">
                                                <form id="car_details_form">
                                                    <div class="col-md-12">
                                                        <div class="form-card">
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading">
                                                                    <strong>Personal Details</strong>
                                                                </div>
                                                                <div class="panel-body">
                                                                    <i><p style="color: #CC0000;">Note: (*) fields are compulsory to be filled up</p></i>
                                                                    <div class="form-group row">
                                                                        <label for="fullname" class="col-sm-2 col-form-label">Name: <span class="required">*</span></label>
                                                                        <div class="col-sm-6">
                                                                            <input type="text" class="form-control" id="fullname" name="fullname" required value="Test">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for="contact_number" class="col-sm-2 col-form-label">Contact No. <span class="required">*</span></label>
                                                                        <div class="col-sm-6">
                                                                            <input type="number" class="form-control" id="contact_number" name="contact_number" required value="1234">
                                                                        </div>
                                                                        <div class="col-sm-4">
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="radio" name="is_display" id="is_display1" value="1" checked>
                                                                                <label class="form-check-label" for="is_display1">
                                                                                    Display contact number
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="radio" name="is_display" id="is_display2" value="0">
                                                                                <label class="form-check-label" for="is_display2">
                                                                                    Do not display contact number
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for="email_address" class="col-sm-2 col-form-label">Email Address <span class="required">*</span></label>
                                                                        <div class="col-sm-6">
                                                                            <input type="email" class="form-control" id="email_address" name="email_address" required value="test@gmail.com">
                                                                            <i>The login details will be sent to this email address.</i>
                                                                        </div>
                                                                        <div class="col-sm-4">
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="radio" name="is_email_enable" id="is_email1" value="1" checked>
                                                                                <label class="form-check-label" for="is_email1">
                                                                                    Enable enquiry via email
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="radio" name="is_email_enable" id="is_email2" value="0">
                                                                                <label class="form-check-label" for="is_email2">
                                                                                    Disable enquiry via email
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for="view_area" class="col-sm-2 col-form-label">Preferred Viewing Area</label>
                                                                        <div class="col-sm-6">
                                                                            <input type="text" class="form-control" id="view_area" name="view_area" value="1234">
                                                                            <i>The postal code will not be shown in your ad. Only the area will be shown</i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for="password" class="col-sm-2 col-form-label">Password <span class="required">*</span></label>
                                                                        <div class="col-sm-6">
                                                                            <input type="password" class="form-control" id="password" minlength="4" maxlength="6" name="password" required value="asasas">
                                                                            <i>4 to 6 alpha-numeric characters. Case-sensitive.</i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for="password2" class="col-sm-2 col-form-label">Confirm Password <span class="required">*</span></label>
                                                                        <div class="col-sm-6">
                                                                            <input type="password" class="form-control" id="password2" minlength="4" maxlength="6" name="password2" required value="asasas">
                                                                            <strong id="message"></strong>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="panel-heading">
                                                                    <strong>Car Details</strong>
                                                                </div>
                                                                <div class="panel-body">
                                                                    <div class="form-group row">
                                                                        <label for="car_number" class="col-sm-2 col-form-label">Car Plate No. <span class="required">*</span></label>
                                                                        <div class="col-sm-6">
                                                                            <input type="text" class="form-control" id="car_number" name="car_number" required value="12345">
                                                                            <i>This car plate number field will not be shown in your ad. It is for our verification purpose.
                                                                                This number will serve as your user ID.</i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group row">
                                                                        <label for="owner_type" class="col-sm-2 col-form-label">Owner ID Type <span class="required">*</span></label>
                                                                        <div class="col-sm-6">
                                                                            <select class="form-control" name="owner_type">
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
                                                                    <div class="form-group row">
                                                                        <label for="owner_id" class="col-sm-2 col-form-label">Owner ID <span class="required">*</span></label>
                                                                        <div class="col-sm-6">
                                                                            <input type="number" class="form-control" id="owner_id" name="owner_id" required value="324324">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input details_to_use" type="radio" name="details_use" id="details1" value="1" checked>
                                                                        <label class="form-check-label" for="details1">
                                                                            Use my carplate number and owner ID to fill my car details automatically
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input details_to_use" type="radio" name="details_use" id="details2" value="2">
                                                                        <label class="form-check-label" for="details2">
                                                                            I wish to manually input all my car details
                                                                        </label>
                                                                    </div>
                                                                    <br>

                                                                    <div id="manual_car_details" style="display: none;border-top: 1px solid #ddd;border-bottom: 1px solid #ddd;">
                                                                        <div class="form-group row">
                                                                            <label for="contact_number" class="col-sm-2 col-form-label">Registration Date <span class="required">*</span></label>
                                                                            <div class="col-sm-2">
                                                                                <label for="reg_date" class="col-form-label">Day</label>
                                                                                <select class="form-control" name="reg_date" id="reg_date">
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
                                                                            <div class="col-sm-2">
                                                                                <label for="contact_number" class="col-form-label">Year</label>
                                                                                <select class="form-control" name="reg_year">
                                                                                    <option value=""></option>
                                                                                    <?php for($x=date("Y");$x>=1927;$x--): ?>
                                                                                        <option value="<?=$x;?>"><?=$x;?></option>
                                                                                    <?php endfor; ?>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="engine_cap" class="col-sm-2 col-form-label">Engine Capacity <span class="required">*</span></label>
                                                                            <div class="col-sm-6">
                                                                                <input type="email" class="form-control" id="engine_cap" name="engine_cap" >
                                                                                <i>cc</i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="omv" class="col-sm-2 col-form-label">OMV</label>
                                                                            <div class="col-sm-6">
                                                                                <div class="input-group">
                                                                                    <span class="input-group-addon" id="basic-addon1">$</span>
                                                                                    <input type="number" step="any" min="0" class="form-control " name="omv" id="omv"  aria-describedby="basic-addon1">
                                                                                </div>
                                                                                <i>Leave blank if unavailable</i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="arf" class="col-sm-2 col-form-label">ARF</label>
                                                                            <div class="col-sm-6">
                                                                                <div class="input-group">
                                                                                    <span class="input-group-addon" id="basic-addon1">$</span>
                                                                                    <input type="number" step="any" min="0" class="form-control" name="arf" id="arf"  aria-describedby="basic-addon1">
                                                                                </div>
                                                                                <i>Leave blank if unavailable</i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="coe" class="col-sm-2 col-form-label">COE</label>
                                                                            <div class="col-sm-6">
                                                                                <div class="input-group">
                                                                                    <span class="input-group-addon" id="basic-addon1">$</span>
                                                                                    <input type="number" step="any" min="0" class="form-control" name="coe" id="coe" aria-describedby="basic-addon1">
                                                                                </div>
                                                                                <i>Leave blank if unavailable</i>
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group row">
                                                                            <label for="coe_day" class="col-sm-2 col-form-label">COE Expiry Date</label>
                                                                            <div class="col-sm-2">
                                                                                <label for="contact_number" class="col-form-label">Day</label>
                                                                                <select class="form-control" name="coe_day" id="coe_day">
                                                                                    <option value=""></option>
                                                                                    <?php for($x=1;$x<=31;$x++): ?>
                                                                                        <option value="<?=$x;?>"><?=$x;?></option>
                                                                                    <?php endfor; ?>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-sm-2">
                                                                                <label for="coe_month" class="col-form-label">Month</label>
                                                                                <select class="form-control" name="coe_month" id="coe_month">
                                                                                    <option value=""></option>
                                                                                    <?php for($x=1;$x<=12;$x++): ?>
                                                                                        <option value="<?=$x;?>"><?=$x;?></option>
                                                                                    <?php endfor; ?>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-sm-2">
                                                                                <label for="coe_year" class="col-form-label">Year </label>
                                                                                <select class="form-control" name="coe_year" id="coe_year">
                                                                                    <option value=""></option>
                                                                                    <?php for($x=date("Y");$x>=1927;$x--): ?>
                                                                                        <option value="<?=$x;?>"><?=$x;?></option>
                                                                                    <?php endfor; ?>
                                                                                </select>
                                                                                <i>(for car with re-newed COE)</i>
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group row">
                                                                            <label for="no_of_owner" class="col-sm-2 col-form-label">No. of Owners <span class="required">*</span></label>
                                                                            <div class="col-sm-6">
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

                                                                        <div class="form-group row">
                                                                            <label for="vehicle_type" class="col-sm-2 col-form-label">Type of Vehicle <span class="required">*</span></label>
                                                                            <div class="col-sm-6">
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
                                                                    <br>
                                                                    <div class="form-group row">
                                                                        <label for="car_model" class="col-sm-2 col-form-label">Car Model <span class="required">*</span></label>
                                                                        <div class="col-sm-6">
                                                                            <input type="text" class="form-control" id="car_model" name="car_model" required value="BMW">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for="asking_price" class="col-sm-2 col-form-label">Asking Price</label>
                                                                        <div class="col-sm-6">
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon" id="basic-addon1">$</span>
                                                                                <input type="number" step="any" min="0" class="form-control" name="asking_price" id="asking_price"  aria-describedby="basic-addon1">
                                                                            </div>
                                                                            <small>Leave blank if you prefer buyers to quote you their price</small>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for="transmission" class="col-sm-2 col-form-label">Transmission</label>
                                                                        <div class="col-sm-6">
                                                                             <select class="form-control" name="transmission" id="transmission">
                                                                                <option value="Auto">Auto</option>
                                                                                <option value="Manual">Manual</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for="fuel_type" class="col-sm-2 col-form-label">Fuel Type</label>
                                                                        <div class="col-sm-6">
                                                                            <select class="form-control" name="fuel_type" id="fuel_type">
                                                                                <option value="Petrol">Petrol</option>
                                                                                <option value="Diesel">Diesel</option>
                                                                                <option value="Petrol-Electric">Petrol-Electric</option>
                                                                                <option value="Diesel-Electric">Diesel-Electric</option>
                                                                                <option value="Electric">Electric</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for="mileage" class="col-sm-2 col-form-label">Mileage</label>
                                                                        <div class="col-sm-6">
                                                                            <input type="email" class="form-control" id="mileage" name="mileage" >km
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group row">
                                                                        <label for="feature" class="col-sm-2 col-form-label">Vehicle Features</label>
                                                                        <div class="col-sm-6">
                                                                            <textarea  class="form-control" id="feature" name="features" ></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for="accessories" class="col-sm-2 col-form-label">Accessories</label>
                                                                        <div class="col-sm-6">
                                                                            <textarea  class="form-control" id="accessories" name="accessories" ></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for="description" class="col-sm-2 col-form-label">Description</label>
                                                                        <div class="col-sm-6">
                                                                            <textarea  class="form-control" id="description" name="description" ></textarea>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group row">
                                                                        <label for="agree" class="col-sm-2"></label>
                                                                        <div class="col-sm-6">
                                                                            <div class="form-check form-check-inline">
                                                                                <input class="form-check-input" type="checkbox" id="agree" value="1" required>
                                                                                <span >
                                                                                    I agree to adhere to the Direct Owner Advertising Terms & Conditions & Advertising General Terms & Conditions & Guidelines of Advertisement Content.
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <input value="Proceed" type="submit" class=" action-button btn btn-default text-center ">
                                                        <br><br>
                                                    </div>
                                                </form>
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <div class="col-md-12">
                                                <div class="form-card">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <strong>Upload Picture(s)</strong>
                                                        </div>
                                                        <div class="panel-body">
                                                            <i>
                                                                Photos are optional. Leave blank if unavailable. Only actual photos of the vehicle for sale will be accepted.
                                                                If your images do not fit the below upload requirements, please email them to admin@sgcarmart.com
                                                                with your carplate number as the title after you have made payment.
                                                            </i>
                                                            <p>
                                                                <strong>Upload requirements: 	Image file size should not exceed 5MB and it's dimension should not exceed (4800 x 3600)pixels.</strong>
                                                            </p>

                                                            <div class="row image-row">
                                                                <input type="text" id="car_id">
                                                                <div class="col-md-4">
                                                                    <div class="thumbnail adjust2">
                                                                        <img id="image1-holder" class="img-responsive placeholder" src="<?=base_url()?>assets/images/icon.png" alt="Placeholder" >
                                                                    </div>
                                                                    <div class="form-group row"><br>
                                                                        <label for="image1" class="col-sm-3 col-form-label">Image 1: </label>
                                                                        <div class="col-sm-7">
                                                                            <input type="file" class="form-control" id="image1" name="image1" >
                                                                        </div>
                                                                    </div>
                                                                    <input type="button" data-imageid="image1" class="btn btn-default image1-uploader" value="Upload" />
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="thumbnail adjust2">
                                                                        <img id="image2-holder" class="img-responsive placeholder" src="<?=base_url()?>assets/images/icon.png" alt="Placeholder" >
                                                                    </div>
                                                                    <div class="form-group row"><br>
                                                                        <label for="image2" class="col-sm-3 col-form-label">Image 2: </label>
                                                                        <div class="col-sm-7">
                                                                            <input type="file" class="form-control" id="image2" name="image2" >
                                                                        </div>
                                                                    </div>
                                                                    <input type="button" data-imageid="image2" class="btn btn-default image1-uploader" value="Upload" />
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="thumbnail adjust2">
                                                                        <img id="image3-holder" class="img-responsive placeholder" src="<?=base_url()?>assets/images/icon.png" alt="Placeholder" >
                                                                    </div>
                                                                    <div class="form-group row"><br>
                                                                        <label for="image3" class="col-sm-3 col-form-label">Image 3: </label>
                                                                        <div class="col-sm-7">
                                                                            <input type="file" class="form-control" id="image3" name="image3" >
                                                                        </div>
                                                                    </div>
                                                                    <input type="button" data-imageid="image3" class="btn btn-default image1-uploader" value="Upload" />
                                                                </div>
                                                            </div>

                                                            <div class="row image-row">
                                                                <div class="col-md-4">
                                                                    <div class="thumbnail adjust2">
                                                                        <img id="image4-holder" class="img-responsive placeholder" src="<?=base_url()?>assets/images/icon.png" alt="Placeholder" >
                                                                    </div>
                                                                    <div class="form-group row"><br>
                                                                        <label for="image4" class="col-sm-3 col-form-label">Image 4: </label>
                                                                        <div class="col-sm-7">
                                                                            <input type="file" class="form-control" id="image4" name="image4" >
                                                                        </div>
                                                                    </div>
                                                                    <input type="button" data-imageid="image4" class="btn btn-default image1-uploader" value="Upload" />
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="thumbnail adjust2">
                                                                        <img id="image5-holder" class="img-responsive placeholder" src="<?=base_url()?>assets/images/icon.png" alt="Placeholder" >
                                                                    </div>
                                                                    <div class="form-group row"><br>
                                                                        <label for="image5" class="col-sm-3 col-form-label">Image 5: </label>
                                                                        <div class="col-sm-7">
                                                                            <input type="file" class="form-control" id="image5" name="image5" >
                                                                        </div>
                                                                    </div>
                                                                    <input type="button" data-imageid="image5" class="btn btn-default image1-uploader" value="Upload" />
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="thumbnail adjust2">
                                                                        <img id="image6-holder" class="img-responsive placeholder" src="<?=base_url()?>assets/images/icon.png" alt="Placeholder" >
                                                                    </div>
                                                                    <div class="form-group row"><br>
                                                                        <label for="image6" class="col-sm-3 col-form-label">Image 6: </label>
                                                                        <div class="col-sm-7">
                                                                            <input type="file" class="form-control" id="image6" name="image6" >
                                                                        </div>
                                                                    </div>
                                                                    <input type="button" data-imageid="image6" class="btn btn-default image1-uploader" value="Upload" />
                                                                </div>
                                                            </div>

                                                            <div class="row image-row">
                                                                <div class="col-md-4">
                                                                    <div class="thumbnail adjust2">
                                                                        <img id="image7-holder" class="img-responsive placeholder" src="<?=base_url()?>assets/images/icon.png" alt="Placeholder" >
                                                                    </div>
                                                                    <div class="form-group row"><br>
                                                                        <label for="image7" class="col-sm-3 col-form-label">Image 7: </label>
                                                                        <div class="col-sm-7">
                                                                            <input type="file" class="form-control" id="image7" name="image7" >
                                                                        </div>
                                                                    </div>
                                                                    <input type="button" data-imageid="image7" class="btn btn-default image1-uploader" value="Upload" />
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="thumbnail adjust2">
                                                                        <img id="image8-holder" class="img-responsive placeholder" src="<?=base_url()?>assets/images/icon.png" alt="Placeholder" >
                                                                    </div>
                                                                    <div class="form-group row"><br>
                                                                        <label for="image8" class="col-sm-3 col-form-label">Image 8: </label>
                                                                        <div class="col-sm-7">
                                                                            <input type="file" class="form-control" id="image8" name="image8" >
                                                                        </div>
                                                                    </div>
                                                                    <input type="button" data-imageid="image8" class="btn btn-default image1-uploader" value="Upload" />
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="thumbnail adjust2">
                                                                        <img id="image9-holder" class="img-responsive placeholder" src="<?=base_url()?>assets/images/icon.png" alt="Placeholder" >
                                                                    </div>
                                                                    <div class="form-group row"><br>
                                                                        <label for="image9" class="col-sm-3 col-form-label">Image 9: </label>
                                                                        <div class="col-sm-7">
                                                                            <input type="file" class="form-control" id="image9" name="image9" >
                                                                        </div>
                                                                    </div>
                                                                    <input type="button" data-imageid="image9" class="btn btn-default image1-uploader" value="Upload" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <input type="button" name="previous" class="previous action-button-previous btn btn-default" value="Previous" />
                                                <input type="button" name="next" class="next action-button btn btn-default" value="Next Step" />
                                                <br><br>
                                            </div>

                                        </fieldset>
                                        <fieldset>
                                            <div class="col-md-12">
                                                <div class="form-card">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <strong>Make Payment</strong>
                                                        </div>
                                                        <div class="panel-body">
                                                            <i>
                                                                If you have keyed in your vehicle data for the advertisement, but have yet to make payment, you can make payment here.
                                                                By doing so, you will save the hassle of keying in all your data again. If you have yet to successfully submit your pictures, please email them to admin@sgcarmart.com with your carplate number as the title after you have made payment.
                                                                Your ad will be posted up within 12 working hours after payment has been made.
                                                            </i>
                                                            <div class="row image-row">
                                                                <div class="col-md-4">
                                                                    <div class="thumbnail adjust2">
                                                                        <img class="img-responsive placeholder" src="<?=base_url()?>assets/images/paynow.png" alt="Placeholder" >
                                                                    </div>
                                                                    <input type="button" name="previous" class="btn btn-default btn-pay" value="Pay" />
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="thumbnail adjust2">
                                                                        <img class="img-responsive placeholder" src="<?=base_url()?>assets/images/visa.png" alt="Placeholder" >
                                                                    </div>
                                                                    <input type="button" name="previous" class="btn btn-default btn-pay" value="Pay" />
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="thumbnail adjust2">
                                                                        <img class="img-responsive placeholder" src="<?=base_url()?>assets/images/icon.png" alt="Placeholder" >
                                                                    </div>
                                                                    <input type="button" name="previous" class="btn btn-default btn-pay" value="Pay" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <input type="button" name="previous" class="previous action-button-previous btn btn-default" value="Previous" />
                                            </div>
                                        </fieldset>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <?php $this->load->view('layout/footer'); ?>
    </div>

    <script>
        $(document).ready(function(){
            $(".btn-pay").click(function() {
                carlist_alert('Congrats!','Advertisement has been posted!','success','sell');
            });

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
                    url: "<?= base_url() ?>sell/upload_image",
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
            var current_fs, next_fs, previous_fs; //fieldsets
            var opacity;

            $('#password2').on('keyup', function () {
                if ($('#password').val() == $('#password2').val()) {
                    $('#message').html('Matched!').css('color', 'green');
                } else
                    $('#message').html('Password didnt match').css('color', 'red');
            });

            $("#car_details_form").submit(function(e) {
                e.preventDefault(); // avoid to execute the actual submit of the form.

                if ($('#password').val() !== $('#password2').val()) {
                    carlist_alert('Sorry!','Password didnt match','warning');
                }else {
                    var form = $(this);
                    var error=0;
                    $.ajax({
                        type: "POST",
                        url:  "<?=base_url()?>sell/post_ad",
                        data: form.serialize(), // serializes the form's elements.
                        success: function (data) {
                            if (data === '0') {
                                console.log(data);
                            } else {
                                alert('error');
                                error=1;
                            }
                        }
                    });

                    if(error === 0){
                        current_fs = $(this).parent().parent();
                        next_fs = $(this).parent().parent().next();
                        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
                        next_fs.show();
                        current_fs.animate({opacity: 0}, {
                            step: function (now) {
                                opacity = 1 - now;
                                current_fs.css({
                                    'display': 'none',
                                    'position': 'relative'
                                });
                                next_fs.css({'opacity': opacity});
                            },
                            duration: 600
                        });
                    }
                }
            });

            $('.details_to_use').on( 'change', function () {
                var method = this.value;
                if(method === "2"){
                    $("#manual_car_details").show('slow');
                }else{
                    $("#manual_car_details").hide('slow');
                }
            });



            $(".next").click(function(){
                current_fs = $(this).parent().parent();
                next_fs = $(this).parent().parent().next();
                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
                next_fs.show();
                current_fs.animate({opacity: 0}, {
                    step: function(now) {
                        opacity = 1 - now;
                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        next_fs.css({'opacity': opacity});
                    },
                    duration: 600
                });
            });

            $(".previous").click(function(){

                current_fs = $(this).parent().parent();
                previous_fs = $(this).parent().parent().prev();

//Remove class active
                $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

//show the previous fieldset
                previous_fs.show();

//hide the current fieldset with style
                current_fs.animate({opacity: 0}, {
                    step: function(now) {
// for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        previous_fs.css({'opacity': opacity});
                    },
                    duration: 600
                });
            });

            $('.radio-group .radio').click(function(){
                $(this).parent().find('.radio').removeClass('selected');
                $(this).addClass('selected');
            });

            $(".submit").click(function(){
                return false;
            })

        });
    </script>
<?php $this->load->view('layout/script'); ?>