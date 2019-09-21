
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
                                   
                                    
                                    <table width="100%" border="0" cellspacing="0" cellpadding="5" class="table">
                                      <tr>
                                         <div class="row">
                                            
                                            <div class="col-md-2">
                                              <td> 1</td>
                                            </div>
                                            <div class="col-md-2">
                                              <td>  Company Name</td>
                                            </div>
                                            <div class="col-md-2">
                                               <td> <strong><?php echo $profile->name;?></strong></td>
                                            </div>
                                               
                                            <div class="col-md-2">
                                               <td> 2</td>
                                             </div>
                                            <div class="col-md-2">
                                               <td> Address</td>
                                            </div>
                                            <div class="col-md-2">
                                                <td> <strong><?php echo $profile->address;?> </strong></td>
                                            </div>
                                          </div> 

                                    </tr>

                                     <tr>
                                         <div class="row">
                                            
                                            <div class="col-md-2">
                                              <td> 3</td>
                                            </div>
                                            <div class="col-md-2">
                                              <td> Pincode</td>
                                            </div>
                                            <div class="col-md-2">
                                               <td> <strong><?php echo $profile->pincode;?></strong></td>
                                            </div>
                                               
                                            <div class="col-md-2">
                                               <td> 4</td>
                                             </div>
                                            <div class="col-md-2">
                                               <td>  Board Number(Company Contact Number)</td>
                                            </div>
                                            <div class="col-md-2">
                                                <td><strong><?php echo $profile->contact_number;?></strong></td>
                                            </div>
                                          </div> 

                                    </tr>

                                     <tr>
                                         <div class="row">
                                            
                                            <div class="col-md-2">
                                              <td> 5</td>
                                            </div>
                                            <div class="col-md-2">
                                              <td> GST Number</td>
                                            </div>
                                            <div class="col-md-2">
                                               <td> <strong><?php echo $profile->gstn_number;?></strong></td>
                                            </div>
                                               
                                            <div class="col-md-2">
                                               <td> 6</td>
                                             </div>
                                            <div class="col-md-2">
                                               <td>GST Scan Copy</td>
                                            </div>
                                            <div class="col-md-2">
                                                <td><img src="<?php echo base_url();?>uploads/corporate_client/gstn/<?php echo $profile->gstn_scan;?>" width="200" height="80"></td>
                                            </div>
                                          </div> 

                                    </tr>
                                    
                                    
                                    
                                    
                                    <tr>
                                         <div class="row">
                                            
                                            <div class="col-md-2">
                                              <td> 7</td>
                                            </div>
                                            <div class="col-md-2">
                                              <td> Logo</td>
                                            </div>
                                            <div class="col-md-2">
                                               <td> <img src="<?php echo base_url();?>uploads/corporate_client/logo/<?php echo $profile->logo;?>" width="300" height="100"></td>
                                            </div>
                                               
                                            <div class="col-md-2">
                                               <td> 8</td>
                                             </div>
                                            <div class="col-md-2">
                                               <td> Company Pan Number</td>
                                            </div>
                                            <div class="col-md-2">
                                                <td><strong><?php echo $profile->pan_number;?></strong></td>
                                            </div>
                                          </div> 

                                    </tr>
                                    
                                    
                                    <tr>
                                         <div class="row">
                                            
                                            <div class="col-md-2">
                                              <td> 9</td>
                                            </div>
                                            <div class="col-md-2">
                                              <td> Company Pan Scan</td>
                                            </div>
                                            <div class="col-md-2">
                                               <td><img src="<?php echo base_url();?>uploads/corporate_client/pan/<?php echo $profile->pan_scan;?>" width="200" height="80"> </td>
                                            </div>
                                               
                                        
                                          </div> 

                                    </tr>
                                    
                                   
                                    
                                    <tr>
                                         <div class="row">
                                            
                                            <div class="col-md-2">
                                              <td> 10</td>
                                            </div>
                                            <div class="col-md-2">
                                              <td> Company Bank Account Name</td>
                                            </div>
                                            <div class="col-md-2">
                                               <td> <strong><?php echo $profile->bank_account_name;?></strong></td>
                                            </div>
                                               
                                            <div class="col-md-2">
                                               <td> 11</td>
                                             </div>
                                            <div class="col-md-2">
                                               <td>Bank Account Number</td>
                                            </div>
                                            <div class="col-md-2">
                                                <td><strong> <?php echo $profile->bank_account_number;?></strong></td>
                                            </div>
                                          </div> 

                                    </tr>
                                    
                                    
                                    <tr>
                                         <div class="row">
                                            
                                            <div class="col-md-2">
                                              <td> 12</td>
                                            </div>
                                            <div class="col-md-2">
                                              <td> Bank Name</td>
                                            </div>
                                            <div class="col-md-2">
                                               <td> <strong> <?php echo $profile->bank_name;?> </strong></td>
                                            </div>
                                               
                                            <div class="col-md-2">
                                               <td> 13</td>
                                             </div>
                                            <div class="col-md-2">
                                               <td>Bank Brach</td>
                                            </div>
                                            <div class="col-md-2">
                                                <td><strong><?php echo $profile->bank_branch;?></strong></td>
                                            </div>
                                          </div> 

                                    </tr>
                                    
                                    
                                    
                                    <tr>
                                         <div class="row">
                                            
                                            <div class="col-md-2">
                                              <td> 14</td>
                                            </div>
                                            <div class="col-md-2">
                                              <td>Bank IFSC Code</td>
                                            </div>
                                            <div class="col-md-2">
                                               <td> <strong><?php echo $profile->ifsc_code;?></strong></td>
                                            </div>
                                               
                                            <div class="col-md-2">
                                               <td> 15</td>
                                             </div>
                                            <div class="col-md-2">
                                               <td>Cheque Scan Copy</td>
                                            </div>
                                            <div class="col-md-2">
                                                <td><img src="<?php echo base_url();?>uploads/corporate_client/cheque/<?php echo $profile->cheque_scan;?>" width="250" height="105"></td>
                                            </div>
                                          </div> 

                                    </tr>
                                    
                                    
                                    
                                    <tr>
                                         <div class="row">
                                            
                                            <div class="col-md-2">
                                              <td> 16</td>
                                            </div>
                                            <div class="col-md-2">
                                              <td>Authorised Contact Person1 Name</td>
                                            </div>
                                            <div class="col-md-2">
                                               <td> <strong><?php echo $profile->authorised_contact_person1_name;?></strong></td>
                                            </div>
                                               
                                            <div class="col-md-2">
                                               <td> 17</td>
                                             </div>
                                            <div class="col-md-2">
                                               <td>Authorised Contact Person1 Designation<</td>
                                            </div>
                                            <div class="col-md-2">
                                                <td><strong><?php echo $profile->authorised_contact_person1_designation;?></strong></td>
                                            </div>
                                          </div> 

                                    </tr>
                                    
                                    
                                    
                                    <tr>
                                         <div class="row">
                                            
                                            <div class="col-md-2">
                                              <td> 18</td>
                                            </div>
                                            <div class="col-md-2">
                                              <td>Authorised Contact Person1 Mobile</td>
                                            </div>
                                            <div class="col-md-2">
                                               <td> <strong><?php echo $profile->authorised_contact_person1_phone;?></strong></td>
                                            </div>
                                               
                                            <div class="col-md-2">
                                               <td> 19</td>
                                             </div>
                                            <div class="col-md-2">
                                               <td> Authorised Contact Person1 Email</td>
                                            </div>
                                            <div class="col-md-2">
                                                <td><strong><?php echo $profile->authorised_contact_person1_email;?></strong></td>
                                            </div>
                                          </div> 

                                    </tr>
                                    
                                    
                                    
                                    <tr>
                                         <div class="row">
                                            
                                            <div class="col-md-2">
                                              <td> 20</td>
                                            </div>
                                            <div class="col-md-2">
                                              <td>Authorised Contact Person2 Name</td>
                                            </div>
                                            <div class="col-md-2">
                                               <td> <strong><?php echo $profile->authorised_contact_person2_name;?></strong></td>
                                            </div>
                                               
                                            <div class="col-md-2">
                                               <td> 21</td>
                                             </div>
                                            <div class="col-md-2">
                                               <td> Authorised Contact Person2 Designation</td>
                                            </div>
                                            <div class="col-md-2">
                                                <td><strong><?php echo $profile->authorised_contact_person2_designation;?></strong></td>
                                            </div>
                                          </div> 

                                    </tr>
                                    
                                    
                                    
                                    <tr>
                                         <div class="row">
                                            
                                            <div class="col-md-2">
                                              <td> 22</td>
                                            </div>
                                            <div class="col-md-2">
                                              <td>Authorised Contact Person2 Mobile</td>
                                            </div>
                                            <div class="col-md-2">
                                               <td><strong><?php echo $profile->authorised_contact_person2_phone;?></strong></td>
                                            </div>
                                               
                                            <div class="col-md-2">
                                               <td> 23</td>
                                             </div>
                                            <div class="col-md-2">
                                               <td> Authorised Contact Person2 Email</td>
                                            </div>
                                            <div class="col-md-2">
                                                <td><strong><?php echo $profile->authorised_contact_person2_email;?></strong></td>
                                            </div>
                                          </div> 

                                    </tr>
                                    
                                    
                                   
                                    
                                    
                                    <tr>
                                         <div class="row">
                                            
                                            <div class="col-md-2">
                                              <td> 24</td>
                                            </div>
                                            <div class="col-md-2">
                                              <td>Superior Contact Person1 Name</td>
                                            </div>
                                            <div class="col-md-2">
                                               <td><strong><?php echo $profile->superior_contact_person1_name;?></strong></td>
                                            </div>
                                               
                                            <div class="col-md-2">
                                               <td> 25</td>
                                             </div>
                                            <div class="col-md-2">
                                               <td> Superior Contact Person1 Designation</td>
                                            </div>
                                            <div class="col-md-2">
                                                <td><strong><?php echo $profile->superior_contact_person1_designation;?></strong></td>
                                            </div>
                                          </div> 

                                    </tr>
                                    
                                    
                                    
                                    <tr>
                                         <div class="row">
                                            
                                            <div class="col-md-2">
                                              <td> 26</td>
                                            </div>
                                            <div class="col-md-2">
                                              <td>Superior Contact Person1 Mobile</td>
                                            </div>
                                            <div class="col-md-2">
                                               <td><strong><?php echo $profile->superior_contact_person1_phone;?></strong></td>
                                            </div>
                                               
                                            <div class="col-md-2">
                                               <td> 27</td>
                                             </div>
                                            <div class="col-md-2">
                                               <td> Superior Contact Person1 Email</td>
                                            </div>
                                            <div class="col-md-2">
                                                <td><strong><?php echo $profile->superior_contact_person1_email;?></strong></td>
                                            </div>
                                          </div> 

                                    </tr>
                                    
                                    
                                    
                                    
                                    
                                    <tr>
                                         <div class="row">
                                            
                                            <div class="col-md-2">
                                              <td> 28</td>
                                            </div>
                                            <div class="col-md-2">
                                              <td>Superior Contact Person2 Name</td>
                                            </div>
                                            <div class="col-md-2">
                                               <td><strong><?php echo $profile->superior_contact_person2_name;?></strong></td>
                                            </div>
                                               
                                            <div class="col-md-2">
                                               <td> 29</td>
                                             </div>
                                            <div class="col-md-2">
                                               <td> Superior Contact Person2 Designation</td>
                                            </div>
                                            <div class="col-md-2">
                                                <td><strong><?php echo $profile->superior_contact_person2_designation;?></strong></td>
                                            </div>
                                          </div> 

                                    </tr>
                                    
                                    
                                    <tr>
                                         <div class="row">
                                            
                                            <div class="col-md-2">
                                              <td> 30</td>
                                            </div>
                                            <div class="col-md-2">
                                              <td>Superior Contact Person2 Mobile</td>
                                            </div>
                                            <div class="col-md-2">
                                               <td><strong><?php echo $profile->superior_contact_person2_phone;?></strong></td>
                                            </div>
                                               
                                            <div class="col-md-2">
                                               <td> 31</td>
                                             </div>
                                            <div class="col-md-2">
                                               <td> Superior Contact Person2 Email</td>
                                            </div>
                                            <div class="col-md-2">
                                                <td><strong><?php echo $profile->superior_contact_person2_email;?></strong></td>
                                            </div>
                                          </div> 

                                    </tr>

                                   

                                    <tr>
                                         <div class="row">
                                            
                                            <div class="col-md-2">
                                              <td> 32</td>
                                            </div>
                                            <div class="col-md-2">
                                              <td>Support Contact Person1 Name</td>
                                            </div>
                                            <div class="col-md-2">
                                               <td><strong><?php echo $profile->support_contact_person1_name;?></strong></td>
                                            </div>
                                               
                                            <div class="col-md-2">
                                               <td> 33</td>
                                             </div>
                                            <div class="col-md-2">
                                               <td> Support Contact Person1 Designation</td>
                                            </div>
                                            <div class="col-md-2">
                                                <td><strong><?php echo $profile->support_contact_person1_designation;?></strong></td>
                                            </div>
                                          </div> 

                                    </tr>
                                    
                                    
                                    
                                    
                                    
                                    <tr>
                                         <div class="row">
                                            
                                            <div class="col-md-2">
                                              <td> 34</td>
                                            </div>
                                            <div class="col-md-2">
                                              <td>Support Contact Person1 Mobile</td>
                                            </div>
                                            <div class="col-md-2">
                                               <td><strong><?php echo $profile->support_contact_person1_phone;?></strong></td>
                                            </div>
                                               
                                            <div class="col-md-2">
                                               <td> 35</td>
                                             </div>
                                            <div class="col-md-2">
                                               <td> Support Contact Person1 Email</td>
                                            </div>
                                            <div class="col-md-2">
                                                <td><strong><?php echo $profile->support_contact_person1_email;?></strong></td>
                                            </div>
                                          </div> 

                                    </tr>
                                    
                                    
                                   
                                    
                                    
                                    <tr>
                                         <div class="row">
                                            
                                            <div class="col-md-2">
                                              <td> 36</td>
                                            </div>
                                            <div class="col-md-2">
                                              <td>Support Contact Person2 Name</td>
                                            </div>
                                            <div class="col-md-2">
                                               <td><strong><?php echo $profile->support_contact_person2_name;?></strong></td>
                                            </div>
                                               
                                            <div class="col-md-2">
                                               <td> 37</td>
                                             </div>
                                            <div class="col-md-2">
                                               <td> Support Contact Person2 Designation</td>
                                            </div>
                                            <div class="col-md-2">
                                                <td><strong><?php echo $profile->support_contact_person2_designation;?></strong></td>
                                            </div>
                                          </div> 

                                    </tr>
                                    
                                    
                                    <tr>
                                         <div class="row">
                                            
                                            <div class="col-md-2">
                                              <td> 38</td>
                                            </div>
                                            <div class="col-md-2">
                                              <td>Support Contact Person2 Mobile</td>
                                            </div>
                                            <div class="col-md-2">
                                               <td><strong><?php echo $profile->support_contact_person2_phone;?></strong></td>
                                            </div>
                                               
                                            <div class="col-md-2">
                                               <td> 39</td>
                                             </div>
                                            <div class="col-md-2">
                                               <td> Support Contact Person2 Email</td>
                                            </div>
                                            <div class="col-md-2">
                                                <td><strong><?php echo $profile->support_contact_person2_email;?></strong></td>
                                            </div>
                                          </div> 

                                    </tr>

                                    

                                </table>
                                    
                     
                                 
                                    </div>
                                    </div>
                <!-- END Page Content -->
            </main>
           
          
        