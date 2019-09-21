    
           

            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter3">
                    <div class="row items-push">
                        <div class="col-sm-10">
                            <h1 class="page-heading">
                            Insurance Policy Types
                            </h1>
                        </div>
                      
                       <div class="col-md-2">
                        <div class="col-xs-12">
                          <a href="<?php echo base_url('admin/add_insurance_policy_type');?>" class="btn btn-minw btn-danger" type="button">Add</a>
                           </div>
                           </div>
                        
                    </div>
                </div>
                <!-- END Page Header -->

                <!-- Page Content -->
                <div class="content content-narrow">
                    <!-- Material Design -->
                   
                   
                   
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Default Elements -->
                            <div class="block">
                             
                              
                                
                              <div class="block-content">
                            <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/base_tables_datatables.js -->
                             <table class="display" id="example">
                                <thead class="bg-primary">
                                    <tr>
                                        <th class="text-center">S No</th>
                                        <th>Name</th>
                                        <th class="hidden-xs">Category</th>
                                        <th class="hidden-xs">Status</th>
                                        <th class="text-center" style="width: 10%;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php  $a=1;
                                  foreach($types as $type) {
                                ?>
                                    <tr>
                                        <td class="text-center"><?php echo $a++;?></td>
                                        <td class="font-w600"><?php echo $type->name;?></td>
                                        <td class="hidden-xs"><?php echo $type->category;?></td>  
                                        <td ><a class="btn btn-<?php if($type->status=='1') { echo 'success';} else { echo 'danger';} ?>" onclick="status('<?php echo $type->id;?>','<?php echo $type->status;?>');"  class="btn btn-xs btn-default" ><?php if($type->status=='1') { echo 'Active';} else { echo 'Deactive';} ?></i></a></td>                                     
                                        <td class="text-center">
                            
                                        
                                            <div class="btn-group">
                                            
                                            
                 <button  class="btn btn-xs btn-default"  data-toggle="modal" data-target="#modal-normal" type="button" onclick="viewtype(<?php echo $type->id;?>)" title="View Details"><i class="fa fa-eye"></i></button>
           <a href="<?php echo base_url('admin/edit_insurance_policy_type').'/'.$type->id;?>" class="btn btn-xs btn-default" ><i class="fa fa-pencil"></i></a>
          
             <a  onclick="deleterecord('<?php echo $type->id;?>');"  class="btn btn-xs btn-default" ><i class="fa fa-times"></i></a>
                                                
                                            </div>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                    
                                    
                                   
                              
                                    
                                    
                                </tbody>
                            </table>
                        </div>  
                                
                            </div>
                            
                       
                        </div>
                        
                    </div>
                    
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->

            <!-- Footer -->
         
            <!-- END Footer -->
      


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
                            <h3 class="block-title">View Policy Type Details</h3>
                        </div>
                        <div class="block-content" id="view_popup">
                         


                        </div>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Close</button>
                       
                        
                    </div>
                </div>
            </div>
        </div>
       
       
       
     
        
 <script>

 function status(id,st){ 
  if(st==1){ 
swal({
  title: "Are you sure?",
  text: "you want to Deactivate this Policy Type",
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
  text: "you want to Activate this Policy Type",
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


function deleterecord(id){ 
swal({
  title: "Are you sure?",
  text: "you want to delete this Policy Type",
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

function viewtype(val)
{

 $.ajax({
 type: 'post',
 url: <?php echo '"'.base_url('admin/viewtype').'"';?>,
 data: {
 id:val
 },
  success: function (response) {
  document.getElementById("view_popup").innerHTML=response; 
 
 }
 });
}

</script>            
        
        
        
        
        
        