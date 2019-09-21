<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>:: Welcome to Mallapuram ::</title>

        <meta name="description" content="OneUI - Admin Dashboard Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favicon.jpg">
        

        <!-- Stylesheets -->
        <!-- Web fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">

        <!-- Bootstrap and OneUI CSS framework -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" id="css-main" href="<?php echo base_url();?>assets/css/oneui.css">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
        <!-- END Stylesheets -->
    </head>
    <body>
        <!-- Login Content -->
        <div id="main-container" style="background-color:#FFFFFF;">
            <div class="content content-boxed overflow-hidden">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
                        <div class="push-30-t push-50 animated fadeIn">
                            <!-- Login Title -->
                            <div class="text-center">
                              <img src="<?php echo base_url();?>assets/img/logo-mallapuram.png">
                            </div>
                            
                            <?php echo  $msg;?>
                            
                            
                            
                            <!-- END Login Title -->

                            <!-- Login Form -->
                            <!-- jQuery Validation (.js-validation-login class is initialized in js/pages/base_pages_login.js) -->
                            <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                            <form class="js-validation-login form-horizontal push-30-t" action="" method="post">
                                <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="col-xs-12" for="example-text-input">User Name</label>
                                            <div class="col-md-12">
              <input class="form-control" type="text" id="example-text-input" name="username" required></div>
                                        </div>
                                        </div>
                                
                                
                                <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="col-xs-12" for="example-text-input">Password</label>
                                            <div class="col-md-12">
              <input class="form-control" type="password" id="example-text-input" name="password" required></div>
                                        </div>
                                        </div>
                                        
                               
                                <div class="form-group push-30-t">
                                    <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                                        <button class="btn btn-sm btn-block btn-primary" type="submit" name="hr_login">Log in</button>
                                    </div>
                                </div>
                            </form>
                            <!-- END Login Form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Login Content -->

 
        
         
        <!-- END Login Footer -->

        <!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
        <script src="<?php echo base_url();?>assets/js/core/jquery.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/core/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/core/jquery.slimscroll.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/core/jquery.scrollLock.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/core/jquery.appear.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/core/jquery.countTo.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/core/jquery.placeholder.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/core/js.cookie.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/app.js"></script>

        <!-- Page JS Plugins -->
        <script src="<?php echo base_url();?>assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>

        <!-- Page JS Code -->
        <script src="<?php echo base_url();?>assets/js/pages/base_pages_login.js"></script>
    </body>
</html>