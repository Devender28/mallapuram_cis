<script type="text/javascript">
  function getType(id){ 

     $.ajax({
 type: 'post',
 url: <?php echo '"'.base_url('admin/getType').'"';?>,
 data: {
 id:id
 },
  success: function (response) { 
  document.getElementById("dev").innerHTML=response; 
 
 }
 });
  }
</script>
  
                
              

            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter3">
                    <div class="row items-push">
                        <div class="col-sm-10">
                            <h1 class="page-heading">
                            Update Insurance Policies
                            </h1>
                        </div>
                        
                        <div class="col-md-2">
                        <div class="col-xs-12">
                          <a href="<?php echo base_url('admin/insurance_policies');?>" class="btn btn-minw btn-danger" >Back</a>
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
                                <div class="block-content block-content-narrow">
                   <form class="js-validation-bootstrap form-horizontal" action="" method="post" enctype="multipart/form-data" >
                   <br>
                                   <?php echo $msg;?>
                                       
                                        <div class="form-group">
                                       <div class="col-md-6">
                                          
                                          <div class="col-sm-9">
             <label class="control-label" for="val-select2">Select Insurance Company</label>
                                           
                                                <select class="js-select2 form-control" id="val-select2" name="company" style="width: 100%;" data-placeholder="Choose one.." required>
                                               
                                                    <option> </option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                                    <?php foreach($companies as $cmp) {?>
                                                    <option value="<?php echo $cmp->id;?>" <?php if($cmp->id==$policy->company) echo "selected"; ?>><?php echo $cmp->name;?></option>
                                                    
                                                    <?php } ?>
                                                     </select>
                                            </div>
                                          </div>
                                        
                                          
                                        <div class="col-md-6">
                                          
                                          <div class="col-sm-9">
             <label class="control-label" for="val-select2">Select Categorey</label>
                                           
                                                <select class="js-select2 form-control" id="val-select2" name="category" style="width: 100%;" data-placeholder="Choose one.." required onchange="getType(this.value)">
                                               
                                                    <option> </option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                                    <option value="Group" <?php if($policy->category=='Group') echo "selected"; ?>>Group</option>
                                                    <option value="Individual" <?php if($policy->category=='Individual') echo "selected"; ?>>Individual</option>
                                       <option value="Corporate" <?php if($policy->category=='Corporate') echo "selected"; ?>>Corporate</option>
                                                    
                                                     </select>
                                            </div>
                                          </div>
                                          
                                        
                                        </div>
                                        
                                        <div class="form-group">
                                        
                                          
                                          
                                          
                                          
                                          
                                          
                                          <div class="col-md-6">
                                          <div class="col-sm-9">
             <label class="control-label" for="val-select2">Select Policy types</label>
                                           
                                                <select class="js-select2 form-control" id="dev" name="type" style="width: 100%;" data-placeholder="Choose one.."required>
                                               
                                                    <option> </option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                                    <option value="<?php echo $policy->type;?>" selected><?php echo $this->fun->getType($policy->type);?></option>
                                                   
                                                    
                                                     </select>
                                            </div>
                                          </div>
                                          
                                          
                                          
                                          <div class="col-md-6">
                                        
                                            <label class="col-xs-12" >Policy Name</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text"  name="name" value="<?php echo $policy->name;?>"  required></div>
                                        </div>
                                          
                                        </div>
                                        
                                        
                                        
                                        
                                        
                                        
                                
                                        
                                        
                                        
                                    
                                  
                                    <div class="form-group">
                                    
                                     <div class="col-xs-5"></div>
                                            <div class="col-xs-7">
                                               <button class="btn btn-sm btn-primary" type="submit" name="update_policy">Update</button>
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
                        <div class="block-content">
                           <table width="100%" border="0" cellspacing="0" cellpadding="5" class="table">
 
  <tr>
    <td>&nbsp; 1</td>
    <td>&nbsp; Insurance Company Name </td>
    <td>&nbsp; Mallapuram</td>
  </tr>
  <tr>
    <td>&nbsp; 2</td>
    <td>&nbsp; Company Select</td>
    <td>&nbsp; Mallapuram</td>
  </tr>
  <tr>
   <td>&nbsp; 3</td>
    <td>&nbsp; Select Categorey</td>
    <td>&nbsp; Group</td>
  </tr>
  <tr>
    <td>&nbsp; 4</td>
    <td>&nbsp; Select Policy types</td>
    <td>&nbsp; General</td>
  </tr>
  <tr>
   <td>&nbsp; 5</td>
    <td>&nbsp; Policy Type</td>
    <td>&nbsp; Health</td>
  </tr>
  <tr>
   <td>&nbsp; 6</td>
    <td>&nbsp; Policy Name</td>
    <td>&nbsp; Health</td>
  </tr>
</table>


                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Close</button>
                        <button class="btn btn-sm btn-primary" type="button" data-dismiss="modal"><i class="fa fa-check"></i> Ok</button>
                    </div>
                </div>
            </div>
        </div>


        <script>
function status(id,st){ 
  if(st==1){ 
swal({
  title: "Are you sure?",
  text: "you want to Deactivate this Policy",
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
         y: 0
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
  text: "you want to Activate this Policy",
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
         y: 1
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