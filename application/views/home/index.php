<?php $this->load->view('layout/head'); ?>
<?php $this->load->view('layout/header'); ?>
<style>
    .hero__overlay{
        background-image: linear-gradient( 270deg,hsla(0,0%,100%,0),rgba(122,150,161,.2) 50%,#000);
        bottom: 0;
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
        width: 100%;
    }
    .thumbnail{
        height: 300px;
        border-radius: 10px;
    }
    .car-image{
        margin-top: 10px;
        margin-bottom: 10px;
        border: solid 1px;
        border-color: #9d9f9f;
    }
    .glyphicon-chevron-right, .glyphicon-chevron-left{
        color: inherit;
        font-size: 24px;
        line-height: 50px;
        vertical-align: top;
    }
    .carousel-control-recommend{
        background: #fff;
        border-radius: 100%;
        -webkit-box-shadow: 0 1px 3px rgb(0 0 0 / 30%), 0 0 1px rgb(0 0 0 / 10%);
        box-shadow: 0 1px 3px rgb(0 0 0 / 30%), 0 0 1px rgb(0 0 0 / 10%);
        color: #ddd;
        height: 50px;
        margin: -25px;
        text-align: center;
        width: 50px;
        position: inherit;
    }
    .next-recommendation{
        right: 19%;
    }
    .prev-recommendation{
        left:auto;
    }
    .cycle__control {
        cursor: pointer;
        display: inline-block;
        font-size: 0;
        margin-right: .2em;
        margin-top: -40px;
        position: absolute;
        text-align: center;
        text-decoration: inherit;
        top: 50%;
        z-index: 120;
    }
    @media screen and (max-width: 1640px) {
        .next-recommendation{
            right: 14%;
        }
    }
    .service-icon{
        padding-top: 8px !important;
    }
    .black{
        color: #1a1a1a !important;
    }
</style>
    <div class="container-fluid">
        <div style="position: relative;">
            <!------ Include the above in your HEAD tag ---------->
            <div class="" style="z-index: 9;margin: 60px;position: absolute;padding-right: 400px;box-shadow: -10px 0px 10px 1px #aaaaaa">
                <div id="loginbox" style="float: left;position: absolute;width: 400px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info" >
                        <div class="panel-heading">
                            <div class="panel-title">Find New and Uses cars for sale</div>
                        </div>

                        <div style="padding-top:30px" class="panel-body" >

                            <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                            <form id="loginform" class="form-horizontal" role="form">

                                <div class="form-group">
                                    <div class="col-md-12">
                                        <select class="form-control" id="select-condition">
                                            <option value=""></option>
                                            <option value="1">Used</option>
                                            <option value="2">New</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6">
                                        <select class="form-control" id="select-brand">
                                            <option value=""></option>
                                            <option value="1">Used</option>
                                            <option value="2">New</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-control" id="select-model">
                                            <option value=""></option>
                                            <option value="1">Used</option>
                                            <option value="2">New</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6">
                                        <select class="form-control" id="select-place">
                                            <option value=""></option>
                                            <option value="1">Singapore</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <input id="login-username" min="0" type="number" step="0.1" class="form-control" name="username" value="" placeholder="Price">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12">
                                        <select class="form-control" id="select-car">
                                            <option value=""></option>
                                            <option value="1">Used</option>
                                            <option value="2">New</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-12 ">
                                        <a style="width: 100%;" id="btn-fblogin" href="#" class="btn btn-primary">Search</a>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12 control" style="text-align: center!important;">
                                        <a href="#" > Advance Search</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div style="position: inherit;" class="row content">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">

                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" >
                        <!--<div class="item active">
                            <div class="row" >
                                <a href="https://www.lonpac.com.sg/" target="_blank">
                                <div class="col-xs-12">
                                    <div class="thumbnail adjust1" style="background:rgba(0, 0, 0, 0) url('https://sgcarlist.s3.amazonaws.com/images/lonpac_banner.jpg') no-repeat scroll center center / cover;height: 450px;">
                                        <div class="hero__overlay"></div>
                                        <div class="col-md-3 col-sm-2 col-xs-12">

                                        </div>
                                        <div class="col-md-7 col-sm-10 col-xs-12">
                                            <div class="caption">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>-->
                        <div class="item active">
                            <div class="row" >
                                <a href="https://www.lonpac.com.sg/" target="_blank">
                                    <div class="col-xs-12">
                                        <div class="thumbnail adjust1" style="background:rgba(0, 0, 0, 0) url('https://sgcarlist.s3.amazonaws.com/images/lonpac_banner.jpg') no-repeat scroll center center / cover;height: 450px;">
                                            <div class="hero__overlay"></div>
                                            <div class="col-md-3 col-sm-2 col-xs-12"></div>
                                            <div class="col-md-7 col-sm-10 col-xs-12">
                                                <div class="caption"></div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!--<div class="item">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="thumbnail adjust1" style="background: rgba(0, 0, 0, 0) url('<?=base_url()?>assets/images/banner3.jpg') no-repeat scroll center center / cover;height: 450px;">
                                        <div class="hero__overlay"></div>
                                        <div class="col-md-2 col-sm-2 col-xs-12">
                                        </div>
                                        <div class="col-md-10 col-sm-10 col-xs-12">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>-->
                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span></a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span></a>
                </div>
            </div>
        </div>


        <div style="position: inherit;" class="row content">
            <div id="carousel-example-generic1" class="carousel slide" data-interval="false">
                <ol class="carousel-indicators">

                </ol>
                <div class="container">
                    <h1>Latest Listing</h1>
                <!-- Wrapper for slides -->
                <div class="carousel-inner" >
                    <div class="row item active">
                        <div class="col-md-3">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="thumbnail adjust1">
                                        <div class="col-md-12">
                                            <div class="single-service wow fadeIn" style="animation-name: none;">
                                                <div class="car-image">
                                                    <img style="display: inline-block;max-width: 100%;" class="img-responsive" src="<?=base_url()?>assets/images/car1.jpeg" alt="2021 BMW X1 1.5 sDrive18i SUV TAX HOLIDAY SALES" >
                                                </div>
                                                <h5>2021 BMW X1 1.5 sDrive18i SUV</h5>
                                                <small>SGD 2,512 / month</small><br>
                                                <h4>SGD 193,800</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="row" >
                                <div class="col-md-12">
                                    <div class="thumbnail adjust1">
                                        <div class="col-md-12">
                                            <div class="single-service wow fadeIn" style="animation-name: none;">
                                                <div class="car-image">
                                                    <img style="display: inline-block;max-width: 100%;" class="img-responsive" src="<?=base_url()?>assets/images/car1.jpeg" alt="2021 BMW X1 1.5 sDrive18i SUV TAX HOLIDAY SALES" >
                                                </div>
                                                <h5>2021 BMW X1 1.5 sDrive18i SUV</h5>
                                                <small>SGD 2,512 / month</small><br>
                                                <h4>SGD 193,800</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="row" >
                                <div class="col-md-12">
                                    <div class="thumbnail adjust1">
                                        <div class="col-md-12">
                                            <div class="single-service wow fadeIn" style="animation-name: none;">
                                                <div class="car-image">
                                                    <img style="display: inline-block;max-width: 100%;" class="img-responsive" src="<?=base_url()?>assets/images/car1.jpeg" alt="2021 BMW X1 1.5 sDrive18i SUV TAX HOLIDAY SALES" >
                                                </div>
                                                <h5>2021 BMW X1 1.5 sDrive18i SUV</h5>
                                                <small>SGD 2,512 / month</small><br>
                                                <h4>SGD 193,800</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="row" >
                                <div class="col-md-12">
                                    <div class="thumbnail adjust1">
                                        <div class="col-md-12">
                                            <div class="single-service wow fadeIn" style="animation-name: none;">
                                                <div class="car-image">
                                                    <img style="display: inline-block;max-width: 100%;" class="img-responsive" src="<?=base_url()?>assets/images/car1.jpeg" alt="2021 BMW X1 1.5 sDrive18i SUV TAX HOLIDAY SALES" >
                                                </div>
                                                <h5>2021 BMW X1 1.5 sDrive18i SUV</h5>
                                                <small>SGD 2,512 / month</small><br>
                                                <h4>SGD 193,800</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row item">
                        <div class="col-md-3">
                            <div class="row" >
                                <div class="col-md-12">
                                    <div class="thumbnail adjust1">
                                        <div class="col-md-12">
                                            <div class="single-service wow fadeIn" style="animation-name: none;">
                                                <div class="car-image">
                                                    <img style="display: inline-block;max-width: 100%;" class="img-responsive" src="<?=base_url()?>assets/images/car1.jpeg" alt="2021 BMW X1 1.5 sDrive18i SUV TAX HOLIDAY SALES" >
                                                </div>
                                                <h5>2021 BMW X1 1.5 sDrive18i SUV</h5>
                                                <small>SGD 2,512 / month</small><br>
                                                <h4>SGD 193,800</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <a class=" carousel-control-recommend cycle__control prev-recommendation" href="#carousel-example-generic1" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span></a>
                    <a class="carousel-control-recommend cycle__control next-recommendation" href="#carousel-example-generic1" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span></a>
                </div>
                <!-- Controls -->
            </div>
        </div>

        <div class="row">
            <h3 class="text-center">ADS AREA</h3>
            <br><br><br><br><br>
        </div>

        <div class="row">
            <div class="service-area section-padding" id="service">
            <div class="container ">
                <div class="row">
                    <div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 col-sm-12 col-xs-12">
                        <div class="area-title text-center wow fadeIn" style="animation-name: none;">
                            <h2>SELL OR ADVERTISE YOUR CAR</h2>
                            <p>We offer various methods to help you sell</p>
                        </div>
                    </div>
                </div>
                <div class="row flex-v-center">
                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                        <div class="single-service right wow fadeIn" style="animation-name: none;">
                            <div class="service-icon">
                                <div class="i fa fa-rocket"></div>
                            </div>
                            <h4>ads duration</h4>
                            <p>Duration of 6 weeks or until sold, whichever earlier</p>
                        </div>
                        <div class="single-service right wow fadeIn" style="animation-name: none;">
                            <div class="service-icon">
                                <div class="i fa fa-camera"></div>
                            </div>
                            <h4>Photos</h4>
                            <p>Post up to 10 photos</p>
                        </div>
                        <div class="single-service right mbzero wow fadeIn" style="animation-name: none;">
                            <div class="service-icon">
                                <div class="i fa fa-desktop"></div>
                            </div>
                            <h4>Web Page</h4>
                            <p>Full dedicated webpage</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 hidden-sm">
                        <div class="service-image text-center wow fadeIn" style="animation-name: none;">
                            <img src="<?=base_url()?>assets/images/car1.jpeg" alt="">
                        </div>
                        <div class="col-sm-12 ">
                            <a style="width: 100%;" id="btn-fblogin" href="#" class="btn btn-primary">Place CAR AD</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                        <div class="single-service left wow fadeIn" style="animation-name: none;">
                            <div class="service-icon">
                                <div class="i fa fa-level-up"></div>
                            </div>
                            <h4>Priority listing</h4>
                            <p>Paid ads always appear on top of the Free ads.</p>
                        </div>
                        <div class="single-service left wow fadeIn" style="animation-name: none;">
                            <div class="service-icon">
                                <div class="i fa fa-refresh"></div>
                            </div>
                            <h4>Free refresh</h4>
                            <p>Your advertisement will be refreshed to the front pages</p>
                        </div>
                        <div class="single-service left mbzero wow fadeIn" style="animation-name: none;">
                            <div class="service-icon">
                                <div class="i fa fa-user"></div>
                            </div>
                            <h4>Login</h4>
                            <p>Login for unlimited changes</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div class="row content">
            <div id="carousel-example-generic1" class="carousel slide" data-interval="false">
                <ol class="carousel-indicators">

                </ol>
                <div class="container">
                    <h1>Latest New Car Models</h1>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" >
                        <div class="row item active">
                            <div class="col-md-3">
                                <div class="row" >
                                    <div class="col-md-12">
                                        <div class="thumbnail adjust1">
                                            <div class="col-md-12">
                                                <div class="single-service wow fadeIn" style="animation-name: none;">
                                                    <div class="car-image">
                                                        <img style="display: inline-block;max-width: 100%;" class="img-responsive" src="<?=base_url()?>assets/images/car1.jpeg" alt="2021 BMW X1 1.5 sDrive18i SUV TAX HOLIDAY SALES" >
                                                    </div>
                                                    <h5>2021 BMW X1 1.5 sDrive18i SUV</h5>
                                                    <small>SGD 2,512 / month</small><br>
                                                    <h4>SGD 193,800</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row" >
                                    <div class="col-md-12">
                                        <div class="thumbnail adjust1">
                                            <div class="col-md-12">
                                                <div class="single-service wow fadeIn" style="animation-name: none;">
                                                    <div class="car-image">
                                                        <img style="display: inline-block;max-width: 100%;" class="img-responsive" src="<?=base_url()?>assets/images/car1.jpeg" alt="2021 BMW X1 1.5 sDrive18i SUV TAX HOLIDAY SALES" >
                                                    </div>
                                                    <h5>2021 BMW X1 1.5 sDrive18i SUV</h5>
                                                    <small>SGD 2,512 / month</small><br>
                                                    <h4>SGD 193,800</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row" >
                                    <div class="col-md-12">
                                        <div class="thumbnail adjust1">
                                            <div class="col-md-12">
                                                <div class="single-service wow fadeIn" style="animation-name: none;">
                                                    <div class="car-image">
                                                        <img style="display: inline-block;max-width: 100%;" class="img-responsive" src="<?=base_url()?>assets/images/car1.jpeg" alt="2021 BMW X1 1.5 sDrive18i SUV TAX HOLIDAY SALES" >
                                                    </div>
                                                    <h5>2021 BMW X1 1.5 sDrive18i SUV</h5>
                                                    <small>SGD 2,512 / month</small><br>
                                                    <h4>SGD 193,800</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row" >
                                    <div class="col-md-12">
                                        <div class="thumbnail adjust1">
                                            <div class="col-md-12">
                                                <div class="single-service wow fadeIn" style="animation-name: none;">
                                                    <div class="car-image">
                                                        <img style="display: inline-block;max-width: 100%;" class="img-responsive" src="<?=base_url()?>assets/images/car1.jpeg" alt="2021 BMW X1 1.5 sDrive18i SUV TAX HOLIDAY SALES" >
                                                    </div>
                                                    <h5>2021 BMW X1 1.5 sDrive18i SUV</h5>
                                                    <small>SGD 2,512 / month</small><br>
                                                    <h4>SGD 193,800</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row item">
                            <div class="col-md-3">
                                <div class="row" >
                                    <div class="col-md-12">
                                        <div class="thumbnail adjust1">
                                            <div class="col-md-12">
                                                <div class="single-service wow fadeIn" style="animation-name: none;">
                                                    <div class="car-image">
                                                        <img style="display: inline-block;max-width: 100%;" class="img-responsive" src="<?=base_url()?>assets/images/car1.jpeg" alt="2021 BMW X1 1.5 sDrive18i SUV TAX HOLIDAY SALES" >
                                                    </div>
                                                    <h5>2021 BMW X1 1.5 sDrive18i SUV</h5>
                                                    <small>SGD 2,512 / month</small><br>
                                                    <h4>SGD 193,800</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class=" carousel-control-recommend cycle__control prev-recommendation" href="#carousel-example-generic1" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span></a>
                    <a class="carousel-control-recommend cycle__control next-recommendation" href="#carousel-example-generic1" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span></a>
                </div>
                <!-- Controls -->
            </div>
        </div>

        <div class="blog-and-feed-area section-padding white-gray-bg" id="news">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 col-sm-12 col-xs-12">
                        <div class="area-title text-center wow fadeIn" style="animation-name: none;">
                            <h2>Our Latest News</h2>
                            <p>Insights</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="feed-widget twitter-feed mb50 wow fadeIn" style="animation-name: none;text-align: center;">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="blog-thumb">
                                        <img src="<?=base_url()?>assets/images/car1.jpeg" alt="" >
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="owl-item cloned">
                                        <div class="single-blog">

                                            <div class="blog-details">
                                                <h4><a href="">The User Experience</a></h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sagittis... <a href="#">Read More</a>
                                                </p>
                                                <p class="blog-meta">Posted by <a href="#">admin</a> at <a href="#">04 Feb, 2017</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="feed-widget twitter-feed mb50 wow fadeIn" style="animation-name: none;text-align: center;">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="blog-thumb">
                                        <img src="<?=base_url()?>assets/images/car1.jpeg" alt="" >
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="owl-item cloned">
                                        <div class="single-blog">

                                            <div class="blog-details">
                                                <h4><a href="">The User Experience</a></h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sagittis... <a href="#">Read More</a>
                                                </p>
                                                <p class="blog-meta">Posted by <a href="#">admin</a> at <a href="#">04 Feb, 2017</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="feed-widget twitter-feed mb50 wow fadeIn" style="animation-name: none;text-align: center;">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="blog-thumb">
                                        <img src="<?=base_url()?>assets/images/car1.jpeg" alt="" >
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="owl-item cloned">
                                        <div class="single-blog">

                                            <div class="blog-details">
                                                <h4><a href="">The User Experience</a></h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sagittis... <a href="#">Read More</a>
                                                </p>
                                                <p class="blog-meta">Posted by <a href="#">admin</a> at <a href="#">04 Feb, 2017</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="feed-widget twitter-feed mb50 wow fadeIn" style="animation-name: none;text-align: center;">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="blog-thumb">
                                        <img src="<?=base_url()?>assets/images/car1.jpeg" alt="">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="owl-item cloned">
                                        <div class="single-blog">
                                            <div class="blog-details">
                                                <h4><a href="">The User Experience</a></h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sagittis... <a href="#">Read More</a>
                                                </p>
                                                <p class="blog-meta">Posted by <a href="#">admin</a> at <a href="#">04 Feb, 2017</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row content">
            <div id="carousel-example-generic1" class="carousel slide" data-interval="false">
                <ol class="carousel-indicators">

                </ol>
                <div class="container">
                    <h1>Most Popular New Car Models</h1>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" >
                        <div class="row item active">
                            <div class="col-md-3">
                                <div class="row" >
                                    <div class="col-md-12">
                                        <div class="thumbnail adjust1">
                                            <div class="col-md-12">
                                                <div class="single-service wow fadeIn" style="animation-name: none;">
                                                    <div class="car-image">
                                                        <img style="display: inline-block;max-width: 100%;" class="img-responsive" src="<?=base_url()?>assets/images/car1.jpeg" alt="2021 BMW X1 1.5 sDrive18i SUV TAX HOLIDAY SALES" >
                                                    </div>
                                                    <h5>2021 BMW X1 1.5 sDrive18i SUV</h5>
                                                    <small>SGD 2,512 / month</small><br>
                                                    <h4>SGD 193,800</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row" >
                                    <div class="col-md-12">
                                        <div class="thumbnail adjust1">
                                            <div class="col-md-12">
                                                <div class="single-service wow fadeIn" style="animation-name: none;">
                                                    <div class="car-image">
                                                        <img style="display: inline-block;max-width: 100%;" class="img-responsive" src="<?=base_url()?>assets/images/car1.jpeg" alt="2021 BMW X1 1.5 sDrive18i SUV TAX HOLIDAY SALES" >
                                                    </div>
                                                    <h5>2021 BMW X1 1.5 sDrive18i SUV</h5>
                                                    <small>SGD 2,512 / month</small><br>
                                                    <h4>SGD 193,800</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row" >
                                    <div class="col-md-12">
                                        <div class="thumbnail adjust1">
                                            <div class="col-md-12">
                                                <div class="single-service wow fadeIn" style="animation-name: none;">
                                                    <div class="car-image">
                                                        <img style="display: inline-block;max-width: 100%;" class="img-responsive" src="<?=base_url()?>assets/images/car1.jpeg" alt="2021 BMW X1 1.5 sDrive18i SUV TAX HOLIDAY SALES" >
                                                    </div>
                                                    <h5>2021 BMW X1 1.5 sDrive18i SUV</h5>
                                                    <small>SGD 2,512 / month</small><br>
                                                    <h4>SGD 193,800</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row" >
                                    <div class="col-md-12">
                                        <div class="thumbnail adjust1">
                                            <div class="col-md-12">
                                                <div class="single-service wow fadeIn" style="animation-name: none;">
                                                    <div class="car-image">
                                                        <img style="display: inline-block;max-width: 100%;" class="img-responsive" src="<?=base_url()?>assets/images/car1.jpeg" alt="2021 BMW X1 1.5 sDrive18i SUV TAX HOLIDAY SALES" >
                                                    </div>
                                                    <h5>2021 BMW X1 1.5 sDrive18i SUV</h5>
                                                    <small>SGD 2,512 / month</small><br>
                                                    <h4>SGD 193,800</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row item">
                            <div class="col-md-3">
                                <div class="row" >
                                    <div class="col-md-12">
                                        <div class="thumbnail adjust1">
                                            <div class="col-md-12">
                                                <div class="single-service wow fadeIn" style="animation-name: none;">
                                                    <div class="car-image">
                                                        <img style="display: inline-block;max-width: 100%;" class="img-responsive" src="<?=base_url()?>assets/images/car1.jpeg" alt="2021 BMW X1 1.5 sDrive18i SUV TAX HOLIDAY SALES" >
                                                    </div>
                                                    <h5>2021 BMW X1 1.5 sDrive18i SUV</h5>
                                                    <small>SGD 2,512 / month</small><br>
                                                    <h4>SGD 193,800</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class=" carousel-control-recommend cycle__control prev-recommendation" href="#carousel-example-generic1" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span></a>
                    <a class="carousel-control-recommend cycle__control next-recommendation" href="#carousel-example-generic1" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span></a>
                </div>
                <!-- Controls -->
            </div>
        </div>

        <br><br>
        <?php $this->load->view('layout/footer'); ?>
    </div>
    <script>
        $( "#select-condition" ).select2({
            placeholder: 'All Conditions',
        });
        $( "#select-brand" ).select2({
            placeholder: 'Brand',
        });
        $( "#select-model" ).select2({
            placeholder: 'Model',
        });
        $( "#select-place" ).select2({
            placeholder: 'Select State',
        });
        $( "#select-car" ).select2({
            placeholder: 'Search specific car',
        });
    </script>
<?php $this->load->view('layout/script'); ?>