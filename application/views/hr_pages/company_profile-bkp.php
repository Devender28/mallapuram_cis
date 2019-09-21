
            <main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter3">
                    <div class="row items-push">
                        <div class="col-sm-10">
                            <h1 class="page-heading">
                            Company Profile
                            </h1>
                        </div>
                        
                       <div class="col-md-2">
                        <div class="col-xs-12">
                        <a href="<?php echo base_url('hr/profile_edit');?>">  <button class= "btn btn-minw btn-danger" type="button">Edit</button></a>
                           </div>
                           </div>
                        
                    </div>
                </div>
                <!-- END Page Header -->

                <!-- Page Content -->
                <div class="block">
                                
                                <div class="block-content block-content-full" >
                                   
                                    
                                    <div class="row">
                                    
                                    <div class="form-group">
                            <div class="col-md-6">
                                         
   <table align="left" width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 1</td>
    <td width="50%"> Company Name</td>
    <td width="40%"> <strong><?php echo $profile->name;?></strong></td>
  </tr>

  
</table>

</div>
                        
                           



<div class="col-md-6">
                                         
   <table align="left" width="100%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 2</td>
    <td width="50%"> Address</td>
    <td width="40%"> <strong><?php echo $profile->address;?> </strong> </td>
  </tr>

  
</table>
  </div>
</div>





<div class="form-group">
   <div class="col-md-6">
                                         
   <table align="left" width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 3</td>
    <td width="50%"> Pincode</td>
    <td width="40%"> <strong><?php echo $profile->pincode;?></strong></td>
  </tr>

  
</table>

</div>
                        
                           



<div class="col-md-6">
                                         
   <table align="left" width="100%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 4</td>
    <td width="50%"> Board Number(Company Contact Number)</td>
    <td width="40%"><strong><?php echo $profile->contact_number;?></strong></td>
  </tr>

  
</table>
  </div>
</div>








<div class="form-group">
   <div class="col-md-6">
                                         
   <table align="left" width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 5</td>
    <td width="50%"> GST Number</td>
    <td width="40%"><strong><?php echo $profile->gstn_number;?></strong></td>
  </tr>

  
</table>

</div>
                        
                           



<div class="col-md-6">
                                         
   <table align="left" width="100%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 6</td>
    <td width="50%">GST Scan Copy</td>
    <td width="40%"> <img src="<?php echo base_url();?>uploads/corporate_client/gstn/<?php echo $profile->gstn_scan;?>" width="200" height="80"></td>
  </tr>

  
</table>
  </div>
</div>






<div class="form-group" >

   <div class="col-md-6">
           
<br>
<br>
                      
   <table align="left" width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 7</td>
    <td width="50%">Logo</td>
    <td width="40%"> <img src="<?php echo base_url();?>uploads/corporate_client/logo/<?php echo $profile->logo;?>" width="300" height="100"></td>
  </tr>

  
</table>

</div>
                        
                           



<div class="col-md-6">
                                         
   <table align="left" width="100%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 8</td>
    <td width="50%"> Company Pan Number</td>
    <td width="40%"> <strong><?php echo $profile->pan_number;?></strong> </td>
  </tr>

  
</table>
  </div>
</div>






<div class="form-group">
   <div class="col-md-6">
                                         
   <table align="left" width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 9</td>
    <td width="50%">Company Pan Scan</td>
    <td width="40%"> <img src="<?php echo base_url();?>uploads/corporate_client/pan/<?php echo $profile->pan_scan;?>" width="200" height="80"> </td>
  </tr>

  
</table>

</div>
                        
                           



<div class="col-md-6">
                                         
   <table align="left" width="100%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 10</td>
    <td width="50%"> Company Bank Account Name</td>
    <td width="40%"><strong><?php echo $profile->bank_account_name;?></strong></td>
  </tr>

  
</table>
  </div>
</div>



<div class="form-group">
   <div class="col-md-6">
                                         
   <table align="left" width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 11</td>
    <td width="50%"> Bank Account Number</td>
    <td width="40%"><strong> <?php echo $profile->bank_account_number;?></strong></td>
  </tr>

  
</table>

</div>
                        
                           



<div class="col-md-6">
                                         
   <table align="left" width="100%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 12</td>
    <td width="50%"> Bank Name </td>
    <td width="40%"><strong> <?php echo $profile->bank_name;?> </strong></td>
  </tr>

  
</table>
  </div>
</div>




<div class="form-group">
   <div class="col-md-6">
                                         
   <table align="left" width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 13</td>
    <td width="50%">Bank IFSC Code</td>
    <td width="40%"><strong><?php echo $profile->ifsc_code;?></strong></td>
  </tr>

  
</table>

</div>
                        
                           



<div class="col-md-6">
                                         
   <table align="left" width="100%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 14</td>
    <td width="50%"> Cheque Scan Copy</td>
     <td width="40%"><img src="<?php echo base_url();?>uploads/corporate_client/cheque/<?php echo $profile->cheque_scan;?>" width="250" height="105"></td>
  </tr>

  
</table>
  </div>
</div>


<div class="form-group">
   <div class="col-md-6">
                                         
   <table align="left" width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 15</td>
    <td width="50%">Authorised Contact Person Name</td>
    <td width="40%"><strong><?php echo $profile->authorised_contact_person1_name;?></strong></td>
  </tr>

  
</table>

</div>
                        
                           



<div class="col-md-6">
                                         
   <table align="left" width="100%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 16</td>
    <td width="50%"> Authorised Contact Person1 Mobile</td>
     <td width="40%"><strong><?php echo $profile->authorised_contact_person1_phone;?></strong></td>
  </tr>

  
</table>
  </div>
</div>


         </div>
                                    
                     
                                 
                                    </div>
                                    </div>
                <!-- END Page Content -->
            </main>
           
          
        