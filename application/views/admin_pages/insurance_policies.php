  
                
            

            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter3">
                    <div class="row items-push">
                        <div class="col-sm-10">
                            <h1 class="page-heading">
                            Add Insurance Policies
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
                                <div class="block-content block-content-narrow">
                   <form class="js-validation-bootstrap form-horizontal" action="" method="post" enctype="multipart/form-data" >
                   <br>
                                   <?php echo $msg;?>
                                       
                                        <div class="form-group">
                                       <div class="col-md-6">
                                          
                                          <div class="col-sm-9">
             <label class="control-label" for="val-select2">Select Insurance Company <span class="text-danger">*</span></label>
                                           
                                                <select class="js-select2 form-control" id="val-select2" name="company" style="width: 100%;" data-placeholder="Choose one.." required>
                                               
                                                    <option> </option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                                    <?php foreach($companies as $cmp) {?>
                                                    <option value="<?php echo $cmp->id;?>"><?php echo $cmp->name;?></option>
                                                    
                                                    <?php } ?>
                                                     </select>
                                            </div>
                                          </div>
                                        
                                          
                                        <div class="col-md-6">
                                          
                                          <div class="col-sm-9">
             <label class="control-label" for="val-select2">Select Category <span class="text-danger">*</span></label>
                                           
                                                <select class="js-select2 form-control" id="val-select2" name="category" style="width: 100%;" data-placeholder="Choose one.." required onchange="getType(this.value)">
                                               
                                                    <option> </option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                                    <option value="Group">Group</option>
                                                    <option value="Corporate">Corporate</option>
                                                    <option value="Individual">Individual</option>
                                                    
                                                     </select>
                                            </div>
                                          </div>
                                          
                                        
                                        </div>
                                        
                                        <div class="form-group">
                                        
                                          
                                          
                                          
                                          
                                          
                                          
                                          <div class="col-md-6">
                                          <div class="col-sm-9">
             <label class="control-label" for="val-select2">Select Policy types <span class="text-danger">*</span></label>
                                           
                                                <select class="js-select2 form-control" id="dev" name="type" style="width: 100%;" data-placeholder="Choose one.." required>
                                               
                                                    <option> </option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                                    
                                                   
                                                    
                                                     </select>
                                            </div>
                                          </div>
                                          
                                          
                                          
                                          <div class="col-md-6">
                                        
                                            <label class="col-xs-12" >Policy Name <span class="text-danger">*</span></label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text"  name="name"  required></div>
                                        </div>
                                          
                                        </div>
                                        
                                        
                                        
                                        
                                        
                                        
                                
                                        
                                        
                                        
                                    
                                  
                                    <div class="form-group">
                                    
                                     <div class="col-xs-5"></div>
                                            <div class="col-xs-7">
                                               <button class="btn btn-sm btn-primary" type="submit" name="add_policy">Submit & Add</button>
                                               <button class="btn btn-sm btn-primary" type="submit" name="add_policy_red">Submit</button>
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
  function getType(id){ 

     $.ajax({
 type: 'post',
 url: <?php echo '"'.base_url('admin/getType').'"';?>,
 data: {
 id:id
 },
  success: function (response) { 
  document.getElementById("dev").innerHTML=response; 
 
 }
 });
  }
</script>