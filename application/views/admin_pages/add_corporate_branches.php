              

            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter3">
                    <div class="row items-push">
                        <div class="col-sm-10">
                            <h1 class="page-heading">
                            Add Corporate Branches
                            </h1>
                        </div>
                        
                        
                       <div class="col-md-2">
                        <div class="col-xs-12">
                          <a href="<?php echo base_url('admin/corporate_branches');?>" class="btn btn-minw btn-danger" type="button">View</a>
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
                                <div class="block-content block-content-narrow">
                   <form class="js-validation-bootstrap form-horizontal" action="" method="post" enctype="multipart/form-data" >
                                       
                                       <br>

                                       
                                       <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" for="example-text-input">Corporate Company</label>
                                            <div class="col-sm-9">
              
              
                        <select class="js-select2 form-control" id="company" name="company" style="width: 100%;" data-placeholder="Choose one.." required>
                                               
                                                    <option value="">Please Select Corporate Company </option>
                                                    
                                                   
<?php 
$a =1;
foreach($corporate_clients as $corporate_client){?>             
                                                   
                                                    <option value="<?php echo $corporate_client->id;?>"><?php echo $corporate_client->name;?></option>
                                                    
 <?php
$a++;
}
?>                                                     
                                                     
                                                     
                                                     </select>                                
              
             
              
                                             </div>
                                        </div>
                                        </div>
                                        
                                        
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" for="example-text-input">Branch Name</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="name1" name="name1"  required></div>
                                        </div>
                                        </div>
                                        
                              
                                  
                                    <div class="form-group">
                                            <div class="col-xs-9">
                                               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <button class="btn btn-sm btn-primary" name="add_branches" type="submit">Add Branch</button>
                                               &nbsp;&nbsp;<button class="btn btn-sm btn-primary" name="save_add_branches" type="submit">Save & Add Branch</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                
                               

  <div class="form-group"> <hr> </div>
                                 


 
                                
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