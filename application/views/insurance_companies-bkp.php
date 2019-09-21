






 
                <ul class="nav-header pull-left">
                    <li class="hidden-md hidden-lg">
                        <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                        <button class="btn btn-default" data-toggle="layout" data-action="sidebar_toggle" type="button">
                            <i class="fa fa-navicon"></i>
                        </button>
                    </li>
                    <li class="hidden-xs hidden-sm">
                        <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                        <button class="btn btn-default" data-toggle="layout" data-action="sidebar_mini_toggle" type="button">
                            <i class="fa fa-ellipsis-v"></i>
                        </button>
                    </li>
                    <li>
                        <!-- Opens the Apps modal found at the bottom of the page, before including JS code -->
                        
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
                                Insurance Companies
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
                                       
                                      
                                        <div class="col-md-6">
                                         <div class="form-group">
                                            <label class="col-xs-12" >Name of the Company</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="example-text-input" name="company" required>    </div>
                                        </div>
                                         </div>
                                        
                                        
                                        
                                        <div class="col-md-6">
                                         <div class="form-group">
                                            <label class="col-xs-12" >Branch Name</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="example-text-input" name="branch" required></div>
                                        </div>
                                        </div>
                                       
                                        
                                        
                                        
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Branch Address</label>
                                            <div class="col-sm-9">
              <textarea class="form-control" id="material-textarea-small" name="branch_address" rows="3" required></textarea>                                  </div>
                                        </div>
                                        </div>
                                        
                                        
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Head Office Address</label>
                                            <div class="col-sm-9">
             <textarea class="form-control" id="material-textarea-small" name="head_address" rows="3" required></textarea>                                  </div>
                                        </div>
                                        </div>
                                        
                                        
                                         <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >GSTIN Number</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="example-text-input" name="gstin" required>    </div>
                                        </div>
                                        </div>
                                        
                                        
                                        <div class="col-md-6">
                                         <div class="form-group">
                                            <label class="col-xs-12" >Logo</label>
                                            <div class="col-sm-9">
                                                <input type="file" id="example-file-input" name="logo" required>
                                                <br>

                                            </div>
                                        </div>
                                        </div>
                                        
                                        
                                         <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Website Address</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="example-text-input" name="website" required> </div>
                                        </div>
                                        </div>
                                        
                                        
                                         <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Relationship Manager Name</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="example-text-input" name="r_manager_name" required> </div>
                                        </div>
                                        </div>
                                        
                                        
                                        
                                         <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Relationship Manager Contact Number</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="example-text-input" name="r_manager_number" required> </div>
                                        </div>
                                        </div>
                                        
                                        
                                          <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Relationship Manager Email Id</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="example-text-input" name="r_manager_email" required> </div>
                                        </div>
                                        </div>
                                        
                                        
                                        
                                         <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Branch Manager Name</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="example-text-input" name="b_manager_name" required> </div>
                                        </div>
                                        </div>
                                        
                                        
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Branch Manager Contact Number</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="example-text-input" name="b_manager_number" required> </div>
                                        </div>
                                        </div>
                                        
                                        
                                        
                                         <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Branch Manager Email Id</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="example-text-input" name="b_manager_email" required> </div>
                                        </div>
                                        </div>
                                        
                                        
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Regional Head Name</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="example-text-input" name="regonal_head_name" required> </div>
                                        </div>
                                        </div>
                                        
                                        
                                         <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Regional Head Contact Number</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="example-text-input" name="regional_head_number" required> </div>
                                        </div>
                                        </div>
                                        
                                        
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Regional Head Email Id</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="example-text-input" name="regional_head_email" required> </div>
                                        </div>
                                        </div>
                                        
                                        
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Service Forms Link</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="example-text-input" name="service_forms_link" > </div>
                                        </div>
                                        </div>
                                        
                                        
                                         <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Help Line Number</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="example-text-input" name="help_line_number" required> </div>
                                        </div>
                                        </div>
                                        
                                        
                                        
                                         <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Renewal Payment Link</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="example-text-input" name="renewal_link" > </div>
                                        </div>
                                        </div>
                                        
                                        
                                         <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Grievance Redressal</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="example-text-input" name="grievance_redressal" > </div>
                                        </div>
                                        </div>
                                        
                                        
                                         <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >All Branch locations link</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="example-text-input" name="all_branch_links" > </div>
                                        </div>
                                        </div>
                                        
                                         <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12">Network Hospitals List Link</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="example-text-input" name="nw_hospital_links" > <br>
              
               <label >Other link1</label>

<input class="form-control" type="text" id="example-text-input" name="other_link1" ><br>

<label >Other link2</label>



<input class="form-control" type="text" id="example-text-input" name="other_link2" >

</div>
                                        </div>
                                        </div>
                                        
                                    
                                    <div class="col-md-5"></div>      <div class="form-group">
                                            <div class="col-xs-6">
                                                <button class="btn btn-sm btn-primary" name="add_ins_company" type="submit">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                
                                

  <div class="form-group"> <hr> </div>
                                 <div class="form-group">
                                 <div class="col-md-12" id="devtitle"><h4>INSURANCE COMPANIES</h4><br>
                                   </div>
                                 </div>











<div class="block-content">
                            <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/base_tables_datatables.js -->
                            <table class="display" id="example">
                            
                           
                                <thead class="bg-primary">
                                    <tr >
                                        <th class="text-center"></th>
                                        <th>Company Name</th>
                                        <th class="hidden-xs">Branch</th>                                         
                                        <th class="hidden-xs">Manager</th>
                                        <th class="hidden-xs" >Manager Phone</th>
                                        <th class="hidden-xs">Manager Email</th>
                                        <th>Status</th>
                                        <th class="hidden-xs" >Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php $a=1;
                                foreach($companies as $cmp){ ?>
                                    <tr>
                                        <td class="text-center"><?php echo $a;?></td>
                                        <td class="font-w600"><?php echo $cmp->name;?></td>
                                        <td class="hidden-xs"><?php echo $cmp->branch_name;?></td>
                                       <td class="hidden-xs"><?php echo $cmp->relationship_manager_name;?></td>
                                       <td class="hidden-xs"><?php echo $cmp->relationship_manager_phone;?></td>
                                       <td class="hidden-xs"><?php echo $cmp->relationship_manager_email;?></td>
                                       <td ><a class="btn btn-<?php if($cmp->status=='1') { echo 'success';} else { echo 'danger';} ?>" onclick="status('<?php echo $cmp->id;?>','<?php echo $cmp->status;?>');"  class="btn btn-xs btn-default" ><?php if($cmp->status=='1') { echo 'Active';} else { echo 'Deactive';} ?></i></a></td>
                                        <td class="text-center">
                            
                                        
                                            <div class="btn-group">
                                            
                 <button  class="btn btn-xs btn-default"  data-toggle="modal" data-target="#modal-normal" type="button" onclick="viewinscompany(<?php echo $cmp->id;?>)" title="View Details"><i class="fa fa-eye"></i></button>
                                            <a href="<?php echo base_url('edit_insurance_company').'/'.$cmp->id;?>"> <button class="btn btn-xs btn-default" type="button"><i class="fa fa-pencil"></i></button></a>
                                                
                                          
                                           <a  onclick="deleterecord('<?php echo $cmp->id;?>');"  class="btn btn-xs btn-default" ><i class="fa fa-times"></i></a>
                                                
                                            </div>
                                        </td>
                                    </tr>
                                    
                                    
                                <?php $a++; } ?>   
                              
                                    
                                    
                                </tbody>
                            </table>
                        </div>



 <div class="modal fade" id="modal-normal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-fromright">
                <div class="modal-content">
                    <div class="block block-themed block-transparent remove-margin-b">
                        <div class="block-header bg-primary">
                            <ul class="block-options">
                                <li>
                                    <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                                </li>
                            </ul>
                            <h3 class="block-title">Insurance Company Details</h3>
                        </div>

                        <div class="block-content"  id="view_popup"></div>
                       

    
    
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-sm btn-danger" type="button" data-dismiss="modal">Close</button>
                        
                    </div>
                </div>
            </div>
        </div>
            
                                
                           
                           
       

       <script type="text/javascript">


function status(id,st){ 
  if(st==1){ 
swal({
  title: "Are you sure?",
  text: "you want to Deactivate this Company",
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
  text: "you want to Activate this Company",
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



function viewinscompany(val)
{

 $.ajax({
 type: 'post',
 url: <?php echo '"'.base_url('viewinscompany').'"';?>,
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
function deleterecord(id){ 
swal({
  title: "Are you sure?",
  text: "you want to delete this Company",
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
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                            </div>
                            <!-- END Default Elements -->
                        </div>
                        
                    </div>
                  
                   
                </div>
                <!-- END Page Content -->
            </main>
            
       
 

