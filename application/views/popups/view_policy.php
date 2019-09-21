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
    <td width="50%"> Insurance Company</td>
    <td width="40%"> <strong><?php echo $this->fun->getCompany($policy->company);?></strong></td>
  </tr>

  
</table>

</div>
                        
                           



<div class="col-md-6">
                                         
   <table align="left" width="100%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 2</td>
    <td width="50%"> Select Category</td>
    <td width="40%"> <strong><?php echo $policy->category;?> </strong> </td>
  </tr>

  
</table>
  </div>
</div>





<div class="form-group">
   <div class="col-md-6">
                                         
   <table align="left" width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 3</td>
    <td width="50%"> Select Policy types</td>
    <td width="40%"> <strong><?php echo $this->fun->getType($policy->type);?></strong></td>
  </tr>

  
</table>

</div>

<div class="col-md-6">
                                         
   <table align="left" width="100%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 4</td>
    <td width="50%"> Policy Name</td>
    <td width="40%"> <strong><?php echo $policy->name;?> </strong> </td>
  </tr>

  
</table>
  </div>
</div>     
                                    </div>
                                    
                                    
                                    </div>
                                    </div>
                                    </div>




                        </div>