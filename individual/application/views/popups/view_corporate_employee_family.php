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
    <td width="50%"> Company</td>
    <td width="40%"> <strong><?php echo $this->fun->getnewfieldvalue('corporate_client','name','id',$corporate_employee_family->corporate_id);?></strong></td>
  </tr>

  
</table>

</div>
                        
 

<div class="col-md-6">
                                         
   <table align="left" width="100%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 2</td>
    <td width="50%"> Employee Id</td>
    <td width="40%"> <strong><?php echo $corporate_employee_family->employee_id;?></strong> </td>
  </tr>

  
</table>
  </div>
</div>






<div class="form-group">

                        
 

<div class="col-md-6">
                                         
   <table align="left" width="100%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 4</td>
    <td width="50%"> Member Name</td>
    <td width="40%"> <strong><?php echo $corporate_employee_family->name;?></strong> </td>
  </tr>

  
</table>
  </div>
</div>



<div class="form-group">
<div class="col-md-6">
                                         
   <table align="left" width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 5</td>
    <td width="50%"> Relation</td>
    <td width="40%"> <strong><?php echo $corporate_employee_family->relation;?></strong></td>
  </tr>

  
</table>

</div>
                        
 

<div class="col-md-6">
                                         
   <table align="left" width="100%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 6</td>
    <td width="50%"> Member Date Of Birth</td>
    <td width="40%"> <strong><?php echo $corporate_employee_family->date_of_birth;?></strong> </td>
  </tr>

  
</table>
  </div>
</div>




<div class="form-group">
<div class="col-md-6">
                                         
   <table align="left" width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 7</td>
    <td width="50%"> Sum Insured</td>
    <td width="40%"> <strong><?php echo $corporate_employee_family->sum_insured;?></strong></td>
  </tr>

  
</table>

</div>
                        
 

<div class="col-md-6">
                                         
   <table align="left" width="100%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 8</td>
    <td width="50%"> Gender</td>
    <td width="40%"> <strong><?php echo $corporate_employee_family->gender;?></strong> </td>
  </tr>

  
</table>
  </div>
</div>





<div class="form-group">
<div class="col-md-6">
                                         
   <table align="left" width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 9</td>
    <td width="50%"> Age</td>
    <td width="40%"> <strong><?php echo $corporate_employee_family->age;?></strong></td>
  </tr>

  
</table>

</div>
                        
 

<div class="col-md-6">
                                         
   <table align="left" width="100%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 10</td>
    <td width="50%"> Age band</td>
    <td width="40%"> <strong><?php echo $corporate_employee_family->age_band;?></strong> </td>
  </tr>

  
</table>
  </div>
</div>




<div class="form-group">
<div class="col-md-6">
                                         
   <table align="left" width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 11</td>
    <td width="50%"> Policy Id</td>
    <td width="40%"> <strong><?php echo $corporate_employee_family->policy_id;?></strong></td>
  </tr>

  
</table>

</div>
                        
 

<div class="col-md-6">
                                         
   <table align="left" width="100%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 12</td>
    <td width="50%"> Photo</td>
    <td width="40%"> 
    
    <?php
	$filename0="uploads/corporate_employee_family/photo/".$corporate_employee_family->photo;
	if(file_exists($filename0))
	{
	
    ?>
    <img src="<?php echo base_url('uploads/corporate_employee_family/photo/'.$corporate_employee_family->photo);?>" width="200" height="100">
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
    <td width="50%"> Aadhaar Upload</td>
    <td width="40%">
    
     <?php
	$filename1="uploads/corporate_employee_family/aadhaar_scan/".$corporate_employee_family->aadhaar_scan;
	if(file_exists($filename1))
	{
	
    ?>
    <img src="<?php echo base_url('uploads/corporate_employee_family/aadhaar_scan/'.$corporate_employee_family->aadhaar_scan);?>" width="200" height="100">
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
    <td width="50%"> Pan Upload</td>
    <td width="40%">
    
      <?php
	$filename2="uploads/corporate_employee_family/pan_scan/".$corporate_employee_family->pan_scan;
	if(file_exists($filename2))
	{
	
    ?>
    <img src="<?php echo base_url('uploads/corporate_employee_family/pan_scan/'.$corporate_employee_family->pan_scan);?>" width="200" height="100">
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
    <td width="50%"> Passport Upload</td>
    <td width="40%">
    
    <?php
	$filename3="uploads/corporate_employee_family/passpot_scan/".$corporate_employee_family->passpot_scan;
	if(file_exists($filename3))
	{
	
    ?>
    <img src="<?php echo base_url('uploads/corporate_employee_family/passpot_scan/'.$corporate_employee_family->passpot_scan);?>" width="200" height="100">
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
    <td width="50%"> Voter ID Upload</td>
    <td width="40%"> 
    <?php
	$filename4="uploads/corporate_employee_family/voterid_scan/".$corporate_employee_family->voterid_scan;
	if(file_exists($filename4))
	{
	
    ?>
    <img src="<?php echo base_url('uploads/corporate_employee_family/voterid_scan/'.$corporate_employee_family->voterid_scan);?>" width="200" height="100">
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
    <td width="50%"> Driving License</td>
    <td width="40%"> 
    
     <?php
	$filename5="uploads/corporate_employee_family/driving_license_scan/".$corporate_employee_family->driving_license_scan;
	if(file_exists($filename5))
	{
	
    ?>
    <img src="<?php echo base_url('uploads/corporate_employee_family/driving_license_scan/'.$corporate_employee_family->driving_license_scan);?>" width="200" height="100">
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


                                    
                                    
                                    
                                    </div>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    </div>
                                    </div>
                                    </div>