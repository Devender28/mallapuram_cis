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
    <td width="50%"> Client</td>
    <td width="40%"> <strong><?php echo $sale->client;?></strong></td>
  </tr>

  
</table>

</div>
                        
                           



<div class="col-md-6">
                                         
   <table align="left" width="100%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 2</td>
    <td width="50%"> Insurance Company</td>
    <td width="40%"> <strong><?php echo $this->fun->getCompany($sale->company);?> </strong> </td>
  </tr>

  
</table>
  </div>
</div>





<div class="form-group">
 <div class="col-md-6">
                                         
   <table align="left" width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 3</td>
    <td width="50%"> Insurance Policy Category</td>
    <td width="40%"> <strong><?php echo $sale->category;?></strong></td>
  </tr>

  
</table>

</div>
                        
                           



<div class="col-md-6">
                                         
   <table align="left" width="100%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 4</td>
    <td width="50%"> Policy Type</td>
    <td width="40%"> <strong><?php echo $this->fun->getType($sale->type);?> </strong> </td>
  </tr>

  
</table>
  </div>
</div>


<div class="form-group"><h3>Policy Specifications Details</h3></div>

<div class="form-group">
 <div class="col-md-6">
                                         
   <table align="left" width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 5</td>
    <td width="50%"> Policy Name</td>
    <td width="40%"> <strong><?php echo $this->fun->getPolicy($sale->policy_name);?></strong></td>
  </tr>

  
</table>

</div>
                        
                           



<div class="col-md-6">
                                         
   <table align="left" width="100%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 6</td>
    <td width="50%"> Policy Number</td>
    <td width="40%"> <strong><?php echo $sale->policy_number;?> </strong> </td>
  </tr>

  
</table>
  </div>
</div>



<div class="form-group">
 <div class="col-md-6">
                                         
   <table align="left" width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 7</td>
    <td width="50%"> Premium Amount without Tax</td>
    <td width="40%"> <strong><?php echo $sale->premium_without_tax;?></strong></td>
  </tr>

  
</table>

</div>
                        

<div class="col-md-6">
                                         
   <table align="left" width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 8</td>
    <td width="50%"> Premium Amount with Tax</td>
    <td width="40%"> <strong><?php echo $sale->premium_with_tax;?></strong></td>
  </tr>

  
</table>

</div>
</div>



<div class="form-group">
 <div class="col-md-6">
                                         
   <table align="left" width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 9</td>
    <td width="50%"> Tax Percentage</td>
    <td width="40%"> <strong><?php echo $sale->tax_percentage;?></strong></td>
  </tr>

  
</table>

</div>
                        

<div class="col-md-6">
                                         
   <table align="left" width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 10</td>
    <td width="50%"> Sum Insured</td>
    <td width="40%"> <strong><?php echo $sale->sum_insured;?></strong></td>
  </tr>

  
</table>

</div>
</div>




<div class="form-group">
 <div class="col-md-6">
                                         
   <table align="left" width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 11</td>
    <td width="50%"> Start Date</td>
    <td width="40%"> <strong><?php echo $sale->start_date;?></strong></td>
  </tr>

  
</table>

</div>
                        

<div class="col-md-6">
                                         
   <table align="left" width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 12</td>
    <td width="50%"> Policy term (1 Year default)</td>
    <td width="40%"> <strong><?php echo $sale->policy_term;?> years</strong></td>
  </tr>

  
</table>

</div>
</div>


<div class="form-group">
 <div class="col-md-6">
                                         
   <table align="left" width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 13</td>
    <td width="50%"> Premium Payment term</td>
    <td width="40%"> <strong><?php echo $sale->payment_term;?> years</strong></td>
  </tr>

  
</table>

</div>
                        

<div class="col-md-6">
                                         
   <table align="left" width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 14</td>
    <td width="50%"> Select Payment Mode</td>
    <td width="40%"> <strong><?php echo $sale->payment_mode;?></strong></td>
  </tr>

  
</table>

</div>
</div>




<div class="form-group">
 <div class="col-md-6">
                                         
   <table align="left" width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 15</td>
    <td width="50%"> Policy Copy Upload</td>
    <td width="40%"><img src="<?php echo base_url('uploads/sales/'.$sale->policy_copy);?>" width="200" height="80"></td>
  </tr>

  
</table>

</div>
                        

<div class="col-md-6">
                                         
   <table align="left" width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 16</td>
    <td width="50%"> Policy Benefits upload</td>
    <td width="40%"><img src="<?php echo base_url('uploads/sales/'.$sale->policy_benefits);?>" width="200" height="80"></td>
  </tr>

  
</table>

</div>
</div>



<div class="form-group">
 <div class="col-md-6">
                                         
   <table align="left" width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 17</td>
    <td width="50%"> Remarks</td>
    <td width="40%"> <strong><?php echo $sale->remarks;?></strong></td>
  </tr>

  
</table>

</div>
                        
</div>
                                   
                                    </div>
                                    
                                    </div>
                                    </div>
                                    </div>