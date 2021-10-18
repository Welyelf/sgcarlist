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
            <div class="container" >
                <div class="row justify-content-center mt-0">
                    <div class="col-md-12  p-0 mt-3 mb-2">
                        <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                            <br><br>
                            <h2 class="text-center"><strong>About Us</strong></h2>
                            <h5 class="text-center">What We Do</h5>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <p>
                        Carlist.sg is an internet classified service. We are NOT a car dealer NOR a car distributor.
                        Carlist.sg serves as a platform between end seller, buyer, car dealers, car distributor, parallel
                        importers and other ca related services.
                    </p>
                    <p>
                        We are Singapore top vehicle classified listings with user friendly interface and data entry systems to market your products.
                    </p>
                    <p>
                        We are committed to the highest security and confidentiality of our customer's data protection.
                    </p>
                    <p>
                        Please note that we DO NOT involve in any transactions hence we are ONLY an online advertising agency.
                    </p>
                    <p>Our mission is to strive for further improvement.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <?php $this->load->view('layout/footer'); ?>
    </div>
<?php $this->load->view('layout/script'); ?>