<header id="header-navbar" class="content-mini content-mini-full">
    
    <ul class="nav-header pull-right">
                    <li>
                        <div class="btn-group">
                            <button class="btn btn-default btn-image dropdown-toggle" data-toggle="dropdown" type="button">
                                <img src="<?php echo base_url();?>assets/img/avatars/avatar10.jpg" alt="Avatar">
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right">
                               
                                
                                <li>
                                    <a tabindex="-1" href="<?php echo base_url('hr/changepassword');?>">
                                        <i class="si si-user pull-right"></i>
                                        Change Password
                                    </a>
                                </li>
                                
                                <li class="divider"></li>
                               
                                <li>
                                    <a tabindex="-1" href="<?php echo base_url('hr/logout');?>">
                                        <i class="si si-logout pull-right"></i>Log out
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                       
                    </li>
                </ul>


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
                  
                   
                    
                </ul>








<?php
                 $cl= $this->db->get_where('corporate_client',array('id'=>$this->session->userdata('client_id')))->row();

                ?>

                <ul class="nav-header ">

<div class="row" >
<div class="col-md-2" > <img src="<?php echo base_url('uploads/corporate_client/logo/'.$cl->logo);?>" width=" 180" height="80" ></div> 

<div class="col-md-8 " >
<br />
<h4 style="color: #F30;font-size:28px;"> <?php echo $cl->name;?>
</h4></div>
     </div>

</ul>






















                <!-- END Header Navigation Left -->
            </header>
            <!-- END Header -->
   