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
                                            
                                           
                                            <th >NAME</th>
                                            <th>RELATION</th>
                                            <th>EMAIL ID</th>
                                            <th>PHONE</th>
                                            <th>DATE OF BIRTH</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        
                          <?php
						    $a =1;
                            foreach($emp_dependents as $emp_dependent)
                               {
						  ?>
                                        
                                        <tr>
                                            <td class="text-center"> <?php echo $a;?></td>
                                            <td class="font-w600"><?php echo $emp_dependent->name;?></td>
                                            <td><?php echo $emp_dependent->relation;?></td>
                                            <td><?php echo $emp_dependent->email;?></td>
                                            <td><?php echo $emp_dependent->phone;?></td>
                                            <td><?php echo $emp_dependent->date_of_birth;?></td>

                                           
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