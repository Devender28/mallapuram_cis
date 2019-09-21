<main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter3">
                    <div class="row items-push">
                        <div class="col-sm-10">
                            <h1 class="page-heading">
                            CD Account Details
                            </h1>
                        </div>
                        
                       <div class="col-md-2">
                        <div class="col-xs-12">
                          <a href="<?php echo base_url('admin/cd_account');?>" class="btn btn-minw btn-danger" type="button">Add</a>
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
                                 <div class="col-md-12" id="devtitle"><h4>CD Accounts Details List</h4><br>
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
                                          <th class="hidden-xs">Amount</th>
                                          
                                       
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
                                        
                                        <td class="text-center"><?php echo $cd_account_detail->crdate;?></td> 
                                        <td class="text-center"><?php echo $cd_account_detail->amount;?></td>  
                                     
                                        
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
           
            
