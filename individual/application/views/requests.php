<main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter3">
                    <div class="row items-push">
                        <div class="col-sm-9">
                            <h1 class="page-heading">
                              All Requests Details
                            </h1>
                        </div>
                        
                        <div class="col-md-3">
                        <div class="col-xs-6">
                         <a href="<?php echo base_url("new_policy_request");?>"> <button class="btn btn-minw btn-success" type="button">New</button></a>
                           
                           </div>
                           
                           
                           <div class="col-xs-6">
                         <a href="<?php echo base_url("existing_policy_request");?>"> <button class="btn btn-minw btn-info" type="button">Existing</button></a>
                           
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
                                
                                
                               


                                 


<div class="block-content">
                            <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/base_tables_datatables.js -->
                             <table class="display" id="example">
                                <thead>
                                    <tr class="bg-info">
                                        <th class="hidden-xs">Sl.NO</th>
                                        <th class="hidden-xs">Date</th>
                                        <th>Service Type</th>
                                        
                                        <th>Category</th>
                                        <th class="hidden-xs" >Comments</th>
                                        <th >Status1</th>
                                  <!--      
                                        
                                        <th >Actions</th>
                                        
                                        -->
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                   
                                   
 <?php 
$a =1;
foreach($requests as $request){?>                                    
                                   
                               
                                   

			   
			   
			  
<?php if($request->service_type=="new"){$color1='success';}?>
<?php if($request->service_type=="existing"){$color1='info';}?>			   
			   
			   
<?php if($request->category=="General"){$color='info';}?>
<?php if($request->category=="Moter Insurance"){$color='warning';}?>	
<?php if($request->category=="Self Insurance"){$color='danger';}?>
<?php if($request->category=="Health"){$color='success';}?>			   
			   
			   
<?php if($request->category=="Nominee Change"){$color='info';}?>
<?php if($request->category=="Policy Corrections"){$color='warning';}?>	
<?php if($request->category=="Claim Processing"){$color='danger';}?>
<?php if($request->category=="Renewal Payment"){$color='success';}?>	                                       
                                                         
                                   
                                   
                                   
                                    <tr>
                                        <td class="hidden-xs"><?php echo $a;?></td>
                                        <td class="hidden-xs"><?php echo $request->crdate;?></td>
                                        <td class="hidden-xs"><button  class="btn btn-minw btn-<?php echo  $color1;?>  disabled" ><?php echo ucwords($request->service_type);?></button></td>
                                        
                                        <td ><?php echo $request->category;?></td>
                                        <td class="hidden-xs"><?php echo $request->comments;?></td>
                                        
                                        
                                        
                                      <td class="font-w600">    <a class="btn btn-<?php if($request->status=='1') { echo 'success';} else { echo 'danger';} ?> disabled"   ><?php if($request->status=='1') { echo 'DONE';} else { echo 'Processing';} ?></i></a></td>  
                                        
                                        
                                        
                                        
                                        
                                        
                                        






                                  
                                        
                                        
          











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
function view_family_member(val)
{

 $.ajax({
 type: 'post',
 url: <?php echo '"'.base_url('view_family_member').'"';?>,
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
  text: "you want to delete this family member Details..",
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
  $.post(<?php echo '"'.base_url('delete').'"';?>,
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
  text: "you want to Deactivate this Family Member Details",
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
  $.post(<?php echo '"'.base_url('status').'"';?>,
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
  text: "you want to Activate this family member Details",
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
  $.post(<?php echo '"'.base_url('status').'"';?>,
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
        
        
        
        
        
        
        
        
        
                   
            
            
            
            