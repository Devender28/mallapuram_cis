<main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter3">
                    <div class="row items-push">
                        <div class="col-sm-10">
                            <h1 class="page-heading">
                            CD Account Amount Details
                            </h1>
                        </div>
                        
                       <div class="col-md-2">
                        <div class="col-xs-12">
                          <a href="<?php echo base_url('admin/cd_account_amount');?>" class="btn btn-minw btn-danger" type="button">Add</a>
                           </div>
                           </div> 
                        
                    </div>
                </div>
                <div class="content content-narrow">
                  
                    <div class="row">
                        <div class="col-md-12">
                           
                            <div class="block">
                                
                                
                               

  <div class="form-group"> <hr> </div>
                                 <div class="form-group">
                                 <div class="col-md-12" id="devtitle"><h4> CD Account Amount Details List</h4><br>
                                   </div>
                                 </div>


<div class="block-content">
                          
                            <table class="display" id="example">
                                <thead class="bg-info">
                                    <tr>
                                        <th >S.No</th>
                                         <th>Corporate Client</th>
                                         
                                         <th>Insurancy Company</th>
                                        
                                        
                                          <th>Date</th>
                                          <th class="hidden-xs">Payment Method</th>
                                          <th class="hidden-xs">Number(Transaction)</th>
                                          <th class="hidden-xs">Amount</th>
                                           <th class="hidden-xs">Remarks</th>
                                          <th class="hidden-xs">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    
                                    
                                    
              
           
                                    
                                    
                                    
 <?php 
$a =1;
foreach($cd_account_details as $cd_account_detail){?>                                    
                                    
                                    
                                    
                                    
                                    
                                        <tr >
                                        <td class="text-center"><?php echo $a;?></td>
                                        <td class="text-center"> <?php echo $this->fun->getnewfieldvalue("corporate_client","name","id",$cd_account_detail->corporate_id)?></td>
                                        <td class="text-center"><?php echo $this->fun->getnewfieldvalue("insurance_companies","name","id",$cd_account_detail->insurance_id)?> </td>
                                        
                                        <td class="text-center"><?php echo $cd_account_detail->date;?></td> 
                                         <td class="text-center"><?php echo $cd_account_detail->payment_methods;?></td>
                                         <td class="text-center"><?php echo $cd_account_detail->number;?></td>  
                                        <td class="text-center"><?php echo $cd_account_detail->amount;?></td>  
                                        <td class="text-center"><?php echo $cd_account_detail->remarks;?></td> 
                                        <td class="text-center">
										<a  onclick="deleterecord('<?php echo $cd_account_detail->id;?>');"  class="btn btn-xs btn-default" ><i class="fa fa-times"></i></a> 
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
                          
                        </div>
                        
                    </div>
                  
                   
                </div>
               
            </main>
           
            


<script>
function deleterecord(id){ 
swal({
  title: "Are you sure?",
  text: "you want to delete this cd amount Details..",
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

</script> 
            
            
            
            