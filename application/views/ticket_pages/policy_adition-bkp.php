 


    

     
                            
                            
                        
                                <div class="block-content block-content-narrow row">
                   
                    <form class="form-horizontal" action="" method="post">
                    
                    <div class="col-lg-4" style="border-right: solid #CCC 1px; background-color:#F9E3DF;" >
                            <!-- Article -->
                            <div class="block" >
                                <div class="block-header" style="background-color:#F9E3DF;">
                                     <h3  style="font-size:26px; border-bottom: solid #CCC 1px;">Policy Details</h3>
                                </div>
                                <div class="block-content block-content-full" style="background-color:#F9E3DF;">
                                    <!-- SlimScroll Container -->
                                    <div data-toggle="slimscroll" data-height="380px" data-color="#333333" data-always-visible="true">
                                        
                                        
                          <div class="form-group">
                          
                          <div class="col-md-12">
                                    <div class="col-sm-12">
             <label class="control-label" for="val-select2">Insurance Company</label>
                                           
                                                <input class="form-control" type="text" id="example-text-input" name="insurance_company" value="<?php echo $this->fun->getnewfieldvalue('insurance_companies','name','id',$policy_info->insurance_company);?>">
                                                <br>

                            </div>
                                            
                                            
                                              
                                            <div class="col-md-12">
                                            <label> Policy Name</label>
                                          <input class="form-control" type="text" id="example-text-input" name="policy_name" value="<?php echo $this->fun->getnewfieldvalue('insurance_policy','name','id',$policy_info->policy_name);?>">
                                          <br>

                                    </div>
                                    <div class="col-md-12">
                                            <label> Policy Holder Name</label>
                                          <input class="form-control" type="text" id="example-text-input" name="policy_holder_name" value="<?php echo $policy_info->policy_holder_name;?>">
                                          <br>

                                    </div>
                                    
                                    
                                    
                                    <div class="col-md-12">
                                            <label >Policy Number</label>
                                           <input class="form-control" type="text" id="example-text-input" name="policy_number" value="<?php echo $policy_info->policy_number;?>">
                                           <br>

                                    </div>
                                    
                                    
                                    <div class="col-md-12">
                                            <label > Policy Start Date</label>
                                          <input class="form-control" type="text" id="example-text-input" name="policy_start_date" value="<?php echo $policy_info->policy_start_date;?>">
                                          <br>

                                    </div>
                                    
                                    
                                      <div class="col-md-12">
                                            <label> Policy Period</label>
                                          <input class="form-control" type="text" id="example-text-input" name="policy_period" value="<?php echo $policy_info->policy_period;?>">
                                          <br>
                                    </div>
                                    
                                    
                                    <div class="col-md-12">
                                            <label>Policy Sum Insured</label>
                                          <input class="form-control" type="text" id="example-text-input" name="policy_sum_insured" value="<?php echo $policy_info->policy_sum_insured;?>">
                                          <br>
                                    </div>
                                    
                                    
                                     <div class="col-md-12">
                                            <label>Policy Premium</label>
                                          <input class="form-control" type="text" id="example-text-input" name="policy_premium" value="<?php echo $policy_info->policy_premium;?>">
                                          <br>
                                    </div>
                          
                          
                           <div class="col-md-12">
                                            <label>Premium Payment Mode</label>
                                          <input class="form-control" type="text" id="example-text-input" name="premium_payment_mode" value="<?php echo $policy_info->premium_payment_mode;?>">
                                          <br>
                            </div>
                                    
                                    
                                      <div class="col-md-12">
                                            <label>Policy Copy</label><br>
                                            
                                          
                                            
                                            <button  class="btn btn-xs btn-default"  data-toggle="modal" data-target="#modal-normal2" type="button"  style=" font-size:14px;"> <img src="<?php echo base_url().'individual/uploads/individual/policies/'.$policy_info->policy_copy;?>" width="250" height="120"></button>

                                         
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
                            <h3 class="block-title">View Details</h3>
                        </div>
                        <div class="block-content">
                        
                        
                        <div class="block">
                                
                                <div class="block-content block-content-full" >
                                    <!-- SlimScroll Container -->
                                    <div data-toggle="slimscroll" data-height="500px" data-color="#333333" data-always-visible="true">
                              
                        
                        <div class="row">
                           <div class="form-group">
                            <div class="col-md-6">
                              <h4>Policy Copy</h4>   
                              <br>
        
                              <img src="<?php echo base_url().'individual/uploads/individual/policies/'.$policy_info->policy_copy;?>" width="450" height="300"></div>
                        
      
</div>




</div>











 </div>
                                    <!-- END SlimScroll Container -->
                                </div>
                          </div>
                            
                            
                            
                            
                            
                            
                            
                            

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Close</button>
                       
                    </div>
                </div>
            </div>
        </div>                      <br>
                                          <br>

                                          </div>
                            
                            
                            
                            <h2>Nominee  1</h2>

                             <div class="col-md-12">
                                            <label>Nominee Name </label>
                                          <input class="form-control" type="text" id="example-text-input" name="nominee1_name" value="<?php echo $policy_info->nominee1_name;?>">
                                          <br>
                            </div>

                            <div class="col-md-12">
                                            <label>Nominee Relation </label>
                                          <input class="form-control" type="text" id="example-text-input" name="nominee1_relation" value="<?php echo $policy_info->nominee1_relation;?>">
                                          <br>
                            </div>
                            
                            
                            <div class="col-md-12">
                                            <label>Nominee DOB</label>
                                          <input class="form-control" type="text" id="example-text-input" name="nominee1_dob" value="<?php echo $policy_info->nominee1_dob;?>">
                                          <br>
                            </div>
                            
                            
                             <div class="col-md-12">
                                            <label>Percentage of Nomination</label>
                                          <input class="form-control" type="text" id="example-text-input" name="nomination1_percentage" value="<?php echo $policy_info->nomination1_percentage;?>">
                                          <br>
                                          <br>

                            </div>
                          
                          
                          
                          
                          <h2>Nominee 2</h2>

                           <div class="col-md-12">
                                            <label>Nominee Name </label>
                                          <input class="form-control" type="text" id="example-text-input" name="nominee2_name" value="<?php echo $policy_info->nominee2_name;?>">
                                          <br>
                            </div>

                            <div class="col-md-12">
                                            <label>Nominee Relation </label>
                                          <input class="form-control" type="text" id="example-text-input" name="nominee2_relation" value="<?php echo $policy_info->nominee2_relation;?>">
                                          <br>
                            </div>
                            
                            
                            <div class="col-md-12">
                                            <label>Nominee DOB </label>
                                          <input class="form-control" type="text" id="example-text-input" name="nominee2_dob" value="<?php echo $policy_info->nominee2_dob;?>">
                                          <br>
                            </div>
                            
                            
                             <div class="col-md-12">
                                            <label>Percentage of Nomination </label>
                                          <input class="form-control" type="text" id="example-text-input" name="nomination2_percentage" value="<?php echo $policy_info->nomination2_percentage;?>">
                                          <br>
                                          <br>

                            </div>
                            
                            
                            <h2>Nominee  3</h2>

                             <div class="col-md-12">
                                            <label>Nominee Name </label>
                                          <input class="form-control" type="text" id="example-text-input" name="nominee3_name" value="<?php echo $policy_info->nominee3_name;?>">
                                          <br>
                            </div>
                            
                            <div class="col-md-12">
                                            <label>Nominee Relation </label>
                                          <input class="form-control" type="text" id="example-text-input" name="nominee3_relation" value="<?php echo $policy_info->nominee3_relation;?>">
                                          <br>
                            </div>
                            
                            
                            <div class="col-md-12">
                                            <label>Nominee DOB</label>
                                          <input class="form-control" type="text" id="example-text-input" name="nominee3_dob" value="<?php echo $policy_info->nominee3_dob;?>">
                                          <br>
                            </div>
                            
                            
                            <div class="col-md-12">
                                            <label>Percentage of Nomination</label>
                                          <input class="form-control" type="text" id="example-text-input" name="nomination3_percentage" value="<?php echo $policy_info->nomination3_percentage;?>">
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
                            <div class="block" >
                               <!-- <div class="block-header">
                                <h3 class="block-title">Family Member Details</h3>
                                </div>-->
                                <div class="block-content block-content-full">
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
                          
                        
                          
                          <div class="block-content "><p>
                          <?php echo $this->fun->getnewfieldvalue('ticket_process','description','id',$info->ticket_process_id);?></p>
   


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
                            </div>
                    </div>
                    
                    
                      <div class="col-lg-12" >
                      
                       
                       <div class="col-md-12"><textarea name="remarks"  class="form-control" rows="6" placeholder="Remarks"></textarea>
                       
                      </div>
                    
                    
                    
                     <div class="col-lg-12" >
                      
                     <br>
<br>



<div class="col-lg-12" ><button  class="btn btn-xs btn-default"  data-toggle="modal" data-target="#modal-normal" type="button"  style=" font-size:14px;">Member Profile</button></div>
<br>
<br>

<div class="col-lg-12" ><h3>Family Member Details</h3></div>



<div class="col-lg-12" >

<table align="left" width="100%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="50%" style="color: #F30;"><strong>Name</strong></td>
    <td width="50%" style="color: #F30;"> <strong>Relation</strong></td>
   
  </tr>

  <?php 

$family_info  = $this->db->get_where('ind_family',array('member_max_id'=>$info->member_max_id))->result();
foreach($family_info as $fi){
?>

  <tr>
    <td><button  class="btn btn-xs btn-default"  data-toggle="modal" data-target="#modal-normal" type="button"  style=" font-size:14px;"><?php echo $fi->first_name;?> </button></td>
    <td> <?php echo $fi->relationship;?></td>
  </tr>

   
  <?php } ?>
  

  
</table>
</div>
                      
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
                        <div class="block-content">
                        
                        
                        <div class="block">
                                
                                <div class="block-content block-content-full" >
                                    <!-- SlimScroll Container -->
                                    <div data-toggle="slimscroll" data-height="500px" data-color="#333333" data-always-visible="true">
                                  
                          
                          
                          
                          <!--  view   -->   
                        
                        <div class="row">
                           <div class="form-group">
                            <div class="col-md-6">
                              <h4>Aadhar Card</h4>   
                              <br>
        
                              <img src="images/adhar2.jpg" width="450" height="300"></div>
                        
      
</div>

<div class="col-md-6">

<h4>Pan Card</h4>
<br>
 
<img src="images/pan2.jpg" width="450" height="300"></div>


</div>
<div class="row" style="margin-top:50px;">
                           <div class="form-group">
                            <div class="col-md-6">
                              <h4>Driving License</h4>   
                              <br>
        
                              <img src="images/driving2.jpg" width="450" height="300"></div>
                        
      
</div>

<div class="col-md-6">

<h4>Voter Id</h4>
<br>
 
<img src="images/voter.jpg" width="450" height="300"></div>


</div>

 </div>
                                    <!-- END SlimScroll Container -->
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
                      
            
                      
                      </div>
                    
                    
                    </div>
                      
                 
                    
                    
                     </div>
                      
                  
                      
                      
                      <div class="col-lg-4" style="background-color:#F7E9C8;">
                            <!-- Article -->
                            <div class="block" style="background-color:#F7E9C8;">
                                <div class="block-header">
                                     <h3  style="font-size:26px; border-bottom: solid #CCC 1px;">Ticket Creation</h3>
                                </div>
                                <div class="block-content block-content-full">
                                    <!-- SlimScroll Container -->
                                     <div data-toggle="slimscroll" data-height="380px" data-color="#333333" data-always-visible="true">
                                       
                                        
                          <div class="form-group">
                          
                          <div class="col-md-12">
                          
                                               <div class="form-group">
                                              <div class="col-md-12">
                                            <label>Correction Data</label>
                                           <input class="form-control" type="text" id="example-text-input" name="insurance" placeholder="Correction Data">
                                           <br>

                                    </div>
                                           </div>
                                           
                                           
                                           <div class="form-group">
                                              <div class="col-md-4">
                                            <br>

                                         <button class="btn btn-minw btn-warning" type="button" style="background-color:#F30; margin-top:5px; border-radius:3px;">Create Ticket</button> 
                                          </div>
                                           </div>
                                          
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
                        
                        
                        
                        
                        
                         <div class="row" style="margin-bottom:40px;">                         
                           <div class="col-md-12"> 
                           
                           <div class="col-md-1 col-md-offset-1" style="margin-left:-70px;"> </div>
                           <div class="col-md-2 col-md-offset-4">
                           Postpone <input type="checkbox" id="chk2" name="row_1" >
                           </div>
                           
                            <div id="date"  class="col-md-2" style="display:none;">
                           <input id="date1" class="js-datepicker form-control" type="text" id="example-datepicker1" name="postpone" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd">
                           </div>
                           
                           </div>
                         </div>
                        
                        
                        
                        
                       
                        
                        
                        

<div class="row">
                        <div class="col-md-12">
                        <div class="block">
                        <div class="col-md-4"></div>
                        
                        <div class="col-md-1"><input class="btn btn-minw btn-primary" type="submit" value="DONE" name="policy_check_done"></div>
                        
                        <div class="col-md-1"><input class="btn btn-minw btn-success" type="submit" value="SKIP" name="policy_check_skip"></div>
                        
                        <div class="col-md-1"><input class="btn btn-minw btn-warning" type="submit" value="POSTPONE" name="policy_check_postpone"></div>
                        
                        <div class="col-md-1"><input class="btn btn-minw btn-danger" type="submit" value="Escalate" name="escalate"></div>
                        
                     
                        <br>
<br>
</form>

                        
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
         
           
           

            
            
            