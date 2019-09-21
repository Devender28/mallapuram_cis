
<div class="block-content block-content-narrow row">


                     
                     <div class="col-lg-4" style="border-right: solid #CCC 1px; background-color:#F9E3DF; ">
                            <!-- Article -->
                            <div class="block" >
                                <div class="block-header" style="background-color:#F9E3DF;">
                                    <h3  style="font-size:26px; border-bottom: solid #CCC 1px;">Member Details </h3>
                                </div>
                                <div class="block-content block-content-full" style="background-color:#F9E3DF;" >
                                
                                    <!-- SlimScroll Container -->
                                    <div data-toggle="slimscroll" >
                                    
                                        <form class="form-horizontal" action="" method="post" >
                                        
                          <div class="form-group">
                          <div class="col-md-12">
                                    <div class="col-sm-12">
          
                           Name: <strong><?php echo $this->fun->getnewfieldvalue('ind_registration','first_name','max_id',$info->member_max_id);?></strong>
                                                
                            </div>
                          
                            </div>
                          
                          </div>           
                                  
                               
                                         
                          
                          <div class="form-group">
                          <div class="col-md-12">
                                    <div class="col-sm-12">
          
                           Phone: <strong><?php echo $this->fun->getnewfieldvalue('ind_registration','mobile1','max_id',$info->member_max_id);?></strong>

                           <input type="hidden" name="ticket_id" value="<?php echo $info->ticket_id;?>">
                           <input type="hidden" name="ticket_max_id" value="<?php echo $info->ticket_max_id;?>">
                           <input type="hidden" name="member_max_id" value="<?php echo $info->member_max_id;?>">
                                                
                            </div>
                          
                            </div>
                          
                          </div>  
                          
                          
                          
                                       
                                         
                                         
                                        
                                    
                                  
                                    
                                    
                                   
                                    </div>
                                    <!-- END SlimScroll Container -->
                                </div>
                            </div>
                    </div>
                     
                     
                     
                     
                     <div class="col-lg-5" >
                       <div class="col-lg-12" >
                            <!-- Article -->
                            <div class="block" >
                              <h3  style="font-size:26px; border-bottom: solid #CCC 1px;">Process </h3>
                              
                                <div class="block-content block-content-full">
                                    <!-- SlimScroll Container -->
                                    <div data-toggle="slimscroll">
                                
                          <div class="form-group">
                          
                          <div class="col-md-12">
                          
                          <div class="block-content block-content-full"><p><?php echo $this->fun->getnewfieldvalue('ticket_process','description','id',$info->ticket_process_id);?></p>

                    </div>
                                                   
                                  
                            </div>
                          
                          </div>           
                                 
                                    
                                   
                                    </div>
                                    <!-- END SlimScroll Container -->
                                </div>
                            </div>
                    </div>
                    
                    
                      
                     <div class="col-lg-12" >
                       
                       <div class="col-md-12"><textarea name="remarks"  class="form-control" rows="6" placeholder="Remarks"></textarea>

                      </div>
                    
                     </div> 
                  </div>
                </div> 
                    
                    
                    
                    
                    
                    
                    
                    
                    
 
 
 
 
 
 
 
 
 
 
 
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

<div class="row" style="margin-bottom:30px;">
<div align="center" class="col-md-12" > 
                           
                         
                           <div class="col-md-4">
                           Postpone <input type="checkbox" id="chk2" name="row_1" >
                           </div>
                           
                            <div id="date"  class="col-md-4" style="display:none;">
                           <input id="date1" class="js-datepicker form-control" type="text" id="example-datepicker1" name="postpone" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd">
                           </div>
                           
                         </div>
                        </div>










<div class="row">
                        <div class="col-md-12">
                        <div class="block">
                        <div class="col-md-4"></div>
                        
                        <div class="col-md-1"><input class="btn btn-minw btn-primary" type="submit" value="DONE" name="done"></div>
                        
                        <div class="col-md-1"><input class="btn btn-minw btn-success" type="submit" value="SKIP" name="skip"></div>
                        
                        <div class="col-md-1"><input class="btn btn-minw btn-warning" type="submit" value="Postpone" name="postpone_done"></div>
                        
                        <div class="col-md-1"><input class="btn btn-minw btn-danger" type="submit" value="ESCALATE" name="escalate"></div>
                        <br>
<br>
 </form>
                        
                        </div>
                        </div>
                        </div>
                        
                                       
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    