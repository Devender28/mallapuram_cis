
            

            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter3">
                    <div class="row items-push">
                        <div class="col-sm-10">
                            <h1 class="page-heading">
                            Edit Corporate Branches
                            </h1>
                        </div>
                        
                       <div class="col-md-2">
                        <div class="col-xs-12">
                        <a href="<?php echo base_url('admin/corporate_branches');?>"  class="btn btn-minw btn-danger">Back</a>
                           </div>
                           </div>
                        
                    </div>
                </div>
                <!-- END Page Header -->

                <!-- Page Content -->
                <div class="content content-narrow">
                   
               <?php echo $msg;?>    
                   
                   
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Default Elements -->
                            <div class="block">
                                <div class="block-content block-content-narrow">
                   <form class="js-validation-bootstrap form-horizontal" action="" method="post" enctype="multipart/form-data" >
                                       
                                       <br>

                                       
                                       <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" for="example-text-input">Corporate Company</label>
                                            <div class="col-sm-9">
              
              
                        <select class="js-select form-control" id="company" name="company" style="width: 100%;" data-placeholder="Choose one.." required>
                                               
                                                    <option value="<?php echo $corporate_branch->company;?>"><?php echo $this->fun->getnewfieldvalue('corporate_client','name','id',$corporate_branch->company);?></option>
                                                    
                                                   
<?php 
$a =1;
foreach($corporate_clients as $corporate_client){?>             
                                                   
                                                    <option value="<?php echo $corporate_client->id;?>"><?php echo $corporate_client->name;?></option>
                                                    
 <?php
$a++;
}
?>                                                     
                                                     
                                                     
                                                     </select>                                
              
             
              
                                             </div>
                                        </div>
                                        </div>
                                        
                                        
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" for="example-text-input">Branch Name</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="name1" name="name1"  value="<?php echo $corporate_branch->name;?>" required></div>
                                        </div>
                                        </div>
                                        
                              
                                  
                                    <div class="form-group">
                                            <div class="col-xs-9">
                                               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <button class="btn btn-sm btn-primary" name="edit_branches" type="submit">Update</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                
                               

  <div class="form-group"> <hr> </div>
                                 


 
                                
                            </div>
                            <!-- END Default Elements -->
                        </div>
                        
                    </div>
                    
                  
                    
                    
                   
                </div>
                <!-- END Page Content -->
            </main>
           
    