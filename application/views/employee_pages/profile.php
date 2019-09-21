            <main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter3">
                    <div class="row items-push">
                        <div class="col-sm-10">
                            <h1 class="page-heading">
                              Profile
                            </h1> 
                        </div>
                        
                     <div class="col-md-2">
                        <div class="col-xs-12">
                        <!--  <a href="<?php echo base_url('employee/edit_profile');?>"><button class="btn btn-minw btn-danger" type="button">Edit Profile</button></a>-->
                           </div>
                           </div>  
                        
                    </div>
                </div>
               
               
               
        <div class="content content-narrow">
                   <div class="row">
                        <div class="block">
                                
                                <div class="block-content block-content-full" >
                                   
                                    
                                    <table width="100%" border="0" cellspacing="0" cellpadding="5" class="table">
                                      <tr>
                                         <div class="row">
                                            
                                            <div class="col-md-2">
                                              <td> 1</td>
                                            </div>
                                            <div class="col-md-2">
                                              <td> Employee Id</td>
                                            </div>
                                            <div class="col-md-2">
                                               <td> <strong><?php echo $member->employee_id;?></strong></td>
                                            </div>
                                               
                                            <div class="col-md-2">
                                               <td> 2</td>
                                             </div>
                                            <div class="col-md-2">
                                               <td> Emial</td>
                                            </div>
                                            <div class="col-md-2">
                                                <td> <strong><?php echo $member->email;?></strong></td>
                                            </div>
                                          </div> 

                                    </tr>

                                     <tr>
                                         <div class="row">
                                            
                                            <div class="col-md-2">
                                              <td> 3</td>
                                            </div>
                                            <div class="col-md-2">
                                              <td> Employee Name</td>
                                            </div>
                                            <div class="col-md-2">
                                               <td> <strong><?php echo $member->name;?></strong></td>
                                            </div>
                                               
                                            <div class="col-md-2">
                                               <td> 4</td>
                                             </div>
                                            <div class="col-md-2">
                                               <td>Designation</td>
                                            </div>
                                            <div class="col-md-2">
                                                <td><strong><?php echo $member->designation;?></strong></td>
                                            </div>
                                          </div> 

                                    </tr>

                                     <tr>
                                         <div class="row">
                                            <div class="col-md-2">
                                              <td> 5</td>
                                            </div>
                                            <div class="col-md-2">
                                              <td> Date of Birth</td>
                                            </div>
                                            <div class="col-md-2">
                                               <td> <strong><?php echo $member->date_of_birth;?></strong></td>
                                            </div>
                                               
                                            <div class="col-md-2">
                                               <td> 6</td>
                                             </div>
                                            <div class="col-md-2">
                                               <td>Id Card No</td>
                                            </div>
                                            <div class="col-md-2">
                                                <td><strong><?php echo $member->id_card_no;?></strong></td>
                                            </div>
                                          </div> 

                                    </tr>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    <tr>
                                         <div class="row">
                                            
                                            <div class="col-md-2">
                                              <td> 7</td>
                                            </div>
                                            <div class="col-md-2">
                                              <td>Gender</td>
                                            </div>
                                            <div class="col-md-2">
                                               <td><strong><?php echo $member->gender;?></strong></td>
                                            </div>
                                               <div class="col-md-2">
                                              <td> 8</td>
                                            </div>
                                            <div class="col-md-2">
                                              <td> Address</td>
                                            </div>
                                            
                                             <div class="col-md-2">
                                               <td><strong><?php echo $member->address;?></strong></td>
                                            </div>
                                        
                                          </div> 

                                    </tr>
                                    
                                    
           <!--                         
                                    
                                    
                                    <tr>
                                         <div class="row">
                                            
                                            <div class="col-md-2">
                                              <td> 11</td>
                                            </div>
                                            <div class="col-md-2">
                                              <td> Aadhaar</td>
                                            </div>
                                            <div class="col-md-2">
                                               <td><img src="../hr/assets/images/aadhar.jpg" width="250" height="105"></td>
                                            </div>
                                               <div class="col-md-2">
                                              <td> 12</td>
                                            </div>
                                            <div class="col-md-2">
                                              <td>Pan</td>
                                            </div>
                                            
                                             <div class="col-md-2">
                                               <td><img src="../hr/assets/images/pan-card.jpg" width="250" height="105"></td>
                                            </div>
                                        
                                          </div> 

                                    </tr>
                                    
                                    
                                    <tr>
                                         <div class="row">
                                            
                                            <div class="col-md-2">
                                              <td> 13</td>
                                            </div>
                                            <div class="col-md-2">
                                              <td>Passport Upload</td>
                                            </div>
                                            <div class="col-md-2">
                                               <td><img src="../hr/assets/images/passport.jpg" width="250" height="105"></td>
                                            </div>
                                               <div class="col-md-2">
                                              <td> 14</td>
                                            </div>
                                            <div class="col-md-2">
                                              <td>Voter ID </td>
                                            </div>
                                            
                                             <div class="col-md-2">
                                               <td><img src="../hr/assets/images/voter-id.jpg" width="250" height="105"></td>
                                            </div>
                                        
                                          </div> 

                                    </tr>
                                    
                                    
                                    
                                    <tr>
                                         <div class="row">
                                            
                                            <div class="col-md-2">
                                              <td> 15</td>
                                            </div>
                                            <div class="col-md-2">
                                              <td> Driving License</td>
                                            </div>
                                            <div class="col-md-2">
                                               <td><img src="../hr/assets/images/driving.jpg" width="250" height="105"></td>
                                            </div>
                                               <div class="col-md-2">
                                              <td> 16</td>
                                            </div>
                                            <div class="col-md-2">
                                              <td>Bank Account Name</td>
                                            </div>
                                            
                                             <div class="col-md-2">
                                               <td><strong>Mallapuram</strong></td>
                                            </div>
                                        
                                          </div> 

                                    </tr>
                                    
                                    
                       -->
                                    
                                    
                                    <tr>
                                         <div class="row">
                                            
                                           <div class="col-md-2">
                                              <td>9</td>
                                            </div>
                                            <div class="col-md-2">
                                              <td>Pincode</td>
                                            </div>
                                            
                                             <div class="col-md-2">
                                               <td><strong><?php echo $member->pincode;?></strong></td>
                                            </div>
                                        
                                          </div> 

                                    </tr>                                 
                                </table>
                                    
                                    </div>
                                    </div>
                     </div>
               </div>
 </main>
           
           
            
            
            