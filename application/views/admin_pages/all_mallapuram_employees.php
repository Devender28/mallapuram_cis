
  

            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter3">
                    <div class="row items-push">
                        <div class="col-sm-10">
                            <h1 class="page-heading">
                          All Mallapuram Employees
                            </h1>
                        </div>
                        
                      <div class="col-md-2">
                        <div class="col-xs-12">
                        <a href="<?php echo base_url('admin/add_mallapuram_employee');?>">  <button class= "btn btn-minw btn-danger" type="button">Add</button></a>
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
                                 <thead style="background-color: #69C; color:#FFF;">
                                    <tr>
                                        <th class="text-center">Sl No</th>
                                        <th>Employee Name</th>
                                        <th class="hidden-xs" style="width: 20%;">Username</th>
                                        <th class="hidden-xs" style="width: 20%;">Password</th>
                                         <th class="hidden-xs" style="width: 20%;">Employee Role</th>
                                          <th class="hidden-xs" style="width: 10%;">Status</th>
                                          <th class="hidden-xs" style="width: 10%;">Action</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                    $a =1;
                                 foreach($emps as $emp) { ?>
                                    <tr>
                                        <td class="text-center"><?php echo $a;?></td>
                                        <td class="font-w600"><?php echo $emp->name;?></td>
                                        <td class="hidden-xs"><?php echo $emp->email;?></td>
                                       <td class="hidden-xs"><?php echo $emp->password;?> </td>
                                        <td class="hidden-xs"><?php echo $emp->emp_type;?> </td>
                                         <td ><a class="btn btn-<?php if($emp->status=='1') { echo 'success';} else { echo 'danger';} ?>" onclick="status('<?php echo $emp->id;?>','<?php echo $emp->status;?>');"  class="btn btn-xs btn-default" ><?php if($emp->status=='1') { echo 'Active';} else { echo 'Deactive';} ?></i></a></td>
                                      
                                        <td><a href="<?php echo base_url('admin/edit_mallapuram_employee').'/'.$emp->id;?>"> <button class="btn btn-md btn-default" type="button"><i class="fa fa-pencil"></i></button></a></td>
                                    </tr>
                                    
                                    <?php $a++; } ?>
                                    
                                
                                    
                       
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
            
           
           
           
        
        <script type="text/javascript">


function status(id,st){ 
  if(st==1){ 
swal({
  title: "Are you sure?",
  text: "you want to Deactivate this Employee",
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
  text: "you want to Activate this Employee",
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