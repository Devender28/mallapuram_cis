<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>:: Welcome to Mallapuram ::</title>

        <meta name="description" content="Mallapuram">
        <meta name="author" content="Mallapuram">
        <meta name="robots" content="Mallapuram, Mallapuram">
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
        <div class="content overflow-hidden">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
                    <!-- Register Block -->
                    <div class="block block-themed animated fadeIn">
                        <div class="block-header bg-success bg_1">
                            
                            <h3 class="block-title" >Client Log In</h3>
                        </div>
                        <div class="block-content block-content-full block-content-narrow" style="padding:20px;">
                            <!-- Register Title -->
                            <div align="center" class="form-group"> <img src="assets/img/logo-mallapuram.png" width="280" height="80" ></div>
                          
                           <?php echo  $msg;?>

                            <!-- END Register Title -->

                            <!-- Register Form -->
                            <!-- jQuery Validation (.js-validation-register class is initialized in js/pages/base_pages_register.js) -->
                            <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                           <form class="js-validation-login form-horizontal push-30-t" action="" method="post">
                                <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="col-xs-12" for="example-text-input">Email ID</label>
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
                                        <button class="btn btn-danger" type="submit" name="hr_login"><i class="fa fa-plus pull-right"></i>Log in</button>
                                    </div>
                                </div>
                            </form>
                            <!-- END Register Form -->
                      </div>
                    </div>
                    <!-- END Register Block -->

<div class="col-md-12" style="padding:0px"><img src="<?php echo base_url();?>assets/images/hr_logo.jpg" class="img-responsive" ></div>
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