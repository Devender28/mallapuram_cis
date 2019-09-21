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
                                   <a href="<?php echo base_url();?>employee/dashboard"  class="<?php if($this->uri->segment(1)=='dashboard') echo 'active';?>"><i class="si si-speedometer"></i><span class="sidebar-mini-hide">Dashboard</span></a>
                                </li>
                              
                                      
                                     




<li>
                                    <a href="<?php echo base_url('employee/profile');?>" class="<?php if($this->uri->segment(1)=='profile') echo 'active';?>"><i class="si si-grid"></i><span class="sidebar-mini-hide">Profile</span></a>
                                   </li>



                      
                                    <li>
                                    <a href="<?php echo base_url('employee/family_members');?>" class="<?php if($this->uri->segment(1)=='family_members') echo 'active';?>"><i class="si si-grid"></i><span class="sidebar-mini-hide">Dependents list</span></a>
                                   </li>

                                   

                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                             <li>
                                    <a href="<?php echo base_url('employee/policies_view');?>" class="<?php if($this->uri->segment(1)=='employee/policies_view') echo 'active';?>"><i class="si si-grid"></i><span class="sidebar-mini-hide">Policy List</span></a>
                                   </li>
                             
                             
                               <li>
                                    <a href="<?php echo base_url('employee/feedback');?>" class="<?php if($this->uri->segment(1)=='feedback') echo 'active';?>"><i class="si si-grid"></i><span class="sidebar-mini-hide">Give Feedback</span></a>
                                   </li>
                             
                         <li>
                                    <a href="<?php echo base_url('employee/feedback_details');?>" class="<?php if($this->uri->segment(1)=='feedback_details') echo 'active';?>"><i class="si si-grid"></i><span class="sidebar-mini-hide">Feedback List</span></a>
                                   </li>


                              <li>
                                    <a href="<?php echo base_url('employee/idcards');?>" class="<?php if($this->uri->segment(1)=='idcards') echo 'active';?>"><i class="si si-grid"></i><span class="sidebar-mini-hide">ID Cards</span></a>
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