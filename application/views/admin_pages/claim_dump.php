<main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter3">
                    <div class="row items-push">
                        <div class="col-sm-10">
                            <h1 class="page-heading">
                            Claim Dumps
                            </h1>
                        </div>
                        
                       <div class="col-md-2">
                        <div class="col-xs-12">
                          <a href="<?php echo base_url('admin/add_claim_dump');?>" class="btn btn-minw btn-danger" type="button">Add</a>
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
                                
                                
                               

  <div class="form-group"> <hr> </div>
                                 <div class="form-group">
                                 <div class="col-md-12" id="devtitle"><h4>Claim Dump LIST</h4><br>
                                   </div>
                                 </div>


<div class="block-content">
                            <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/base_tables_datatables.js -->
                            <table class="display" id="example">
                                <thead class="bg-info">
                                    <tr>
                                        <th >S.No</th>
                                        <th>Corporate Client</th>
                                         <th>Insurance Company Name</th>
                                        <th>Date</th>
                                        
                                          <th>Claim Dump</th>
                                          <th class="hidden-xs">Status</th>
                                          <th>Action</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    
                                    
                                    
              
           
                                    
                                    
                                    
 <?php 
$a =1;
foreach($claim_dumps as $claim_dump){?>                                    
                                    
                                    
                                    
                                    
                                    
                                        <tr >
                                        <td class="text-center"><?php echo $a;?></td>
                                        <td class="text-center"><?php echo $this->fun->getnewfieldvalue("corporate_client","name","id",$claim_dump->company)?> </td>
                                        <td class="text-center"><?php echo $this->fun->getnewfieldvalue(" insurance_companies","name","id",$claim_dump->insurance_company_id)?> </td>
                                        <td class="text-center"> <?php echo $claim_dump->date;?></td>
                                        <td class="text-center">
 <a href="<?php echo base_url();?>uploads/claim_dump/<?php echo $claim_dump->pdf;?>" download><button class="btn btn-info push-5-r push-10" type="button"><i class="fa fa-download"></i> download</button></a>
                                        </td>
                                       
                                        
                                       <td class="text-center">    <button disabled="disabled" class="btn btn-<?php if($claim_dump->status=='1') { echo 'success';} else { echo 'danger';} ?>" onclick="status('<?php echo $claim_dump->id;?>','<?php echo $claim_dump->status;?>');"  class="btn btn-xs btn-default" ><?php if($claim_dump->status=='1') { echo 'Active';} else { echo 'Deactive';} ?></i></button></td>
                                       
                                       
                                       
                                       
                                
                                        
                                        
                                        
                                        <td class="text-center">
           
         <!--                  
             <div class="btn-group">
           <button class="btn btn-xs btn-default" data-toggle="modal" data-target="#modal-normal" type="button" onclick="view_corporate_employee(<?php echo $claim_dump->id;?>)" title="View Details" ><i class="fa fa-eye"></i></button>
                    
      <a href="<?php echo base_url('admin/edit_corporate_employee').'/'.$claim_dump->id;?>"> <button class="btn btn-xs btn-default" type="button" ><i class="fa fa-pencil"></i></button></a>
   -->               
        
      <a  onclick="deleterecord('<?php echo $claim_dump->id;?>');"  class="btn btn-xs btn-default" ><i class="fa fa-times"></i></a>                            
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
function view_corporate_employee(val)
{

 $.ajax({
 type: 'post',
 url: <?php echo '"'.base_url('admin/view_corporate_employee').'"';?>,
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
  text: "you want to delete this claim dump Details..",
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
  text: "you want to Deactivate this Corporate Employee Details",
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
  text: "you want to Activate this Corporate Employee Details",
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
            
            
            
            
            
            
            
            
 <script type="text/javascript">
function showBranches(val) 
{

 $.ajax({
 type: 'post',
 url: <?php echo '"'.base_url('admin/branches').'"';?>,
 data: {
  get_id:val
 },
  success: function (response) { 
  document.getElementById("branches").innerHTML=response; 
 
 
 
 }
 });  
 
 
 }
</script>            
            
            
            
            
            
            
            