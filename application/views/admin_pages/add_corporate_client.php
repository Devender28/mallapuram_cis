              

            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter3">
                    <div class="row items-push" >
                        <div class="col-sm-10">
                            <h1 class="page-heading">
                                Corporate Client
                            </h1>
                        </div>
                        
                        
                        
                        
                        
                       <div class="col-md-2">
                        <div class="col-xs-12">
                          <a href="<?php echo base_url('admin/corporate_client');?>" class="btn btn-minw btn-danger" type="button">View</a>
                           </div>
                           </div>
                        
                    </div>
                </div>
                <!-- END Page Header -->

                <!-- Page Content -->
                <div class="content content-narrow">
                    <!-- Material Design -->
                 
                  <?php echo $msg;?>  
                    
                    
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Default Elements -->
                            <div class="block">
                                <div class="block-content block-content-narrow">
                   <form class="js-validation-bootstrap form-horizontal" action="" method="post" enctype="multipart/form-data">
                                       <br>

                                       
                                       
                                       <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Company Name <span class="text-danger">*</span></label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="name" name="name" required></div>
                                        </div>
                                        </div>
                                        
                                        
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Address <span class="text-danger">*</span></label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="address" name="address" required></div>
                                        </div>
                                        </div>
                                        
                                        
                                        
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Pincode <span class="text-danger">*</span></label>
                                            <div class="col-sm-9">
             <input class="form-control" type="text" id="pincode" name="pincode" required></div>
                                        </div>
                                        </div>
                                        
                                        
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Board Number(Company Contact Number) <span class="text-danger">*</span></label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="contact_number" name="contact_number" required> </div>
                                        </div>
                                        </div>
                                        
                                        
                                         <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >GST Number <span class="text-danger">*</span></label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="gstn_number" name="gstn_number"  required>    </div>
                                        </div>
                                        </div>
                                        
                                        
                                        <div class="col-md-6">
                                         <div class="form-group">
                                            <label class="col-xs-12" >GST Scan Copy</label>
                                            <div class="col-sm-9">
                                                <input type="file" id="gstn_scan" name="gstn_scan">
                                                <br>

                                            </div>
                                        </div>
                                        </div>
                                        
                                        
                                         <div class="col-md-6">
                                         <div class="form-group">
                                            <label class="col-xs-12" >Logo</label>
                                            <div class="col-sm-9">
                                                <input type="file"  name="logo">
                                            </div>
                                        </div>
                                        </div>
                                        
                                        
                                         <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Website Address <span class="text-danger">*</span></label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="website" name="website" required > </div>
                                        </div>
                                        </div>
                                        
                                        
                                        
                                         <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Username (Authorised Contact Person1 Email) <span class="text-danger">*</span></label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="username" name="username"  required> </div>
                                        </div>
                                        </div>
                                        
                                        
                                         <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Password <span class="text-danger">*</span></label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="password" name="password"  required> </div>
                                        </div>
                                        </div>
                                        
                                        
                                        
                                         <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Company Pan Number <span class="text-danger">*</span></label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="pan_number" name="pan_number" required> </div>
                                        </div>
                                        </div>
                                        
                                        
                                        
                                        
                                        
                                         <div class="col-md-6">
                                         <div class="form-group">
                                            <label class="col-xs-12" >Company Pan Scan</label>
                                            <div class="col-sm-9">
                                                <input type="file" id="example-file-input" name="pan_scan">
                                                <br>

                                            </div>
                                        </div>
                                        </div>
                                        
                                        <div class="row"><div class="col-md-6"> <h5 style="color: #FF0000;"><br>
Bank Details:</h5><br>
</div></div>
                                       
                                         <div class="col-md-6">
                                        <div class="form-group ">
                                            <label class="col-xs-12" >Bank Account Company Name</label>
                                            <div class="col-sm-9 ">
              <input class="form-control" type="text" id="example-text-input" name="bank_account_name" > </div>
                                        </div>
                                        </div>
                                        
                                        
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Bank Account Number</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="example-text-input" name="bank_account_number" > </div>
                                        </div>
                                        </div>
                                        
                                        
                                        
                                         <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Bank Name</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="example-text-input" name="bank_name" > </div>
                                        </div>
                                        </div>
                                        
                                        
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Bank Branch</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="example-text-input" name="bank_branch" > </div>
                                        </div>
                                        </div>
                                        
                                        
                                         <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Bank IFSC Code</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="example-text-input" name="ifsc_code" > </div>
                                        </div>
                                        </div>
                                        
                                        
                                        <div class="col-md-6">
                                         <div class="form-group">
                                            <label class="col-xs-12" >Cheque Scan Copy</label>
                                            <div class="col-sm-9">
                                                <input type="file" id="example-file-input" name="cheque_scan">
                                                <br>

                                            </div>
                                        </div>
                                        </div>
                                        
                                        
                                       
                                        <div class="row"><div class="col-md-6"> <h5 style="color: #FF0000;"><br>
                                      Authorised Contact Person1:</h5><br>
</div></div>
                                        
                                         <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Authorised Contact Person1 Name <span class="text-danger">*</span></label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="authorised_contact_person1_name" name="authorised_contact_person1_name"  required> </div>
                                        </div>
                                        </div>
                                        
                                        
                                         <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Authorised Contact Person1 Designation <span class="text-danger">*</span></label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="authorised_contact_person1_designation" name="authorised_contact_person1_designation" required> </div>
                                        </div>
                                        </div>
                                        
                                        
                                         <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Authorised Contact Person1 Mobile <span class="text-danger">*</span></label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="authorised_contact_person1_phone" name="authorised_contact_person1_phone" required> </div>
                                        </div>
                                        </div>
                                        
                                        
                                        
                                        
                                         <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Authorised Contact Person1 Email  <span class="text-danger">*</span></label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="authorised_contact_person1_email" name="authorised_contact_person1_email" required >

                                      </div>
                                        </div>
                                        </div>
                                        
                                        
                                        
                                         <div class="row"><div class="col-md-6"> <h5 style="color: #FF0000;"><br>
                                       Authorised Contact Person2:</h5><br>
</div></div>
                                        
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Authorised Contact Person2 Name </label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="authorised_contact_person2_name" name="authorised_contact_person2_name" >

                                      </div>
                                        </div>
                                        </div>
                                        
                                        
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Authorised Contact Person2 Designation</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="authorised_contact_person2_designation" name="authorised_contact_person2_designation" >

                                      </div>
                                        </div>
                                        </div>
                                        
                                        
                                         <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Authorised Contact Person2 Mobile</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="example-text-input" name="authorised_contact_person2_phone" > 

                                      </div>
                                        </div>
                                        </div>
                                        
                                        
                                        
                                         <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Authorised Contact Person2 Email</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="example-text-input" name="authorised_contact_person2_email" > 

                                      </div>
                                        </div>
                                        </div>
                                        
                                        
                                         
                                         
                                         
                                         
                                         
                                         
                                         
                                         
                                      <div class="row"><div class="col-md-6"> <h5 style="color: #FF0000;"><br>
                                        Support Contact Person1:</h5><br>
</div></div>
                                          <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Support Contact Person1 Name</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="example-text-input" name="support_contact_person1_name" >

                                      </div>
                                        </div>
                                        </div>
                                        
                                        
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Support Contact Person1 Designation</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="example-text-input" name="support_contact_person1_designation" >

                                      </div>
                                        </div>
                                        </div>
                                        
                                        
                                        
                                         <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Support Contact Person1 Mobile</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="example-text-input" name="support_contact_person1_phone" >

                                      </div>
                                        </div>
                                        </div>
                                        
                                        
                                        
                                        
                                        
                                          <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Support Contact Person1 Email</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="example-text-input" name="support_contact_person1_email" >

                                      </div>
                                        </div>
                                        </div>
                                        
                                        
                                        
                                        
                                         <div class="row">
                                         <div class="col-md-6 "> 
                                         <h5 style="color: #FF0000;"><br>
                                     Support Contact Person2:</h5><br>
</div></div>
                                        
                                         <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Support Contact Person2 Name	</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="example-text-input" name="support_contact_person2_name" >

                                      </div>
                                        </div>
                                        </div>
                                        
                                        
                                        
                                        
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Support Contact Person2 Designation</label>
                                            <div class="col-sm-9">

              <input class="form-control" type="text" id="example-text-input" name="support_contact_person2_designation" >
                                      </div>
                                        </div>
                                        </div>
                                        
                                        
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12">Support  Contact Person2 Mobile</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="example-text-input" name="support_contact_person2_phone" >
                                      </div>
                                        </div>
                                        </div>
                                        
                                        
                                        
                                         <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Support Contact Person2 Email</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="example-text-input" name="support_contact_person2_email" >

                                      </div>
                                        </div>
                                        </div>   
                                         
                                         
                                         
                                         
                                         
                                         
                                         
                                         
                                         
                                         
                                         
                                         
                                         
                                         
                                         <div class="row"><div class="col-md-6"> <h5 style="color: #FF0000;"><br>
                                         Superior Contact Person1:</h5><br>
</div></div>
                                        
                                         <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Superior Contact Person1 Name</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="example-text-input" name="superior_contact_person1_name" >

                                      </div>
                                        </div>
                                        </div>
                                        
                                        
                                          <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Superior Contact Person1 Designation</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="example-text-input" name="superior_contact_person1_designation" >

                                      </div>
                                        </div>
                                        </div>
                                        
                                        
                                        
                                         <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Superior Contact Person1 Mobile</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="example-text-input" name="superior_contact_person1_phone" >

                                      </div>
                                        </div>
                                        </div>
                                        
                                        
                                        
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Superior Contact Person1 Email</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="example-text-input" name="superior_contact_person1_email" >

                                      </div>
                                        </div>
                                        </div>
                                        
                                        
                                        
                                        
                                        <div class="row"><div class="col-md-6"> <h5 style="color: #FF0000;"><br>
                                      Superior Contact Person2:</h5><br>
</div></div>
                                        
                                        
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Superior Contact Person2 Name</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="example-text-input" name="superior_contact_person2_name" >

                                      </div>
                                        </div>
                                        </div>
                                        
                                        
                                        
                                        
                                        
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Superior Contact Person2 Designation</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="example-text-input" name="superior_contact_person2_designation" >

                                      </div>
                                        </div>
                                        </div>
                                        
                                        
                                        
                                        
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Superior Contact Person2 Mobile</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="example-text-input" name="superior_contact_person2_phone" >

                                      </div>
                                        </div>
                                        </div>
                                        
                                        
                                        
                                        
                                        
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Superior Contact Person2 Email</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="example-text-input" name="superior_contact_person2_email" >

                                      </div>
                                        </div>
                                        </div>
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                    
                                    <div class="col-md-5"></div>      <div class="form-group">
                                            <div class="col-xs-6">
                                                <button class="btn btn-sm btn-primary" type="submit" name="add_corporate_client">Submit</button>&nbsp;&nbsp;
                                                <button class="btn btn-sm btn-primary" type="submit" name="save_add_corporate_client">Submit & Add</button>
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
                    <div class="modal-footer">
                        <button class="btn btn-sm btn-danger" type="button" data-dismiss="modal">Close</button>
                        
                    </div>
                </div>
            </div>
        </div>
    
    
<script type="text/javascript">
function view_corporate_client(val)
{

 $.ajax({
 type: 'post',
 url: <?php echo '"'.base_url('view_corporate_client').'"';?>,
 data: {
 id:val
 },
  success: function (response) {
  document.getElementById("view_popup").innerHTML=response; 
 
 }
 });
}
</script>     
    
    
<script>
function deleterecord(id,img){ 
swal({
  title: "Are you sure?",
  text: "you want to delete this corporate_client Details..",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#DD6B55",
  confirmButtonText: "Yes, delete it!",
  closeOnConfirm: false,
  html: false
}, 
function(isConfirm){
  
  if(isConfirm)
          {
  $.post(<?php echo '"'.base_url('delete').'"';?>,
        {
          x: id, 
          y: img, 
          bdr: <?php echo '"'.$this->encrypt->encode($Table).'"';?>
        },
        function(data,status){
           // alert("Data: " + data + "\nStatus: " + status);
            if(data)//alert("Successfully Deleted");
            location.href="";
        });
         
         
      }
   

});
}





function status(id,st){ 
  if(st==1){ 
swal({
  title: "Are you sure?",
  text: "you want to Deactivate this Corporate Client Details",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#DD6B55",
  confirmButtonText: "Yes, Deactivate!",
  closeOnConfirm: false,
  html: false
}, 
function(isConfirm){
  
  if(isConfirm)
          {
  $.post(<?php echo '"'.base_url('status').'"';?>,
        {
          x: id, 
          y: 0,
		  z: <?php echo '"'.$this->encrypt->encode($Table).'"';?>
        },
        function(data){
           // alert("Data: " + data + "\nStatus: " + status);
            if(data)//alert("Successfully Deleted");
            location.href="";
        });
         
         
      }
   

});} else {

  swal({
  title: "Are you sure?",
  text: "you want to Activate this Corporate Client Details",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#DD6B55",
  confirmButtonText: "Yes, Activate!",
  closeOnConfirm: false,
  html: false
}, 
function(isConfirm){
  
  if(isConfirm)
           {
  $.post(<?php echo '"'.base_url('status').'"';?>,
        {
          x: id, 
         y: 1,
		 z: <?php echo '"'.$this->encrypt->encode($Table).'"';?>
        },
        function(data){
           // alert("Data: " + data + "\nStatus: " + status);
            if(data)//alert("Successfully Deleted");
            location.href="";
        });
         
         
      }

});
}
}

</script> 
    
    