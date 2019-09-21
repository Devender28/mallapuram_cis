
   

            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter3">
                    <div class="row items-push">
                        <div class="col-sm-10">
                            <h1 class="page-heading" id="devtitle">
                           All Endorsement Requests 
                            </h1>
                        </div>
                        <div class="col-md-2">
                        <div class="col-xs-12"> 
                        <a href="<?php echo base_url('hr/endorsement');?>">  <button class="btn btn-minw btn-danger" type="button">Add</button></a>
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
                             <table class="display" id="deva">
                                <thead class="bg-warning">
                                    <tr>
                                        <th class="text-center">S No</th>
                                        <th>Date</th>
                                        <!-- <th>Client</th> -->
                                        <th>Policy</th>
                                        <th class="hidden-xs">Additions</th>
                                        <th class="hidden-xs">Deletions</th>
                                        <th class="hidden-xs">Corrections</th>
                                        <th class="hidden-xs">Data File</th>
                                        <!-- <th class="text-center">View</th> -->
                                    </tr>
                                </thead>
                                <tbody>

                                <?php 
                                       $a =1;
                                      foreach($requests as $req){ ?>

                                    <tr>
                                        <td class="text-center"><?php echo $a++;?></td>
                                       <td> <?php echo standard_date('DATE_RFC1123', strtotime($req->crdate));?> </td>
                                       <!-- <td class="font-w600"><?php echo $this->fun->getClient($req->client);?></td> -->
                                        <td class="font-w600"><?php echo $req->policy;?></td>
                                        <td class="hidden-xs"><?php echo $req->additions;?></td>
                                       <td class="hidden-xs"><?php echo $req->deletions;?></td>
                                       <td class="hidden-xs"><?php echo $req->corrections;?></td>
                                       <td class="hidden-xs"><a href="<?php echo base_url('uploads/corporate_client/endorsement_files').'/'.$req->file_name;?>" download><button  class="btn btn-md btn-info fa fa-download "></button></a></td>
                                        <!--<td> <button  class="btn btn-xs btn-info "  data-toggle="modal" data-target="#modal-normal" type="button" onclick="view_employee(<?php echo $req->id;?>)" title="View Details"><i class="fa fa-eye"></i></button></td>-->
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
                            <h3 class="block-title">View Employee Details</h3>
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
 url: <?php echo '"'.base_url('hr/view_employee').'"';?>,
 data: {
 id:val
 },
  success: function (response) {
  document.getElementById("view_popup").innerHTML=response; 
 
 }
 });
}
</script>    