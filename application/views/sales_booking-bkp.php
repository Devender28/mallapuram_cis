  
   
   
                <!-- Header Navigation Right -->
                
                <!-- END Header Navigation Right -->

                <!-- Header Navigation Left -->
                <ul class="nav-header pull-left">
                    <li class="hidden-md hidden-lg">
                        <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                        <button class="btn btn-default" data-toggle="layout" data-action="sidebar_toggle" type="button">
                            <i class="fa fa-navicon"></i>
                        </button>
                    </li>
                    <li class="hidden-xs hidden-sm">
                        <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                        <button class="btn btn-default" data-toggle="layout" data-action="sidebar_mini_toggle" type="button">
                            <i class="fa fa-ellipsis-v"></i>
                        </button>
                    </li>
                    <li>
                        <!-- Opens the Apps modal found at the bottom of the page, before including JS code -->
                        
                    </li>
                   
                    
                </ul>
                <!-- END Header Navigation Left -->
            </header>
            <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter3">
                    <div class="row items-push">
                        <div class="col-sm-10">
                            <h1 class="page-heading">
                           Sales Booking
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
                   <form class="form-horizontal" action="" method="post" enctype="multipart/form-data" >
                   <br>

                                <?php echo $msg;?>     
                                     
                                     
                          <div class="form-group">
                          
                          <div class="col-md-6">
                                    <div class="col-sm-9">
             <label class="control-label" for="val-select2">Select Client</label>
                                           
                                                <select class="js-select2 form-control" id="val-select2" name="client" style="width: 100%;" data-placeholder="Choose one.." required>
                                                    <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                                     <?php
                                                       foreach($corporate_clients as $cc){
                                                    ?>
                                                    <option value="<?php echo $cc->id;?>"><?php echo $cc->name;?></option>
                                                    <?php } ?>
                                                     </select>
                                            </div>
                                    </div>
                          
                          
                          
                          <div class="col-md-6">
                                    <div class="col-sm-9">
             <label class="control-label" for="val-select2">Select Insurance Company</label>
                                           
                                                <select class="js-select2 form-control" id="comp" name="company" style="width: 100%;" data-placeholder="Choose one.." required>
                                                    <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                                    <?php foreach($companies as $company) { ?>
                                                    <option value="<?php echo $company->id;?>"><?php echo $company->name;?></option>
                                                    <?php } ?>
                                                     </select>
                                            </div>
                                    </div>
                          
                          </div>           
                                  
                                  
                                  
                                    <div class="form-group">
                                       <div class="col-md-6">
                                    <div class="col-sm-9">
             <label class="control-label" for="val-select2">Select Insurance Policy Category </label>
                                           
                                                <select class="js-select2 form-control" id="cat" name="category" onchange="getType(this.value)" style="width: 100%;" data-placeholder="Choose one.." required>
                                                    <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                                    <option value="Group">Group</option>
                                                    <option value="Individual">Individual</option>
                                                     </select>
                                            </div>
                                    </div>
                                    
                                        
                                        
                                        <div class="col-md-6">
                                    <div class="col-sm-9">
             <label class="control-label" for="val-select2">Select Policy Type </label>
                                           
                                                <select class="js-select2 form-control" id="dev" name="type" onchange="getPolicy(this.value)" style="width: 100%;" data-placeholder="Choose one.." required>
                                                    <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                                    
                                                     </select>
                                            </div>
                                    </div>
                                        
                                        </div>   
                                     
                           
            <div class="row"><div class="col-md-6"> <h5 style="color: #FF0000;"><br>
 Policy Specifications Details</h5><br>
</div></div>
                                         
                                         
                                        <div class="form-group">
                                       <div class="col-md-6">
                                            <label class="col-xs-12" >Select Policy Name</label>
                                            <div class="col-sm-9">
             <select class="js-select2 form-control" id="dev1" name="policy_name" style="width: 100%;" data-placeholder="Choose one.." required>
                                                    <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                                    <option value="1">Life</option>
                                                    <option value="2">General</option>
                                                     </select></div>
                                        
                                        </div>
                                        
                                        
                                        <div class="col-md-6">
                                            <label class="col-xs-12" >Policy Number</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="example-text-input" name="policy_number" required></div>
                                        
                                        </div>
                                        </div>
                                        
                                        
                                        
                                        <div class="form-group">
                                        <div class="col-md-6">
                                        
                                            <label class="col-xs-12" >Premium Amount without Tax</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="without_tax" name="premium_without_tax" required></div>
                                        </div>
                                        
                                        
                                        <div class="col-md-6">
                                        
                                            <label class="col-xs-12" >Premium Amount with Tax </label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="with_tax" name="premium_with_tax" required></div>
                                        </div>
                                        
                                        
                                        </div>
                                        
                                   
                                        
                                        
                                         
                                        
                                        <div class="form-group"> 
                                        <div class="col-md-6">
                                        
                                            <label class="col-xs-12">Tax Percentage  </label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="tax" name="tax" readonly></div>
                                        </div>
                                        
                                        
                                        
                                         <div class="col-md-6">
                                            <label class="col-xs-12">Sum Insured</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="example-text-input" name="sum_insured" required></div>
                                        </div>
                               
                                      
                                        </div>
                                        
                                        
                                         <div class="form-group"> 
                                        <div class="col-md-6">
                                        
                                            <label class="col-xs-12">Start Date </label>
                                            <div class="col-sm-9">
            <input class="js-datepicker form-control" type="text" id="example-datepicker1" name="policy_start_date" data-date-format="mm/dd/yy" placeholder="mm/dd/yy" required></div>
                                        </div>
                                        
                                        
                                          <div class="col-md-6">
                                        
                                            <label class="col-xs-12">Policy term (1 Year default)</label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="example-text-input" name="policy_term" required></div>
                                        </div>
                                        
                                        
                                        </div>
                                        
                                        
                                         <div class="form-group"> 
                                         <div class="col-md-6">
                                            <label class="col-xs-12">Premium Payment term </label>
                                            <div class="col-sm-9">
              <input class="form-control" type="text" id="example-text-input" name="premium_payment_term" required></div>
                                        </div>
                                        
                                        
                                         <div class="col-md-6">
                                        
                                            <label class="col-xs-12">Select Payment Mode</label>
                                            <div class="col-sm-9">
             <select class="js-select2 form-control" id="val-select2" name="payment_mode" style="width: 100%;" data-placeholder="Choose one.." required>
                                                    <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                                    <option value="1">Annual</option>
                                                    <option value="2">Semi Annual</option>
                                                    <option value="2">Quarterly </option>
                                                    <option value="2">Monthly </option>
                                                     </select></div>
                                        </div>
                                       
                                         </div>
                                         
                                         
                                         
                                         
                                         <div class="form-group"> 
                                         
                                         <div class="col-md-6">
                                            <label class="col-xs-12">Policy Copy Upload*</label>
                                            <div class="col-sm-9">
                                          <input name="policy_copy" type="file" required></div>
                                        </div>
                                        
                                        
                                        <div class="col-md-6">
                                            <label class="col-xs-12"> Policy Benefits upload</label>
                                            <div class="col-sm-9">
                                          <input name="policy_benefits" type="file" required></div>
                                        </div>
                                       
                                         </div>
                                         
                                         
                                         
                                         <div class="form-group"> 
                                         
                                        <div class="col-md-6">
                                            <label class="col-xs-12">  Remarks</label>
                                            <div class="col-sm-9">
                                           <input class="form-control" type="text" id="example-text-input" name="remarks" required></div>
                                        </div>
                                        
                                        
                                         
                                         </div>
                                        
                                        
                                        
                                    
                                  
                                    <div class="form-group">
                                     <div class="col-xs-5"></div>
                                            <div class="col-xs-7">
                                               <button class="btn btn-sm btn-primary" name="sale_booking" type="submit">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                
                                

  <div class="form-group"> <hr> </div>
                                 <div class="form-group">
                                 <div class="col-md-12" id="devtitle"><h4>INSURANCE POLICIES</h4><br>
                                   </div>
                                 </div>



<div class="block-content">
                            <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/base_tables_datatables.js -->
                            <table class="display" id="example">
                                <thead class="bg-primary">
                                    <tr>
                                        <th class="text-center">SNo</th>
                                        <th>Client</th>
                                        <th class="hidden-xs" >Policy</th>
                                        <th class="hidden-xs">Company</th>
                                        <th class="hidden-xs" >Category</th>
                                        <th class="hidden-xs" >Type</th>
                                        <th class="hidden-xs" >Status</th>
                                        <th class="text-center" >Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php  $a=1;
                                       foreach($sales as $sale){
                                   
                                ?>
                                    <tr>
                                        <td class="text-center"><?php echo $a++;?></td>
                                        <td class="font-w600"><?php echo $this->fun->getClient($sale->client);?></td>
                                        <td class="hidden-xs"><?php echo $this->fun->getPolicy($sale->policy_name);?></td>
                                       <td class="hidden-xs"><?php echo $this->fun->getCompany($sale->company);?></td>
                                       <td class="hidden-xs"><?php echo $sale->category;?></td>
                                       <td class="hidden-xs"><?php echo $this->fun->getType($sale->type);?></td>
                                       <td ><a class="btn btn-<?php if($sale->status=='1') { echo 'success';} else { echo 'danger';} ?>" onclick="status('<?php echo $sale->id;?>','<?php echo $sale->status;?>');"  class="btn btn-xs btn-default" ><?php if($sale->status=='1') { echo 'Active';} else { echo 'Deactive';} ?></i></a></td>
                                        <td class="text-center">                               
            
                             
                            
                            
                                        
                                            <div class="btn-group">
                                            
            <button  class="btn btn-xs btn-default"  data-toggle="modal" data-target="#modal-normal" type="button" onclick="viewsale(<?php echo $sale->id;?>)" title="View Details"><i class="fa fa-eye"></i></button>
                                <a href="<?php echo base_url('edit_sales_booking').'/'.$sale->id;?>"> <button class="btn btn-xs btn-default" type="button"><i class="fa fa-pencil"></i></button></a>
                                                
                                           <a  onclick="deleterecord('<?php echo $sale->id;?>');"  class="btn btn-xs btn-default" ><i class="fa fa-times"></i></a>
                                                
                                            </div>
                                        </td>
                                    </tr>

                                    <?php } ?>
                                    
                                    
                                    
                                    
                                    
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


<?php $this->load->view('includes/footer');?>


<script type="text/javascript">
  $( "#with_tax,#without_tax" ).bind('input',function() {
  var d1=parseInt($( "#with_tax" ).val()); 
  var d2=parseInt($( "#without_tax" ).val());

  var d3= parseInt((d1 - d2) / 100); 
  $("#tax").val(d3);

});
</script>


        <script type="text/javascript">

  function getType(id){ 

     $.ajax({
 type: 'post',
 url: <?php echo '"'.base_url('getType').'"';?>,
 data: {
 id:id
 },
  success: function (response) { 
  document.getElementById("dev").innerHTML=response; 
 
 }
 });
  }

 function getPolicy(type){ 
    
       
        var comp= $( "#comp" ).val();
        var cat= $( "#cat" ).val();
        
     $.ajax({
 type: 'post',
 url: <?php echo '"'.base_url('getPolicy').'"';?>,
 data: {
 type:type,
 cat: cat,
 comp: comp

 },
  success: function (response) { 
  document.getElementById("dev1").innerHTML=response; 
 
 }
 });
  }
</script>


<script>

function status(id,st){ 
  if(st==1){ 
swal({
  title: "Are you sure?",
  text: "you want to Deactivate this Sale Booking",
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
  text: "you want to Activate this Sale Booking",
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


function deleterecord(id){ 
swal({
  title: "Are you sure?",
  text: "you want to delete this Sale",
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


function viewsale(val)
{

 $.ajax({
 type: 'post',
 url: <?php echo '"'.base_url('viewsale').'"';?>,
 data: {
 id:val
 },
  success: function (response) {
  document.getElementById("view_popup").innerHTML=response; 
 
 }
 });
}

</script>  