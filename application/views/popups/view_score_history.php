<div class="block">

<div class="block-content">
                             <div class="row" style="border-bottom:solid #CCC 1px;"><h2>TICKET HISTORY</h2> </div>
                             <br>

                            <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/base_tables_datatables.js -->
                             <table class="display" id="example">
                                <thead>
                                
                                    <tr>
                                       <th class="text-center"  style="width: 20%;">S.No</th>
                                        <th class="text-center" style="width: 40%;">Date</th>
                                        
                                        <th class="text-center"  style="width: 40%;">Ticket No</th>
                                        <th class="text-center"  style="width: 20%;">Points</th>
                                       
                                </thead>
                                <tbody>

                                <?php
                                  
                                  $sn=1;
                                  foreach($history as $tht){
              
                                ?>
                                    <tr>
                                        <td class="text-center"><?php echo $sn;?></td>
                                        <td class="text-center"><?php echo $tht->crdate;?></td>
                                        <td class="text-center"><?php echo $tht->ticket_id;?></td>
                                        <td class="text-center"><?php echo $tht->points;?></td>
                                    </tr>
                                  
                                  <?php $sn++; } ?>  
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                              
                                    
                                    
                                </tbody>
                            </table>
                        </div>
                        
     </div>