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
                              
                               

<li class="<?php if($this->uri->segment(2)=='add_individual' || $this->uri->segment(2)=='add_individual_policy') echo 'open';?>">
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-grid"></i><span class="sidebar-mini-hide">Individual User Entry</span></a>
                                    <ul>
                                    
                                     <li>
                                    <a href="<?php echo base_url('ticket/add_individual');?>" class="<?php if($this->uri->segment(2)=='add_individual') echo 'active';?>"><i class="si si-grid"></i><span class="sidebar-mini-hide">Add Individual</span></a>
                                    </li>

                                    <li>
                                    <a href="<?php echo base_url('ticket/add_individual_policy');?>" class="<?php if($this->uri->segment(2)=='add_individual_policy') echo 'active';?>"><i class="si si-grid"></i><span class="sidebar-mini-hide">Add Policy to Individual</span></a>
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