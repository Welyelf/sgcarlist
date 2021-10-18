<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Buy and Sell Car">
    <meta name="keywords" content="Carlist, Car, SG">

    <link rel="shortcut icon" href="<?=base_url()?>assets/images/icon.png">

    <title>SGCarlist - IMS</title>

    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>assets/css/core.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>assets/css/components.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>assets/css/pages.css?2021" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>assets/css/responsive.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script src="<?=base_url()?>assets/js/modernizr.min.js"></script>

    <script src='https://www.google.com/recaptcha/api.js'></script>
    <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="829139726244-5qbci6rr1bt49ovd3v8l0vcv808u5kbv.apps.googleusercontent.com">
    <meta name="google-site-verification" content="PvJbCXAs0h5Jy3QhpEMWuDwxJseKQzurcKbr34XOn8Y" />
    <script src="https://apis.google.com/js/api:client.js"></script>

    <style>
        /* Glyph, by Harry Roberts */

        hr.hr-or {
            overflow: visible; /* For IE */
            padding: 0;
            border: none;
            border-top: medium double #333;
            color: #333;
            text-align: center;
        }
        hr.hr-or:after {
            content: "OR";
            display: inline-block;
            position: relative;
            top: -0.7em;
            font-size: 1.5em;
            padding: 0 0.25em;
            background: white;
        }
        #customBtn {
            display: inline-block;
            background: white;
            color: #444;
            width: 270px;
            border-radius: 5px;
            border: thin solid #888;
            box-shadow: 1px 1px 1px grey;
            white-space: nowrap;
            text-align: center;
        }
        #customBtn:hover {
            cursor: pointer;
        }
        span.label {
            font-family: serif;
            font-weight: normal;
        }
        span.icon {
            background: url('<?=base_url()?>assets/images/g-normal.png') transparent 5px 50% no-repeat;
            display: inline-block;
            vertical-align: middle;
            width: 42px;
            height: 42px;
        }
        span.buttonText {
            display: inline-block;
            vertical-align: middle;
            padding-left: 42px;
            padding-right: 42px;
            font-size: 14px;
        }
    </style>
    <script>
        var googleUser = {};
        var startApp = function() {
            gapi.load('auth2', function(){
                // Retrieve the singleton for the GoogleAuth library and set up the client.
                auth2 = gapi.auth2.init({
                    client_id: '829139726244-5qbci6rr1bt49ovd3v8l0vcv808u5kbv.apps.googleusercontent.com',
                    cookiepolicy: 'single_host_origin',
                    // Request scopes in addition to 'profile' and 'email'
                    scope: 'profile email'
                });
                attachSignin(document.getElementById('customBtn'));
            });
        };

        function attachSignin(element) {
            console.log(element.id);
            auth2.attachClickHandler(element, {},
                function(googleUser) {
                    var user_data = {};
                    user_data['email_address'] = googleUser.wt.cu;
                    user_data['fullname'] = googleUser.wt.fV + googleUser.wt.iT;
                    user_data['oauth_provider'] = 'google';
                    //console.log( googleUser.getBasicProfile().getN);
                    check_user(user_data);
                }, function(error) {
                    alert(JSON.stringify(error, undefined, 2));
                });
        }
    </script>
</head>
<body>
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

<div class="account-pages"></div>
<div class="clearfix"></div>
<div class="wrapper-page">
    <div class=" card-box">
        <div class="panel-heading">
            <h3 class="text-center"> <strong class="text-primary">SGCarlist IMS - LogIn</strong> </h3>
        </div>

        <div class="panel-body">
            <form class="form-horizontal m-t-20" id="carlist_login">
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" name="username" required placeholder="Username">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <input class="form-control" type="password" id="password" name="password" required placeholder="Password">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <a href="#" class="pull-right">Forgot Password?</a>
                    </div>
                </div>
                <div class="form-group text-center m-t-40">
                    <div class="col-xs-12">
                        <button class="btn btn-primary btn-block text-uppercase waves-effect waves-light" type="submit">
                            Login
                        </button>
                    </div>
                </div>
            </form>
            <div class="login-or">
                <hr class="hr-or">
            </div>

            <div class="col-md-12 ">
                <div class="panel panel-default" >
                    <div class="panel-heading">
                        <center>
                            <div id="gSignInWrapper">
                                <span class="label">:</span>
                                <div id="customBtn" class="customGPlusSignIn">
                                    <span class="icon"></span>
                                    <span class="buttonText"> Sign in with Google</span>
                                </div>
                            </div>
                            <div id="name"></div>
                            <script>startApp();</script>
                        </center>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 text-center">
            <p>
                Don't have account?<a href="<?=base_url('auth/signup')?>" class="text-primary m-l-5"><b>Sign Up</b></a>
            </p>
        </div>
    </div>

</div>

<!-- jQuery  -->
<script src="<?=base_url()?>assets/js/jquery.min.js"></script>
<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
<script src="<?=base_url()?>assets/js/detect.js"></script>
<script src="<?=base_url()?>assets/js/fastclick.js"></script>
<script src="<?=base_url()?>assets/js/jquery.slimscroll.js"></script>
<script src="<?=base_url()?>assets/js/jquery.blockUI.js"></script>
<script src="<?=base_url()?>assets/js/waves.js"></script>
<script src="<?=base_url()?>assets/js/wow.min.js"></script>
<script src="<?=base_url()?>assets/js/jquery.nicescroll.js"></script>
<script src="<?=base_url()?>assets/js/jquery.scrollTo.min.js"></script>


<script src="<?=base_url()?>assets/js/jquery.core.js"></script>
<script src="<?=base_url()?>assets/js/jquery.app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script>
    var resizefunc = [];
    $("#carlist_login").submit(function(e) {
        e.preventDefault(); // avoid to execute the actual submit of the form.
        var form = $(this);
        $.ajax({
            type: "POST",
            url:  "<?=base_url()?>auth/on_login",
            data: form.serialize(), // serializes the form's elements.
            success: function (data) {
                if(data.success){
                    console.log(data);
                    window.location.href="<?= base_url()?>"+data.url;
                }else{
                    carlist_alert('Sorry!',data.message,'error');
                }
                document.getElementById('overlay').style.display = "none";
            },
            beforeSend: function() {
                document.getElementById('overlay').style.display = "flex";
            },
        });
    });
</script>


<script>
    function carlist_alert(title='Awesome',text,icon='success',redirect=''){
        Swal.fire({
            title: title,
            text: text,
            icon: icon,
            showCancelButton: false,
            confirmButtonColor: '#32243d',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ok'
        }).then((result) => {
            if (result.value) {
                if(redirect !== ''){
                    window.location.href='<?= base_url(); ?>'+redirect;
                }
            }
        });
    }
</script>



</body>
</html>