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
                        <li class="active" >
                            <a href="<?php echo $base; ?>dashboard">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $base; ?>extractdata">
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
                        <?php    } ?>        
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Dashboard Summary
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard</li>
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
                                <h3 class="box-title">Breakdown by Company and Number of Contacts</h3>                                    
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
                                <h3 class="box-title">Breakdown by Activity Sector and Company </h3>                                    
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
                                <h3 class="box-title">Breakdown by Company Size and Company</h3>                                    
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
                    "bPaginate": false,
                    "bLengthChange": false,
                    "bFilter": false,
                    "bSort": false,
                    "bInfo": true,
                    "bAutoWidth": false
                });
            });
        </script>
