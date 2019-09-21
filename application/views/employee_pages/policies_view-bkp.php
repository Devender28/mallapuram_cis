


  

             

            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter3">
                    <div class="row items-push">
                        <div class="col-sm-10">
                            <h1 class="page-heading">
                              View Policy Data
                            </h1>
                        </div>
                        
                        <div class="col-md-2">
                        <div class="col-xs-12">
                         <a href="<?php echo base_url('add_policy');?>"> <button class="btn btn-minw btn-danger" type="button">Add</button></a>
                           </div>
                           </div>
                        
                    </div>
                </div>
                <!-- END Page Header -->

                <!-- Page Content -->
                <div class="content content-narrow">
                  
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Default Elements -->
                            <div class="block">
                                
                                
                               


                                 


<div class="block-content">
                            <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/base_tables_datatables.js -->
                             <table class="display" id="example">
                                <thead>
                                    <tr>
                                        <th class="text-center">SNo</th>
                                        <th>Poliy Holder Name</th>
                                        <th class="hidden-xs">Insurance Company</th>
                                        <th class="hidden-xs">Policy Name</th>
                                        <th class="hidden-xs">Policy Number</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                 $a=1;
                                 foreach($policies as $policy) { 
                                ?>
                                    <tr>
                                        <td class="text-center"><?php echo $a++;?></td>
                                        <td class="font-w600"><?php echo $policy->policy_holder_name;?></td>
                                        <td class="hidden-xs"><?php echo $this->fun->getCompany($policy->insurance_company);?></td>
                                       <td class="hidden-xs"><?php echo $this->fun->getPolicy($policy->policy_name);?></td>
                                       <td class="hidden-xs"><?php echo $policy->policy_number;?></td>
                                        <td class="text-center">
                                        
                                            <div class="btn-group">
                                            
                    <button  class="btn btn-xs btn-default"  data-toggle="modal" data-target="#modal-normal" type="button" title="View Details"><i class="fa fa-eye"></i></button>
                       <a href="<?php echo base_url('edit_policy/'.$policy->id);?>"> <button class="btn btn-xs btn-default" type="button"><i class="fa fa-pencil"></i></button></a>
                                                
                                           
                                                
                                            </div>
                                        </td>
                                    </tr>

                                    <?php } ?>
                                    
                                </tbody>
                            </table>
                        </div> 
                                
                            </div>
                            <!-- END Default Elements -->
                        </div>
                        
                    </div>
                  
                   
                </div>
                <!-- END Page Content -->
            </main>
           
            
            
            
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
                                    <div data-toggle="slimscroll" data-always-visible="true" data-size="10px">
                                    
                                    
                                    
                                    <div class="row">
                                    
                                    <div class="form-group">
                            <div class="col-md-6">
                                         
   <table align="left" width="50%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 1</td>
    <td width="50%"> Select Company</td>
    <td width="40%"> <strong>Mallapuram</strong></td>
  </tr>

  
</table>

</div>
                        
                           



<div class="col-md-6">
                                         
   <table align="left" width="100%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 2</td>
    <td width="50%"> Employee Id</td>
    <td width="40%"> <strong>1234 </strong> </td>
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
    <td width="40%"> <strong>321654</strong></td>
  </tr>

  
</table>

</div>
                        
                           



<div class="col-md-6">
                                         
   <table align="left" width="100%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 4</td>
    <td width="50%"> Employee Name</td>
    <td width="40%"> <strong>mallapuram </strong> </td>
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
    <td width="40%"> <strong>HR</strong></td>
  </tr>

  
</table>

</div>
                        
                           



<div class="col-md-6">
                                         
   <table align="left" width="100%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 6</td>
    <td width="50%"> Date of Birth</td>
    <td width="40%"> <strong>31-10-1998</strong> </td>
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
    <td width="40%"> <strong>28</strong></td>
  </tr>

  
</table>

</div>
                        
                           



<div class="col-md-6">
                                         
   <table align="left" width="100%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 8</td>
    <td width="50%"> Age Band</td>
    <td width="40%"> <strong>60</strong> </td>
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
    <td width="40%"> <strong>26-5-2005</strong></td>
  </tr>

  
</table>

</div>
                        
                           



<div class="col-md-6">
                                         
   <table align="left" width="100%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 10</td>
    <td width="50%"> Gender</td>
    <td width="40%"> <strong>Male</strong> </td>
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
    <td width="40%"> <img src="assets/img/photos/photo1.jpg" width="200" height="80"></td>
  </tr>

  
</table>

</div>
                        
                           



<div class="col-md-6">
                                         
   <table align="left" width="100%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 12</td>
    <td width="50%"> Aadhaar Upload</td>
    <td width="40%"> <img src="assets/img/photos/photo1.jpg" width="200" height="80"></td>
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
    <td width="40%"> <img src="assets/img/photos/photo1.jpg" width="200" height="80"></td>
  </tr>

  
</table>

</div>
                        
                           



<div class="col-md-6">
                                         
   <table align="left" width="100%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 14</td>
    <td width="50%"> Passport Upload</td>
    <td width="40%"> <img src="assets/img/photos/photo1.jpg" width="200" height="80"></td>
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
    <td width="40%"> <img src="assets/img/photos/photo1.jpg" width="200" height="80"></td>
  </tr>

  
</table>

</div>
                        
                           



<div class="col-md-6">
                                         
   <table align="left" width="100%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 16</td>
    <td width="50%"> Driving License</td>
    <td width="40%"> <img src="assets/img/photos/photo1.jpg" width="200" height="80"></td>
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
    <td width="40%"><strong>mallapuram</strong></td>
  </tr>

  
</table>

</div>
                        
                           



<div class="col-md-6">
                                         
   <table align="left" width="100%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 18</td>
    <td width="50%"> Bank Account Number</td>
    <td width="40%"> <strong>1234669875</strong></td>
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
    <td width="40%"><strong>SBI</strong></td>
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
    <td width="40%"><strong>Hyderabad</strong></td>
  </tr>

  
</table>

</div>
                        
                           



<div class="col-md-6">
                                         
   <table align="left" width="100%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 21</td>
    <td width="50%"> Bank IFSC Code</td>
    <td width="40%"> <strong>SBI0132345</strong></td>
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
    <td width="40%"><img src="assets/img/photos/photo1.jpg" width="200" height="80"></td>
  </tr>

  
</table>

</div>
                        
                           



<div class="col-md-6">
                                         
   <table align="left" width="100%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 23</td>
    <td width="50%"> Branch</td>
    <td width="40%"> <strong>Hyderabad</strong></td>
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
    <td width="40%"><strong>1234567890</strong></td>
  </tr>

  
</table>

</div>
                        
                           



<div class="col-md-6">
                                         
   <table align="left" width="100%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 25</td>
    <td width="50%"> Email ID</td>
    <td width="40%"> <strong>info@mallapuram.com</strong></td>
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
    <td width="40%"><strong>mallapuram</strong></td>
  </tr>

  
</table>

</div>
                        
                           



<div class="col-md-6">
                                         
   <table align="left" width="100%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 27</td>
    <td width="50%"> Family floater</td>
    <td width="40%"> <strong>Yes</strong></td>
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
    <td width="40%"><strong>mallapuram</strong></td>
  </tr>

  
</table>

</div>
                        
                           



<div class="col-md-6">
                                         
   <table align="left" width="100%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 29</td>
    <td width="50%"> Nominee Relationship</td>
    <td width="40%"> <strong>mallapuram</strong></td>
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
    <td width="40%"><strong>25-5-1989</strong></td>
  </tr>

  
</table>

</div>
                        
                           




</div>

                          
                                    
                                    </div>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    </div>
                                    </div>
                                    </div>


                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Close</button>
                        <button class="btn btn-sm btn-primary" type="button" data-dismiss="modal"><i class="fa fa-check"></i> Ok</button>
                    </div>
                </div>
            </div>
        </div>