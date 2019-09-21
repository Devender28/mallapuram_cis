<div class="block">
                                
                                <div class="block-content block-content-full" >
                                  <div data-toggle="slimscroll" data-always-visible="true" data-size="10px">
                        
                        <div class="row">
                           <div class="form-group">
                            <div class="col-md-6">
                                         
   <table align="left" width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 1</td>
    <td width="50%"> Company Name</td>
    <td width="40%"> <strong><?php echo $corporate_client->name;?></strong></td>
  </tr>

  
</table>

</div>
                        
                           



<div class="col-md-6">
                                         
   <table align="left" width="100%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 2</td>
    <td width="50%"> Address</td>
    <td width="40%"> <strong><?php echo $corporate_client->address;?></strong> </td>
  </tr>

  
</table>
  </div>
</div>




<div class="form-group">
<div class="col-md-6">
                                         
   <table width="100%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
 <td width="10%"> 3</td>
    <td width="50%"> Pincode</td>
    <td width="40%"> <strong><?php echo $corporate_client->pincode;?></strong> </td>
  </tr>
  
  
</table>
 
</div>





<div class="col-md-6">
                                         
   <table width="100%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 4</td>
    <td width="50%"> Board Number(Company Contact Number)</td>
    <td width="40%"> <strong><?php echo $corporate_client->contact_number;?></strong> </td>
  </tr>
  
  
</table>
  </div>
</div>




<div class="form-group">
<div class="col-md-6">
                                         
   <table width="100%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 5</td>
    <td width="50%"> GSTN Number</td>
    <td width="40%"><strong><?php echo $corporate_client->gstn_number;?></strong> </td>
  </tr>

  
</table>
  
</div>




<div class="col-md-6">
                                         
   <table width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 6</td>
    <td width="50%"> GSTN Scan Copy</td>
    <td >
   
    
    
    
    <?php
	$filename0="uploads/corporate_client/gstn/".$corporate_client->gstn_scan;
	if(file_exists($filename0))
	{
	
    ?>
    <img src="uploads/corporate_client/gstn/<?php echo $corporate_client->gstn_scan;?>" width="200" height="100">
    <?php
	}
	else
	{
    ?>
  	<img src="uploads/dummy_images/<?php echo 'dummy.jpg';?>" width="200" height="100">
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
                                         
   <table width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 7</td>
    <td width="50%"> Website Address</td>
    <td><strong><?php echo $corporate_client->website;?></strong> </td>
  </tr>

  
</table>

</div>





<div class="col-md-6">
                                         
   <table width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 8</td>
    <td width="50%"> Logo</td>
    <td> 
    
    
	<?php
	$filename="uploads/corporate_client/logo/".$corporate_client->logo;
	
	
	if(file_exists($filename))
	{
    ?>
    <img src="uploads/corporate_client/logo/<?php echo $corporate_client->logo;?>" width="200" height="100">
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





<div class="form-group" style="width:100%;">

<div class="col-md-6">
                                         
   <table width="100%" border="0" cellspacing="0" cellpadding="5" class="table">


  <tr>
    <td width="10%"> 9</td>
    <td width="50%"> Username </td>
    <td> <strong> <?php echo $corporate_client->username;?> </strong></td>
  </tr>
  
</table>

</div>




<div class="col-md-6">
                                         
   <table width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 10</td>
    <td width="50%"> Password</td>
    <td> <strong> <?php echo $corporate_client->password;?> </strong></td>
  </tr>

  
</table>
  </div>
</div>



<div class="form-group">
<div class="col-md-6">
                                         
   <table width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 11</td>
    <td width="50%"> Company Pan Number</td>
    <td> <strong><?php echo $corporate_client->pan_number;?></td>
  </tr>

  
</table>

</div>






<div class="col-md-6">
                                         
   <table width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 12</td>
    <td width="50%"> Company Pan Scan</td>
    <td>
    
     
     
     
     <?php
	  
	$filename1="uploads/corporate_client/pan/".$corporate_client->pan_scan;
	
	if(file_exists($filename1))
	{ 
	
    ?>
    <img src="<?php echo base_url('uploads/corporate_client/pan/'.$corporate_client->pan_scan);?>" width="200" height="100">
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

<div class="form-group"><h3>Bank Details</h3></div>


<div class="form-group">
<div class="col-md-6">
                                         
   <table width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 13</td>
    <td width="50%"> Bank Account( Company Name)</td>
    <td> <strong><?php echo $corporate_client->bank_account_name;?></strong></td>
  </tr>

  
</table>

</div>





<div class="col-md-6">
                                         
   <table width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 14</td>
    <td width="50%"> Bank Account Number</td>
    <td> <strong><?php echo $corporate_client->bank_account_number;?></strong></td>
  </tr>

  
</table>
  </div>
</div>


<div class="form-group">
<div class="col-md-6">
                                         
   <table width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 15</td>
    <td width="50%"> Bank Name</td>
    <td> <strong><?php echo $corporate_client->bank_name;?></strong></td>
  </tr>

  
</table>

</div>



<div class="col-md-6">
                                         
   <table width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 16</td>
    <td width="50%"> Bank Branch</td>
    <td> <strong><?php echo $corporate_client->bank_branch;?></strong></td>
  </tr>

  
</table>
  </div>
</div>





<div class="form-group">
<div class="col-md-6">
                                         
   <table width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 17</td>
    <td width="50%"> Bank IFSC Code</td>
    <td> <strong><?php echo $corporate_client->ifsc_code;?></strong></td>
  </tr>

  
</table>

</div>


<div class="col-md-6">
                                         
   <table width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 18</td>
    <td width="50%"> Cheque Scan Copy</td>
    <td>
     
      <?php
	  
	$filename2="uploads/corporate_client/cheque/".$corporate_client->cheque_scan;
	if(file_exists($filename2))
	{  
	  
	
    ?>
    <img src="<?php echo base_url('uploads/corporate_client/cheque/'.$corporate_client->cheque_scan);?>" width="200" height="100">
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



<div class="form-group"><h3>Authorised Contact Person1</h3></div>


<div class="form-group">
<div class="col-md-6">
                                         
   <table width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 19</td>
    <td width="50%"> Authorised Contact Person1 Name</td>
    <td> <strong><?php echo $corporate_client->authorised_contact_person1_name;?></strong></td>
  </tr>

  
</table>

</div>


<div class="col-md-6">
                                         
   <table width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 20</td>
    <td width="50%">Authorised Contact Person1 Designation</td>
    <td> <strong><?php echo $corporate_client->authorised_contact_person1_designation;?></strong></td>
  </tr>

  
</table>
  </div>
</div>



<div class="form-group">
<div class="col-md-6">
                                         
   <table width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 21</td>
    <td width="50%">Authorised Contact Person1 Mobile</td>
    <td> <strong><?php echo $corporate_client->authorised_contact_person1_phone;?></strong></td>
  </tr>

  
</table>

</div>




<div class="col-md-6">
                                         
   <table width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 22</td>
    <td width="50%"> Authorised Contact Person1 Email</td>
    <td> <strong><?php echo $corporate_client->authorised_contact_person1_email;?></strong></td>
  </tr>

  
</table>
  </div>
</div>



<div class="form-group"><h3>Authorised Contact Person2:</h3></div>



<div class="form-group">

<div class="col-md-6">
                                         
   <table width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 23</td>
    <td width="50%"> Authorised Contact Person2 Name</td>
    <td> <strong><?php echo $corporate_client->authorised_contact_person2_name;?></strong></td>
  </tr>

  
</table>
  </div>
  
  
  
  <div class="col-md-6">
                                         
   <table width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 24</td>
    <td width="50%"> Authorised Contact Person2 Designation</td>
    <td> <strong><?php echo $corporate_client->authorised_contact_person2_designation;?></strong></td>
  </tr>

  
</table>
  </div>



</div>



<div class="form-group">

<div class="col-md-6">
                                         
   <table width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 25</td>
    <td width="50%"> Authorised Contact Person2 Mobile</td>
    <td> <strong><?php echo $corporate_client->authorised_contact_person2_phone;?></strong></td>
  </tr>

  
</table>
  </div>



<div class="col-md-6">
                                         
   <table width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 26</td>
    <td width="50%"> Authorised Contact Person2 Email</td>
    <td> <strong><?php echo $corporate_client->authorised_contact_person2_email;?></strong></td>
  </tr>

  
</table>
  </div>

</div>


<div class="form-group"><h3>Superior Contact Person1:</h3></div>



<div class="form-group">

<div class="col-md-6">
                                         
   <table width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 27</td>
    <td width="50%"> Superior Contact Person1 Name</td>
    <td> <strong><?php echo $corporate_client->superior_contact_person1_name;?></strong></td>
  </tr>

  
</table>
  </div>
  
  
  
  <div class="col-md-6">
                                         
   <table width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 28</td>
    <td width="50%"> Superior Contact Person1 Designation</td>
    <td> <strong><?php echo $corporate_client->superior_contact_person1_designation;?></strong></td>
  </tr>

  
</table>
  </div>



</div>








<div class="form-group">

<div class="col-md-6">
                                         
   <table width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 29</td>
    <td width="50%"> Superior Contact Person1 Mobile</td>
    <td> <strong><?php echo $corporate_client->superior_contact_person1_phone;?></strong></td>
  </tr>

  
</table>
  </div>
  
  
  
  <div class="col-md-6">
                                         
   <table width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 30</td>
    <td width="50%"> Superior Contact Person1 Email</td>
    <td><strong> <?php echo $corporate_client->authorised_contact_person1_email;?></strong></td>
  </tr>

  
</table>
  </div>

</div>


<div class="form-group"><h3>Superior Contact Person2:</h3></div>



<div class="form-group">

<div class="col-md-6">
                                         
   <table width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 31</td>
    <td width="50%"> Superior Contact Person2 Name</td>
    <td> <strong><?php echo $corporate_client->superior_contact_person2_name;?></strong></td>
  </tr>

  
</table>
  </div>
  
  
  
  <div class="col-md-6">
                                         
   <table width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 32</td>
    <td width="50%"> Superior Contact Person2 Designation</td>
    <td> <strong><?php echo $corporate_client->superior_contact_person2_designation;?></strong></td>
  </tr>

  
</table>
  </div>


</div>



<div class="form-group">

<div class="col-md-6">
                                         
   <table width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 33</td>
    <td width="50%"> Superior Contact Person2 Mobile</td>
    <td> <strong><?php echo $corporate_client->superior_contact_person2_phone;?></strong></td>
  </tr>

  
</table>
  </div>
  
  
  
  <div class="col-md-6">
                                         
   <table width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 34</td>
    <td width="50%"> Superior Contact Person2 Email</td>
    <td><strong> <?php echo $corporate_client->superior_contact_person2_email;?></strong></td>
  </tr>

  
</table>
  </div>

</div>




<div class="form-group"><h3>Support Contact Person1:</h3></div>



<div class="form-group">

<div class="col-md-6">
                                         
   <table width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 35</td>
    <td width="50%"> Support Contact Person1 Name</td>
    <td> <strong><?php echo $corporate_client->support_contact_person1_name;?></strong></td>
  </tr>

  
</table>
  </div>
  
  
  
  <div class="col-md-6">
                                         
   <table width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 36</td>
    <td width="50%"> Support Contact Person1 Designation</td>
    <td><strong><?php echo $corporate_client->support_contact_person1_designation;?></strong></td>
  </tr>

  
</table>
  </div>

</div>





<div class="form-group">

<div class="col-md-6">
                                         
   <table width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 37</td>
    <td width="50%"> Support Contact Person1 Mobile</td>
    <td> <strong><?php echo $corporate_client->support_contact_person1_phone;?></strong></td>
  </tr>

  
</table>
  </div>
  
  
  
  <div class="col-md-6">
                                         
   <table width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 38</td>
    <td width="50%"> Superior Contact Person2 Email</td>
    <td><strong><?php echo $corporate_client->support_contact_person1_email;?></strong></td>
  </tr>

  
</table>
  </div>

</div>





<div class="form-group"><h3>Support Contact Person2:</h3></div>



<div class="form-group">

<div class="col-md-6">
                                         
   <table width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 39</td>
    <td width="50%"> Support Contact Person2 Name</td>
    <td> <strong><?php echo $corporate_client->support_contact_person2_name;?></strong></td>
  </tr>

  
</table>
  </div>
  
  
  
  <div class="col-md-6">
                                         
   <table width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 40</td>
    <td width="50%"> Support Contact Person2 Designation</td>
    <td><strong><?php echo $corporate_client->support_contact_person2_designation;?></strong></td>
  </tr>

  
</table>
  </div>

</div>





<div class="form-group">
<div class="col-md-6">
 <table width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 41</td>
    <td width="50%"> Support Contact Person2 Mobile</td>
    <td> <strong><?php echo $corporate_client->support_contact_person2_phone;?></strong></td>
  </tr>
</table>
</div>
  
  
  <div class="col-md-6">
   <table width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 42</td>
    <td width="50%"> Support Contact Person2 Email</td>
    <td><strong><?php echo $corporate_client->support_contact_person2_email;?></strong></td>
  </tr>
  
</table>
</div>
</div>


</div>
</div>
</div>
</div>