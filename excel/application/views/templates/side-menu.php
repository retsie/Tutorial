  <aside class="left-side sidebar-offcanvas">                
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <!-- <img src="img/avatar3.png" class="img-circle" alt="User Image" /> -->
                        </div>
                        <div class="pull-left info">
                            <p>Hello, <?php echo $username; ?></p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li id="dashboard">
                            <a href="<?php echo $base; ?>dashboard">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li id="extract">
                            <a href="<?php echo $base; ?>extractdata">
                                <i class="fa fa-th"></i> <span>Extract</span> 
                            </a>
                        </li>
                        <li id="wishlist">
                            <a href="<?php echo $base; ?>wishlist">
                                <i class="fa fa-edit"></i> <span>Wishlist</span> 
                            </a>
                        </li>
                        <?php if($accesslevel==0) { ?>
                        <li id="addnew">
                            <a href="<?php echo $base; ?>uploadnew">
                                <i class="fa fa-folder"></i> <span>Upload Prospects</span> 
                            </a>
                        </li>
                        <li id="update">
                            <a href="<?php echo $base; ?>uploadupdate">
                                <i class="fa fa-folder"></i> <span>Upload Updated Prospects</span> 
                            </a>
                        </li>
                        <?php    } ?>
                     
                      
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>