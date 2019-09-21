<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>:: Welcome to Mallapuram ::</title>

        <meta name="description" content="Mallapuram">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="assets/img/favicons/favicon.png">

     

        <!-- Stylesheets -->
        <!-- Web fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">

        <!-- Bootstrap and OneUI CSS framework -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" id="css-main" href="assets/css/oneui.css">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
        <!-- END Stylesheets -->
    </head>
    <body>
        <!-- Register Content -->
        <div class="content overflow-hidden">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
                    <!-- Register Block -->
                    <div class="block block-themed animated fadeIn">
                        <div class="block-header bg-success bg_1">
                            
                            <h3 class="block-title "> Forgot Password</h3>
                        </div>
                        <div class="block-content block-content-full block-content-narrow" style="padding:20px;">
                            <!-- Register Title -->
                            <div align="center" class="form-group"> <img src="assets/img/logo-mallapuram.png" width="300" height="100" ></div>
                          
                            <!-- END Register Title -->

                            <!-- Register Form -->
                            <!-- jQuery Validation (.js-validation-register class is initialized in js/pages/base_pages_register.js) -->
                            <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                            <form class="js-validation-register form-horizontal push-50-t push-50" action="" method="post">
                            <br>
                                  <?php echo @$msg;?>
                             
                                <div class="form-group">
                                    <div class="col-md-12">
                                            <label >Enter Your Email</label>
                                            
            <input class="form-control" type="email" id="example-text-input" name="email" required>
                                        
                                        </div>
                                </div>
                                
                                
                                <div class="form-group">
                                    <div class="col-md-6">
                                        <div class="font-s13">
                                            <a href="<?php echo base_url();?>">Login</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="font-s13 text-right push-5-t">
                                             <a href="<?php echo base_url('register');?>">Register Now</a>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                
                                
                                
                                
                                <div class="form-group">
                                    <div align="center" class="col-xs-12"><br>

                                        <button class="btn btn-danger" type="submit" name="fpassword"><i class="fa fa-plus pull-right"></i> Reset Password</button>
                                        
                                    
                               
                           
                                    </div>
                                    
                                 
                               
                                
                                    
                                </div>
                            </form>
                            <!-- END Register Form -->
                      </div>
                    </div>
                    <!-- END Register Block -->
                </div>
            </div>
        </div>
        <!-- END Register Content -->

        <!-- Register Footer -->
      
        <!-- END Register Footer -->

        <!-- Terms Modal -->
        
        <!-- END Terms Modal -->

       </body>
</html>