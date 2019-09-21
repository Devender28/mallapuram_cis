<main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter3">
                    <div class="row items-push">
                        <div class="col-sm-10">
                            <h1 class="page-heading">
                              All Shared App Details
                            </h1>
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
                                        <th class="hidden-xs" >Sl.NO</th>
                                        <th class="hidden-xs" >Date</th>
                                        <th>Registred Member Name</th>
                                        <th>Shared Person Name</th>
                                        
                                        <th>Shared Email</th>
                                        <th >Shared Mobile</th>
                                        <!--  <th class="hidden-xs" >Status</th>
                                      
                                        
                                        <th >Actions</th>
                                        
                                        -->
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                   
                                   
 <?php 
$a =1;
foreach($share_app_details as $share_app_detail){?>                                    
                                   
                               
                                   

			   
			   
			  
                                   
                                                         
                                   
                                   
                                   
                                    <tr>
                                        <td class="hidden-xs "><?php echo $a;?></td>
                                        <td class="hidden-xs"><?php echo $share_app_detail->crdate;?></td>
                                        <td ><?php echo @$this->fun->getnewfieldvalue("ind_registration","first_name","max_id",$share_app_detail->member_id);?>&nbsp;<?php echo @$this->fun->getnewfieldvalue("ind_registration","middle_name","max_id",$share_app_detail->member_id);?>&nbsp;<?php echo @$this->fun->getnewfieldvalue("ind_registration","last_name","max_id",$share_app_detail->member_id);?></td>
                                        
                                        
                                        <td ><?php echo $share_app_detail->name;?></td>
                                        
                                        <td ><?php echo $share_app_detail->email;?></td>
                                        <td ><?php echo $share_app_detail->mobile;?></td>
                                        
                                        
                                <!--        
                                      <td class="font-w600">    <a class="btn btn-<?php if($share_app_detail->status=='1') { echo 'success';} else { echo 'success';} ?> disabled"   ><?php if($share_app_detail->status=='1') { echo 'Active';} else { echo 'Done';} ?></i></a></td>  
                                        
                                        
                                -->        
                                        
                                        
                                        
                                        






                                  
                                        
                                        
          











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
        
        
        
        
        
        
        
        
        
                   
            
            
            
            