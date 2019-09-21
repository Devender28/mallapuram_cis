<style>

	 
 <!--- RATING --> 

 .rating {
 float:left;
}

/* :not(:checked) is a filter, so that browsers that don’t support :checked don’t 
   follow these rules. Every browser that supports :checked also supports :not(), so
   it doesn’t make the test unnecessarily selective */
.rating:not(:checked) > input {
    position:absolute;
    top:-9999px;
    clip:rect(0,0,0,0);
}

.rating:not(:checked) > label {
    float:right;
    width:1em;
    padding:0 .1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:200%;
    line-height:1.2;
    color: #666666;
    text-shadow:1px 1px #bbb, 2px 2px #666, .1em .1em .2em rgba(0,0,0,.5);
}

.rating:not(:checked) > label:before {
    content: '\2605';
display: inline-block;
}

.rating > input:checked ~ label {
    color: #f70;
    text-shadow:1px 1px #c60, 2px 2px #940, .1em .1em .2em rgba(0,0,0,.5);
}



.rating > label:active {
    position:relative;
    top:2px;
    left:2px;
}
	 
	 

</style>


   
    
               

            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter3">
                    <div class="row items-push">
                        <div class="col-sm-10">
                            <h1 class="page-heading">
                          Feedback Details
                            </h1>
                        </div>
                        
                       <!--<div class="col-md-2">
                        <div class="col-xs-12">
                        <a href="cashless_claim_view.php">  <button class= "btn btn-minw btn-danger" type="button">Add</button></a>
                           </div>
                           </div>-->
                        
                    </div>
                </div>
                <!-- END Page Header -->

                <!-- Page Content -->
                <div class="content content-narrow">
                   
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Default Elements -->
                            <div class="block">
                               




                              <div class="block-content">
                            <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/base_tables_datatables.js -->
                             <table class="display" id="example">
                                  <thead style="background-color: #69C; color:#FFF;">
                                    <tr>
                                        <th class="text-center">Sl No</th>
                                       <th>Feedback Date</th>
                                       <th class="hidden-xs" style="width: 20%;">Remark</th>
                                        <th class="hidden-xs" style="width: 20%;">Suggestion</th>
                                        <th  style="width: 30%;">Rating</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                      $a=1;
                                foreach($fds as $fd)
                                { ?>
                                    <tr>
                                        <td class="text-center"><?php echo $a;?></td>
                                        <td class="font-w600"><?php echo date('d/m/Y',strtotime($fd->crdate));?></td>
                                        <td class="hidden-xs"><?php echo $fd->remark;?></td>
                                        <td class="hidden-xs"><?php echo $fd->suggestion;?></td>
                                       <td >
                                       <fieldset<?php echo $fd->id;?> class="rating" style="float:left">
                                
    
    <input type="radio" id="statr5_<?php echo $fd->id;?>" name="rating" value="5" <?php if($fd->rating == '5') { echo 'checked'; } ?> /><label for="star5_<?php echo $fd->id;?>" title="Rocks!">5 stars</label>
    <input type="radio" id="star4_<?php echo $fd->id;?>" name="rating" value="4" <?php if($fd->rating == '4') echo 'checked';?> /><label for="star4_<?php echo $fd->id;?>" title="Pretty good">4 stars</label>
    <input type="radio" id="star3_<?php echo $fd->id;?>" name="rating" value="3"  <?php if($fd->rating == '3') echo 'checked';?>/><label for="star3_<?php echo $fd->id;?>" title="Meh">3 stars</label>
    <input type="radio" id="star2_<?php echo $fd->id;?>" name="rating" value="2" /><label for="star2_<?php echo $fd->id;?>" title="Kinda bad">2 stars</label>
    <input type="radio" id="star1_<?php echo $fd->id;?>" name="rating" value="1" /><label for="star1_<?php echo $fd->id;?>" title="Sucks big time">1 star</label>
</fieldset<?php echo $fd->id;?>></td>
                                        
                                        
                                    </tr>
                                    
                          <?php $a++; } ?>          
                                    
                                    
              
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
           
         
           
        