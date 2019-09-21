
   

            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter3">
                    <div class="row items-push">
                        <div class="col-sm-10">
                            <h1 class="page-heading" id="devtitle">
                           All Policies
                            </h1>
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
                             <table class="display" id="deva">
                                <thead class="bg-warning">
                                    <tr>
                                        <th class="text-center">S No</th>
                                        <th>Date</th>
                                        <th>Insurance Company</th>
                                        <th>Policy Name</th>
                                        <th class="hidden-xs">Policy Number</th>
                                        <th class="hidden-xs">Category</th>
                                        <th class="hidden-xs">Start Date</th>
                                        <th class="hidden-xs">Policy Copy</th>
                                        <th class="hidden-xs">Benefits Copy</th>
                                        <th class="hidden-xs">Network Hospitals</th>
                                        <th class="hidden-xs">Claim Form</th>
                                        <th class="hidden-xs">Check List</th>
                                       <!--  <th class="text-center">View</th> -->
                                    </tr>
                                </thead>
                                <tbody>

                                <?php 
                                       $a =1;
                                      foreach($policies as $policy){ ?>

                                    <tr>
                                        <td class="text-center"><?php echo $a++;?></td>
                                      <!-- <td> <?php echo standard_date('DATE_RFC1123', strtotime($policy->crdate));?> </td> -->
                                       <td> <?php echo standard_date('DATE_RFC1123', strtotime($policy->crdate));?> </td>
                                        <td class="font-w600"><?php echo $this->fun->getCompany($policy->company);?></td>
                                        <td class="font-w600"><?php echo $this->fun->getPolicy($policy->policy_name);?></td>
                                        <td class="hidden-xs"><?php echo $policy->policy_number;?></td>
                                       <td class="hidden-xs"><?php echo $policy->category;?></td>
                                      <td class="hidden-xs"><?php echo standard_date('DATE_RFC1123', strtotime(@date('m/d/Y',strtotime($policy->start_date))));?></td> 


                                       <td class="hidden-xs"><a href="<?php echo base_url('uploads/sales').'/'.$policy->policy_copy;?>" target="_blank"><button  class="btn btn-md btn-info fa fa-download "></button></a></td>
                                       <td class="hidden-xs"><a href="<?php echo base_url('uploads/sales').'/'.$policy->policy_benefits;?>" target="_blank"><button  class="btn btn-md btn-info fa fa-download "></button></a></td>
                                       <td class="hidden-xs"><a href="<?php echo "https://www.".$this->fun->getHospitals($policy->company);?>" target="_blank"><?php echo $this->fun->getHospitals($policy->company);?></a></td>
                                       <td class="hidden-xs"><a href="<?php echo "https://".$this->fun->getChecklist($policy->company);?>" target="_blank"><?php echo $this->fun->getChecklist($policy->company);?></a></td>
                                       <td class="hidden-xs"><a href="<?php echo "https://".$this->fun->getChecklist($policy->company);?>" target="_blank"><?php echo $this->fun->getChecklist($policy->company);?></a></td>
                                       <!-- <td> <button  class="btn btn-xs btn-info "  data-toggle="modal" data-target="#modal-normal" type="button" onclick="view_employee(<?php //echo $policy->id;?>)" title="View Details"><i class="fa fa-eye"></i></button></td> -->
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
                            <h3 class="block-title">View Policy Details</h3>
                        </div>

                         <div class="block-content" id="view_popup">
                        
                      
                        </div>

                      
                                    <div class="modal-footer">
                                        <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Close</button>
                                       
                                    </div>
                          
                    
                                        
                 </div>
                </div>
            </div>
        </div>                            
        
        


        <script type="text/javascript">
function view_employee(val)
{

 $.ajax({
 type: 'post',
 url: <?php echo '"'.base_url('hr/view_policy').'"';?>,
 data: {
 id:val
 },
  success: function (response) {
  document.getElementById("view_popup").innerHTML=response; 
 
 }
 });
}
</script>    