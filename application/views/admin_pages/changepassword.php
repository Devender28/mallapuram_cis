


            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter3">
                    <div class="row items-push">
                        <div class="col-sm-10">
                            <h1 class="page-heading">
                                Change Password
                            </h1>
                        </div>
                        
                       <div class="col-md-2">
                        <div class="col-xs-12">
                          <a href="" class="btn btn-minw btn-danger" >Back</a>
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
                            
                             
                            
                            
                          <?php echo $msg;?>   
                             
                            
                            <div class="block">
                                <div class="block-content block-content-narrow">
                   <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                       <br>

                                       
                                       
                                      
                                        <div class="col-md-9">
                                         <div class="form-group">
                                            <label class="col-xs-12" >Current Password</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="password" name="cpw" id="example-text-input"  required>    </div>
                                        </div>
                                         </div>
                                        
                                        
                                        
                                        <div class="col-md-9">
                                         <div class="form-group">
                                            <label class="col-xs-12" >New Password</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="password" name="npd" id="example-text-input"  required></div>
                                        </div>
                                        </div>
                                       
                                        
                                        
                                        
                                        <div class="col-md-9">
                                         <div class="form-group">
                                            <label class="col-xs-12" >Confirm Password</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="password" name="rnpd" id="example-text-input" required></div>
                                        </div>
                                        </div>
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                    
                                    <div class="col-md-9"></div>      
                                    <div class="form-group">
                                            <div class="col-xs-6">
                                                <button class="btn btn-sm btn-primary" type="submit" name="passchange">Submit</button>
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
           
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://editor.datatables.net/extensions/Editor/css/editor.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/select/1.2.3/css/select.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.4.2/css/buttons.dataTables.min.css">


<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/select/1.2.3/js/dataTables.select.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.4.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.4.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.4.2/js/buttons.print.min.js"></script>
<script src="https://editor.datatables.net/extensions/Editor/js/dataTables.editor.min.js"></script>




















<script>
$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5',
			'print'
			
        ]
    } );
} );
</script>  



