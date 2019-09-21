<div class="block-content block-content-narrow row">
                   
                   <form class="form-horizontal" action="" method="post">
                           
                           <input type="hidden" name="ticket_id" value="<?php echo $info->ticket_id;?>">
                           <input type="hidden" name="ticket_max_id" value="<?php echo $info->ticket_max_id;?>">
                           <input type="hidden" name="member_max_id" value="<?php echo $info->member_max_id;?>">
<input type="hidden" name="points" value="<?php echo $info->points;?>">
                    
                    <div class="col-lg-4" style="border-right: solid #CCC 1px; background-color:#F9E3DF;"
                            <!-- Article -->
                            <div class="block">
                                <div class="block-header" style="background-color:#F9E3DF;">
                                     <h3  style="font-size:26px; border-bottom: solid #CCC 1px;">Endorsement</h3>
                                </div>
                                <div class="block-content block-content-full" style="background-color:#F9E3DF;">
                                    <!-- SlimScroll Container -->
                                    <div data-toggle="slimscroll" data-height="380px" data-color="#333333" data-always-visible="true">
                                       
                         <div class="form-group">
                          
                          <div class="col-md-12">
                          
                          
                          <div class="col-sm-12">
                           <p><?php echo $new_request_info->comments;?></p>

                            </div>
                          
                          
                          
                          
                          
                                    <div class="col-sm-12">
             <label class="control-label" for="val-select2">Insurance Company</label>
                                           
                                                <input class="form-control" type="text" id="example-text-input" name="insurance_company" placeholder="<?php echo $this->fun->getnewfieldvalue('insurance_companies','name','id',$policy_info->insurance_company);?>" readonly="readonly">
                                                <br>

                            </div>
                                            
                                            
                                              
                                            <div class="col-md-12">
                                            <label> Policy Name</label>
                                          <input class="form-control" type="text" id="example-text-input" name="policy_name" placeholder="<?php echo $this->fun->getnewfieldvalue('insurance_policy','name','id',$policy_info->policy_name);?>" readonly="readonly">
                                          <br>

                                    </div>
                                   
                                    <div class="col-md-12">
                                            <label> Policy Holder Name</label>
                                          <input class="form-control" type="text" id="example-text-input" name="policy_holder_name" placeholder="<?php echo $policy_info->policy_holder_name;?>" readonly="readonly">
                                          <br>

                                    </div>
                                    
                                    
                                    
                                    <div class="col-md-12">
                                            <label >Policy Number</label>
                                           <input class="form-control" type="text" id="example-text-input" name="policy_number"  placeholder="<?php echo $policy_info->policy_number;?>" readonly="readonly">
                                           <br>

                                    </div>
                                    
                                    
                                    <div class="col-md-12">
                                            <label > Policy Start Date</label>
                                          <input class="form-control" type="text" id="example-text-input" name="policy_start_date"  placeholder="<?php echo $policy_info->policy_start_date;?>" readonly="readonly">
                                          <br>

                                    </div>
                                    
                                    
                                      <div class="col-md-12">
                                            <label> Policy Period</label>
                                          <input class="form-control" type="text" id="example-text-input" name="policy_period"  placeholder="<?php echo $policy_info->policy_period;?>" readonly="readonly">
                                          <br>
                                    </div>
                                    
                                    
                                    <div class="col-md-12">
                                            <label>Policy Sum Insured</label>
                                          <input class="form-control" type="text" id="example-text-input" name="policy_sum_insured" placeholder="<?php echo $policy_info->policy_sum_insured;?>" readonly="readonly">
                                          <br>
                                    </div>
                                    
                                    
                                     <div class="col-md-12">
                                            <label>Policy Premium</label>
                                          <input class="form-control" type="text" id="example-text-input" name="policy_premium" placeholder="<?php echo $policy_info->policy_premium;?>" readonly="readonly">
                                          <br>
                                    </div>
                          
                          
                           <div class="col-md-12">
                                            <label>Premium Payment Mode</label>
                                          <input class="form-control" type="text" id="example-text-input" name="premium_payment_mode" placeholder="<?php echo $policy_info->premium_payment_mode;?>" readonly="readonly">
                                          <br>
                            </div>
                                    
                                    
                                      <div class="col-md-12">
                                            <label>Policy Copy</label><br>
                                            
                                          
                                            
                                            <button  class="btn btn-xs btn-default"  data-toggle="modal" data-target="#modal-normal2" type="button"  style=" font-size:14px;"> <img src="<?php echo base_url();?>uploads/individual/policies/<?php echo $policy_info->policy_copy;?>" width="250" height="120"></button>

                                         
                                          <br>
                                          <br>

                                          </div>
                                          
                                          
                                          
                                          
                                          
                                          
                                          <div class="col-md-12">
                                            <label>Endorsement Copy</label><br>
                                            
                                          
                                            
                                            <button  class="btn btn-xs btn-default"  data-toggle="modal" data-target="#modal-normal3" type="button"  style=" font-size:14px;"> <img src="<?php echo base_url();?>individual/uploads/individual/policies/<?php echo $policy_info->policy_copy;?>" width="250" height="120"></button>

                                         
                                          <br>
                                          <br>

                                          </div>
                                          
               
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
                           
                               <!-- <div class="block-header">
                                <h3 class="block-title">Family Member Details</h3>
                                </div>-->
                               
                                    <!-- SlimScroll Container -->
                                    <div data-toggle="slimscroll">
                                
                          <div class="form-group">
                          
                          <div class="col-md-12">
                          
                          <div class="block-content block-content-full">
                                  <h3  style="font-size:26px; border-bottom: solid #CCC 1px;">Process </h3>
                                    <!-- SlimScroll Container -->
                                    <div data-toggle="slimscroll" data-height="380px" data-color="#333333" data-always-visible="true">
                                
                          <div class="form-group">
                          
                          <div class="col-md-12">
                          
      <div class="block-content "><p><?php echo $this->fun->getnewfieldvalue('ticket_process','description','id',$info->ticket_process_id);?></p>
   


                    </div>
                                                   
                                  
                            </div>
                          
                          </div>           
                                 
                                    
                                   
                                    </div>
                                    <!-- END SlimScroll Container -->
                                </div>
                                                   
                                  
                            </div>
                          
                          </div>           
                                 
                                    
                                   
                                    </div>
                                    <!-- END SlimScroll Container -->
                                
                            
                    </div>
                    
                    
                      <div class="col-lg-12" >
                      
                       
                       <div class="col-md-12"><textarea name="remarks"  class="form-control" rows="6" placeholder="Remarks"></textarea>
                      
                      </div>
                      
                      
                      
                      
                      
                      <div align="left" class="col-md-12">
                      <br>
<br>

                                           
                                       <label>Endorsment Copy: </label>
                                         <label class="css-input css-radio css-radio-primary push-10-r">
                                                 <input type="radio" name="endorsment_copy"><span></span> Yes
                                            </label>
                                            <label class="css-input css-radio css-radio-primary">
                                                <input type="radio" name="endorsment_copy" checked><span></span> No
                                            </label>
                                            <br>
<br>

                                          </div>
                    
                    
                    
                     <div align="left" class="col-md-12">
                                           
                                       <label><p style="color: #F30;">Promoting Policy: </p></label>
                                         <label class="css-input css-radio css-radio-primary push-10-r">
                                                <input type="radio" name="promoting_policy"  value="1"><span></span> Interested
                                            </label>
                                            <label class="css-input css-radio css-radio-primary">
                                                <input type="radio" name="promoting_policy" value="0" checked><span></span> Not Interested
                                            </label>
                                            <br>
<br>

                                          </div>
                                          
                                          
                                          
                                          <div class="col-md-12" style="margin-bottom:30px;"> 
                           
                           <div class="col-md-1 col-md-offset-1" style="margin-left:-70px;"> </div>
                           <div class="col-md-4 col-md-offset-2">
                           Postpone <input type="checkbox" id="chk2" name="row_1" >
                           </div>
                           
                            <div id="date"  class="col-md-4" style="display:none;">
                            <input class="js-datepicker form-control" type="text" id="example-datepicker3" name="postpone" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd">
                           </div>
                           
                           </div>
                                          
                                          
                                          
                        <div class="col-md-12">
                        <div class="block">
                       
                        
                       <div class="col-md-3"><input class="btn btn-minw btn-primary" type="submit" value="Done" name="existing_request_done"></div>
                        
                        <div class="col-md-3"><input class="btn btn-minw btn-success" type="submit" value="Skip" name="existing_request_skip"></div>
                        
                        <div class="col-md-3"><input class="btn btn-minw btn-warning" type="submit" value="Postpone" name="existing_request_postpone"></div>
                        
                        <div class="col-md-3"><input class="btn btn-minw btn-danger" type="submit" value="Escalate" name="existing_request_escalate"></div>
                
 
                        
                        
                        <br>
<br>

                        
                        </div>
                        </div>
 </form>
                    </div>
                      
                 
                    
                    
                     </div>
                      
                  
                      
                      
                      <div class="col-lg-4" style="background-color:#F7E9C8;">
                            <!-- Article -->
                            <div class="block" style="background-color:#F7E9C8;">
                                <div class="block-header">
                                     <h3  style="font-size:26px; border-bottom: solid #CCC 1px;">Endorsement</h3>
                                </div>
                                <div class="block-content block-content-full">
                                    <!-- SlimScroll Container -->
                                     <div data-toggle="slimscroll" data-height="380px" data-color="#333333" data-always-visible="true">
                                      <form class="form-horizontal" action="" method="post" >
                                        
                          <div class="form-group">
                          
                          <div class="col-md-12">
                          
                          <div class="form-group">
                                               <div class="col-md-12">
                                               
                                           
                                              <textarea class="form-control" type="text" id="example-text-input" name="endorsement_text" placeholder="Correction Data"> </textarea>

                                    
                                 
                                    
                                     <input type="hidden" name="ticket_id" value="<?php echo $info->ticket_id;?>">
                                     <input type="hidden" name="ticket_max_id" value="<?php echo $info->ticket_max_id;?>">
                                     <input type="hidden" name="member_max_id" value="<?php echo $info->member_max_id;?>">
                                     <input type="hidden" name="policy_max_id" value="<?php echo $policy_info->policy_max_id;?>">
                                     
                                                
                                              </div>
                                              
                                              
                                              
                                           </div>
                          
                          <div class="form-group">
                                              <div class="col-md-4">
                                            

                                         <button class="btn btn-minw btn-warning" type="submit" name="create_endorsment" style="background-color:#F30; margin-top:5px; border-radius:3px;">Create Ticket</button> 
                                          </div>
                                           </div>
                          
                                               
                                            
                                           
                                               
                            
                            </div>
                          
                          </div>           
                                  
                                    
                                    </form>
                                    </div>
                                    <!-- END SlimScroll Container -->
                                </div>
                            </div>
                    </div>
 </div>
 
 
 
 
 
 
 
 
 
 
 
 <div class="modal" id="modal-normal2" tabindex="-1" role="dialog" aria-hidden="true" style="width:50%;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="block block-themed block-transparent remove-margin-b">
                        <div class="block-header bg-primary-dark">
                            <ul class="block-options">
                                <li>
                                    <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                                </li>
                            </ul>
                            <h3 class="block-title">Policy Copy</h3>
                        </div>
                        <div class="block-content">
                       <div class="block">
                                
                                <div class="block-content block-content-full" >
                                    <!-- SlimScroll Container -->
                                    <div data-toggle="slimscroll" data-height="500px" data-color="#333333" data-always-visible="true">
                        <div class="row">
                           <div class="form-group">
                            <div class="col-md-6">
                                 
                              <br>
 <img src="<?php echo base_url();?>individual/uploads/individual/policies/<?php echo $policy_info->policy_copy;?>" width="450" height="300"></div>
                        
      
</div>
</div>
</div>
</div>
</div>
 </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Close</button>
                       
                    </div>
                </div>
            </div>
        </div>
 
 
 
 
 
 
 
 
 
<div class="modal" id="modal-normal3" tabindex="-1" role="dialog" aria-hidden="true" style="width:50%;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="block block-themed block-transparent remove-margin-b">
                        <div class="block-header bg-primary-dark">
                            <ul class="block-options">
                                <li>
                                    <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                                </li>
                            </ul>
                            <h3 class="block-title">Endrosement  Copy</h3>
                        </div>
                        <div class="block-content">
                      <div class="block">
                                
                                <div class="block-content block-content-full" >
                                    <!-- SlimScroll Container -->
                                    <div data-toggle="slimscroll" data-height="500px" data-color="#333333" data-always-visible="true">
                        <div class="row">
                           <div class="form-group">
                            <div class="col-md-6">
                                 
                              <br>
 <img src="<?php echo base_url();?>individual/uploads/individual/policies/<?php echo $policy_info->policy_copy;?>" width="450" height="300"></div>
                        
      
</div>
</div>
</div>
</div>
</div>
 </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Close</button>
                       
                    </div>
                </div>
            </div>
        </div> 
 
 
 
 
 
 
 
 <script>     
        $('#chk2').change(function(){ 
        if (this.checked) {
            $('#date').fadeIn('slow');
			$('#brows1').fadeIn('slow');
			<!--$('#date1').html('<input class="js-datepicker form-control" type="text" id="example-datepicker1" name="example-datepicker1" data-date-format="mm/dd/yy" placeholder="mm/dd/yy">'); -->
        }
		
        else {
            $('#date').fadeOut('slow');
			 $('#brows1').fadeOut('slow');
			 
			 
        } 
		
		});
</script>
 
 