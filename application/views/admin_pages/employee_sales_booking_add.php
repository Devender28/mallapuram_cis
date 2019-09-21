
             

            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter3">
                    <div class="row items-push">
                        <div class="col-sm-10">
                            <h1 class="page-heading">
                           Employee Sales Booking 
                            </h1>
                        </div>
                        
                        <div class="col-md-2">
                        <div class="col-xs-12">
                     <!--     <a href="<?php echo base_url('employee_sales_booking');?>"><button class="btn btn-minw btn-danger" type="button">View</button></a>-->
                           </div>
                           </div>
                        
                    </div>
                </div>
                <!-- END Page Header -->

                <!-- Page Content -->
                <div class="content content-narrow">
                    <!-- Material Design -->
                   
                   
                    
                    <div class="row" >
                        <div class="col-md-12">
                            <!-- Default Elements -->
                            <div class="block">
                                <div class="block-content block-content-narrow">
                   <form action="" method="post" id="disform">
                                     
                         <div class="row">           
                         <div class="form-group" style="margin-left:10px;margin-right:10px;">
                          
                          
                                                    
                          <div class="col-md-3">
                                    <div class="col-sm-11">
             <label class="control-label" for="val-select2">Select Client</label>
                                           
                                                <select class="js-select2 form-control" id="val-select2" name="corporate_id" onchange="getEmployees(this.value)" style="width: 100%;" data-placeholder="Choose one..">
                                                    <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                                    <?php foreach($corporate_clients as $client) {?>
                                                    <option value="<?php echo $client->id;?>"><?php echo $client->name;?></option>
                                                    <?php } ?>
                                                  
                                                     </select>
                                            </div>
                                    </div>
                          
                          
                          
                         
                          <div class="col-md-3">
                                    <div class="col-sm-11">
             <label class="control-label" for="val-select2">Select Employee</label>
                                           
                                                <select class="js-select2 form-control" id="emp" name="employee_id" style="width: 100%;" onchange="getFamily(this.value)"  data-placeholder="Choose one..">
                                                    <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                                  
                                                     </select>
                                            </div>
                                    </div>
                                    
                                    
                                    
                                    <div class="col-md-3">
                                    <div class="col-sm-11">
             <label class="control-label" for="val-select2">Select Policy  </label>
                                           
                                                <select class="js-select2 form-control" id="pol" name="policy_id" style="width: 100%;" data-placeholder="Choose one..">
                                                    <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                                  
                                                     </select>
                                     
                                                     
                                            </div>
                                    </div>
                                    
                                    
                                    
                            
                            <div class="col-md-3">
                                    <div class="col-sm-11">
             <label class="control-label" for="val-select2">Select Relation </label>
                                           
                                                    <select class="js-select2 form-control" id="family" name="policy_id" style="width: 100%;" data-placeholder="Choose one..">
                                                    <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                                  
                                                     </select>
                                     
                                             </div>
                                    </div>        
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                          
                          </div> 
                          
                          </div>          
                                  
                                
                                
                                
                                
                                
      <div class="row" style="margin-left:20px;">  <div class="col-md-3">  <h5 style="color: #FF0000;"><br>
       Policy Details:</h5></div>
      </div>
      <br/>
                       

                                    <div class="row">
                                    <div class="form-group" style="margin-top:0px; margin-left:20px;margin-right:20px;">
                                    
                                        <div class="col-md-2" style="position:relative;min-height:1px;padding-right:0px;padding-left:0px">
                                  <label class="col-xs-12" >Employee Policy ID</label>
                                            <div class="col-sm-11">
                                                <input class="form-control" type="text" id="example-text-input" name="individual_policy_id" >
                                            </div>
                                    </div>
                                        
                                        
                                     
                           

                                         
                                       
                                       <div class="col-md-2">
                                            <label class="col-xs-12" >Sum Insured</label>
                                            <div class="col-sm-11">
            <input class="form-control" type="text" id="example-text-input" name="sum_insured" ></div>
                                        
                                        </div>
                                        
                                        
                                        
                                        <div class="col-md-2" >
                                            <label class="col-xs-12" >Family Floater</label>
                                            <div class="col-sm-11">
            <select class="js-select2 form-control" id="val-select2" name="family_floater" style="width: 100%;" data-placeholder="Choose one..">
                                                    <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                     </select></div>
                                        
                                        </div>
                                        
                                        
                                        
                                        
                                        
                                        
                                       
                                        
                                        <div class="col-md-2" >
                                            <label class="col-xs-12" >Nominee  Name</label>
                                            <div class="col-sm-11">
              <input class="form-control" type="text" id="example-text-input" name="nominee" ></div>
                                        
                                        </div>
                                        
                                        
                                        
                                        
                                        <div class="col-md-2" >
                                        
                                            <label class="col-xs-12" >Relationship</label>
                                            <div class="col-sm-11">
              <select class="js-select2 form-control" id="val-select2" name="nominee_relationship" style="width: 100%;" data-placeholder="Choose one..">
                                                    <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                                    <option value="Father">Father</option>
                                                    <option value="Mother">Mother</option>
                                                    <option value="Brother">Brother</option>
                                                    <option value="Sister">Sister</option>
                                                     <option value="Son">Son</option>
                                                    <option value="Daughter">Daughter</option>
                                                     </select></div>
                                        </div>
                                        
                             
                                        
                                        
                                        
                                        
                                     
                                           <div class="col-md-2">
                                        
                                            <label class="col-xs-12" > Date Of Birth </label>
                                            <div class="col-sm-11">
               <input class="js-datepicker form-control" type="text" id="example-datepicker1" name="nominee_dob" data-date-format="mm/dd/yy" placeholder="mm/dd/yy"></div>
               
               
              
                                        </div>
                                        <div class="col-md-2" style=" width:4%; margin-left:0px; margin-right:0px; padding:0px;">  <br>
                                        <button class="btn btn-sm btn-primary" type="button" id="send">Add+</button></div>
                                      
                                       
                                 
              </form>                   
                                 
                                  </div>
                                    
                                    </div>
                                 <br>
 
                              <hr>       
                                        
                                        
                                
                                
                                
                                
                                
<form action="" method="post" >
                               
      <div class="block">
        <?php /*?><div class="block-header bg-gray-lighter">
          <h3 class="block-title">Product Queue</h3>
        </div><?php */?>
        <div id="ajdata"></div>
       </div>
    </form>
                                    
                                    
                                  
                                    
                                    
                                    
                                    
                                
                                
                                
                                    
                                    
                                
                                
                                
                          

                                
                            </div>
                            <!-- END Default Elements -->
                        </div>
                        
                    </div>
                    
                  
                    
                    
                   
                </div>
                <!-- END Page Content -->
            </main>
           
           
           
 
 
 
 
 
 
 
 
 
 
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>



 <script type="text/javascript">

(function($) {
   $('#send').click(function(){ 
  var dis_id = $("#emp").val();
  
 
     $.ajax({
           type: "POST",
           url: <?php echo '"'.base_url('addsale').'"';?>,
          data: $("#disform").serialize(),
           success: function(data)
           {
              
               $.ajax({
           type: "POST",
           url: <?php echo '"'.base_url('get_dummy').'"';?>,
          data: "id="+ dis_id,
           success: function(data)
           {

               $("#ajdata").html(data);
               
           }
         });
           }
         });
      
  
    e.preventDefault();
   });
})(jQuery);
</script>







 
 
 
 
 
 
 
 
 
 
 
 
 
 <script type="text/javascript">
  function getEmployees(id){ 

     $.ajax({
 type: 'post',
 url: <?php echo '"'.base_url('employees').'"';?>,
 data: {
 get_id:id
 },
  success: function (response) { 
  document.getElementById("emp").innerHTML=response; 
 
 }
 });

 $.ajax({
 type: 'post',
 url: <?php echo '"'.base_url('getClientPolicy').'"';?>,
 data: {
 get_id:id
 },
  success: function (response1) { 
  document.getElementById("pol").innerHTML=response1; 
 
 }
 });
	  
	  
  
	  
	  
	  
	  
	  
  }
</script>




<script type="text/javascript">
 function getFamily(id){ 
     
$.ajax({
 type: 'post',
 url: <?php echo '"'.base_url('getFamily').'"';?>,
 data: {
 get_id:id
 },
  success: function (response) { 
  document.getElementById("family").innerHTML=response; 
 
 }
 });	  
	  
	  
	  
	  
	  
	  
  }
 </script>






