<main id="main-container">
               <div class="content bg-gray-lighter3">
                    <div class="row items-push">
                        <div class="col-sm-10">
                            <h1 class="page-heading">
                           <?php echo ucwords($this->fun->getnewfieldvalue('ind_registration','first_name','max_id',$this->uri->segment(3)));?> Policies Details
                            </h1>
                            
                            
                           
                        </div>
                        
                        
                        <div class="col-md-2">
                        <div class="col-xs-12">
                          <a href="<?php echo base_url('admin/member_policies_report');?>" class="btn btn-minw btn-danger" type="button">Back</a>
                           </div>
                           </div>
                        
                        
                     </div>
                     
                     
                     
                </div>
                     
                 
                    
     <div class="col-md-12">
               <div class="block">
                   <div class="block-content">
                            
                            <table class="display" id="example">
                                <thead class="bg-info">
                                    <tr>
                                        <th>SNo</th>
                                        <th>Created Date</th>
                                        <th>Insurance Company</th>
                                        
                                        <th class="hidden-xs">Policy Name</th>
                                        <th class="hidden-xs">Policy Number</th>
                                        <th class="hidden-xs">Policy Holder Name</th>
                                        <th class="hidden-xs">Policy Start Date</th>
                                        <th class="hidden-xs">Status</th>
                                        <th class="hidden-xs">Actions</th>
                                       <!-- <th class="hidden-xs">Status</th>-->
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    
<?php 
$a =1;
foreach($registered_members as $registered_member)
{
?>                                    
                                    
                                    
                                        <tr>
                                         <td><?php echo $a;?></td>
                                         <td class="font-w600"> <?php echo $registered_member->crdate ;?></td>
                                        <td class="hidden-xs"><?php echo $this->fun->getnewfieldvalue('insurance_companies','name','id',$registered_member->insurance_company);?> </td>                                     
                                        <td class="hidden-xs"><?php echo $this->fun->getnewfieldvalue('insurance_policy','name','id',$registered_member->policy_name);?></td>
                                         <td class="hidden-xs"><?php echo $registered_member->policy_number;?></td>
                                       <td class="hidden-xs"><?php echo $registered_member->policy_holder_name;?></td>
                                       <td class="hidden-xs"><?php echo $registered_member->policy_start_date;?></td>
                                         
                                         

                                     
                                         
                                         
                                      <td class="text-center">    
                                        
                                        
                                      <a class="btn btn-<?php if($registered_member->status=='1') { echo 'success';} else { echo 'danger';} ?>" onclick="status('<?php echo $registered_member->id;?>','<?php echo $registered_member->status;?>');"  class="btn btn-xs btn-default" ><?php if($registered_member->status=='1') { echo 'Active';} else { echo 'Deactive';} ?></i>
                                  </a>  
                                        
                                        
                                       </td>
                                        
                                       
 
                                 
   
                             
                                  
                                  
                                       

                                     
       <td class="text-center">
                                        
             <div class="btn-group">
             
           <button class="btn btn-xs btn-default" data-toggle="modal" data-target="#modal-normal" type="button" onclick="view_member_policies(<?php echo $registered_member->id;?>)" title="View Details"><i class="fa fa-eye"></i></button>
                    
  <!--   <a href="<?php echo base_url('admin/edit_corporate_employee').'/'.$registered_member->id;?>"> <button class="btn btn-xs btn-default" type="button"><i class="fa fa-pencil"></i></button></a>-->
    
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
                 </div>
               </div>
          </div>
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
                            <h3 class="block-title">VIEW POLICY DETAILS</h3>
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
function view_member_policies(val)
{
	

$.ajax({
 type: 'post',
 url: <?php echo '"'.base_url('admin/view_member_policies').'"';?>,
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
  text: "you want to Deactivate this policy Details",
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
  text: "you want to Activate this policy Details",
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
            
          