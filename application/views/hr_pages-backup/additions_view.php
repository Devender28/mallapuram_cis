
   

            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter3">
                    <div class="row items-push">
                        <div class="col-sm-10">
                            <h1 class="page-heading" id="devtitle">
                           All Additions 
                            </h1>
                        </div>
                        <div class="col-md-2">
                        <div class="col-xs-12"> 
                        <a href="<?php echo base_url('hr/addition_request');?>">  <button class="btn btn-minw btn-danger" type="button">Add</button></a>
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
                                
                                
                               
                                
                              <div class="block-content">
                            <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/base_tables_datatables.js -->
                             <table class="display" id="example">
                                <thead>
                                    <tr>
                                        <th class="text-center"></th>
                                        <th>Client</th>
                                        <th>Employee ID</th>
                                        <th>Name</th>
                                        <th class="hidden-xs">Email</th>
                                        <th class="hidden-xs" style="width: 15%;">Phone</th>
                                        <th class="hidden-xs" style="width: 15%;">Relation</th>
                                        <th class="text-center" style="width: 10%;">Status</th>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php 
                                       $a =1;
                                      foreach($additions as $add){ ?>

                                    <tr>
                                        <td class="text-center"><?php echo $a++;?></td>
                                        <td class="font-w600"><?php echo $this->fun->getClient($add->corporate_id);?></td>
                                        <td class="font-w600"><?php echo $add->employee_id;?></td>
                                        <td class="font-w600"><?php echo $add->name;?></td>
                                        <td class="hidden-xs"><?php echo $add->email;?></td>
                                       <td class="hidden-xs"><?php echo $add->phone;?></td>
                                       <td class="hidden-xs"><?php echo $add->relation;?></td>
                                        <td class="text-center"> <?php  if($add->status=='0') { echo "<button class='btn btn-sm btn-warning'>Pending</button>";} else { echo "<button class='btn btn-sm btn-primary'>Active</button>"; }?></td>
                                    </tr>
                                    
                                   <?php } ?> 
                                   
                                    
                                    
                                </tbody>
                            </table>
                        </div>  
                                
                            </div>
                            
                       
                        </div>
                        
                    </div>
                    
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->

            <!-- Footer -->
         
            <!-- END Footer -->
      
       
       
        
        
        
        
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
    <td width="50%"> Select Categorey</td>
    <td width="40%"> <strong>General</strong></td>
  </tr>

  
</table>

</div>
                        
                           



<div class="col-md-6">
                                         
   <table align="left" width="100%" border="0" cellspacing="0" cellpadding="5" class="table">
  <tr>
    <td width="10%"> 2</td>
    <td width="50%"> Insurance Policy Types</td>
    <td width="40%"> <strong>Health </strong> </td>
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
                                        
                                           
        
        