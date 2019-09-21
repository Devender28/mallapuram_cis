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
                                   <a href="<?php echo base_url();?>dashboard"  class="<?php if($this->uri->segment(1)=='dashboard') echo 'active';?>"><i class="si si-speedometer"></i><span class="sidebar-mini-hide">Dashboard</span></a>
                                </li>
                              
                                      
                                     




<li>
                                    <a href="<?php echo base_url('profile');?>" class="<?php if($this->uri->segment(1)=='profile') echo 'active';?>"><i class="si si-grid"></i><span class="sidebar-mini-hide">Profile</span></a>
                                   </li>










<li>
                                    <a href="<?php echo base_url('add_family_member');?>" class="<?php if($this->uri->segment(1)=='add_family_member') echo 'active';?>"><i class="si si-grid"></i><span class="sidebar-mini-hide">Add Family Member</span></a>
                                   </li>
                                
                             
                             <li>
                                    <a href="<?php echo base_url('family_members');?>" class="<?php if($this->uri->segment(1)=='family_members') echo 'active';?>"><i class="si si-grid"></i><span class="sidebar-mini-hide">Family Members Details</span></a>
                                   </li>

                             <li>
                                    <a href="<?php echo base_url('add_policy');?>" class="<?php if($this->uri->segment(1)=='add_policy') echo 'active';?>"><i class="si si-grid"></i><span class="sidebar-mini-hide">Add Policy</span></a>
                                   </li>
                             
                             
                             
                             
                         

 <li>
                                    <a href="<?php echo base_url('new_policy_request');?>" class="<?php if($this->uri->segment(1)=='new_policy_request') echo 'active';?>"><i class="si si-grid"></i><span class="sidebar-mini-hide">New Policy Request</span></a>
                                   </li>
                                   
                                   
                                   
                                   
                                   
                                   
                                 <li>
                                    <a href="<?php echo base_url('existing_policy_request');?>" class="<?php if($this->uri->segment(1)=='existing_policy_request') echo 'active';?>"><i class="si si-grid"></i><span class="sidebar-mini-hide">Existing  Policy Request</span></a>
                                   </li>  
                                   
                                   
                                   
                                   
                                   
                                   
                                   
                            
                            
                            
                            
                            
                         <li>
                                    <a href="<?php echo base_url('requests');?>" class="<?php if($this->uri->segment(1)=='requests') echo 'active';?>"><i class="si si-grid"></i><span class="sidebar-mini-hide">All Requests</span></a>
                                   </li>   
                             
                             
                             
                             
                                <li>
                                    <a href="<?php echo base_url('share_app');?>" class="<?php if($this->uri->segment(1)=='share_app') echo 'active';?>"><i class="si si-grid"></i><span class="sidebar-mini-hide">Share App</span></a>
                                   </li>       
                             
                            
                      
                                <li>
                                    <a href="<?php echo base_url('share_app_details');?>" class="<?php if($this->uri->segment(1)=='share_app_details') echo 'active';?>"><i class="si si-grid"></i><span class="sidebar-mini-hide">Shared App Details</span></a>
                                   </li>
                      
                      
                      
                      
                 <li>
                                    <a href="<?php echo base_url('changepassword');?>" class="<?php if($this->uri->segment(1)=='changepassword') echo 'active';?>"><i class="si si-grid"></i><span class="sidebar-mini-hide">Change Password</span></a>
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