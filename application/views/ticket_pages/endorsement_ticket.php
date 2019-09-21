 


 

      

             
                            
                         
                                <div class="block-content block-content-narrow row">
                   
                    <form class="form-horizontal" action="" id="form" name="form" method="post">
                    
                    <div class="col-lg-4" style="border-right: solid #CCC 1px; background-color:#F9E3DF;" >
                            <!-- Article -->
                            <div class="block" >
                                <div class="block-header" style="background-color:#F9E3DF;">
                                  <!--  <h3  style="font-size:26px; border-bottom: solid #CCC 1px;">Family Member Details </h3>-->
                                </div>
                                <div class="block-content block-content-full"  style="background-color:#F9E3DF;" >
                                    <!-- SlimScroll Container -->
                                   <div data-toggle="slimscroll" data-height="500px" data-color="#333333" data-always-visible="true" >
                                       
                                        
                          <div class="form-group">
                          
                          <div class="col-md-12">
                                    <div class="col-sm-12">
             <label class="control-label" for="val-select2">Policy Name </label>
                                           
                                                <input class="form-control" type="text" id="relationship"  value="<?php echo $this->fun->getClientPolicy($end_info->policy);?>" readonly>
                                                <br>

                            </div>
                                            
                                            
                                              
                                            <div class="col-md-12">
                                            <label>Policy Number</label>
                                          <input class="form-control" type="text" id="example-text-input" name="insurance" value="<?php echo $end_info->policy;?>" readonly>
                                          <br>

                                    </div>
                                    
                                    
                                    
                                    
                                    <div class="col-md-12">
                                            <label > Policy Copy </label>
                                         <div class="flythat" data-autoOpen="false" id="modal-text"> <a href="#close" class="close flythat-close">&times;</a>
  <div class="text-fly">
    <div data-toggle="slimscroll" data-height="450px" data-color="#333333" data-always-visible="true" >
    <iframe src="<?php echo base_url().'uploads/sales/'.$policy_info->policy_copy;?>" width="350" height="400"></iframe></div>
</div>
</div>
       
<!-- <div id="demo-page">
 
  <section id="content">
    <div class="wrap-center"> <a href="#" data-flythat="#modal-text" ><img src="<?php echo base_url().'uploads/sales/'.$policy_info->policy_copy;?>" width="400" height="400"></a> </div>
    
  </section> 
  <br>

</div> -->
                                    </div>
                                    
                                    <!--<div class="col-md-12">
                                            <label>Policy Copy Download</label><br>

                                          <i style="font-size:20px" class="fa">&#xf1c1;</i> <a href="admin/excel_sheet.pdf" download>Download<span class="ion-ios-excel"></span></a>
                                          <br>

                                    </div>-->
                                    
                                    
                     
                         
                          
                            </div>
                          
                          </div>           
                                  
        
                                    
                                   
                                    </div>
                                    <!-- END SlimScroll Container -->
                                </div>
                            </div>
                    </div>
                     
                     
                     
                     
                     <div class="col-lg-4" >
                       <div class="col-lg-12" >
                            <!-- Article -->
                            <div class="block" >
                               <!-- <div class="block-header">
                                <h3 class="block-title">Family Member Details</h3>
                                </div>-->
                                <div class="block-content block-content-full">
                                    <h3  style="font-size:26px; border-bottom: solid #CCC 1px;">Process </h3>
                                   <div data-toggle="slimscroll" data-height="380px" data-color="#333333" data-always-visible="true">
                                
                          <div class="form-group">
                          
                          <div class="col-md-12">
                          
                          <div class="block-content block-content-full"><?php echo $this->fun->getnewfieldvalue('ticket_process','description','id',$info->ticket_process_id);?>

                    </div>
                                                   
                                  
                            </div>
                          
                          </div>           
                                 
                                    
                                   
                                    </div>
                                    <!-- END SlimScroll Container -->
                                </div>
                            </div>
                    </div>
                    
                    
                      <div class="col-lg-12">
                       
                       
                       <div class="col-md-12"><textarea name="remarks"  class="form-control" rows="6" placeholder="Remarks"></textarea>
                       
                      </div>
                    
                    </div>
    
                    
                     </div>
       
                      <div class="col-lg-4" style="background-color:#F7E9C8;">
                            <!-- Article -->
                            <div class="block" style="background-color:#F7E9C8;">
                                <div class="block-header">
                                   <!-- <h3  style="font-size:26px; border-bottom: solid #CCC 1px;">Family Member Details </h3>-->
                                </div>
                                <div class="block-content block-content-full">
                                    <!-- SlimScroll Container -->
                                    <div data-toggle="slimscroll" data-height="500px" data-color="#333333" data-always-visible="true" >
                                        
                                        
                          <div class="form-group">
                          
                          <div class="col-md-12">
                          
                          
                                                   <div class="form-group">
                                                  <div class="col-md-12">
                                                   <label class="control-label" for="val-select2">Number of Addition </label>
                                           
                                                <input class="form-control" type="text" id="example-text-input" name="insurance" value="<?php echo $end_info->additions;?>" readonly>
                                                
                                              </div>
                                               
                                              
                                              
                                              </div>
                                            
                                            
                                              
                                                  <div class="form-group">
                                                  <div class="col-md-12">
                                            <label>Number of Deletion</label>
                                          <input class="form-control" type="text" id="example-text-input" name="insurance" value="<?php echo $end_info->deletions;?>" readonly>
                                          

                                    </div>
                                    
                                        
                                              
                                    
                                    </div>
                                    
                                                <div class="form-group">
                                                  <div class="col-md-12">
                                            <label >Number of Correction</label>
                                           <input class="form-control" type="text" id="example-text-input" name="insurance" value="<?php echo $end_info->corrections;?>" readonly>
                                           

                                    </div>
                                    
                                        
                                              
                                    
                                    </div>
                                    
                                    
                                          <!--    <div class="form-group">
                                               <div class="col-md-12">
                                            <label >Endorsement Policy Copy Upload</label> 
                                         
       
                 <input type="file" id="example-file-input" name="aadhar-scan-copy">
                                         

                                    </div>
                                    
                                       
                                              
                                    
                                    </div> -->
                                     
                                              
         
                          
                          
                            </div>
                          
                          </div>           
                                 
                                    
                                  
                                    </div> 
                                    <!-- END SlimScroll Container -->
                                </div> 
                            </div> 
                    </div> 
                    
                     
                    
                     </div> 
                               
                   
                        


                          <input type="hidden" name="ticket_id" value="<?php echo $info->ticket_id;?>">
                           <input type="hidden" name="ticket_max_id" value="<?php echo $info->ticket_max_id;?>">
                           <input type="hidden" name="member_max_id" value="<?php echo $info->member_max_id;?>"> 
                           <input type="hidden" name="points" value="<?php echo $info->points;?>"> 
                          <input type="hidden" name="endorsement_max_id" value="<?php echo $end_info->endorsement_max_id;?>">
                          <input type="hidden" name="client_id" value="<?php echo $end_info->client;?>">
                                          
                                            
        
    
 
<hr>
   
   
                       <div class="row">
                        <div align="center" class="col-md-12">
                                       <label><p style="color: #F30;">Promoting Policy: </p></label>
                                          <label class="css-input css-radio css-radio-primary push-10-r">
                                                <input type="radio" name="promoting_policy" value="1" ><span></span> Interested
                                            </label>
                                            <label class="css-input css-radio css-radio-primary">
                                                <input type="radio" name="promoting_policy" value="0" checked><span></span> Not Interested
                                            </label>
                                            <br>
<br>

                                          </div>
                        </div>
                        
                        
                        
                       <div class="row">

                         <div class="col-md-12"> 
                           
                          
                             <div class="col-md-2 col-md-offset-4">
                            <label><p style="color: #F30;"> Postpone :</p></label>

                            <!-- <input type="checkbox" id="postpone_chk" name="row_1" > -->
                            <input type="checkbox" id="chk2" name="row_1" >
                             </div>
                           
                           <div id="date"  class="col-md-4" style="display:none;">
                           <input id="date1" class="js-datepicker form-control" type="text" id="example-datepicker1" name="postpone" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd">
                           </div>
              
                            <!--  <div id="devfield" class="devfield col-md-2"></div> -->
                           
                           
                           </div>

                           </div>
   


                        <div class="col-md-12">
                        <div class="block">
                        <div class="col-md-4"></div>
                        
                         <div class="col-md-1"><input class="btn btn-minw btn-primary" type="submit" value="DONE" id="done" name="endorsement_done"></div>
                        
                        <div class="col-md-1"><input class="btn btn-minw btn-success" type="submit" value="SKIP" id="skip" name="endorsement_skip"></div>
                        
                        <div class="col-md-1"><input class="btn btn-minw btn-warning" type="submit" id="postpone" value="Postpone" name="endorsement_postpone"></div>
                        
                        <div class="col-md-1"><input class="btn btn-minw btn-danger" type="submit" value="ESCALATE" id="escalate" name="endorsement_escalate"></div>
                        <br>
<br>
  </form>
                        
                        </div>
                        </div>
                        </div>
                        
                        
                        
                        
                       
                                
                                
                                
                                
                                
                        
                                
                          
                            
                          
                                
                                
                                
                                
                                
                                
                            </div>
                            <!-- END Default Elements -->
                        </div>
                        
                    </div>
                   
                </div>
                <!-- END Page Content -->
                </main>
           
          
          
           
            
            