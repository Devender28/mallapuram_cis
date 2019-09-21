<main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter3">
                    <div class="row items-push">
                        <div class="col-sm-10">
                            <h1 class="page-heading">
                             Promotion Interested  List
                            </h1>
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
                                        <th class="hidden-xs">Sl.No</th>
                                        
                                        <th>Emp Id</th>
                                         <th class="hidden-xs">Promotional Id</th>
                                         <th class="hidden-xs">Promotional Image</th>
                                        <th class="hidden-xs" >Ticket Id</th>
                                        <th class="hidden-xs" >Member Name</th>
                                        <th class="hidden-xs" >Member Mobile</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                   
                                   
 <?php 
$a =1;
foreach($interested_promotions as $interested_promotion){
	
@$image=$this->fun->getnewfieldvalue("promotions","image","id",$interested_promotion->promotion_id);	
	
$ticket_from=$this->fun->getnewfieldvalue("ticket_bucket","ticket_from","ticket_id",$interested_promotion->ticket_id);

if($ticket_from=='individual')
{
$member_max_id=$this->fun->getnewfieldvalue("ticket_bucket","member_max_id","ticket_id",$interested_promotion->ticket_id);
$person_details=$this->db->get_where('ind_registration',array('max_id'=>$member_max_id))->row();
@$name=$person_details->first_name.'&nbsp'.$person_details->middle_name.'&nbsp'.$person_details->last_name;
@$mobile=$person_details->mobile1;
}
?>                                    
                                  
                                   
                                   
                                    <tr>
                                        <td class="hidden-xs"><?php echo $a;?></td>
                                        <td ><?php echo $interested_promotion->emp_id;?></td>
                                        <td ><?php echo $interested_promotion->promotion_id;?></td>
                                        
                                        
                                       
                                        
                                        <td ><img src="<?php echo base_url('uploads/promotions/').'/'.$image;?>"  width="300" height="150" /></td>
                                        <td class="hidden-xs"><?php echo $interested_promotion->ticket_id;?></td>
                                       
                                        <td ><?php echo $name;?></td>
                                         <td ><?php echo $mobile;?></td>
                                        
                                        
          


 
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
        
        
        
        
                   
            
            
            
            