   

            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter3">
                    <div class="row items-push">
                        <div class="col-sm-10">
                            <h1 class="page-heading">
                           Endorsement
                            </h1>
                        </div>
                        
                   <div class="col-md-2">
                        <div class="col-xs-12">
                        <a href="<?php echo base_url('hr/endorsement_list');?>">  <button class= "btn btn-minw btn-danger" type="button">View</button></a>
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
                                <div class="block-content block-content-narrow">
                   <form class="js-validation-bootstrap form-horizontal" action="" method="post" enctype="multipart/form-data" >
                                       <br>
                                       <?php echo @$msg;?>
                                       
                                       <div class="col-md-12">
                                        
                                       
                                            <div class="form-group"> 
                                         
                                         <div class="col-md-6">
                                          
                                              <label class="col-xs-12">Select Policy </label>
                                            <div class="col-sm-9">
                                             <select class="js-select2 form-control" id="material-select" name="policy" required size="1" onchange="getEndCount(this.value)">
                                                        <option>--- Select Policy ---</option>
                                                        <?php foreach($policies as $policy) { ?>
                                                        <option value="<?php echo $policy->policy_number;?>"><?php echo $policy->policy_number.' - '.$this->fun->getPolicy($policy->policy_name);?></option>
                                                        <?php } ?>
                                                       
                                                       
                                                    </select>
                                        
                                        </div>
                                        </div>
                                        
                                        
                                        
                                        
                                       <div class="col-md-6">
                                          
                                           <label class="col-xs-12">Endorsement Number (Nth Endorsement)</label>
                                            <div class="col-sm-9">
                                               <input class="form-control" type="text" id="end_count" name="end_count" readonly>

                                        </div>

                                        </div>
                                        
                                        
                                            
                                       
                                        
                                         </div>
                                            
                                            
                                            
                                            <div class="form-group"> 
                                         
                                         <div class="col-md-6">
                                            <label class="col-xs-12">Number of Additions</label>
                                            <div class="col-sm-9">
                                               <input class="form-control" type="text" id="simple-lastname" required name="additions">

                                        </div>
                                        
                                        </div>
                                        
                                        
                                        
                                        
                                        
                                        <div class="col-md-6">
                                            <label class="col-xs-12">Number of Deletions</label>
                                            <div class="col-sm-9">
                                          <input class="form-control" type="text" id="simple-lastname" required name="deletions"> 

                                        </div>
                                        
                                        </div>
                                        
                                         </div>
                                         
                                         
                                         <div class="form-group"> 
                                         
                                         <div class="col-md-6">
                                           <label class="col-xs-12">Number of Corrections</label>
                                            <div class="col-sm-9">
                                             <input class="form-control" type="text" id="simple-lastname" required name="corrections"> 

                                        </div>
                                        
                                        </div>
                                        
                                        
                                        <div class="col-md-6">
                                           <label class="col-xs-12">Select File</label>
                                            <div class="col-sm-6">
                                            <input type="file" id="example-file-input" name="endorse_file" required>

                                        </div>
                                        <div class="col-sm-6">
                                        <a class="btn btn-success" href="<?php echo base_url('uploads/excel/endorsement_format.xlsx');?>" download ><i class="fa fa-download"></i> Download Example File </a>
                                        </div>
                                        </div>


                                      
                                        
                                       
                                        
                             
                                        
                                         </div>
                       
                                            
                                            </div>
                                        
                             
                                        
                                     <div class="form-group">
                                     <div class="col-xs-5"></div>
                                            <div class="col-xs-7">
                                            
                                            
                                               <input class="btn btn-minw btn-danger" type="submit" name="endorse_request" value="Submit">
                                               
                                          
                                               
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                
                               
               

                                
                            </div>
                            <!-- END Default Elements -->
                            
                            
                            
                        </div>
                        
                    </div>
                    
                    
                  
                    
                    
                   
                </div>
                <!-- END Page Content -->
            </main>
           

<script type="text/javascript">
  function getEndCount(id){ 
     
     $.ajax({
 type: 'post',
 url: <?php echo '"'.base_url('client/getEndCount').'"';?>,
 data: {
 id:id 
 },
  success: function (response) { 
  
  $("#end_count").val(response);
 
 }
 });
  }
</script>
         
           
        