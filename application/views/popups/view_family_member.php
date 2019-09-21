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
    <td width="50%"> Name</td>
    <td width="40%"> <strong><?php echo $family_member->first_name;?><?php echo $family_member->middle_name;?><?php echo $family_member->last_name;?></strong></td>
  </tr>

  
</table>

</div>
                        
                           



<div class="col-md-6">
                                         
   <table align="left" width="100%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 2</td>
    <td width="50%"> Relationship</td>
    <td width="40%"> <strong><?php echo $family_member->relationship;?></strong> </td>
  </tr>

  
</table>
  </div>
</div>





<div class="form-group">
   <div class="col-md-6">
                                         
   <table align="left" width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 3</td>
    <td width="50%"> Mobile1</td>
    <td width="40%"> <strong><?php echo $family_member->mobile1;?></strong></td>
  </tr>

  
</table>

</div>
                        
                           



<div class="col-md-6">
                                         
   <table align="left" width="100%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 4</td>
    <td width="50%">Mobile2</td>
    <td width="40%"> <strong>m<?php echo $family_member->mobile2;?> </strong> </td>
  </tr>

  
</table>
  </div>
</div>








<div class="form-group">
   <div class="col-md-6">
                                         
   <table align="left" width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 5</td>
    <td width="50%"> Mobile3</td>
    <td width="40%"> <strong><?php echo $family_member->mobile3;?></strong></td>
  </tr>

  
</table>

</div>
                        
                           



<div class="col-md-6">
                                         
   <table align="left" width="100%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 6</td>
    <td width="50%"> Actual(DOB)</td>
    <td width="40%"> <strong><?php echo $family_member->actual_dob;?></strong> </td>
  </tr>

  
</table>
  </div>
</div>





<div class="form-group">
   <div class="col-md-6">
                                         
   <table align="left" width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 7</td>
    <td width="50%">Recorded(DOB)</td>
    <td width="40%"> <strong><?php echo $family_member->recorded_dob;?></strong></td>
  </tr>

  
</table>

</div>
                        
                           



<div class="col-md-6">
                                         
   <table align="left" width="100%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 8</td>
    <td width="50%"> Age Band</td>
    <td width="40%"> <strong><?php echo $family_member->mobile1;?></strong> </td>
  </tr>

  
</table>
  </div>
</div>










<div class="form-group">
   <div class="col-md-6">
                                         
   <table align="left" width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 9</td>
    <td width="50%"> Aadhar No</td>
    <td width="40%"><?php echo $family_member->aadhar_no;?></td>
  </tr>

  
</table>

</div>
                        
                           



<div class="col-md-6">
                                         
   <table align="left" width="100%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 10</td>
    <td width="50%"> Aadhaar Scan</td>
    <td width="40%">
    
    
    <?php
	$filename0="../uploads/individual/aadhar/".$family_member->aadhar_scan;
	if(file_exists($filename0))
	{
	
    ?>
    <img src="<?php echo base_url('../uploads/individual/aadhar/'.$family_member->aadhar_scan);?>" width="200" height="100">
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
    <td width="10%"> 11</td>
    <td width="50%"> Pan No</td>
    <td width="40%"><?php echo $family_member->pan_no;?></td>
  </tr>

  
</table>

</div>
                        
                           



<div class="col-md-6">
                                         
   <table align="left" width="100%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 12</td>
    <td width="50%"> Pan Scan</td>
    <td width="40%">
    
    
    <?php
	$filename0="../uploads/individual/pan/".$family_member->pan_scan;
	if(file_exists($filename0))
	{
	
    ?>
    <img src="<?php echo base_url('../uploads/individual/pan/'.$family_member->pan_scan);?>" width="200" height="100">
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
    <td width="50%"> Voterid No</td>
    <td width="40%"><?php echo $family_member->voterid_no;?></td>
  </tr>

  
</table>

</div>
                        
                           



<div class="col-md-6">
                                         
   <table align="left" width="100%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 14</td>
    <td width="50%"> Voterid Scan</td>
    <td width="40%">
    
    
    <?php
	$filename0="../uploads/individual/voterid/".$family_member->voterid_scan;
	if(file_exists($filename0))
	{
	
    ?>
    <img src="<?php echo base_url('../uploads/individual/voterid/'.$family_member->voterid_scan);?>" width="200" height="100">
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
    <td width="50%"> License No</td>
    <td width="40%"><?php echo $family_member->license_no;?></td>
  </tr>

  
</table>

</div>
                        
                           



<div class="col-md-6">
                                         
   <table align="left" width="100%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 16</td>
    <td width="50%"> license Scan</td>
    <td width="40%">
    
    
    <?php
	$filename0="../uploads/individual/license/".$family_member->license_scan;
	if(file_exists($filename0))
	{
	
    ?>
    <img src="<?php echo base_url('../uploads/individual/license/'.$family_member->license_scan);?>" width="200" height="100">
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