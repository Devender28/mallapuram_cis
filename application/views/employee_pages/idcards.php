<main id="main-container">
              
              
               <div class="content bg-gray-lighter3">
                    <div class="row items-push">
                        <div class="col-sm-10">
                            <h1 class="page-heading">
                              ID Cards Data  <?php echo $this->session->userdata('corporate_id');?>
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
                                        <th class="hidden-xs">ID Cards</th>
                                       
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
                                       
                                        <td class="font-w600"><a href="<?php echo base_url('employee/idcardspdf/'.str_replace('/','_',$policy->policy_id));?>" target="_blank"><button  class="btn btn-md btn-info fa fa-download "></button></a>
                                        
                                        <?php echo @$this->fun->getnewfieldvalue("insurance_policy","name","id",$policy_name)?>
                                        </td>
                                            
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