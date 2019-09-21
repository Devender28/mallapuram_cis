


            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter3">
                    <div class="row items-push">
                        <div class="col-sm-10">
                            <h1 class="page-heading" id="devtitle">
                                Insurance Companies
                            </h1>
                        </div>
                        
                         <div class="col-md-2">
                        <div class="col-xs-12">
                        <a href="<?php echo base_url('admin/add_insurance_companies');?>"  class="btn btn-minw btn-danger">Add</a>
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
                                    <tr >
                                        <th class="text-center">SNO</th>
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
                                            <a href="<?php echo base_url('admin/edit_insurance_company').'/'.$cmp->id;?>"> <button class="btn btn-xs btn-default" type="button"><i class="fa fa-pencil"></i></button></a>
                                                
                                          
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
                        <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Close</button>
                        
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





function viewinscompany(val)
{

 $.ajax({
 type: 'post',
 url: <?php echo '"'.base_url('admin/viewinscompany').'"';?>,
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



$(document).ready(function(){
   $("#form").validate({
      rules: {
         name: {
            required: true
               }
         },
         messages: {
            name: "Required Field"
         }
     });
});
  

</script>                          
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                            </div>
                            <!-- END Default Elements -->
                        </div>
                        
                    </div>
                  
                   
                </div>
                <!-- END Page Content -->
            </main>
            
       
 

