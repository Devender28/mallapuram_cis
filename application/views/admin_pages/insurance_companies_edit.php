             
            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter3">
                    <div class="row items-push">
                        <div class="col-sm-10">
                            <h1 class="page-heading">
                               Update Insurance Company
                            </h1>
                        </div>
                        
                       <div class="col-md-2">
                        <div class="col-xs-12">
                          <a href="<?php echo base_url('admin/insurance_companies');?>" class="btn btn-minw btn-danger" type="button">Back</a>
                           </div>
                           </div>
                        
                    </div>
                </div>
                <!-- END Page Header -->

                <!-- Page Content -->
                <div class="content content-narrow">
                    <!-- Material Design -->
                
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Default Elements -->
                            <div class="block">
                                <div class="block-content block-content-narrow">
                   <form class="js-validation-bootstrap form-horizontal" action="" method="post" enctype="multipart/form-data" >
                                       <br>

                                       <?php echo $msg;?>
                                       
                                      
                                        <div class="col-md-6">
                                         <div class="form-group">
                                            <label class="col-xs-12" >Name of the Company</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="company" name="company" value="<?php echo $company->name;?>" required>    </div>
                                        </div>
                                        </div>
                                        
                                        
                                        
                                        <div class="col-md-6">
                                         <div class="form-group">
                                            <label class="col-xs-12" >Branch Name</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="branch" name="branch" value="<?php echo $company->name;?>" required></div>
                                        </div>
                                        </div>
                                        
                                        
                                        
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Branch Address</label>
                                            <div class="col-sm-9">
              <textarea class="form-control" id="branch_address" name="branch_address" rows="3"  required><?php echo $company->branch_address;?></textarea>                                  </div>
                                        </div>
                                        </div>
                                        
                                        
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Head Office Address</label>
                                            <div class="col-sm-9">
             <textarea class="form-control" id="head_address" name="head_address" rows="3" required><?php echo $company->headoffice_address;?></textarea>                                  </div>
                                        </div>
                                        </div>
                                        
                                        
                                         <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >GSTIN Number</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text"  name="gstin" value="<?php echo $company->gstn_number;?>">    </div>
                                        </div>
                                        </div>
                                        
                                        
                                        <div class="col-md-6">
                                         <div class="form-group">
                                            <label class="col-xs-12" >Logo</label>
                                            <div class="col-sm-9">
                                                <input type="file" id="example-file-input" name="logo">
                                                <input type="hidden" name="oldlogo" value="<?php echo $company->logo;?>">
                                               
                                                             <?php
											  if($company->logo=="")
											  {
											   ?> 
                                               <img src="<?php echo base_url();?>/uploads/dummy_images/dummy.jpg" width="200px" height="100px"> 
												  
											  <?php
											  }
											   else
											  {
											  ?>
                                               
                                               
                                                <img src="<?php echo base_url().'/uploads/company/'.$company->logo;?>" width="200px" height="100px">
                                               
                                              <?php
											  }
											  ?>
                                                


<br>

                                            </div>
                                        </div>
                                        </div>
                                        
                                        
                                         <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Website Address</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="website" name="website" value="<?php echo $company->website;?>" required> </div>
                                        </div>
                                        </div>
                                        
                                        
                                         <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Relationship Manager Name</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="r_manager_name" name="r_manager_name" value="<?php echo $company->relationship_manager_name;?>" required> </div>
                                        </div>
                                        </div>
                                        
                                        
                                        
                                         <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Relationship Manager Contact Number</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text"  name="r_manager_number" value="<?php echo $company->relationship_manager_phone;?>"  required> </div>
                                        </div>
                                        </div>
                                        
                                        
                                          <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Relationship Manager Email Id</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text"  name="r_manager_email" value="<?php echo $company->relationship_manager_email;?>"  required> </div>
                                        </div>
                                        </div>
                                        
                                        
                                        
                                         <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Branch Manager Name</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text"  name="b_manager_name" value="<?php echo $company->branch_manager_name;?>" > </div>
                                        </div>
                                        </div>
                                        
                                        
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Branch Manager Contact Number</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text"  name="b_manager_number" value="<?php echo $company->branch_manager_phone;?>"> </div>
                                        </div>
                                        </div>
                                        
                                        
                                        
                                         <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Branch Manager Email Id</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text"  name="b_manager_email" value="<?php echo $company->branch_manager_email;?>"> </div>
                                        </div>
                                        </div>
                                        
                                        
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Regional Head Name</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text"  name="regonal_head_name" value="<?php echo $company->regional_head_name;?>"> </div>
                                        </div>
                                        </div>
                                        
                                        
                                         <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Regional Head Contact Number</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text"  name="regional_head_number" value="<?php echo $company->regional_head_phone;?>"> </div>
                                        </div>
                                        </div>
                                        
                                        
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Regional Head Email Id</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text"  name="regional_head_email" value="<?php echo $company->regional_head_email;?>"> </div>
                                        </div>
                                        </div>
                                        
                                        
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Service Forms Link</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text"  id="service_forms_link"  name="service_forms_link" value="<?php echo $company->service_forms_link;?>"  required> </div>
                                        </div>
                                        </div>
                                        
                                        
                                         <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Help Line Number</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text"  name="help_line_number" value="<?php echo $company->helpline_number;?>"  required> </div>
                                        </div>
                                        </div>
                                        
                                        
                                        
                                         <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Renewal Payment Link</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="renewal_link"  name="renewal_link" value="<?php echo $company->renewal_payment_link;?>"  required> </div>
                                        </div>
                                        </div>
                                        
                                        
                                         <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Grievance Redressal</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="grievance_redressal"  name="grievance_redressal" value="<?php echo $company->grievance_redressal_link;?>" required> </div>
                                        </div>
                                        </div>
                                        
                                        
                                         <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >All Branch locations link</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text"  id="all_branch_links"  name="all_branch_links" value="<?php echo $company->branch_locations_link;?>"> </div>
                                        </div>
                                        </div>
                                        
                                         <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12">Network Hospitals List Link</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text"  id="nw_hospital_links"  name="nw_hospital_links" value="<?php echo $company->hospitals_link;?>"> <br>
              
               <label >Claim Form</label>

<input class="form-control" type="text"  id="other_link1"  name="other_link1" value="<?php echo $company->otherlink1;?>"><br>

<label >Check List</label>

<input class="form-control" type="text"  id="other_link2"   name="other_link2" value="<?php echo $company->otherlink2;?>">

</div>
                                        </div>
                                        </div>
                                        
                                    
                                    <div class="col-md-5"></div>      <div class="form-group">
                                            <div class="col-xs-6">
                                                <button class="btn btn-sm btn-primary" type="submit" name="update_ins_company">Update Company</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                
                                

                                




                                
                            </div>
                            <!-- END Default Elements -->
                        </div>
                        
                    </div>
                  
                   
                </div>
                <!-- END Page Content -->
            </main>
           
  