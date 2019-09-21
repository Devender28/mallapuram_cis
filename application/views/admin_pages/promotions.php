<main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter3">
                    <div class="row items-push">
                        <div class="col-sm-10">
                            <h1 class="page-heading">
                             Promotional Image  Details
                            </h1>
                        </div>
                        
                        <div class="col-md-2">
                        <div class="col-xs-12">
                         <a href="<?php echo base_url("admin/add_promotions");?>"> <button class="btn btn-minw btn-danger" type="button">Add</button></a>
                           </div>
                           </div>
                        
                    </div>
                </div>
                <!-- END Page Header -->

                <!-- Page Content -->
                <div class="content content-narrow">
                  
                    <div class="row">
                        <div class="col-md-12">
                           
                            <div class="block">
                                
                                
                               


                                 


<div class="block-content">
                            <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/base_tables_datatables.js -->
                             <table class="display" id="example">
                                <thead class="bg-primary">
                                    <tr>
                                        <th class="hidden-xs"></th>
                                        
                                        <th>Name</th>
                                        <th class="hidden-xs">Promotional Image</th>
                                        <th class="hidden-xs" >Url</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                        <th >Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                   
                                   
 <?php 
$a =1;
foreach($promotions as $promotion){?>                                    
                                   
                                   
                                   
                                    <tr>
                                        <td class="hidden-xs"><?php echo $a;?></td>
                                        <td ><?php echo $promotion->name;?></td>
                                        <td ><img src="<?php echo base_url('uploads/promotions/').'/'.$promotion->image;?>"  width="300" height="150" /></td>
                                        <td class="hidden-xs"><?php echo $promotion->url;?></td>
                                        <td ><?php echo $promotion->description;?></td>
                                        <td ><a class="btn btn-<?php if($promotion->status=='1') { echo 'success';} else { echo 'danger';} ?>" onclick="status('<?php echo $promotion->id;?>','<?php echo $promotion->status;?>');"  class="btn btn-xs btn-default" ><?php if($promotion->status=='1') { echo 'Active';} else { echo 'Deactive';} ?></i></a></td>
                                        
                                        
                                        
          <td class="text-center">
             <div class="btn-group">
             <a  onclick="deleterecord('<?php echo $promotion->id;?>');"  class="btn btn-xs btn-default" ><i class="fa fa-times"></i></a>                                  
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
            
            
            
            
            
            
            
            
            
 
        
        
        
        
        
        
        
  





 
            
            
            
            
            
            
            
             
        
        
        
        
   <script type="text/javascript">


function status(id,st){ 
  if(st==1){ 
swal({
  title: "Are you sure?",
  text: "you want to Deactivate this Promotional Image",
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
  text: "you want to Activate this Promotional Image",
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
        
        
        
        
                   
            
            
            
            