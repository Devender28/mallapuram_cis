<div class="block">
                                <div class="block-content block-content-full" >
                                 
                                    <div data-toggle="slimscroll" data-always-visible="true" data-size="10px">
                                   <div class="row">
                                    
                                    <div class="form-group">
                            <div class="col-md-6">
                                         
   <table align="left" width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 1</td>
    <td width="50%">Corporate Company</td>
    <td width="40%"> <strong><?php echo $this->fun->getnewfieldvalue('corporate_client','name','id',$corporate_employee->corporate_id);?></strong></td>
  </tr>

  
</table>

</div>
                        
                           



<div class="col-md-6">
                                         
   <table align="left" width="100%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 2</td>
    <td width="50%"> Employee Id</td>
    <td width="40%"> <strong><?php echo $corporate_employee->employee_id;?></strong> </td>
  </tr>

  
</table>
  </div>
</div>





<div class="form-group">
   <div class="col-md-6">
                                         
   <table align="left" width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 3</td>
    <td width="50%"> Insurance Company ID</td>
    <td width="40%"> <strong><?php echo $corporate_employee->insurance_company_id;?></strong></td>
  </tr>

  
</table>

</div>
                        
                           



<div class="col-md-6">
                                         
   <table align="left" width="100%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 4</td>
    <td width="50%"> Employee Name</td>
    <td width="40%"> <strong><?php echo $corporate_employee->name;?></strong> </td>
  </tr>

  
</table>
  </div>
</div>








<div class="form-group">
   <div class="col-md-6">
                                         
   <table align="left" width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 5</td>
    <td width="50%"> Designation</td>
    <td width="40%"> <strong><?php echo $corporate_employee->designation;?></strong></td>
  </tr>

  
</table>

</div>
                        
                           



<div class="col-md-6">
                                         
   <table align="left" width="100%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 6</td>
    <td width="50%"> Date of Birth</td>
    <td width="40%"> <strong><?php echo $corporate_employee->date_of_birth;?></strong> </td>
  </tr>

  
</table>
  </div>
</div>





<div class="form-group">
   <div class="col-md-6">
                                         
   <table align="left" width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 7</td>
    <td width="50%"> Age</td>
    <td width="40%"> <strong><?php echo $corporate_employee->age;?></strong></td>
  </tr>

  
</table>

</div>
                        
                           



<div class="col-md-6">
                                         
   <table align="left" width="100%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 8</td>
    <td width="50%"> Age Band</td>
    <td width="40%"> <strong><?php echo $corporate_employee->age_band;?></strong> </td>
  </tr>

  
</table>
  </div>
</div>






<div class="form-group">
   <div class="col-md-6">
                                         
   <table align="left" width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 9</td>
    <td width="50%"> Date of Joining</td>
    <td width="40%"> <strong><?php echo $corporate_employee->date_of_joining;?></strong></td>
  </tr>

  
</table>

</div>
                        
                           



<div class="col-md-6">
                                         
   <table align="left" width="100%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 10</td>
    <td width="50%"> Gender</td>
    <td width="40%"> <strong><?php echo $corporate_employee->gender;?></strong> </td>
  </tr>

  
</table>
  </div>
</div>



<div class="form-group">
   <div class="col-md-6">
                                         
   <table align="left" width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 11</td>
    <td width="50%"> Photo</td>
    <td width="40%">
     
     
     
     
     
     <?php
	$filename0="uploads/corporate_employee/photo/".$corporate_employee->photo;
	if(file_exists($filename0))
	{
	
    ?>
    <img src="<?php echo base_url('uploads/corporate_employee/photo/'.$corporate_employee->photo);?>" width="200" height="100">
    <?php
	}
	else
	{
    ?>
  	<img src="<?php echo base_url();?>uploads/dummy_images/dummy.jpg" width="200" height="100">
	<?php
	}
    ?>
     
     
     
     
     
     
     
     
     
     
     
     </td>
  </tr>

  
</table>

</div>
                        
                           



<div class="col-md-6">
                                         
   <table align="left" width="100%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 12</td>
    <td width="50%"> Aadhaar Upload</td>
    <td width="40%"> 
    
    
    
    <?php
	$filename1="uploads/corporate_employee/aadhaar_scan/".$corporate_employee->aadhaar_scan;
	if(file_exists($filename1))
	{
	
    ?>
    <img src="<?php echo base_url('uploads/corporate_employee/aadhaar_scan/'.$corporate_employee->aadhaar_scan);?>" width="200" height="100">
    <?php
	}
	else
	{
    ?>
  	<img src="<?php echo base_url();?>uploads/dummy_images/dummy.jpg" width="200" height="100">
	<?php
	}
    ?>
    
    
    
    
    
    
    
    
    </td>
  </tr>

  
</table>
  </div>
</div>




<div class="form-group">
   <div class="col-md-6">
                                         
   <table align="left" width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 13</td>
    <td width="50%"> Pan Upload</td>
    <td width="40%"> 
    
    
     <?php
	$filename2="uploads/corporate_employee/pan_scan/".$corporate_employee->pan_scan;
	if(file_exists($filename2))
	{
	
    ?>
    <img src="<?php echo base_url('uploads/corporate_employee/pan_scan/'.$corporate_employee->pan_scan);?>" width="200" height="100">
    <?php
	}
	else
	{
    ?>
  	<img src="<?php echo base_url();?>uploads/dummy_images/dummy.jpg" width="200" height="100">
	<?php
	}
    ?>
    
    
    
    
    
    
    
    </td>
  </tr>

  
</table>

</div>
                        
                           



<div class="col-md-6">
                                         
   <table align="left" width="100%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 14</td>
    <td width="50%"> Passport Upload</td>
    <td width="40%">
     
     
     
     <?php
	$filename3="uploads/corporate_employee/passpot_scan/".$corporate_employee->passpot_scan;
	if(file_exists($filename3))
	{
	
    ?>
    <img src="<?php echo base_url('uploads/corporate_employee/passpot_scan/'.$corporate_employee->passpot_scan);?>" width="200" height="100">
    <?php
	}
	else
	{
    ?>
  	<img src="<?php echo base_url();?>uploads/dummy_images/dummy.jpg" width="200" height="100">
	<?php
	}
    ?>
     
     
     
     
     
     </td>
  </tr>

  
</table>
  </div>
</div>




<div class="form-group">
   <div class="col-md-6">
                                         
   <table align="left" width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 15</td>
    <td width="50%"> Voter ID Upload</td>
    <td width="40%"> 
    
    
    
     <?php
	$filename4="uploads/corporate_employee/voterid_scan/".$corporate_employee->voterid_scan;
	if(file_exists($filename4))
	{
	
    ?>
    <img src="<?php echo base_url('uploads/corporate_employee/voterid_scan/'.$corporate_employee->voterid_scan);?>" width="200" height="100">
    <?php
	}
	else
	{
    ?>
  	<img src="<?php echo base_url();?>uploads/dummy_images/dummy.jpg" width="200" height="100">
	<?php
	}
    ?>
    
    
    
    </td>
  </tr>

  
</table>

</div>
                        
                           



<div class="col-md-6">
                                         
   <table align="left" width="100%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 16</td>
    <td width="50%"> Driving License</td>
    <td width="40%"> 
    
    
     <?php
	$filename5="uploads/corporate_employee/driving_license_scan/".$corporate_employee->driving_license_scan;
	if(file_exists($filename5))
	{
	
    ?>
    <img src="<?php echo base_url('uploads/corporate_employee/driving_license_scan/'.$corporate_employee->driving_license_scan);?>" width="200" height="100">
    <?php
	}
	else
	{
    ?>
  	<img src="<?php echo base_url();?>uploads/dummy_images/dummy.jpg" width="200" height="100">
	<?php
	}
    ?>
    
    
    
    
    
    
    
    </td>
  </tr>

  
</table>
  </div>
</div>






<div class="form-group">
   <div class="col-md-6">
                                         
   <table align="left" width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 17</td>
    <td width="50%"> Bank Account Name</td>
    <td width="40%"><strong><?php echo $corporate_employee->bank_account_name;?></strong></td>
  </tr>

  
</table>

</div>
                        
                           



<div class="col-md-6">
                                         
   <table align="left" width="100%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 18</td>
    <td width="50%"> Bank Account Number</td>
    <td width="40%"> <strong><?php echo $corporate_employee->bank_account_number;?></strong></td>
  </tr>

  
</table>
  </div>
</div>





<div class="form-group">
   <div class="col-md-6">
                                         
   <table align="left" width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 19</td>
    <td width="50%"> Bank Name</td>
    <td width="40%"><strong><?php echo $corporate_employee->bank_name;?></strong></td>
  </tr>

  
</table>

</div>

</div>
         
         
         
         <div class="form-group">
   <div class="col-md-6">
                                         
   <table align="left" width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 20</td>
    <td width="50%"> Bank Branch</td>
    <td width="40%"><strong><?php echo $corporate_employee->bank_branch;?></strong></td>
  </tr>

  
</table>

</div>
                        
                           



<div class="col-md-6">
                                         
   <table align="left" width="100%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 21</td>
    <td width="50%"> Bank IFSC Code</td>
    <td width="40%"> <strong><?php echo $corporate_employee->ifsc_code;?></strong></td>
  </tr>

  
</table>
  </div>
</div>                           
        
        
        
        
        <div class="form-group">
   <div class="col-md-6">
                                         
   <table align="left" width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 22</td>
    <td width="50%"> Cheque Upload</td>
    <td width="40%">
    
    
     <?php
	$filename6="uploads/corporate_employee/cheque_scan/".$corporate_employee->cheque_scan;
	if(file_exists($filename6))
	{
	
    ?>
    <img src="<?php echo base_url('uploads/corporate_employee/cheque_scan/'.$corporate_employee->cheque_scan);?>" width="200" height="100">
    <?php
	}
	else
	{
    ?>
  	<img src="<?php echo base_url();?>uploads/dummy_images/dummy.jpg" width="200" height="100">
	<?php
	}
    ?>
    
    
    </td>
  </tr>

  
</table>

</div>
                        
                           



<div class="col-md-6">
                                         
   <table align="left" width="100%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 23</td>
    <td width="50%"> Branch</td>
    <td width="40%"> <strong><?php echo $corporate_employee->branch;?></strong></td>
  </tr>

  
</table>
  </div>
</div> 




<div class="form-group">
   <div class="col-md-6">
                                         
   <table align="left" width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 24</td>
    <td width="50%"> Mobile Number</td>
    <td width="40%"><strong><?php echo $corporate_employee->phone;?></strong></td>
  </tr>

  
</table>

</div>
                        
                           



<div class="col-md-6">
                                         
   <table align="left" width="100%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 25</td>
    <td width="50%"> Email ID</td>
    <td width="40%"> <strong><?php echo $corporate_employee->email;?></strong></td>
  </tr>

  
</table>
  </div>
</div>




<div class="form-group">
   <div class="col-md-6">
                                         
   <table align="left" width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 26</td>
    <td width="50%"> Sum Insured</td>
    <td width="40%"><strong><?php echo $corporate_employee->sum_insured;?></strong></td>
  </tr>

  
</table>

</div>
                        
                           



<div class="col-md-6">
                                         
   <table align="left" width="100%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 27</td>
    <td width="50%"> Family floater</td>
    <td width="40%"> <strong><?php echo $corporate_employee->family_floater;?></strong></td>
  </tr>

  
</table>
  </div>
</div> 




<div class="form-group">
   <div class="col-md-6">
                                         
   <table align="left" width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 28</td>
    <td width="50%"> Nominee Person Name</td>
    <td width="40%"><strong><?php echo $corporate_employee->nominee_name;?></strong></td>
  </tr>

  
</table>

</div>
                        
                           



<div class="col-md-6">
                                         
   <table align="left" width="100%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 29</td>
    <td width="50%"> Nominee Relationship</td>
    <td width="40%"> <strong><?php echo $corporate_employee->nominee_relationship;?></strong></td>
  </tr>

  
</table>
  </div>
</div>



<div class="form-group">
   <div class="col-md-6">
                                         
   <table align="left" width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 30</td>
    <td width="50%"> Nominee Date of Birth</td>
    <td width="40%"><strong><?php echo $corporate_employee->nominee_dob;?></strong></td>
  </tr>

  
</table>

</div>
                        
                           




</div>
                            
                                    </div>
                                    
                                    
                                    </div>
                                    </div>
                                    </div>