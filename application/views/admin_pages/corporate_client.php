              
            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter3">
                    <div class="row items-push" >
                        <div class="col-sm-10">
                            <h1 class="page-heading">
                                Corporate Client
                            </h1>
                        </div>
                        
                        
                        
                        <div class="col-md-2">
                        <div class="col-xs-12">
                          <a href="<?php echo base_url('admin/add_corporate_client');?>" class="btn btn-minw btn-danger" type="button">Add</a>
                           </div>
                           </div>
                        
                        
                        
                        
                        <div class="col-md-2">
                        
                           </div>
                        
                    </div>
                </div>
                <!-- END Page Header -->

                <!-- Page Content -->
                <div class="content content-narrow">
                    <!-- Material Design -->
                 
                  <?php echo $msg;?>  
                    
                    
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Default Elements -->
                            <div class="block">
                                
                                
                                

  
  
  
  
  
  <div class="form-group"> <hr> </div>
                                 <div class="form-group">
                                 <div class="col-md-12" id="devtitle"><h4>CORPORATE CLIENTS</h4><br>
                                   </div>
                                 </div>







<div class="block-content">
                            <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/base_tables_datatables.js -->
                            <table class="display" id="example">
                                <thead class="bg-info">
                                    <tr>
                                        <th class="text-center">SNo</th>
                                        <th>Corporate Client</th>
                                        <th class="hidden-xs">Address</th>
                                        <th class="hidden-xs">Contact  Number</th>
                                        
                                        <th class="hidden-xs" style="width: 15%;">Logo</th>
                                        <th class="text-center" style="width: 15%;">Status</th>
                                        <th class="text-center" style="width: 10%;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    
                                    
                                    
              
           
                                    
                                    
                                    
 <?php 
$a =1;
foreach($corporate_clients as $corporate_client){?>                                    
                                    
                                    
                                    
                                    
                                    
                                        <tr>
                                         <td class="text-center"><?php echo $a;?></td>
                                        
                                        <td class="font-w600"> <?php echo $corporate_client->name;?></td>
                                         <td class="hidden-xs"> <?php echo $corporate_client->address;?></td>
                                         <td class="hidden-xs"><?php echo $corporate_client->contact_number;?></td>
                                         
                                         
                                         
                                         <td class="hidden-xs">
                                         
    <?php
	$filename="uploads/corporate_client/logo/".$corporate_client->logo;
	
	
	if(file_exists($filename))
	{
    ?>
    <img src="<?php echo base_url('uploads/corporate_client/logo/'.$corporate_client->logo);?>" width="200" height="100">
    <?php
	}
	else
	{
    ?>
  	<img src="<?php echo base_url();?>uploads/dummy_images/dummy.jpg" width="200" height="100">
	<?php
	}
    ?>
    
                                         
                                         
                                         
                                         
                                         </td>
                                         
                                         
                                         
                                         
                                      <td class="font-w600">    <a class="btn btn-<?php if($corporate_client->status=='1') { echo 'success';} else { echo 'danger';} ?>" onclick="status('<?php echo $corporate_client->id;?>','<?php echo $corporate_client->status;?>');"  class="btn btn-xs btn-default" ><?php if($corporate_client->status=='1') { echo 'Active';} else { echo 'Deactive';} ?></i></a></td>
                                         
                                         
                                         
                                         
                                        <td class="text-center">
                                        
                           
                             
                            
             <div class="btn-group">
             
            
                    
                    
                     <button class="btn btn-xs btn-default" data-toggle="modal" data-target="#modal-normal" type="button" onclick="view_corporate_client(<?php echo $corporate_client->id;?>)" title="View Details"><i class="fa fa-eye"></i></button>
                    
                    <a href="<?php echo base_url('admin/edit_corporate_client').'/'.$corporate_client->id;?>"> <button class="btn btn-xs btn-default" type="button"><i class="fa fa-pencil"></i></button></a>
                  
           <!-- <button class="js-swal-confirm btn btn-xs btn-default" type="button"><i class="fa fa-times"></i></button>-->
           <a  onclick="deleterecord('<?php echo $corporate_client->id;?>');"  class="btn btn-xs btn-default" ><i class="fa fa-times"></i></a>                                  
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
function view_corporate_client(val)
{

 $.ajax({
 type: 'post',
 url: <?php echo '"'.base_url('admin/view_corporate_client').'"';?>,
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
  text: "you want to delete this corporate_client Details..",
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
  text: "you want to Deactivate this Corporate Client Details",
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
  text: "you want to Activate this Corporate Client Details",
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
    
    