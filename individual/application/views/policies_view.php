

  

             

            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter3">
                    <div class="row items-push">
                        <div class="col-sm-10">
                            <h1 class="page-heading">
                              View Policy Data
                            </h1>
                        </div>
                        
                        <div class="col-md-2">
                        <div class="col-xs-12">
                         <a href="<?php echo base_url('add_policy');?>"> <button class="btn btn-minw btn-danger" type="button">Add</button></a>
                           </div>
                           </div>
                        
                    </div>
                </div>
                <!-- END Page Header -->

                <!-- Page Content -->
                <div class="content content-narrow">
                  
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Default Elements -->
                            <div class="block">
                                
                                
                               
<?php
 // $users = $this->db->get('ind_registration',array('actual_dob'=> 'CURDATE()'))->result();

//$users = $this->db->get('ind_registration',array('DATE_FORMAT(`actual_dob`,"%m-%d")'=> 'DATE_FORMAT(CURDATE(),"%m-%d")'))->result();

$users = $this->db->query("SELECT *
FROM ind_registration
WHERE DATE_FORMAT(actual_dob, '%m-%d') = DATE_FORMAT(CURDATE(), '%m-%d')")->result();
   
     foreach($users as $u){
    $tele[] = $u->mobile1; 
        
}
  
  $tph=implode(',',$tele);
   //print_r($tele);
   print_r($tph);


    $d="15-07-1965";
  echo "<br>".DATE_FORMAT("date('Y-m-d',strtotime(str_replace('/','-',$d)))",'%m-%d');

// $current_date = date("m-d");
// $subscription = "2017-09-19";
// echo $subscription_date  = date("m-d", strtotime($subscription));
// if($current_date ==$subscription_date)
// {
//     echo "date is equal";
// }else
// {
//     echo "date is not equal";
// }
   ?>

                                 


<div class="block-content">
                            <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/base_tables_datatables.js -->
                             <table class="display" id="example">
                                <thead>
                                    <tr>
                                        <th class="text-center">SNo</th>
                                        <th>Poliy Holder Name</th>
                                        <th class="hidden-xs">Insurance Company</th>
                                        <th class="hidden-xs">Policy Name</th>
                                        <th class="hidden-xs">Policy Number</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                 $a=1;
                                 foreach($policies as $policy) { 
                                ?>
                                    <tr>
                                        <td class="text-center"><?php echo $a++;?></td>
                                        <td class="font-w600"><?php echo $policy->policy_holder_name;?></td>
                                        <td class="hidden-xs"><?php echo $this->fun->getCompany($policy->insurance_company);?></td>
                                       <td class="hidden-xs"><?php echo $this->fun->getPolicy($policy->policy_name);?></td>
                                       <td class="hidden-xs"><?php echo $policy->policy_number;?></td>
                                        <td class="text-center">
                                        
                                            <div class="btn-group">
                                            
                    <button  class="btn btn-xs btn-default"  data-toggle="modal" data-target="#modal-normal" type="button" title="View Details" onclick="view_policy(<?php echo $policy->id;?>)"><i class="fa fa-eye"></i></button>
                       <a href="<?php echo base_url('edit_policy/'.$policy->id);?>"> <button class="btn btn-xs btn-default" type="button"><i class="fa fa-pencil"></i></button></a>
                                                
                                           
                                                
                                            </div>
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
                            <h3 class="block-title">View Policy Details</h3>
                        </div>
                        <div class="block-content" id="view_popup">

                             </div>


                        </div>
<div class="modal-footer">
                        <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Close</button>
                       
                    </div>
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