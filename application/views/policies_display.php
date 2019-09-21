<?php  foreach($policies as $policy){?>                             
                                                    
 <option value="">Select Policy</option>                                                   
<option value="<?php echo $policy->policy_number;?>"><?php echo $this->fun->getnewfieldvalue("insurance_policy","name","id",$policy->policy_name)?> ( <?php echo $policy->policy_number;?> )</option>
                                                    
<?php }?>  