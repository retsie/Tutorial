<!DOCTYPE html>
<?php
            $base=base_url();
          ?>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="#" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                MediaDEV
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="dropdown user user-menu">
                            <a href="<?php echo $base; ?>logout" >
                                <i class="glyphicon glyphicon-user"></i>
                                <span>Sign out </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
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
                        <li >
                            <a href="<?php echo $base; ?>dashboard">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="<?php echo $base; ?>extractdata">
                            <a href="index">
                                <i class="fa fa-th"></i> <span>Extract</span> 
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $base; ?>wishlist">
                                <i class="fa fa-edit"></i> <span>Wishlist</span> 
                            </a>
                        </li>
                        <?php if($accesslevel==0) { ?>
                        <li>
                            <a href="<?php echo $base; ?>uploadnew">
                                <i class="fa fa-folder"></i> <span>Upload Prospects</span> 
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $base; ?>uploadupdate">
                                <i class="fa fa-folder"></i> <span>Upload Updated Prospects</span> 
                            </a>
                        </li>
                        <?php    } ?>
                       <!-- 
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-folder"></i> <span>Examples</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="pages/examples/invoice.html"><i class="fa fa-angle-double-right"></i> Invoice</a></li>
                                <li><a href="pages/examples/login.html"><i class="fa fa-angle-double-right"></i> Login</a></li>
                                <li><a href="pages/examples/register.html"><i class="fa fa-angle-double-right"></i> Register</a></li>
                                <li><a href="pages/examples/lockscreen.html"><i class="fa fa-angle-double-right"></i> Lockscreen</a></li>
                                <li><a href="pages/examples/404.html"><i class="fa fa-angle-double-right"></i> 404 Error</a></li>
                                <li><a href="pages/examples/500.html"><i class="fa fa-angle-double-right"></i> 500 Error</a></li>                                
                                <li><a href="pages/examples/blank.html"><i class="fa fa-angle-double-right"></i> Blank Page</a></li>
                            </ul>
                        </li>
                        -->
                        
                         			   
                                    
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Extract Results
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Extract</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements disabled -->
                            <div class="box">
                                <div class="box-header">
                                                                  
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table id="example2" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Country</th>
                                                <th>Company Count</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $coy_count=0;
                                            if(!empty($companypercountry))    {
                                                for ($i = 0, $c = count($companypercountry); $i < $c; $i++)  
                                                { ?>
                                        <tr>
                                            <td><?php echo $companypercountry[$i]['country'] ?></td>
                                            <td><?php echo $companypercountry[$i]['company_count'] ?></td>
                                        </tr>
                                        <?php
                                                $extractcountry = $companypercountry[$i]['country']; 
                                                $coy_count = $coy_count + $companypercountry[$i]['company_count'];
                                                }
                                            }
                                        ?>
                                        </tbody>
                                    </table>
                                    </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!--/.col (right) -->
                    </div>
                    <div class="row">
                        <!--/.col (left) -->
                        <!-- right column -->
                        <div class="col-md-4">
                            <!-- general form elements disabled -->
                            <div class="box">
                                <div class="box-header">
                                <h3 class="box-title">Company and Number of Contacts</h3>                                    
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table id="example3" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <!--<th>Country</th>-->
                                                <th>Company Name</th>
                                                <th>Contact Count</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $cont_count=0;
                                            if(!empty($contactcompanypercountry))    {
                                                for ($i = 0, $c = count($contactcompanypercountry); $i < $c; $i++)   
                                                { ?>
                                        <tr>
                                            <!--<td><?php //echo $contactcompanypercountry[$i]['country'] ?></td>-->
                                            <td><?php echo $contactcompanypercountry[$i]['company_name'] ?></td>
                                            <td><?php echo $contactcompanypercountry[$i]['unique_contact_count'] ?></td>
                                         </tr>
                                        <?php
                                                $cont_count = $cont_count +$contactcompanypercountry[$i]['unique_contact_count'];
                                                }
                                            }
                                        ?>
                                        </tbody>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!--/.col (right) -->
                    
                        <!-- left column -->
                        <div class="col-md-4">
                            <!-- general form elements disabled -->
                            <div class="box">
                                <div class="box-header">
                                <h3 class="box-title">Activity Sector and Company </h3>                                    
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table id="example4" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                 <!--<th>Country</th>-->
                                                <th>Activity Sector</th>
                                                <th>Company Count</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            if(!empty($companyactivitypercountry))    {
                                                for ($i = 0, $c = count($companyactivitypercountry); $i < $c; $i++)  
                                                { ?>
                                        <tr>
                                            <!--<td><?//php echo $entry->country ?></td>-->
                                            <td><?php echo $companyactivitypercountry[$i]['activity_sector'] ?></td>
                                            <td><?php echo $companyactivitypercountry[$i]['unique_company_count'] ?></td></tr>
                                        <?php
                                                }
                                            }
                                        ?>
                                        </tbody>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!--/.col (right) -->
                        <!--/.col (left) -->
                        <!-- right column -->
                        <div class="col-md-4">
                            <!-- general form elements disabled -->
                            <div class="box">
                                <div class="box-header">
                                <h3 class="box-title">Company Size and Company</h3>                                    
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table id="example5" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                 <!--<th>Country</th>-->
                                                <th>Company Size</th>
                                                <th>Company Count</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            if(!empty($companysizepercountry))    {
                                                for ($i = 0, $c = count($companysizepercountry); $i < $c; $i++)
                                                { ?>
                                        <tr>
                                            <!--<td><?php //echo //$companyactivitypercountry[$i]['country'] ?></td>-->
                                            <td><?php echo $companysizepercountry[$i]['country_company_size'] ?></td>
                                            <td><?php echo $companysizepercountry[$i]['unique_company_count'] ?></td></tr>
                                        <?php
                                                }
                                            }
                                        //break;
                                        ?>
                                        </tbody>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!--/.col (right) -->
                    </div>
                    
                    <?php if($accesslevel!=2) { ?>
                    <div class="row">
                        <div class="row pad">
                        <div class="col-xs-12">
                        <?php echo form_open('extractdata/exceldownload'); ?>
                            <input type="hidden" name="country" value="<?php echo $country ?>">
                            <input type="hidden" name="company" value="<?php echo $company ?>"> 
                            <input type="hidden" name="activity_sector" value="<?php echo $activity_sector ?>"> 
                            <input type="hidden" name="company_size" value="<?php echo $company_size ?>"> 
                            <button type="submit" class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Download</button>
                        </form><br>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- left column -->
                        <!--/.col (left) -->
                        <!-- right column -->
                        <div class="col-md-12">
                            <!-- general form elements disabled -->
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">
                                        <?php if($cont_count==0) {
                                            echo "No Prospects matched your criteria. Please try a different one.";
                                        } else { ?>
                                        Extract Details for  <?php echo $cont_count ?> Contacts in <?php echo $coy_count ?> Companies in <?php echo $extractcountry ?> </h3>                <?php } ?>            
                                </div><!-- /.box-header -->
                                
                                <div class="box-body table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Source</th>
                                                <th>Country</th>
                                                <th>Company Name</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Activity Sector</th>
                                                <th>Phone Number</th>
                                                <th>Country Company Size</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            if(!empty($extractedlistresult))    {
                                                
                                                for ($i = 0, $c = count($extractedlistresult); $i < $c; $i++)
                                                { ?>
                                        <tr>
                                            <td><?php echo $extractedlistresult[$i]['SOURCE'] ?></td>
                                            <td><?php echo $extractedlistresult[$i]['COUNTRY'] ?></td>
                                            <td><?php echo $extractedlistresult[$i]['COMPANY_NAME'] ?></td>
                                            <td><?php echo $extractedlistresult[$i]['FIRST_NAME'] ?></td>
                                            <td><?php echo $extractedlistresult[$i]['LAST_NAME'] ?></td>
                                            <td><?php echo $extractedlistresult[$i]['ACTIVITY_SECTOR'] ?></td>
                                            <td><?php echo $extractedlistresult[$i]['PHONENUMBER'] ?></td>
                                            <td><?php echo $extractedlistresult[$i]['COUNTRY_COMPANY_SIZE'] ?></td>
                                        </tr>
                                        
                                        <?php
                                                }
                                            }
                                        ?>
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                               <th>Source</th>
                                                <th>Country</th>
                                                <th>Company Name</th>
                                                <th>First Name</th>
                                                <th>Last Name Name</th>
                                                <th>Activity Sector</th>
                                                <th>Phone Number</th>
                                                <th>Country Company Size</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!--/.col (right) -->
                    </div>   <!-- /.row -->
                    <?php    } ?>
                </section><!-- /.content --><!-- /.content -->
            </aside><!-- /.right-side -->
            
        </div><!-- ./wrapper -->
        

        <!-- jQuery 2.0.2 -->
        
        <!-- Bootstrap -->
        <?php
           // echo "<script src='".$base."assets/js/bootstrap.min.js' type='text/javascript'></script>";
            echo "<script src='http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js' type='text/javascript'></script>";
            echo "<script src='".$base."assets/js/bootstrap.min.js' type='text/javascript'></script>";
             echo "<script src='".$base."application/views/assets/js/AdminLTE/app.js' type='text/javascript'></script>";
            echo "<script src='".$base."application/views/assets/js/plugins/datatables/jquery.dataTables.js' type='text/javascript'></script>";
            echo "<script src='".$base."application/views/assets/js/plugins/datatables/dataTables.bootstrap.js' type='text/javascript'></script>";
            echo "<script src='".$base."assets/js/global.js' type='text/javascript'></script>";   
        ?>
         <!-- DATA TABES SCRIPT -->
        
       <script type="text/javascript">
            $(function() {
                $("#example1").dataTable();
                $('#example2').dataTable({
                    "bPaginate": true,
                    "bLengthChange": false,
                    "bFilter": false,
                    "bSort": true,
                    "bInfo": true,
                    "bAutoWidth": false
                });
                $('#example3').dataTable({
                    "bPaginate": true,
                    "bLengthChange": false,
                    "bFilter": false,
                    "bSort": true,
                    "bInfo": true,
                    "bAutoWidth": false
                });
                $('#example4').dataTable({
                    "bPaginate": true,
                    "bLengthChange": false,
                    "bFilter": false,
                    "bSort": true,
                    "bInfo": true,
                    "bAutoWidth": false
                });
                $('#example5').dataTable({
                    "bPaginate": true,
                    "bLengthChange": false,
                    "bFilter": false,
                    "bSort": false,
                    "bInfo": true,
                    "bAutoWidth": false
                });
            });
        </script>

    </body>
</html>
<script type="text/javascript">
    $("#extract").addClass('active');
</script>