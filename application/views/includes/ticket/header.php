<?php
if(!$this->session->userdata('ticketsystem_login')){
           redirect('ticket', 'refresh');
        }
        
        ?>



<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>:: Welcome to Mallapuram :: </title>

        <meta name="description" content="">
        <meta name="author" content="Elefontdesign">
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
        

         
         
         
           <link rel="stylesheet" href="<?php echo base_url();?>assets/js/plugins/sweetalert/sweetalert.min.css">
           
           
           
       
        
    </head>
    
          <script src="<?php echo base_url();?>assets/js/core/jquery.min.js"></script>   
     <script>
            jQuery(function () {
                // Init page helpers (Table Tools helper)
                App.initHelpers('table-tools');
            });
        </script>
    
    


     
    
    
       
    
    
    
  