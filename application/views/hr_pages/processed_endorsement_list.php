<main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter3">
                    <div class="row items-push">
                        <div class="col-sm-10">
                            <h1 class="page-heading">
                           All Processed Endorsements
                            </h1>
                        </div>
                        
                       <div class="col-md-2">
                        <div class="col-xs-12">
                         
                           </div>
                           </div> 
                        
                    </div>
                </div>
                <!-- END Page Header -->

                <!-- Page Content -->
                <div class="content content-narrow">
                  
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Default Elements -->
                         
                            
                            
                            <div class="block">
                                
                                
                               

  <div class="form-group"> <hr> </div>
                               

<div class="block-content">

                            <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/base_tables_datatables.js -->
                            <table class="display" id="example">
                                <thead class="bg-info">
                                    <tr>
                                        <th >S.No</th>
                                         <th>Insurance Company</th>
                                        <th>Policy Id</th>
                                        <th>Used Amount</th>
                                        <th>Given Back Amount</th>
                                        
                                       <th>Endorsement Number</th>
                                        
                                          <th>Endorsement Copy</th>
                                          
                                          
                                     <!--     <th class="hidden-xs">Status</th>-->
                                         
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    
                                    
                                    
              
           
                                    
                                    
                                    
 <?php 
$a =1;
foreach($endorsement_charges as $endorsement_charge){?>                                    
                                    
                                    
                                    
                                    
                                    
                                        <tr >
                                        <td class="text-center"><?php echo $a;?></td>
                                         <td class="text-center"><?php echo $this->fun->getnewfieldvalue("insurance_companies","name","id",$endorsement_charge->insurance_company_id)?> </td>
                                        <td class="text-center"> <?php echo $endorsement_charge->policy_id;?></td>
                                         <td class="text-center"> <?php echo $endorsement_charge->addition_amount;?></td>
                                         <td class="text-center"> <?php echo $endorsement_charge->deletion_amount;?></td>
                                          
                                           <td class="text-center"> <?php echo $endorsement_charge->endorsement_number;?></td>
                                        <td class="text-center">
 <a href="<?php echo base_url();?>uploads/endorsement_copy/<?php echo $endorsement_charge->endorsement_copy;?>" download><button class="btn btn-info push-5-r push-10" type="button"><i class="fa fa-download"></i> download</button></a>
                                        </td>
                                       
                                        
                                  <!--     <td class="text-center">    <button disabled="disabled" class="btn btn-<?php if($endorsement_charge->status=='1') { echo 'success';} else { echo 'danger';} ?>" onclick="status('<?php echo $endorsement_charge->id;?>','<?php echo $endorsement_charge->status;?>');"  class="btn btn-xs btn-default" ><?php if($endorsement_charge->status=='1') { echo 'Active';} else { echo 'Deactive';} ?></i></button></td>-->
                                       
                                       
                                       
                                       
                                
                                        
                                        
                                        
                                        
                                        
                                  
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                    </tr>
                                   
                                    
                                    
                                   
                                   
<?php
$a++;
}
?>    



                              
                                   
                                   
                                   
                                   
                                   
                            
                           
                                    
                                    
                                </tbody>
                            </table>
                        </div> 
                                
                            </div>
                            <!-- END Default Elements -->
                        </div>
                        
                    </div>
                  
                   
                </div>
                <!-- END Page Content -->
            </main>
           
            



<div class="modal" id="modal-normal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="block block-themed block-transparent remove-margin-b">
                        <div class="block-header bg-primary-dark">
                            <ul class="block-options">
                                <li>
                                    <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                                </li>
                            </ul>
                            <h3 class="block-title">View Details</h3>
                        </div>
                        <div class="block-content" id="view_popup">
                        
                    
                        
                           


                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-sm btn-danger" type="button" data-dismiss="modal">Close</button>
                        
                    </div>
                </div>
            </div>
        </div>











<script type="text/javascript">
function view_corporate_employee(val)
{

 $.ajax({
 type: 'post',
 url: <?php echo '"'.base_url('admin/view_corporate_employee').'"';?>,
 data: {
 id:val
 },
  success: function (response) {
  document.getElementById("view_popup").innerHTML=response; 
 
 }
 });
}
</script>  





<script>
function deleterecord(id,img){ 
swal({
  title: "Are you sure?",
  text: "you want to delete this claim dump Details..",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#DD6B55",
  confirmButtonText: "Yes, delete it!",
  closeOnConfirm: false,
  html: false
}, 
function(isConfirm){
  
  if(isConfirm)
          {
  $.post(<?php echo '"'.base_url('admin/delete').'"';?>,
        {
          x: id, 
          y: img, 
          bdr: <?php echo '"'.$this->encrypt->encode($Table).'"';?>
        },
        function(data,status){
           // alert("Data: " + data + "\nStatus: " + status);
            if(data)//alert("Successfully Deleted");
            location.href="";
        });
         
         
      }
   

});
}




function status(id,st){ 
  if(st==1){ 
swal({
  title: "Are you sure?",
  text: "you want to Deactivate this Corporate Employee Details",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#DD6B55",
  confirmButtonText: "Yes, Deactivate!",
  closeOnConfirm: false,
  html: false
}, 
function(isConfirm){
  
  if(isConfirm)
          {
  $.post(<?php echo '"'.base_url('admin/status').'"';?>,
        {
          x: id, 
          y: 0,
          z: <?php echo '"'.$this->encrypt->encode($Table).'"';?>
        },
        function(data){
           // alert("Data: " + data + "\nStatus: " + status);
            if(data)//alert("Successfully Deleted");
            location.href="";
        });
         
         
      }
   

});} else {

  swal({
  title: "Are you sure?",
  text: "you want to Activate this Corporate Employee Details",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#DD6B55",
  confirmButtonText: "Yes, Activate!",
  closeOnConfirm: false,
  html: false
}, 
function(isConfirm){
  
  if(isConfirm)
           {
  $.post(<?php echo '"'.base_url('admin/status').'"';?>,
        {
          x: id, 
         y: 1,
         z: <?php echo '"'.$this->encrypt->encode($Table).'"';?>
        },
        function(data){
           // alert("Data: " + data + "\nStatus: " + status);
            if(data)//alert("Successfully Deleted");
            location.href="";
        });
         
         
      }

});
}
}









</script> 
            
            
            
            
            
            
            
            
 <script type="text/javascript">
function showBranches(val) 
{

 $.ajax({
 type: 'post',
 url: <?php echo '"'.base_url('admin/branches').'"';?>,
 data: {
  get_id:val
 },
  success: function (response) { 
  document.getElementById("branches").innerHTML=response; 
 
 
 
 }
 });  
 
 
 }
</script>            
            
            
            
            
            
            
            