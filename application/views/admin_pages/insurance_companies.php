            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter3">
                    <div class="row items-push">
                        <div class="col-sm-10">
                            <h1 class="page-heading">
                                Add Insurance Companies
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
                   <form class="js-validation-bootstrap form-horizontal" action="" id="form" method="post" enctype="multipart/form-data" >
                                       <br>

                                       <?php echo $msg;?>
                                       
                                      
                                        <div class="col-md-6">
                                         <div class="form-group">
                                            <label class="col-xs-12" for="val-username">Name of the Company <span class="text-danger">*</span></label>
                                            <div class="col-sm-9">
              <input class="form-control"  type="text" id="company" name="company" required>    </div>
                                        </div>
                                         </div>
                                        
                                        
                                        
                                        <div class="col-md-6">
                                         <div class="form-group">
                                            <label class="col-xs-12" >Branch Name <span class="text-danger">*</span></label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="branch" name="branch" required></div>
                                        </div>
                                        </div>
                                       
                                        
                                        
                                        
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Branch Address <span class="text-danger">*</span></label>
                                            <div class="col-sm-9">
              <textarea class="form-control" id="branch_address" name="branch_address" rows="3" required></textarea>                                  </div>
                                        </div>
                                        </div>
                                        
                                        
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Head Office Address <span class="text-danger">*</span></label>
                                            <div class="col-sm-9">
             <textarea class="form-control" id="head_address" name="head_address" rows="3" required></textarea>                                  </div>
                                        </div>
                                        </div>
                                        
                                        
                                         <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >GSTIN Number</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text"  name="gstin" >    </div>
                                        </div>
                                        </div>
                                        
                                        
                                        <div class="col-md-6">
                                         <div class="form-group">
                                            <label class="col-xs-12" >Logo</label>
                                            <div class="col-sm-9">
                                                <input type="file" id="logo" name="logo" >
                                                <br>

                                            </div>
                                        </div>
                                        </div>
                                        
                                        
                                         <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Website Address <span class="text-danger">*</span></label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="website" name="website" required> </div>
                                        </div>
                                        </div>
                                        
                                        
                                         <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Relationship Manager Name <span class="text-danger">*</span></label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="r_manager_name" name="r_manager_name" required> </div>
                                        </div>
                                        </div>
                                        
                                        
                                        
                                         <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Relationship Manager Contact Number <span class="text-danger">*</span></label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="r_manager_number" name="r_manager_number" required> </div>
                                        </div>
                                        </div>
                                        
                                        
                                          <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Relationship Manager Email Id <span class="text-danger">*</span></label>
                                            <div class="col-sm-9">
              <input class="form-control" type="email" id="r_manager_email" name="r_manager_email" required> </div>
                                        </div>
                                        </div>
                                        
                                        
                                        
                                         <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Branch Manager Name</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text"  name="b_manager_name" > </div>
                                        </div>
                                        </div>
                                        
                                        
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Branch Manager Contact Number</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text"  name="b_manager_number" > </div>
                                        </div>
                                        </div>
                                        
                                        
                                        
                                         <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Branch Manager Email Id</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text"  name="b_manager_email" > </div>
                                        </div>
                                        </div>
                                        
                                        
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Regional Head Name</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text"  name="regonal_head_name" > </div>
                                        </div>
                                        </div>
                                        
                                        
                                         <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Regional Head Contact Number</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text"  name="regional_head_number" > </div>
                                        </div>
                                        </div>
                                        
                                        
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Regional Head Email Id</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text"  name="regional_head_email" > </div>
                                        </div>
                                        </div>
                                        
                                        
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Service Forms Link <span class="text-danger">*</span></label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="service_forms_link" name="service_forms_link" required> </div>
                                        </div>
                                        </div>
                                        
                                        
                                         <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Help Line Number <span class="text-danger">*</span></label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="help_line_number" name="help_line_number" required> </div>
                                        </div>
                                        </div>
                                        
                                        
                                        
                                         <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Renewal Payment Link <span class="text-danger">*</span></label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="renewal_link" name="renewal_link"  required> </div>
                                        </div>
                                        </div>
                                        
                                        
                                         <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >Grievance Redressal <span class="text-danger">*</span></label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="grievance_redressal" name="grievance_redressal" required> </div>
                                        </div>
                                        </div>
                                        
                                        
                                         <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12" >All Branch locations link</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="all_branch_links"  name="all_branch_links" > </div>
                                        </div>
                                        </div>
                                        
                                         <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-xs-12">Network Hospitals List Link</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text"  id="nw_hospital_links"  name="nw_hospital_links" > <br>
              
               <label >Claim Form</label>

<input class="form-control" type="text"  id="other_link1"  name="other_link1" ><br>

<label >Check List</label>



<input class="form-control" type="text"  id="other_link2" name="other_link2" >

</div>
                                        </div>
                                        </div>
                                        
                                    
                                    <div class="col-md-5"></div>      <div class="form-group">
                                            <div class="col-xs-6">
                                                <button class="btn btn-sm btn-primary" name="add_ins_company" type="submit">Submit & Add</button>
                                                <button class="btn btn-sm btn-primary" name="add_ins_company_red" type="submit">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                
                                

 















 
                                
                           
                           
       

       <script type="text/javascript">


function status(id,st){ 
  if(st==1){ 
swal({
  title: "Are you sure?",
  text: "you want to Deactivate this Company",
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
  text: "you want to Activate this Company",
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





function viewinscompany(val)
{

 $.ajax({
 type: 'post',
 url: <?php echo '"'.base_url('viewinscompany').'"';?>,
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
function deleterecord(id){ 
swal({
  title: "Are you sure?",
  text: "you want to delete this Company",
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



$(document).ready(function(){
   $("#form").validate({
      rules: {
         name: {
            required: true
               }
         },
         messages: {
            name: "Required Field"
         }
     });
});
  

</script>                          
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                            </div>
                            <!-- END Default Elements -->
                        </div>
                        
                    </div>
                  
                   
                </div>
                <!-- END Page Content -->
            </main>
            
       
 

