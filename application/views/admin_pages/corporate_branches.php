             

            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter3">
                    <div class="row items-push">
                        <div class="col-sm-10">
                            <h1 class="page-heading">
                           Corporate Branches
                            </h1>
                        </div>
                     
                     
                     
                     
                        
                        
                        <div class="col-md-2">
                        <div class="col-xs-12">
                          <a href="<?php echo base_url('admin/add_corporate_branches');?>" class="btn btn-minw btn-danger" type="button">Add</a>
                           </div>
                           </div>
                        
                        
                       <div class="col-md-2">
                        
                           </div>
                        
                    </div>
                </div>
                <!-- END Page Header -->

                <!-- Page Content -->
                <div class="content content-narrow">
                   
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Default Elements -->
                           
                  <?php echo $msg;?>         
                           
                           
                            <div class="block">
                                
                                
                               

  <div class="form-group"> <hr> </div>
                                 <div class="form-group">
                                 <div class="col-md-12" id="devtitle"><h4>CORPORATE BRANCHES</h4><br>
                                   </div>
                                 </div>


<div class="block-content">
                            <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/base_tables_datatables.js -->
                            <table class="display" id="example">
                                <thead class="bg-info">
                                    <tr>
                                        <th class="text-center">SNo</th>
                                        <th class="text-center">Corporate Company</th>
                                        <th  class="text-center">Branch Name</th>
                                        <th  class="text-center">Status</th>
                                        <th class="text-center" style="width: 10%;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
 <?php 
$a =1;
foreach($branches as $branch){?>                                  
                                   
                                   
                                    <tr>
                                        <td class="text-center"><?php echo $a;?></td>
                                        <td class="text-center"><?php echo $this->fun->getnewfieldvalue('corporate_client','name','id',$branch->company);?></td>
                                         <td class="text-center"><?php echo $branch->name;?></td>
                                         
                                       <td class="font-w600">    <a class="btn btn-<?php if($branch->status=='1') { echo 'success';} else { echo 'danger';} ?>" onclick="status('<?php echo $branch->id;?>','<?php echo $branch->status;?>');"  class="btn btn-xs btn-default" ><?php if($branch->status=='1') { echo 'Active';} else { echo 'Deactive';} ?></i></a></td>
                                       
                                       
                                        <td class="text-center">
                                       <div class="btn-group">
                                         
                                         
                                         
                                         
                                       <a href="<?php echo base_url('admin/edit_corporate_branches').'/'.$branch->id;?>"> <button class="btn btn-xs btn-default" type="button"><i class="fa fa-pencil"></i></button></a>  
                                         
                                         
                                       <a  onclick="deleterecord('<?php echo $branch->id;?>');"  class="btn btn-xs btn-default" ><i class="fa fa-times"></i></a>  
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
           
     <script>
function deleterecord(id,img){ 
swal({
  title: "Are you sure?",
  text: "you want to delete this corporate client branch Details..",
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
  text: "you want to Deactivate this Corporate Client Branch Details",
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
  text: "you want to Activate this Corporate Client Branch Details",
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