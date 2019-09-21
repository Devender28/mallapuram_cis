<main id="main-container">
               <div class="content bg-gray-lighter3">
                    <div class="row items-push">
                        <div class="col-sm-10">
                            <h1 class="page-heading">
                             Ticket Reports
                            </h1>
                        </div>
                     </div>
                </div>
                     
                 
                    
     <div class="col-md-12">
               <div class="block">
                   <div class="block-content">
                            
                            <table class="display" id="example">
                                <thead class="bg-info">
                                    <tr>
                                        <th>SNo</th>
                                        <th>Created Date</th>
                                        <th>Ticket Id</th>
                                        <th>Ticket From</th>
                                        <th class="hidden-xs">Ticket History</th>
                                        <th class="hidden-xs">Ticket Info</th>
                                        <th>Status</th>
                                        
                                        
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    
<?php 
$a =1;
foreach($ticket_reports as $ticket_report)
{

  switch ($ticket_report->process_status)
  {
    case "DONE":
    $color = "success";
    break;

    case "SKIP":
    $color = "info";
    break;

    case "POSTPONE":
    $color = "warning";
    break;
    
    case "ESCALATE":
    $color = "danger";
    break;

    default :
    $color = "info";
    break;
  }
?>                                    
                                    
                                    
                                        <tr>
                                         <td><?php echo $a;?></td>
                                         <td class="font-w600"><?php echo standard_date('DATE_RFC1123', strtotime($ticket_report->crdate));?> </td>
                                      
                                         <td class="hidden-xs"><?php echo $ticket_report->ticket_id;?></td>
                                         
                                        <td class="hidden-xs"><?php echo $ticket_report->ticket_from;?></td>
                                        
                                         
                                         

                                     
                                         
                                         
                                      
                                        
                                       
 
                                 
   
                             
                                  
                                  
                                       

                                     
       <td class="text-center">
                                        
             <div class="btn-group">
             
           <button class="btn btn-xs btn-info" data-toggle="modal" data-target="#modal-normal" type="button" onclick="view_ticket_history(<?php echo $ticket_report->ticket_id;?>)" title="View Details"><a href="javascript:void(0)"   class="btn btn-xs btn-info">History</a></button>
                    
 
    
     </div>
                                        
                                        
     </td>
     
     
     
     <td class="text-center">
                                        
             <div class="btn-group">
             
           <button class="btn btn-xs btn-info" data-toggle="modal" data-target="#modal-normal1" type="button" onclick="view_ticket_info(<?php echo $ticket_report->ticket_id;?>)" title="View Details"><a href="javascript:void(0)"   class="btn btn-xs btn-info">Ticket Info</a></button>
                    
 
    
     </div>
                                        
                                        
     </td>
                                    
                          
                          
                          
                          
           <td class="hidden-xs"><a href="javascript:void(0)"   class="btn btn-xs btn-<?php echo $color;?>"><?php echo $ticket_report->process_status;?></a></td>                 
                            
                                    
                                    </tr>
                                    
                                    
                                   
                                   
<?php
$a++;
}
?>    


                                 
                                </tbody>
                            </table>
                       </div> 
                    </div>
                 </div>
               </div>
          </div>
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
                            <h3 class="block-title">View Ticket History</h3>
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









<div class="modal" id="modal-normal1" tabindex="-1" role="dialog" aria-hidden="true" style="width:1000px">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="block block-themed block-transparent remove-margin-b">
                        <div class="block-header bg-primary-dark">
                            <ul class="block-options">
                                <li>
                                    <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                                </li>
                            </ul>
                            <h3 class="block-title">Ticket Information</h3>
                        </div>
                        <div class="block-content" id="view_popup1">
                        
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-sm btn-danger" type="button" data-dismiss="modal">Close</button>
                        
                    </div>
                </div>
            </div>
        </div>













<script type="text/javascript">
function view_ticket_history(val)
{
$.ajax({
 type: 'post',
 url: <?php echo '"'.base_url('admin/view_ticket_history').'"';?>,
 data: {
 id:val
 },
  success: function (response) {
  document.getElementById("view_popup").innerHTML=response; 
 
 }
 });
}




function view_ticket_info(val)
{

$.ajax({
 type: 'post',
 url: <?php echo '"'.base_url('admin/view_ticket_info').'"';?>,
 data: {
 id:val
 },
  success: function (response) {
  document.getElementById("view_popup1").innerHTML=response; 
 
 }
 });
}


</script>  









<script>
function deleterecord(id,img){ 
swal({
  title: "Are you sure?",
  text: "you want to delete this corporate Employee Details..",
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
  text: "you want to Deactivate this Registered Member Details",
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
  text: "you want to Activate this Registered Member Details",
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
            
          