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
                                   <a href="<?php echo base_url('hr/dashboard');?>"><i class="si si-speedometer"></i><span class="sidebar-mini-hide">Dashboard</span></a>
                                </li>
                              
                             <li>
                                   
                          <li class="<?php if($this->uri->segment(2)=='addition_request') echo 'open';?>">
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-grid"></i><span class="sidebar-mini-hide">ADDITIONS</span></a>
                                    <ul>
                                    
                                    

                                  <li>
                                    <a href="<?php echo base_url('hr/addition_request');?>" class="<?php if($this->uri->segment(1)=='add_addition') echo 'active';?>"><i class="si si-grid"></i><span class="sidebar-mini-hide">Addition Request</span></a>
                                </li>
                                
                                    </ul>
                                </li>

                                <li class="<?php if($this->uri->segment(2)=='deletion_request') echo 'open';?>">
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-grid"></i><span class="sidebar-mini-hide">DELETIONS</span></a>
                                    <ul>
                                    
                                    

                                  <li>
                                    <a href="<?php echo base_url('hr/deletion_request');?>" class="<?php if($this->uri->segment(1)=='deletion_request') echo 'active';?>"><i class="si si-grid"></i><span class="sidebar-mini-hide">Deletion Request</span></a>
                                </li>
                                
                                    </ul>
                                </li>

                                <li class="<?php if($this->uri->segment(2)=='correction_request' || $this->uri->segment(2)=='corrections_view') echo 'open';?>">
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-grid"></i><span class="sidebar-mini-hide">CORRECTIONS</span></a>
                                    <ul>
                                    
                                    

                                  <li>
                                    <a href="<?php echo base_url('hr/correction_request');?>" class="<?php if($this->uri->segment(2)=='correction_request') echo 'active';?>"><i class="si si-grid"></i><span class="sidebar-mini-hide">Correction Request</span></a>
                                </li>

                                 <li>
                                    <a href="<?php echo base_url('hr/corrections_view');?>" class="<?php if($this->uri->segment(2)=='corrections_view') echo 'active';?>"><i class="si si-grid"></i><span class="sidebar-mini-hide">Corrections View</span></a>
                                </li>
                                
                                    </ul>
                                </li>


                                <li class="<?php if($this->uri->segment(2)=='claims_intimation' || $this->uri->segment(2)=='corrections_view') echo 'open';?>">
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-grid"></i><span class="sidebar-mini-hide">CLAIMS</span></a>
                                    <ul>
                                    
                                    

                                  <li>
                                    <a href="<?php echo base_url('hr/claims_intimation');?>" class="<?php if($this->uri->segment(2)=='claims_intimation') echo 'active';?>"><i class="si si-grid"></i><span class="sidebar-mini-hide">Claims Intimation</span></a>
                                </li>

                                

                                
                                
                                    </ul>
                                </li>
                              
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