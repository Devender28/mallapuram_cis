 



    
                            
                         
                                <div class="block-content block-content-narrow row">
                   
                    <form class="form-horizontal" action="" method="post">
                    
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
                                           
                                                <input class="form-control" type="text" id="relationship"  value="<?php echo $this->fun->getClientPolicy($claim_info->policy_id);?>" readonly>
                                                <br>

                            </div>
                                            
                                            
                                              
                                            <div class="col-md-12">
                                            <label>Date of Incident</label>
                                          <input class="form-control" type="text" id="example-text-input" name="insurance" value="<?php echo $claim_info->date_of_hospitalization;?>" readonly>
                                          <br>

                                    </div>
                                    
                                    
                                    
                                    
                                    <div class="col-md-12">
                                            <label style="font-size:18px;">Insident Discription </label>
                                         
                                        <div> <?php echo $claim_info->reason;?></div>
                                    </div>
                                    
                                    
                                    
                                    
                     
                         
                          
                            </div>
                          
                          </div>           
                                  
        
                                    
                                    
                                    </div>
                                    <!-- END SlimScroll Container -->
                                </div>
                            </div>
                    </div>
                     
                     
                     
                     
                     <div class="col-lg-8" >
                       <div class="col-lg-12" >
                            
                            <div class="block" >
                               <!-- <div class="block-header">
                                <h3 class="block-title">Family Member Details</h3>
                                </div>-->
                                <div class="block-content block-content-full">
                                    <h3  style="font-size:26px; border-bottom: solid #CCC 1px;">Process </h3>
                                   <div data-toggle="slimscroll" data-height="380px" data-color="#333333" data-always-visible="true">
                                
                          <div class="form-group">
                          
                          <div class="col-md-12">
                          
                          <div class="block-content block-content-full">
                          <?php echo $this->fun->getnewfieldvalue('ticket_process','description','id',$info->ticket_process_id);?>
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
       
                       
                     
                     
                    
                     </div> 

                     <input type="hidden" name="ticket_id" value="<?php echo $info->ticket_id;?>">
                           <input type="hidden" name="ticket_max_id" value="<?php echo $info->ticket_max_id;?>">
                           <input type="hidden" name="member_max_id" value="<?php echo $info->member_max_id;?>">
                           <input type="hidden" name="points" value="<?php echo $info->points;?>">
          
 
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
                        
                       
                        
                        <div class="col-md-12"> 
                           
                         
                           <div class="col-md-2 col-md-offset-4">
                           Postpone 
                            <input type="checkbox" id="chk2" name="row_1" >
                           </div>
                           
                            <div id="date"  class="col-md-3" style="display:none;">
                           <input id="date1" class="js-datepicker form-control" type="text" id="example-datepicker1" name="postpone" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd">
                           </div>
                            </div>
                           
                           <br><br>
   

<div class="row">
                        <div class="col-md-12">
                        <div class="block">
                        <div class="col-md-4"></div>
                        
                       <div class="col-md-1"><input class="btn btn-minw btn-primary" type="submit" value="DONE" id="done" name="claim_done"></div>
                        
                        <div class="col-md-1"><input class="btn btn-minw btn-success" type="submit" value="SKIP" id="skip" name="claim_skip"></div>
                        
                        <div class="col-md-1"><input class="btn btn-minw btn-warning" type="submit" id="postpone" value="Postpone" name="claim_postpone"></div>
                        
                        <div class="col-md-1"><input class="btn btn-minw btn-danger" type="submit" value="ESCALATE" id="escalate" name="claim_escalate"></div>
                        <br>
<br>
 
                        
                        </div>
                        </div>
                         </form>
                        </div>
                        
                        
                        
                      

                   
                                </div>
                                
                                
                                
                                
                                
                            
                                
                                
                          
                            
                          
                                
                                
                                
                                
                                
                                
                            </div>
                            <!-- END Default Elements -->
                        </div>
                        
                    </div>
                   
                </div>
                <!-- END Page Content -->
                </main>
           
          
          
           
            
            