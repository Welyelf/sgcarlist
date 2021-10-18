<header class="top-area" id="home">
    <div class="top-bar-area gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-6">

                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="header-social-bookmark">
                        <div class="pull-right">
                            <strong>Contact Us: </strong><span>66743818</span> <span>|</span>
                            <strong>Language: </strong><span>English</span> <span>中文</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="gray-bg2">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <a href="/" class="navbar-brand" >
                        <img style="display: inline-block;max-width: 100%;width: 150px;" class="img-responsive" src="<?=base_url()?>assets/images/logo_initial.PNG" alt="Logo" >
                    </a>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="header-social-bookmark2">
                        <div class="pull-right">
                            <strong>Download Our App: </strong><span class="fa fa-android"></span> <span class="fa fa-apple"></span>
                            <a id="btn-fblogin" href="<?=base_url()?>authentication" class="btn btn-primary">Login</a>
                            <a id="btn-fblogin" href="<?=base_url()?>auth/signup" class="btn btn-primary">Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="container" style="height: 30px;">
            <div class="row">
                <div class="mainmenu-area-bg"></div>
                <nav class="navbar">
                    <ul class="nav navbar-nav">
                        <li class=""><a href="#">new cars</a></li>
                        <li><a href="#">used cars</a></li>
                        <li><a href="<?= base_url('sell') ?>">sell my car</a></li>
                        <li><a href="#">rental cars</a></li>
                        <li><a href="#">commercial</a></li>
                        <li><a href="#">car insurance</a></li>
                        <li><a href="#">products</a></li>
                        <li><a href="#">news</a></li>
                    </ul>
                </nav>
            </div>
        </div>
</header>
<style>
    #overlay {
        display: none;
        background: rgba(255, 255, 255, 0.7);
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        top: 0;
        z-index: 9998;
        align-items: center;
        justify-content: center;
        margin: auto;
    }
</style>
<div id="overlay">
    <div>
        <img src="<?=base_url()?>assets/images/uploading.gif" class="" style="width: 80px;" alt="" />
        <center><p id="overlay_message">Processing...</p></center></div>
</div>
