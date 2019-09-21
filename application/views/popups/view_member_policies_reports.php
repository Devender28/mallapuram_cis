<div class="block">
                                
                                <div class="block-content block-content-full" >
                                    <!-- SlimScroll Container -->
                                    <div data-toggle="slimscroll" data-always-visible="true" data-size="10px">
                                    
                                    
                                    
                                    <div class="row">
                                    
                                    <div class="form-group">
                            <div class="col-md-6">
                                         
   <table align="left" width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 1</td>
    <td width="50%">  Policy Issuer</td>
    <td width="40%"> <strong><?php echo $this->fun->getnewfieldvalue('insurance_companies','name','id',$policy->insurance_company);?></strong></td>
  </tr>

  
</table>

</div>
                        
                           



<div class="col-md-6">
                                         
   <table align="left" width="100%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 2</td>
    <td width="50%">  Policy Name</td>
    <td width="40%"> <strong><?php echo $this->fun->getnewfieldvalue('insurance_policy','name','id',$policy->policy_name);?> </strong> </td>
  </tr>

  
</table>
  </div>
</div>





<div class="form-group">
   <div class="col-md-6">
                                         
   <table align="left" width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 3</td>
    <td width="50%">  Policy Number </td>
    <td width="40%"> <strong><?php echo $policy->policy_number;?></strong></td>
  </tr>

  
</table>

</div>
   
   <div class="col-md-6">
                                         
   <table align="left" width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 4</td>
    <td width="50%">  Policy Holder Name </td>
    <td width="40%"> <strong><?php echo $policy->policy_holder_name;?></strong></td>
  </tr>

  
</table>

</div>                     
                           



<div class="col-md-6">
                                         
   <table align="left" width="100%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 5</td>
    <td width="50%">  Policy Start Date</td>
    <td width="40%"> <strong><?php echo $policy->policy_start_date;?></strong> </td>
  </tr>

  
</table>
  </div>
</div>








<div class="form-group">
   <div class="col-md-6">
                                         
   <table align="left" width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 6</td>
    <td width="50%">  Policy Period</td>
    <td width="40%"> <strong><?php echo $policy->policy_period;?> Year</strong></td>
  </tr>

  
</table>

</div>
                        
                           



<div class="col-md-6">
                                         
   <table align="left" width="100%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 7</td>
    <td width="50%">  Policy Sum Insured </td>
    <td width="40%"> <strong>Rs. <?php echo $policy->policy_sum_insured;?></strong> </td>
  </tr>

  
</table>
  </div>
</div>





<div class="form-group">
   <div class="col-md-6">
                                         
   <table align="left" width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 8</td>
    <td width="50%">  Policy Premium</td>
    <td width="40%"> <strong>Rs. <?php echo $policy->policy_premium;?></strong></td>
  </tr>

  
</table>

</div>
                        
                           



<div class="col-md-6">
                                         
   <table align="left" width="100%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 9</td>
    <td width="50%">  Premium Payment Mode</td>
    <td width="40%"> <strong><?php echo $policy->premium_payment_mode;?></strong> </td>
  </tr>

  
</table>
  </div>
</div>






<div class="form-group">
   <div class="col-md-6">
                                         
   <table align="left" width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%">10</td>
    <td width="50%"> Policy Scan Copy </td>
    <td width="40%"> <img src="<?php echo base_url('uploads/individual/policies/'.$policy->policy_copy);?>" width="200" height="80"></td>
  </tr>

  
</table>

</div>
</div>



<div class="form-group"><h2>Nominee  1 </h2></div>

<div class="form-group">

   <div class="col-md-6">
                                         
   <table align="left" width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 11</td>
    <td width="50%"> Nominee Name</td>
    <td width="40%"><strong><?php echo $policy->nominee1_name;?></strong></td>
  </tr>

  
</table>

</div>
                        
                           



<div class="col-md-6">
                                         
   <table align="left" width="100%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 12</td>
    <td width="50%">  Nominee Relation</td>
    <td width="40%"> <strong><?php echo $policy->nominee1_relation;?></strong></td>
  </tr>

  
</table>
  </div>
</div>




<div class="form-group">
   <div class="col-md-6">
                                         
   <table align="left" width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 13</td>
    <td width="50%">  Nominee DOB</td>
    <td width="40%">  <strong><?php echo $policy->nominee1_dob;?></strong></td>
  </tr>

  
</table>

</div>
   
</div>


<div class="space-2"></div>



<div class="form-group"><h2> Nominee 2</h2> </div>


<div class="form-group">

   <div class="col-md-6">
                                         
   <table align="left" width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 14</td>
    <td width="50%"> Nominee Name</td>
    <td width="40%"><strong><?php echo $policy->nominee2_name;?></strong></td>
  </tr>

  
</table>

</div>
                        
                           



<div class="col-md-6">
                                         
   <table align="left" width="100%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 15</td>
    <td width="50%">  Nominee Relation</td>
    <td width="40%"> <strong><?php echo $policy->nominee2_relation;?></strong></td>
  </tr>

  
</table>
  </div>
</div>




<div class="form-group">
   <div class="col-md-6">
                                         
   <table align="left" width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 16</td>
    <td width="50%">  Nominee DOB</td>
    <td width="40%">  <strong><?php echo $policy->nominee2_dob;?></strong></td>
  </tr>

  
</table>

</div>
</div>

<div class="space-2"></div>


<div class="form-group"><h2>Nominee 3</h2></div>

<div class="form-group">

   <div class="col-md-6">
                                         
   <table align="left" width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 17</td>
    <td width="50%"> Nominee Name</td>
    <td width="40%"><strong><?php echo $policy->nominee3_name;?></strong></td>
  </tr>

  
</table>

</div>
                        
                           



<div class="col-md-6">
                                         
   <table align="left" width="100%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 18</td>
    <td width="50%">  Nominee Relation</td>
    <td width="40%"> <strong><?php echo $policy->nominee3_relation;?></strong></td>
  </tr>

  
</table>
  </div>
</div>




<div class="form-group">
   <div class="col-md-6">
                                         
   <table align="left" width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 19</td>
    <td width="50%">  Nominee DOB</td>
    <td width="40%">  <strong><?php echo $policy->nominee3_dob;?></strong></td>
  </tr>

  
</table>

</div>
</div>
                                    
                                    </div>
                  
                                    </div>
                                    </div>
                                    </div>
