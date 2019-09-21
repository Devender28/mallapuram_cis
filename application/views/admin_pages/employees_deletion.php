<?php

if(isset($_POST['employees_deletion'])){

      if(!empty($_POST['check_list']))
	  {
         foreach($_POST['check_list'] as $selected)
		  {
	 
	        echo $selected; 
       }
     }
	  
	  
	  
}


?>


<main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter3">
                    <div class="row items-push">
                        <div class="col-sm-10">
                            <h1 class="page-heading">
                             Corporate Employees Deletion Process
                            </h1>
                        </div>
                        
                       <div class="col-md-2">
                        <div class="col-xs-12">
                          <a href="<?php echo base_url('admin/employees_addition');?>" class="btn btn-minw btn-danger" type="button">Add</a>
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
                                
                                
    <?php echo $msg;?>                       

  <div class="form-group"> <hr> </div>
                                 <div class="form-group">
                                 <div class="col-md-12" id="devtitle"><h4>CORPORATE EMPLOYEES LIST</h4><br>
                                   </div>
                                 </div>
                                 
                            
                                 
                                 
 <form method="post" action="" onsubmit="return confirm('Are you sure ? you want to delete this corporate Employees');" >

<div class="block-content">
                            <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/base_tables_datatables.js -->
                            <table class="display" id="example">
                                <thead class="bg-info">
                                    <tr>
                                        <th class="hidden-xs" style="width:1%;"></th> 
                                        <th >S.No</th>
                                        <th>Company Name</th>
                                        <th>Policy Id</th>
                                        <th>Employee Id</th>
                                       
                                        <th>Name</th>
                                        <th>Relation</th>
                                        
                                         <th class="hidden-xs">Status</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    
                                    
                                    
              
           
                                    
                                    
                                    
 <?php 
$a =1;
foreach($corporate_employees as $corporate_employee){?>                                    
                                    
                                    
                                    
                                    
                                    
                                        <tr >
                                        
                                        
                                        
                                     <td class="text-center">
                                           <label class="css-input css-checkbox css-checkbox-primary">
                                                <input type="checkbox" id="row_1" name="check_list[]" value="<?php echo $corporate_employee->employee_id;?>"><span></span>
                                            </label>
                                            
                                        </td>   
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        <td class="text-center"><?php echo $a;?></td>
                                        <td class="text-center"><?php echo $this->fun->getnewfieldvalue("corporate_client","name","id",$corporate_employee->corporate_id)?> </td>
                                        <td class="text-center"> <?php echo $corporate_employee->policy_id;?></td>
                                        <td class="text-center"><?php echo $corporate_employee->employee_id;?></td>
                                        <td class="text-center"><?php echo $corporate_employee->name;?></td>
                                        <td class="text-center" ><?php echo $corporate_employee->relation;?></td>
                                        
                                       <td class="text-center">    <button disabled="disabled" class="btn btn-<?php if($corporate_employee->status=='1') { echo 'success';} else { echo 'danger';} ?>" onclick="status('<?php echo $corporate_employee->id;?>','<?php echo $corporate_employee->status;?>');"  class="btn btn-xs btn-default" ><?php if($corporate_employee->status=='1') { echo 'Active';} else { echo 'Deactive';} ?></i></button></td>
                                       
                                       
                                       
                                       
                                        <td class="text-center">
                                        
                           
                             
                            
          <div class="btn-group">
           <a  onclick="deleterecord('<?php echo $corporate_employee->id;?>');"  class="btn btn-xs btn-default" ><i class="fa fa-times"></i></a>                                  
            </div>
                                       
                 </td>
              </tr>
                                    
                                    
                                   
                                   
<?php
$a++;
}
?>    



                              
                                   
                                   
                                   
                                   
                                   
                            
                           
                                    
                                    
                                </tbody>
                            </table>
                       
                       
                       
                  <div class="form-group">
                                     <div class="col-md-5"></div>
                                            <div class="col-xs-7" style="margin-top:20px; margin-bottom:20px;">
                                            
                                               <button class="btn btn-sm btn-primary"   name="employees_deletion"  type="submit">Delete</button>
                                              
                                            </div>
                                        </div>     
                       
                       
  </form>                     
                       
                       
                       
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
                        <button class="btn btn-sm btn-danger" type="button" data-dismiss="modal" >Close</button>
                        
                    </div>
                </div>
            </div>
        </div>







<script>
function deleterecord()
{
  
  
  swal({
  title: "Are you sure?",
  text: "you want to delete this corporate Employee Details..",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#DD6B55",
  confirmButtonText: "Yes, delete it!",
  closeOnConfirm: false,
  html: false
}, 

  });


}
</script>



  





<script>
function deleterecord1(){ 
swal({
  title: "Are you sure?",
  text: "you want to delete this corporate Employee Details..",
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
  $.post(<?php echo '"'.base_url('admin/delete1').'"';?>,
        {
          x: id, 
          y: img 
         
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
            
            
            
            
            
            
            