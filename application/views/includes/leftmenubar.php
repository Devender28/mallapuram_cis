<?php $page=$this->uri->segment(2); ?> 

<body>
       
        <div id="page-container" class="sidebar-l sidebar-o side-scroll header-navbar-fixed">
            <nav id="sidebar">
                <!-- Sidebar Scroll Container -->
                <div id="sidebar-scroll">




<div id="sidebar-scroll">
                    <!-- Sidebar Content -->
                    <!-- Adding .sidebar-mini-hide to an element will hide it when the sidebar is in mini mode -->
                    <div class="sidebar-content">
                        <!-- Side Header -->
                        <div class="side-header side-content bg-white-op">
                            <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                            <button class="btn btn-link text-gray pull-right hidden-md hidden-lg" type="button" data-toggle="layout" data-action="sidebar_close">
                                <i class="fa fa-times"></i>
                            </button>
                            <!-- Themes functionality initialized in App() -> uiHandleTheme() -->
                            
                            <a class=" text-white" href="#">
                                <span class="h4 font-w600 sidebar-mini-hide"><img src="<?php echo base_url();?>assets/img/logo-mallapuram.png" width="200" height="70"></span>
                            </a>
                        </div>
                        <!-- END Side Header -->

                        <!-- Side Content -->
                        <div class="side-content">
                           
                           
                           
                           
                           
                      <ul class="nav-main">
                                <li>
                                   <a href="<?php echo base_url();?>admin/dashboard" class="<?php if($page=='dashboard') echo 'active';?>"><i class="si si-speedometer"></i><span class="sidebar-mini-hide">Dashboard</span></a>
                                </li>
                              
                             
                                   
                        
                          <li class="<?php if($page=='insurance_companies' || $page=='insurance_policy_type' || $page=='insurance_policies') echo 'open';?>">
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-grid"></i><span class="sidebar-mini-hide">Insurance Companies</span></a>
                                    
                               <ul>
                                    
                                  <li>
                                    <a href="<?php echo base_url('admin/insurance_companies');?>" class="<?php if($page=='insurance_companies') echo 'active';?>"><i class="si si-grid"></i><span class="sidebar-mini-hide">Insurance Companies</span></a>
                                </li>
                                
                                       
                                
                                  <li>
                                    <a href="<?php echo base_url('admin/insurance_policy_type');?>" class="<?php if($page=='insurance_policy_type') echo 'active';?>"><i class="si si-grid"></i><span class="sidebar-mini-hide">Insurance Policy Types</span></a>
                                </li>
                                
                                
                                
                                <li>
                                    <a href="<?php echo base_url('admin/insurance_policies');?>" class="<?php if($page=='insurance_policies') echo 'active';?>"><i class="si si-grid"></i><span class="sidebar-mini-hide">Insurance Policy Name</span></a>
                                </li>
                                
                                
                                

 
 
 
                   
                               
                                
                                
                                
                               
                                
                                
                                
                                
                                
                                
                               
                                

</ul>
</li>




<li class="<?php if($page=='corporate_client' || $page=='add_corporate_client') echo 'open';?>">
          
          <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-grid"></i><span class="sidebar-mini-hide">Corporate Client</span></a>

 <ul>
 
                                
                                <li>
          <a href="<?php echo base_url('admin/corporate_client');?>" class="<?php if($this->uri->segment(2)=='corporate_client' or $this->uri->segment(2)=='add_corporate_client'  or $this->uri->segment(2)=='edit_corporate_client') echo 'active';?>"><i class="si si-grid"></i><span class="sidebar-mini-hide">Corporate Client</span></a>
                                </li>
                                
  </ul>                              
 </li>



<li class="<?php if($page=='cd_account' || $page=='cd_account_details' || $page=='cd_account_amount' || $page=='cd_amount_details' || $page=='add_account_statements' || $page=='account_statements') echo 'open';?>">
          
          <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-grid"></i><span class="sidebar-mini-hide">CD Accounts</span></a>

 <ul>
 
                             
                             
                             
                             
                              <li>
                                    <a href="<?php echo base_url('admin/cd_account');?>" class="<?php if($this->uri->segment(2)=='cd_account' or  $this->uri->segment(2)=='cd_account' or $this->uri->segment(2)=='cd_account') echo 'active';?>"><i class="si si-grid"></i><span class="sidebar-mini-hide">CD Account Creation</span></a>
                                
                                </li>
                             
                             
                             
                             <li>
                                    <a href="<?php echo base_url('admin/cd_account_details');?>" class="<?php if($this->uri->segment(2)=='cd_account_details' or  $this->uri->segment(2)=='cd_account_details' or $this->uri->segment(2)=='cd_account_details') echo 'active';?>"><i class="si si-grid"></i><span class="sidebar-mini-hide">Current CD Balance</span></a>
                                
                                </li>


<li>
                                    <a href="<?php echo base_url('admin/cd_account_amount');?>" class="<?php if($this->uri->segment(2)=='cd_account_amount' or  $this->uri->segment(2)=='cd_account_amount' or $this->uri->segment(2)=='cd_account_amount') echo 'active';?>"><i class="si si-grid"></i><span class="sidebar-mini-hide">Add CD Account Amount</span></a>
                                
                                </li>

<li>
                                    <a href="<?php echo base_url('admin/cd_amount_details');?>" class="<?php if($this->uri->segment(2)=='cd_amount_details' ) echo 'active';?>"><i class="si si-grid"></i><span class="sidebar-mini-hide">CD Transaction Details</span></a>
                                
                                </li>


                             
                             
                              <li>
                                    <a href="<?php echo base_url('admin/add_account_statements');?>" class="<?php if($this->uri->segment(2)=='add_account_statements' or  $this->uri->segment(2)=='add_account_statements' or $this->uri->segment(2)=='add_account_statements') echo 'active';?>"><i class="si si-grid"></i><span class="sidebar-mini-hide">Add Account Statements</span></a>
                                
                                </li>
                                
                                
                                
                                
                                <li>
                                    <a href="<?php echo base_url('admin/account_statements');?>" class="<?php if($this->uri->segment(2)=='account_statements' or  $this->uri->segment(2)=='account_statements' or $this->uri->segment(2)=='account_statements') echo 'active';?>"><i class="si si-grid"></i><span class="sidebar-mini-hide">Account Statements List</span></a>
                                
                                </li> 
                                
                                
                                
                                
                                
                                
                              
                                
                                
                                
                                
                                
                               
</ul>                                
</li>


<li class="<?php if($page=='sales_booking' || $page=='add_sales_booking') echo 'open';?>">
          
          <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-grid"></i><span class="sidebar-mini-hide">Corporate Sales Booking</span></a>

 <ul>
 
                                
                                <li>
         
                               
                               <li>
                                    <a href="<?php echo base_url('admin/sales_booking');?>" class="<?php if($this->uri->segment(2)=='sales_booking') echo 'active';?>"><i class="si si-grid"></i><span class="sidebar-mini-hide">Corporate  Sales Booking </span></a>
                                </li>

<li>
                                    <a href="<?php echo base_url('admin/add_sales_booking');?>" class="<?php if($this->uri->segment(2)=='add_sales_booking') echo 'active';?>"><i class="si si-grid"></i><span class="sidebar-mini-hide">Add  Sales Booking </span></a>
                                </li>
                                </li>
                                
  </ul>                              
 </li>










<li class="<?php if($page=='add_endorsement_charges' || $page=='endorsement_charges') echo 'open';?>">
          
          <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-grid"></i><span class="sidebar-mini-hide">Endorsement Charges</span></a>

 <ul>


  <li>
                                    <a href="<?php echo base_url('admin/add_endorsement_charges');?>" class="<?php if($this->uri->segment(2)=='add_endorsement_charges') echo 'active';?>"><i class="si si-grid"></i><span class="sidebar-mini-hide">Add Endorsement Charges</span></a>
                                
                                </li>
                                
                                
                                
                                 <li>
                                    <a href="<?php echo base_url('admin/endorsement_charges');?>" class="<?php if($this->uri->segment(2)=='endorsement_charges' ) echo 'active';?>"><i class="si si-grid"></i><span class="sidebar-mini-hide">Endorsement Charges List</span></a>
                                
                                </li>



</ul>
</li>

                      
                              
                           
                           
                           
                           
 <li class="<?php if($page=='employees_addition' || $page=='corporate_employees' || $page=='employees_deletion' || $page=='employees_deleted') echo 'open';?>">
          
          <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-grid"></i><span class="sidebar-mini-hide">Corporate Employees</span></a>

 <ul>
 
          <li>
         <a href="<?php echo base_url('admin/employees_addition');?>" class="<?php if($this->uri->segment(2)=='employees_addition' or  $this->uri->segment(2)=='employees_addition') echo 'active';?>"><i class="si si-grid"></i><span class="sidebar-mini-hide">Employees Addition</span></a>
         </li> 
                                
          <li>
         <a href="<?php echo base_url('admin/corporate_employees');?>" class="<?php if($this->uri->segment(2)=='corporate_employees' or  $this->uri->segment(2)=='corporate_employees' or $this->uri->segment(2)=='edit_corporate_employees') echo 'active';?>"><i class="si si-grid"></i><span class="sidebar-mini-hide">Employees List</span></a>
         </li>
                                
        
         <li>
      <a href="<?php echo base_url('admin/employees_deletion');?>" class="<?php if($this->uri->segment(2)=='employees_deletion' or  $this->uri->segment(2)=='employees_deletion') echo 'active';?>"><i class="si si-grid"></i><span class="sidebar-mini-hide">Employees Deletion</span></a>
        </li>  
                                
                                
                                
        <li>
        <a href="<?php echo base_url('admin/employees_deleted');?>" class="<?php if($this->uri->segment(2)=='employees_deleted' or  $this->uri->segment(2)=='employees_deleted') echo 'active';?>"><i class="si si-grid"></i><span class="sidebar-mini-hide">Deleted Employees</span></a>
        </li>    
                                
                               
</ul>                                
</li>                     
                           
                           
    
    
    
    
    
    
<li class="<?php if($page=='add_claim_dump' || $page=='claim_dump' || $page=='employees_deletion' || $page=='employees_deleted') echo 'open';?>">
          
          <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-grid"></i><span class="sidebar-mini-hide">Claim Dump</span></a>

 <ul>
 
                            
                             
                               <li>
                                    <a href="<?php echo base_url('admin/add_claim_dump');?>" class="<?php if($this->uri->segment(2)=='add_claim_dump') echo 'active';?>"><i class="si si-grid"></i><span class="sidebar-mini-hide">Claim Dump</span></a>
                                
                                </li>
                                
                                
                                
                                
                                <li>
                                    <a href="<?php echo base_url('admin/claim_dump');?>" class="<?php if($this->uri->segment(2)=='claim_dump') echo 'active';?>"><i class="si si-grid"></i><span class="sidebar-mini-hide">Claim Dump List</span></a>
                                
                                </li>
                                
                                
                                
                                
                                
                               
</ul>     

                           
</li>    
    
    
    
      <li class="<?php if($this->uri->segment(2)=='corporate_claim_intimations' || $this->uri->segment(2)=='corporate_emp_claim_intimations') echo 'open';?>">
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-grid"></i><span class="sidebar-mini-hide">Claim Intimation Reports</span></a>
                                   <ul>
                                    
                                     <li>
                                    <a href="<?php echo base_url('admin/corporate_claim_intimations');?>" class="<?php if($this->uri->segment(2)=='corporate_claim_intimations') echo 'active';?>"><i class="si si-grid"></i><span class="sidebar-mini-hide">Corporate Claim Intimations</span></a>
                                     </li>

                                     <li>
                                    <a href="<?php echo base_url('admin/corporate_emp_claim_intimations');?>" class="<?php if($this->uri->segment(2)=='corporate_emp_claim_intimations') echo 'active';?>"><i class="si si-grid"></i><span class="sidebar-mini-hide">Corporate Emp Claim Intimations</span></a>
                                     </li>

                                   </ul>
                                   </li>
    
    
    
    
    
    
    
     <li class="<?php if($this->uri->segment(2)=='add_mallapuram_employee' || $this->uri->segment(2)=='all_mallapuram_employee' || $this->uri->segment(2)=='points') echo 'open';?>">
                                    <a class="nav-submenu" data-toggle="nav-submenu" href=""><i class="si si-grid"></i><span class="sidebar-mini-hide">Mallapuram Employees</span></a>
                                   <ul>
                                    
                                     <li>
                                    <a href="<?php echo base_url('admin/add_mallapuram_employee');?>" class="<?php if($this->uri->segment(2)=='add_mallapuram_employee') echo 'active';?>"><i class="si si-grid"></i><span class="sidebar-mini-hide">Add Employee</span></a>
                                     </li>

                                    <li>
                                    <a href="<?php echo base_url('admin/all_mallapuram_employee');?>" class="<?php if($this->uri->segment(2)=='all_mallapuram_employee') echo 'active';?>"><i class="si si-grid"></i><span class="sidebar-mini-hide">All Employees</span></a>
                                     </li>


<li>
                        <a href="<?php echo base_url('admin/points');?>" class="<?php if($this->uri->segment(2)=='points' or  $this->uri->segment(2)=='points' or $this->uri->segment(2)=='points') echo 'active';?>"><i class="si si-grid"></i><span class="sidebar-mini-hide">Points Report</span></a>
                                
                       </li> 

                                   </ul>
                                   </li>
    
    
    
                           
                           
     




<li class="<?php if($page=='registered_members' || $page=='family_member_reports' || $page=='member_policies_report' || $page=='new_policy_requests' || $page=='existing_policy_requests' || $page=='shared_app_details') echo 'open';?>">
          
          <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-grid"></i><span class="sidebar-mini-hide">Individual Pip Reports</span></a>

 <ul>
 
                            
                             
                               <li>
                                    <a href="<?php echo base_url('admin/registered_members');?>" class="<?php if($this->uri->segment(2)=='registered_members') echo 'active';?>"><i class="si si-grid"></i><span class="sidebar-mini-hide">Registered Members</span></a>
                                
                                </li>
                                
                                
                                
                                 <li>
                                    <a href="<?php echo base_url('admin/family_member_reports');?>" class="<?php if($this->uri->segment(2)=='family_member_reports') echo 'active';?>"><i class="si si-grid"></i><span class="sidebar-mini-hide">Family Members reports</span></a>
                                
                                </li>  
                                
                                
                                
                                <li>
                                    <a href="<?php echo base_url('admin/member_policies_report');?>" class="<?php if($this->uri->segment(2)=='member_policies_report') echo 'active';?>"><i class="si si-grid"></i><span class="sidebar-mini-hide">Member Policies</span></a>
                                
                                </li>        
                                
                                
                                
                                
                               <li>
                                    <a href="<?php echo base_url('admin/new_policy_requests');?>" class="<?php if($this->uri->segment(2)=='new_policy_requests' or  $this->uri->segment(2)=='new_policy_requests' or $this->uri->segment(2)=='new_policy_requests') echo 'active';?>"><i class="si si-grid"></i><span class="sidebar-mini-hide">New Policy Requests</span></a>
                                
                                </li>   
                                
                                
                                
                                
                                
                                
                               <li>
                                    <a href="<?php echo base_url('admin/existing_policy_requests');?>" class="<?php if($this->uri->segment(2)=='existing_policy_requests' or  $this->uri->segment(2)=='existing_policy_requests' or $this->uri->segment(2)=='existing_policy_requests') echo 'active';?>"><i class="si si-grid"></i><span class="sidebar-mini-hide">Existing Policy Requests</span></a>
                                
                                </li>    
                                
                                
                                
                               <li>
                                    <a href="<?php echo base_url('admin/shared_app_details');?>" class="<?php if($this->uri->segment(2)=='shared_app_details' or  $this->uri->segment(2)=='shared_app_details' or $this->uri->segment(2)=='shared_app_details') echo 'active';?>"><i class="si si-grid"></i><span class="sidebar-mini-hide">Shared App Details</span></a>
                                
                                </li>   
                                                
                            
                                
                                
                                
                                
                               
</ul>                                
</li>


<li class="<?php if($page=='ticket_reports') echo 'open';?>">
          
    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-grid"></i><span class="sidebar-mini-hide">Ticket Reports</span></a>

 <ul>
                           
                              
                              
                              
                        <li>
                        <a href="<?php echo base_url('admin/ticket_reports');?>" class="<?php if($this->uri->segment(2)=='ticket_reports' or  $this->uri->segment(2)=='ticket_reports' or $this->uri->segment(2)=='ticket_reports') echo 'active';?>"><i class="si si-grid"></i><span class="sidebar-mini-hide">Ticket Reports</span></a>
                                
                       </li>      
                              
                              
                             
                                
                               
</ul>                                
</li>








<!--<li class="open">
          
    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-grid"></i><span class="sidebar-mini-hide">Mallapuram Employees</span></a>

 <ul>
                           
                              
                              
                              
                        <li>
                        <a href="<?php echo base_url('admin/points');?>" class="<?php if($this->uri->segment(2)=='points' or  $this->uri->segment(2)=='points' or $this->uri->segment(2)=='points') echo 'active';?>"><i class="si si-grid"></i><span class="sidebar-mini-hide">Points Report</span></a>
                                
                       </li>      
                              
                              
                             
                                
                               
</ul>                                
</li> -->









    
    
    
    
    
<li class="<?php if($page=='add_promotions' || $page=='promotions' || $page=='promotion_interested') echo 'open';?>">
          
          <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-grid"></i><span class="sidebar-mini-hide">Promotions</span></a>

 <ul>
                           
                              
                              
                              
                        <li>
                        <a href="<?php echo base_url('admin/add_promotions');?>" class="<?php if($this->uri->segment(2)=='add_promotions' or  $this->uri->segment(2)=='add_promotions' or $this->uri->segment(2)=='add_promotions') echo 'active';?>"><i class="si si-grid"></i><span class="sidebar-mini-hide">Add Promotions</span></a>
                                
                      </li>      
                              
                              
                             
                              
                                <li>
                                    <a href="<?php echo base_url('admin/promotions');?>" class="<?php if($this->uri->segment(2)=='promotions' or  $this->uri->segment(2)=='promotions' or $this->uri->segment(2)=='promotions') echo 'active';?>"><i class="si si-grid"></i><span class="sidebar-mini-hide">promotions List</span></a>
                                
                                </li>
                                
                       <li>
                                    <a href="<?php echo base_url('admin/promotion_interested');?>" class="<?php if($this->uri->segment(2)=='promotion_interested') echo 'active';?>"><i class="si si-grid"></i><span class="sidebar-mini-hide">promotion Interested List</span></a>
                                
                                </li>         
                                
                                
                                
                                
                                
                               
                               
</ul>                                
</li> 








<li class="<?php if($this->uri->segment(2)=='ticket_types' || $this->uri->segment(2)=='ticket_process') echo 'open';?>">
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-grid"></i><span class="sidebar-mini-hide">Ticket Types</span></a>
                                    <ul>
                                    
                                     <li>
                                    <a href="<?php echo base_url('ticket/ticket_types');?>" class="<?php if($this->uri->segment(2)=='ticket_types') echo 'active';?>"><i class="si si-grid"></i><span class="sidebar-mini-hide">Ticket Type</span></a>
                                </li>
                                
                                 <li>
                                    <a href="<?php echo base_url('ticket/ticket_process');?>" class="<?php if($this->uri->segment(2)=='ticket_process') echo 'active';?>"><i class="si si-grid"></i><span class="sidebar-mini-hide">Ticket Process</span></a>
                                </li>
                                
                                    </ul>
                                </li>


                                 <li class="<?php if($this->uri->segment(2)=='add_individual' || $this->uri->segment(2)=='add_individual_policy') echo 'open';?>">
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-grid"></i><span class="sidebar-mini-hide">Individual User Entry</span></a>
                                    <ul>
                                    
                                     <li>
                                    <a href="<?php echo base_url('admin/add_individual');?>" class="<?php if($this->uri->segment(2)=='add_individual') echo 'active';?>"><i class="si si-grid"></i><span class="sidebar-mini-hide">Add Individual</span></a>
                                    </li>

                                    <li>
                                    <a href="<?php echo base_url('admin/add_individual_policy');?>" class="<?php if($this->uri->segment(2)=='add_individual_policy') echo 'active';?>"><i class="si si-grid"></i><span class="sidebar-mini-hide">Add Policy to Individual</span></a>
                                    </li>
                                
                                
                                
                                    </ul>
                                </li>


                                 <li class="<?php if($this->uri->segment(2)=='feedback_details') echo 'open';?>">
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-grid"></i><span class="sidebar-mini-hide">Feedback Reports</span></a>
                                    <ul>
                                    
                                     <li>
                                    <a href="<?php echo base_url('admin/feedback_details');?>" class="<?php if($this->uri->segment(2)=='feedback_details') echo 'active';?>"><i class="si si-grid"></i><span class="sidebar-mini-hide">Feedback List</span></a>
                                    </li>

                                   
                                
                                
                                
                                    </ul>
                                </li>
                           
                           
                       
                           
</ul>
                        </div>
                        <!-- END Side Content -->
                    </div>
                    <!-- Sidebar Content -->
                </div>
                
                 </div>
                <!-- END Sidebar Scroll Container -->
            </nav>