            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <?php echo '<p class="welcome"><b> <text style="font-size:150%;">&#9786</text> <i>Welcome </i>' . $this->session->userdata('name') . "!</b></p>"; ?>
                        </li>
                        <li>
                            <a href="<?=base_url()?>"><i class="fa fa-home fa-fw"></i> Dashboard</a>
                        </li>
                        <?php if($this->session->userdata('role') == 'admin'): ?>
                            <li>
                                <a href="#"><i class="fa fa-user fa-fw"></i> Administrator<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li> <a href="<?=base_url('admin/user_list')?>">&raquo; User List</a> </li>
                                    <li> <a href="<?=base_url('admin/activity_log')?>">&raquo; Activity Log</a> </li>
                                </ul>
                            </li>
                            <?php  $userId=0;?>
                           
                        <?php endif; ?>
                        <li>
                            <a href="#"><i class="fa  fa-ticket fa-fw"></i> Events<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li> <a href="<?=base_url('Event/savedata?user_id='.$this->session->userdata('user_id').'')?>">&raquo; Add_Event</a> </li>
                                <li> <a href="<?=base_url('Event/displaydata?user_id='.$this->session->userdata('user_id').'')?>">&raquo; My_ListEvent</a> </li>
                            </ul>
                        </li>
                  
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>