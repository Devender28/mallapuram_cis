<?php
if(!$this->session->userdata('login')){
           redirect('', 'refresh');
        }
        
        ?>
<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>:: Welcome to Mallapuram ::</title>

        <meta name="description" content="Mallapuram Insurance">
        <meta name="author" content="">
        <meta name="robots" content="">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="<?php echo base_url();?>images/favicon.jpg">

        

        <!-- Stylesheets -->
        <!-- Web fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">

        <!-- Bootstrap and OneUI CSS framework -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" id="css-main" href="<?php echo base_url();?>assets/css/oneui.css">
        
         <!-- <link rel="stylesheet" href="<?php echo base_url();?>assets/js/plugins/datatables/jquery.dataTables.min.css"> -->
         
         
         
           <link rel="stylesheet" href="<?php echo base_url();?>assets/js/plugins/sweetalert/sweetalert.min.css">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
        <!-- END Stylesheets -->


    </head>
     <script src="<?php echo base_url();?>/assets/js/core/jquery.min.js"></script>
        <script src="<?php echo base_url();?>/assets/js/core/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>/assets/js/core/jquery.slimscroll.min.js"></script>
        <script src="<?php echo base_url();?>/assets/js/core/jquery.scrollLock.min.js"></script>
        <script src="<?php echo base_url();?>/assets/js/core/jquery.appear.min.js"></script>
        <script src="<?php echo base_url();?>/assets/js/core/jquery.countTo.min.js"></script>
        <script src="<?php echo base_url();?>/assets/js/core/jquery.placeholder.min.js"></script>
    
     
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://editor.datatables.net/extensions/Editor/css/editor.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/select/1.2.3/css/select.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.4.2/css/buttons.dataTables.min.css">



<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/select/1.2.3/js/dataTables.select.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.4.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.4.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.4.2/js/buttons.print.min.js"></script>
<script src="https://editor.datatables.net/extensions/Editor/js/dataTables.editor.min.js"></script>

<script type="text/javascript">
  $(document).ready(function() {
    var dTitle = $("#devtitle").text();
    $('#example').dataTable( {
      
       
    } );
} );
</script>














