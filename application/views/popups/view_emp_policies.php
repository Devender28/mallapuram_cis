<div class="block">
                                
                                <div class="block-content block-content-full" >
                                   
                                     <div data-toggle="slimscroll" data-height="500px" data-color="#333333" data-always-visible="true">
                                    
                                    
                                    
                                    <div class="content">
                    <!-- Full Table -->
                    <div class="block">
                        
                        <div class="block-content">
                           
                            <div class="table-responsive">
                                <table class="table table-striped table-vcenter">
                                    <thead>
                                        <tr style="background-color:#58A0D6; color:#FFF;">
                                            <th  >Sl No</th>
                                            
                                           
                                            <th >Policy Id</th>
                                            <th>Policy Name</th>
                                            
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        
                          <?php
						    $a =1;
                            foreach($emp_policies as $emp_policie)
                               {
						  ?>
                                        
                                        <tr>
                                            <td class="text-center"> <?php echo $a;?></td>
                                            <td class="font-w600"><?php echo $emp_policie->policy_id;?></td>
  <td><?php echo $this->fun->getnewfieldvalue("insurance_policy","name","id",$this->fun->getnewfieldvalue("sales_booking","policy_name","policy_number",$emp_policie->policy_id));?></td>
                                            <td><?php echo $emp_policie->crdate;?></td>
                                                                                         
                                           
                                        </tr>
                         <?php
						   $a++;
						   }
						   ?>
                                        
                                     
                                     
                                     
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- END Full Table -->

                    
                    <!-- END Helper Classes -->
                </div>
                                    
                     
                                    </div>
                                    </div>
                                    </div>