  
  
   <footer id="page-footer" class="content-mini content-mini-full font-s12 bg-gray-lighter clearfix">
                 <div class="col-md-9">
                  Copyright © 2017. Mallapuram All reserved 
                    
                </div>
                <div class="col-md-3">
                   Powerd  by <a href="#" target="_blank">Elefont Design</a>
                </div>
            </footer>
            
            
            
            </div>
       
         
    </body>
</html>



            
        <script src="<?php echo base_url();?>/assets/js/core/jquery.min.js"></script>
        <script src="<?php echo base_url();?>/assets/js/core/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>/assets/js/core/jquery.slimscroll.min.js"></script>
        <script src="<?php echo base_url();?>/assets/js/core/jquery.scrollLock.min.js"></script>
        <script src="<?php echo base_url();?>/assets/js/core/jquery.appear.min.js"></script>
        <script src="<?php echo base_url();?>/assets/js/core/jquery.countTo.min.js"></script>
        <script src="<?php echo base_url();?>/assets/js/core/jquery.placeholder.min.js"></script>
        <script src="<?php echo base_url();?>/assets/js/core/js.cookie.min.js"></script>
        <script src="<?php echo base_url();?>/assets/js/app.js"></script>
        

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://editor.datatables.net/extensions/Editor/css/editor.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/select/1.2.3/css/select.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.4.2/css/buttons.dataTables.min.css">
<script type="text/javascript">
  $(document).ready(function() {
    var dTitle = $("#devtitle").text();
    $('#example').DataTable( {
      
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'excelHtml5',
                title: dTitle
               
            },
            {
                extend: 'pdfHtml5',
                title: dTitle
            },
            {
                extend: 'csv',
                title: dTitle
            },
            {
                extend: 'copy',
                title: dTitle
            },
            {
                extend: 'print',
                title: dTitle
            }
        ]
    } );

    $('#deva').DataTable( {
      
       })

} );


</script>

<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/select/1.2.3/js/dataTables.select.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.4.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.4.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.4.2/js/buttons.print.min.js"></script>
<script src="https://editor.datatables.net/extensions/Editor/js/dataTables.editor.min.js"></script>



<script src="<?php echo base_url();?>/assets/js/plugins/bootstrap-notify/bootstrap-notify.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/plugins/sweetalert/sweetalert.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/pages/base_ui_activity.js"></script>
<script>
            jQuery(function () {
                // Init page helpers (BS Notify Plugin)
                App.initHelpers('notify');
            });
</script>



<link rel="stylesheet" href="<?php echo base_url();?>/assets/js/plugins/select2/select2.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>/assets/js/plugins/select2/select2-bootstrap.min.css"> 
<script src="<?php echo base_url();?>/assets/js/plugins/select2/select2.full.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/plugins/jquery-validation/additional-methods.min.js"></script>

<script>
  jQuery(function () {
                App.initHelpers('select2');
            });
</script>
<script src="<?php echo base_url();?>/assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>

<!-- <script src="<?php echo base_url();?>assets/js/form_validation.js"></script> -->

<script>
var BaseFormValidation = function() {
   var initValidationBootstrap = function(){
        jQuery('.js-validation-bootstrap').validate({
            ignore: [],
            errorClass: 'help-block animated fadeInDown',
            errorElement: 'div',
            errorPlacement: function(error, e) {
                jQuery(e).parents('.form-group > div').append(error);
            },
            highlight: function(e) {
                var elem = jQuery(e);

                elem.closest('.form-group').removeClass('has-error').addClass('has-error');
                elem.closest('.help-block').remove();
            },
            success: function(e) {
                var elem = jQuery(e);

                elem.closest('.form-group').removeClass('has-error');
                elem.closest('.help-block').remove();
            },
            rules: {
                
				'name': {
                    required: true,
                    minlength: 3
                },
                'company1': {
                    required: true,
                    minlength: 3
                }
				
            },
            messages: {
                'name': {
                    required: 'Please enter a  Name'
                   
                },
				
				
				
				
			'company': 'Please enter a company',
			'branch': 'Please enter a branch',
			'branch_address': 'Please enter a branch address',
			'head_address': 'Please enter a head office address',
			'logo': 'Please enter a logo',
			'r_manager_name': 'Please enter a relationship manager name',
			'r_manager_number': 'Please enter a relationship manager contact number',
			'r_manager_email': 'Please enter a relationship manager email id',
			'service_forms_link': 'Please enter a service forms link',
			'help_line_number': 'Please enter a help line number',
			'renewal_link': 'Please enter a renewal link',
			'grievance_redressal': 'Please enter a grievance redressal',
			
				
			'category': 'Please enter a category',
			'type': 'Please enter a type',	
				
				
				
				
				'website': 'Please enter a website',
				'pan_number': 'Please enter pan number',
				'authorised_contact_person1_designation': 'Please enter a authorised contact person1 designation',
				'authorised_contact_person1_phone': 'Please enter a authorised contact person1 phone',
				'authorised_contact_person1_email': 'Please enter a authorised contact person1 email',
				'authorised_contact_person1_name': 'Please enter a authorised contact person1 name',
				'corporate_id': 'Please enter a corporate_id',
				'username': 'Please enter a username',
				'password': 'Please enter a password',
				'company': 'Please enter a company',
				'name1': 'Please enter a branch',
				'corporate_id': 'Please Select Company',
				'branches': 'Please Select branch',
				'employee_id': 'Please enter a employee id',
				'date_of_birth': 'Please enter a date of birth',
				'phone': 'Please enter a Mobile Number',
				'email': 'Please enter a email',
				
				
				
				
				
				
				'contact_number': 'Please enter a Contact Number',
				
                'address': 'Please enter a address',
				'gstn_number': 'Please enter a GSTN Number',
				'gstn_scan': 'Please enter a GSTN Scan Copy',
				
				
				'pincode': 'Please enter Pincode'
                
                
                
            }
        });
    };



    return {
        init: function () {
            // Init Bootstrap Forms Validation
            initValidationBootstrap();
            // Init Validation on Select2 change
            jQuery('.js-select2').on('change', function(){
                jQuery(this).valid();
            });
        }
    };
}();

jQuery(function(){ BaseFormValidation.init(); });
</script> 
        

 <link rel="stylesheet" href="<?php echo base_url();?>/assets/js/plugins/bootstrap-datepicker/bootstrap-datepicker3.min.css">
 <link rel="stylesheet" href="<?php echo base_url();?>/assets/js/plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.min.css">
 <link rel="stylesheet" href="<?php echo base_url();?>/assets/js/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
     
<script src="<?php echo base_url();?>/assets/js/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/plugins/bootstrap-datetimepicker/moment.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/plugins/bootstrap-colorpicker/bootstrap-colorpicker.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
      
<script src="<?php echo base_url();?>/assets/js/plugins/masked-inputs/jquery.maskedinput.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/plugins/jquery-auto-complete/jquery.auto-complete.min.js"></script>
       
       
 <script src="<?php echo base_url();?>/assets/js/pages/base_forms_pickers_more.js"></script>
 <script>
            jQuery(function () {

                App.initHelpers(['datepicker', 'datetimepicker', 'colorpicker', 'maxlength', 'select2', 'masked-inputs', 'rangeslider', 'tags-inputs']);
            });
 </script>
     
        
        
       <script type="text/javascript">
        
    $('#checkbox1').click(function(){ 
        if(this.checked) {
           // $('#name').show('slow');

            $('#na').html('<input type="text" id="dev" name="txtRow1" />');
        
        $('#name1').show('slow');
    }
        else {
           // $('#name').hide('slow');
        $('#dev').remove();
        $('#name1').hide('slow');
    }

    });

       </script>

<script type="text/javascript">
  

  $('#website,#service_forms_link,#renewal_link,#grievance_redressal,#all_branch_links,#nw_hospital_links,#other_link1,#other_link2').on('input', function() {
  rawInput = $(this).val();
  
  cleanInput = rawInput.replace('www.', '');
  cleanInput = cleanInput.replace('http://', '');
  cleanInput = cleanInput.replace('https://', ''); 
  $(this).val(cleanInput);
});
  
</script> 
        