<div class="block">
  <div class="block-content block-content-full" >
     <div data-toggle="slimscroll" data-height="500px" data-color="#333333" data-always-visible="true">
                                    
   <div class="row">
           <div class="form-group">
            <div class="col-md-12">
  <table width="100%" border="0" cellspacing="0" cellpadding="5" class="table">
                                       <tr style="border-bottom:solid  #E6E6E6 1px;">
                                         <div class="row">
                                            
                                            <div class="col-md-2">
                                              <td> 1</td>
                                            </div>
                                            <div class="col-md-3">
                                              <td>  First Name</td>
                                            </div>
                                            <div class="col-md-4">
                                               <td> <strong><?php echo $registered_employee->first_name;?></strong></td>
                                            </div>
                                               
                                            <div class="col-md-2">
                                               <td> 2</td>
                                             </div>
                                            <div class="col-md-2">
                                               <td> Middle Name</td>
                                            </div>
                                            <div class="col-md-5">
                                                <td> <?php echo $registered_employee->middle_name;?></td>
                                            </div>
                                          </div> 

                                    </tr>

                                     <tr style="border-bottom:solid  #E6E6E6 1px;">
                                         <div class="row">
                                            
                                            <div class="col-md-2">
                                              <td> 3</td>
                                            </div>
                                            <div class="col-md-2">
                                              <td>  Last Name</td>
                                            </div>
                                            <div class="col-md-2">
                                               <td> <strong><?php echo $registered_employee->last_name;?></strong></td>
                                            </div>
                                               
                                            <div class="col-md-2">
                                               <td> 4</td>
                                             </div>
                                            <div class="col-md-2">
                                               <td>  Email1</td>
                                            </div>
                                            <div class="col-md-2">
                                                <td><strong><?php echo $registered_employee->email1;?></strong></td>
                                            </div>
                                          </div> 

                                    </tr>
                                    
                                    
                                    
                                    <tr style="border-bottom:solid  #E6E6E6 1px;">
                                         <div class="row">
                                            
                                            <div class="col-md-2">
                                              <td> 5</td>
                                            </div>
                                            <div class="col-md-2">
                                              <td>Email2</td>
                                            </div>
                                            <div class="col-md-2">
                                               <td> <strong>i<?php echo $registered_employee->email2;?></strong></td>
                                            </div>
                                               
                                            <div class="col-md-2">
                                               <td> 6</td>
                                             </div>
                                            <div class="col-md-2">
                                               <td> Mobile</td>
                                            </div>
                                            <div class="col-md-2">
                                                <td><strong><?php echo $registered_employee->mobile1;?></strong></td>
                                            </div>
                                          </div> 

                                    </tr>
                                    
                                    
                                    <tr style="border-bottom:solid  #E6E6E6 1px;">
                                         <div class="row">
                                            
                                            <div class="col-md-2">
                                              <td> 7</td>
                                            </div>
                                            <div class="col-md-2">
                                              <td>Date of Birth (Recorded)</td>
                                            </div>
                                            <div class="col-md-2">
                                               <td> <strong><?php echo $registered_employee->recorded_dob;?></strong></td>
                                            </div>
                                               
                                            <div class="col-md-2">
                                               <td> 8</td>
                                             </div>
                                            <div class="col-md-2">
                                               <td> Date of Birth (Actual)</td>
                                            </div>
                                            <div class="col-md-2">
                                                <td><strong><?php echo $registered_employee->actual_dob;?></strong></td>
                                            </div>
                                          </div> 

                                    </tr>
                                    
                                    
                                    
                                    
                                    
                                    <tr style="border-bottom:solid  #E6E6E6 1px;">
                                         <div class="row">
                                            
                                            <div class="col-md-2">
                                              <td> 9</td>
                                            </div>
                                            <div class="col-md-2">
                                              <td>Aaadhar No</td>
                                            </div>
                                            <div class="col-md-2">
                                               <td> <strong><?php echo $registered_employee->aadhar_no;?></strong></td>
                                            </div>
                                               
                                            <div class="col-md-2">
                                               <td> 10</td>
                                             </div>
                                            <div class="col-md-2">
                                               <td>Aaadhar Scan Copy</td>
                                            </div>
                                            <div class="col-md-2">
                                                <td><img src="<?php echo base_url('individual/uploads/individual/aadhar/'.$registered_employee->aadhar_scan);?>" width="250" height="105"></td>
                                            </div>
                                          </div> 

                                    </tr>
                                    
                                    
                                    
                                    
                                    
                                    <tr style="border-bottom:solid  #E6E6E6 1px;">
                                         <div class="row">
                                            
                                            <div class="col-md-2">
                                              <td> 11</td>
                                            </div>
                                            <div class="col-md-2">
                                              <td>Pan No</td>
                                            </div>
                                            <div class="col-md-2">
                                               <td> <strong><?php echo $registered_employee->pan_no;?></strong></td>
                                            </div>
                                               
                                            <div class="col-md-2">
                                               <td> 12</td>
                                             </div>
                                            <div class="col-md-2">
                                               <td>Pan Scan Copy</td>
                                            </div>
                                            <div class="col-md-2">
                                                <td><img src="<?php echo base_url('individual/uploads/individual/pan/'.$registered_employee->pan_scan);?>" width="250" height="105"></td>
                                            </div>
                                          </div> 

                                    </tr>
                                    
                                    
                                    <tr style="border-bottom:solid  #E6E6E6 1px;">
                                         <div class="row">
                                            
                                            <div class="col-md-2">
                                              <td> 13</td>
                                            </div>
                                            <div class="col-md-2">
                                              <td>Voter ID No</td>
                                            </div>
                                            <div class="col-md-2">
                                               <td> <strong><?php echo $registered_employee->voterid_no;?></strong></td>
                                            </div>
                                               
                                            <div class="col-md-2">
                                               <td> 14</td>
                                             </div>
                                            <div class="col-md-2">
                                               <td>Voter ID Scan Copy</td>
                                            </div>
                                            <div class="col-md-2">
                                                <td><img src="<?php echo base_url('individual/uploads/individual/voterid/'.$registered_employee->voterid_scan);?>" width="250" height="105"></td>
                                            </div>
                                          </div> 

                                    </tr>
                                    
                                    
                                    
                                    <tr style="border-bottom:solid  #E6E6E6 1px;">
                                         <div class="row">
                                            
                                            <div class="col-md-2">
                                              <td> 15</td>
                                            </div>
                                            <div class="col-md-2">
                                              <td>Driving License No</td>
                                            </div>
                                            <div class="col-md-2">
                                               <td> <strong><?php echo $registered_employee->license_no;?></strong></td>
                                            </div>
                                               
                                            <div class="col-md-2">
                                               <td> 16</td>
                                             </div>
                                            <div class="col-md-2">
                                               <td>Driving License Expiry Date</td>
                                            </div>
                                            <div class="col-md-2">
                                                <td><strong><?php echo $registered_employee->license_expiry_date;?></strong></td>
                                            </div>
                                          </div> 

                                    </tr>
                                    
                                    
                                    
                                    <tr style="border-bottom:solid  #E6E6E6 1px;">
                                         <div class="row">
                                            
                                            <div class="col-md-2">
                                              <td> 17</td>
                                            </div>
                                            <div class="col-md-2">
                                              <td>Driving License Scan Copy</td>
                                            </div>
                                            <div class="col-md-2">
                                               <td> <img src="<?php echo base_url('individual/uploads/individual/license/'.$registered_employee->license_scan);?>" width="250" height="105"></td>
                                            </div>
                                               
                                            <div class="col-md-2">
                                               <td> 16</td>
                                             </div>
                                            <div class="col-md-2">
                                               <td> Passport No</td>
                                            </div>
                                            <div class="col-md-2">
                                                <td><strong><?php echo $registered_employee->passport_no;?></strong></td>
                                            </div>
                                          </div> 

                                    </tr>
                                    
                                    
                                    
                                    
                                    
                                    
                                    <tr style="border-bottom:solid  #E6E6E6 1px;">
                                         <div class="row">
                                            
                                            <div class="col-md-2">
                                              <td> 18</td>
                                            </div>
                                            <div class="col-md-2">
                                              <td>Passport Expiry Date</td>
                                            </div>
                                            <div class="col-md-2">
                                               <td><strong><?php echo $registered_employee->passport_expiry_date;?></strong></td>
                                            </div>
                                               
                                            <div class="col-md-2">
                                               <td> 19</td>
                                             </div>
                                            <div class="col-md-2">
                                               <td> Passport Scan Copy</td>
                                            </div>
                                            <div class="col-md-2">
                                                <td><img src="<?php echo base_url('individual/uploads/individual/passport/'.$registered_employee->passport_scan);?>" width="250" height="105"></td>
                                            </div>
                                          </div> 

                                    </tr>
                                    
                                    
                                    
                                    
                                    
                                    <tr style="border-bottom:solid  #E6E6E6 1px;">
                                         <div class="row">
                                            
                                            <div class="col-md-2">
                                              <td> 20</td>
                                            </div>
                                            <div class="col-md-2">
                                              <td>State</td>
                                            </div>
                                            <div class="col-md-2">
                                               <td><strong><?php echo $registered_employee->state;?></strong></td>
                                            </div>
                                               
                                            <div class="col-md-2">
                                               <td> 21</td>
                                             </div>
                                            <div class="col-md-2">
                                               <td>District</td>
                                            </div>
                                            <div class="col-md-2">
                                                <td><strong><?php echo $registered_employee->district;?></strong></td>
                                            </div>
                                          </div> 

                                    </tr>
                                    
                                    
                                    
                                    <tr style="border-bottom:solid  #E6E6E6 1px;">
                                         <div class="row">
                                            
                                            <div class="col-md-2">
                                              <td> 22</td>
                                            </div>
                                            <div class="col-md-2">
                                              <td>Address</td>
                                            </div>
                                            <div class="col-md-2">
                                               <td><strong><?php echo $registered_employee->address;?></strong></td>
                                            </div>
                                               
                                            <div class="col-md-2">
                                               <td> 21</td>
                                             </div>
                                            <div class="col-md-2">
                                               <td>Pincode</td>
                                            </div>
                                            <div class="col-md-2">
                                                <td><strong><?php echo $registered_employee->pincode;?></strong></td>
                                            </div>
                                          </div> 

                                    </tr>
                                    
         </table>

</div>
 
</div>
</div>
                                    
                     
                                    </div>
                                    </div>
                                    </div>