<main id="main-container">
              
              
               <div class="content bg-gray-lighter3">
                    <div class="row items-push">
                        <div class="col-sm-10">
                            <h1 class="page-heading">
                              View Policy Data
                            </h1>
                        </div>
                    </div>
                </div>
                
                
                
               
               
               
               
                <div class="content content-narrow">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="block">
 
           <div class="block-content">
                             <table class="display" id="example">
                                <thead>
                                    <tr>
                                        <th class="text-center">SNo</th>
                                        <th>Poliy ID</th>
                                        <th class="hidden-xs">Policy Name</th>
                                        <th class="hidden-xs">Family Floater</th>
                                       <th class="hidden-xs">Policy Benefits Copy</th>
                                       <th class="hidden-xs">Network Hospitals</th>
                                        <th class="hidden-xs">Claim Form</th>
                                        <th class="hidden-xs">Check List</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                 $a=1;
                                 foreach($policies as $policy) { 
                                ?>
                                    <tr>
                                        <td class="text-center"><?php echo $a++;?></td>
                                        <td class="font-w600"><?php echo $policy->policy_id;?></td>
                                       
                                        <td class="font-w600"><?php $policy_name=@$this->fun->getnewfieldvalue("sales_booking","policy_name","policy_number",$policy->policy_id)?>
                                        
                                        <?php echo @$this->fun->getnewfieldvalue("insurance_policy","name","id",$policy_name);?>
                                        </td>
                                            <td class="font-w600"><?php if($policy->family_floater=="") { echo "No"; } else { echo $policy->family_floater;}?></td>
                                        <td class="font-w600"><a href='<?php echo base_url("uploads/sales/".@$this->fun->getnewfieldvalue("sales_booking","policy_benefits","policy_number",$policy->policy_id));?>' target="_blank"> View Policy Benefits</a></td>
                                       

                                       <td class="hidden-xs"><a href="<?php echo "https://www.".$this->fun->getHospitals_emp($this->session->userdata('employee_id'));?>" target="_blank"><?php echo $this->fun->getHospitals_emp($this->session->userdata('employee_id'));?></a></td>

                                       <td class="hidden-xs"><a href="<?php echo "https://www.".$this->fun->getClaimform_emp($this->session->userdata('employee_id'));?>" target="_blank">Claim Forms</a></td>

                                       <td class="hidden-xs"><a href="<?php echo "https://www.".$this->fun->getChecklist_emp($this->session->userdata('employee_id'));?>" target="_blank">Check List</a></td>
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
                        <div class="block-content" id="view_popup">

                             </div>


                        </div>
                    </div>
                    <div class="modal-footer">
                   <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Close</button>
                       
                    </div>
                </div>
            </div>



            <script type="text/javascript">
function view_policy(val)
{

 $.ajax({
 type: 'post',
 url: <?php echo '"'.base_url('viewindpolicy').'"';?>,
 data: {
 id:val
 },
  success: function (response) {
  document.getElementById("view_popup").innerHTML=response; 
 
 }
 });
}
</script>   