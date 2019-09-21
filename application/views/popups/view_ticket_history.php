<div class="block">

<div class="block-content">
                             <div class="row" style="border-bottom:solid #CCC 1px;"><h2>TICKET HISTORY</h2> </div>
                             <br>

                            <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/base_tables_datatables.js -->
                             <table class="display" id="example">
                                <thead>
                                    <tr>
                                        <th class="text-center"></th>
                                        <th class="text-center">Ticket No</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Remarks</th>
                                        <th class="text-center" style="width: 10%;">Edited by</th>
                                        <th class="text-center" style="width: 10%;">Promoting Policy</th>
                                        <th class="text-center" style="width: 10%;">Date</th>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php
                                  
                                  $sn=1;
                                  foreach($history as $tht){
              
                                ?>
                                    <tr>
                                        <td class="text-center"><?php echo $sn;?></td>
                                        <td class="text-center"><?php echo $tht->ticket_id;?></td>
                                        <td class="text-center"><button class="btn btn-minw btn-<?php if($tht->process_status=='POSTPONE') { echo "warning";} elseif($tht->process_status=='ESCALATE') { echo "danger";} elseif($tht->process_status=='SKIP') { echo "success";} else { echo "primary";}?>" type="button"><?php echo $tht->process_status;?></button></td>
                                        <td class="text-center"><?php echo $tht->remark;?></td>
                                       <td class="text-center"><?php echo $this->fun->getnewfieldvalue('mallapuram_employees','name','id',$tht->emp_id);?></td>
                                        <td class="text-center"><?php if($tht->promoting_policy==0) {echo "Not Interested"; } else { echo "Interested";}?></td>
                                        <td class="text-center"><?php echo standard_date('DATE_RFC1123', strtotime($tht->crdate));?></td>
                                    </tr>
                                  
                                  <?php $sn++; } ?>  
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                              
                                    
                                    
                                </tbody>
                            </table>
                        </div>
                        
     </div>