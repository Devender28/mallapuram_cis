<script type="text/javascript">
  function getType(id){ 

     $.ajax({
 type: 'post',
 url: <?php echo '"'.base_url('getType').'"';?>,
 data: {
 id:id
 },
  success: function (response) { 
  document.getElementById("dev").innerHTML=response; 
 
 }
 });
  }
</script>
  
                
                <ul class="nav-header pull-left">
                    <li class="hidden-md hidden-lg">
                       
                        <button class="btn btn-default" data-toggle="layout" data-action="sidebar_toggle" type="button">
                            <i class="fa fa-navicon"></i>
                        </button>
                    </li>
                    <li class="hidden-xs hidden-sm">
                        
                        <button class="btn btn-default" data-toggle="layout" data-action="sidebar_mini_toggle" type="button">
                            <i class="fa fa-ellipsis-v"></i>
                        </button>
                    </li>
                    <li>
                       
                        
                    </li>
                   
                    
                </ul>
                <!-- END Header Navigation Left -->
            </header>
            <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter3">
                    <div class="row items-push">
                        <div class="col-sm-10">
                            <h1 class="page-heading">
                            Insurance Policies
                            </h1>
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
                   <form class="form-horizontal" action="" method="post" enctype="multipart/form-data" >
                   <br>
                                   <?php echo $msg;?>
                                       
                                        <div class="form-group">
                                       <div class="col-md-6">
                                          
                                          <div class="col-sm-9">
             <label class="control-label" for="val-select2">Select Insurance Company</label>
                                           
                                                <select class="js-select2 form-control" id="val-select2" name="company" style="width: 100%;" data-placeholder="Choose one.." required>
                                               
                                                    <option> </option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                                    <?php foreach($companies as $cmp) {?>
                                                    <option value="<?php echo $cmp->id;?>"><?php echo $cmp->name;?></option>
                                                    
                                                    <?php } ?>
                                                     </select>
                                            </div>
                                          </div>
                                        
                                          
                                        <div class="col-md-6">
                                          
                                          <div class="col-sm-9">
             <label class="control-label" for="val-select2">Select Categorey</label>
                                           
                                                <select class="js-select2 form-control" id="val-select2" name="category" style="width: 100%;" data-placeholder="Choose one.." required onchange="getType(this.value)">
                                               
                                                    <option> </option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                                    <option value="Group">Group</option>
                                                    <option value="Individual">Individual</option>
                                                    
                                                     </select>
                                            </div>
                                          </div>
                                          
                                        
                                        </div>
                                        
                                        <div class="form-group">
                                        
                                          
                                          
                                          
                                          
                                          
                                          
                                          <div class="col-md-6">
                                          <div class="col-sm-9">
             <label class="control-label" for="val-select2">Select Policy types</label>
                                           
                                                <select class="js-select2 form-control" id="dev" name="type" style="width: 100%;" data-placeholder="Choose one..">
                                               
                                                    <option> </option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                                    
                                                   
                                                    
                                                     </select>
                                            </div>
                                          </div>
                                          
                                          
                                          
                                          <div class="col-md-6">
                                        
                                            <label class="col-xs-12" >Policy Name</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="example-text-input" name="name" ></div>
                                        </div>
                                          
                                        </div>
                                        
                                        
                                        
                                        
                                        
                                        
                                
                                        
                                        
                                        
                                    
                                  
                                    <div class="form-group">
                                    
                                     <div class="col-xs-5"></div>
                                            <div class="col-xs-7">
                                               <button class="btn btn-sm btn-primary" type="submit" name="add_policy">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                
                                

  <div class="form-group"> <hr> </div>
                                 <div class="form-group">
                                 <div class="col-md-12" id="devtitle"><h4>INSURANCE POLICIES</h4><br>
                                   </div>
                                 </div>



<div class="block-content">
                            <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/base_tables_datatables.js -->
                            <table class="display" id="example">
                                <thead class="bg-primary">
                                    <tr>
                                        <th class="text-center">S No</th>
                                        <th>Name</th>
                                        <th class="hidden-xs">Company</th>
                                        <th class="hidden-xs">Type</th>
                                        <th class="hidden-xs">Category</th>
                                        <th class="hidden-xs">Status</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <?php 
                                            $a=1;
                                            foreach($policies as $policy){ ?>

                                        <td class="text-center"><?php echo $a++;?></td>
                                        <td class="font-w600"><?php echo $policy->name;?></td>
                                        <td class="hidden-xs"><?php echo $this->fun->getcompany($policy->company);?></td>
                                        <td class="hidden-xs"><?php echo $this->fun->getType($policy->type);?></td>
                                       <td class="hidden-xs"><?php echo $policy->category;?></td>
                                       <td class="hidden-xs"><a class="btn btn-<?php if($policy->status=='1') { echo 'success';} else { echo 'danger';} ?>" onclick="status('<?php echo $policy->id;?>','<?php echo $policy->status;?>');"  class="btn btn-xs btn-default" ><?php if($policy->status=='1') { echo 'Active';} else { echo 'Deactive';} ?></i></a></td>
                                        <td class="text-center">                               
            
                                        
                                                <div class="btn-group">
                                                
                <a  class="btn btn-xs btn-default"  data-toggle="modal" data-target="#modal-normal" type="button" onclick="viewpolicy(<?php echo $policy->id;?>)" title="View Details"><i class="fa fa-eye"></i></a>
                                    <a href="<?php echo base_url('edit_insurance_policy').'/'.$policy->id;?>" class="btn btn-xs btn-default" ><i class="fa fa-pencil"></i></a>
                                                    
                                               <a  onclick="deleterecord('<?php echo $policy->id;?>');"  class="btn btn-xs btn-default" ><i class="fa fa-times"></i></a>
                                                    
                                                </div>
                                        </td>
                                    </tr>
                                    
                                    
                                   <?php } ?>
                                   
                                   
                              
                                    
                                    
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
                            <h3 class="block-title">View Policy Details</h3>
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

function viewpolicy(val)
{

 $.ajax({
 type: 'post',
 url: <?php echo '"'.base_url('viewpolicy').'"';?>,
 data: {
 id:val
 },
  success: function (response) {
  document.getElementById("view_popup").innerHTML=response; 
 
 }
 });
}

function deleterecord(id){ 
swal({
  title: "Are you sure?",
  text: "you want to delete this Policy",
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
</script> 