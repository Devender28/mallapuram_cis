<main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter3">
                    <div class="row items-push">
                        <div class="col-sm-10">
                            <h1 class="page-heading">
                               Family Member Details
                            </h1>
                        </div>
                        
                        <div class="col-md-2">
                        <div class="col-xs-12">
                         <a href="<?php echo base_url("add_family_member");?>"> <button class="btn btn-minw btn-danger" type="button">Add</button></a>
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
                                    <tr>
                                        <th class="hidden-xs"></th>
                                        <th>Name</th>
                                        <th class="hidden-xs">Email</th>
                                        <th class="hidden-xs" >Phone</th>
                                        <th >Status</th>
                                        <th >Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                   
                                   
 <?php 
$a =1;
foreach($family_members as $family_member){?>                                    
                                   
                                   
                                   
                                    <tr>
                                        <td class="hidden-xs">1</td>
                                        <td ><?php echo $family_member->first_name;?>&nbsp;<?php echo $family_member->middle_name;?>&nbsp;<?php echo $family_member->last_name;?></td>
                                        <td class="hidden-xs"><?php echo $family_member->relationship;?></td>
                                        <td class="hidden-xs"><?php echo $family_member->mobile1;?></td>
                                        
                                        
                                        
                                      <td class="font-w600">    <a class="btn btn-<?php if($family_member->status=='1') { echo 'success';} else { echo 'danger';} ?>"  class="btn btn-xs btn-default" ><?php if($family_member->status=='1') { echo 'Active';} else { echo 'Processing';} ?></i></a></td>  
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
<!--                                        
                                        
                                        <td class="font-w600">    <a class="btn btn-<?php if($family_member->status=='1') { echo 'success';} else { echo 'danger';} ?>" onclick="status('<?php echo $family_member->id;?>','<?php echo $family_member->status;?>');"  class="btn btn-xs btn-default" ><?php if($family_member->status=='1') { echo 'Active';} else { echo 'Deactive';} ?></i></a></td>
                                       
-->





                                       
                                        
                                        
                                        
          <td class="text-center">
             <div class="btn-group">
           <button class="btn btn-xs btn-default" data-toggle="modal" data-target="#modal-normal" type="button" onclick="view_family_member(<?php echo $family_member->id;?>)" title="View Details"><i class="fa fa-eye"></i></button>
                    <a href="<?php echo base_url('edit_family_member').'/'.$family_member->id;?>"> <button class="btn btn-xs btn-default" type="button"><i class="fa fa-pencil"></i></button></a>
                  
           <!-- <button class="js-swal-confirm btn btn-xs btn-default" type="button"><i class="fa fa-times"></i></button>-->
           <a  onclick="deleterecord('<?php echo $family_member->id;?>');"  class="btn btn-xs btn-default" ><i class="fa fa-times"></i></a>                                  
                                            </div>
       </td>


 
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
        
        
        
        
        
        
        
        
        
                   
            
            
            
            