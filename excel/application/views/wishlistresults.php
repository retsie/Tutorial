
        <?php
            $base=base_url();
        ?>
    </head>
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
            <?php include('templates/side-menu.php'); ?>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        WishList Results
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
                        <div class="row pad">
                        <div class="col-xs-12">
                            <h4>
                        <?php 
                        //echo "herein lies the summary";  
                            echo $error; ?>
                            </h4>
                        </div>
                        </div>
                    </div>
                    <?php if($accesslevel!=2) { ?>
                    <div class="row">
                        <div class="row pad">
                        <div class="col-xs-12">
                        <?php echo form_open('wishlist/exceldownload'); 
                            $jwishlistcountry = htmlspecialchars(json_encode($wishlistcountry));
                            $jwishlistcompany = htmlspecialchars(json_encode($wishlistcompany));
                            ?>
                            <input type="hidden" name="wishlistcountry" value="<?php echo htmlspecialchars(json_encode($wishlistcountry)); ?>">
                            <input type="hidden" name="wishlistcompany" value="<?php echo htmlspecialchars(json_encode($wishlistcompany)); ?>"> 
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
                                                                    
                                </div><!-- /.box-header -->
                                
                                <div class="box-body table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
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
                                        </thead>
                                        <tbody>
                                            <?php
                                            if(!empty($wishlistextract)) {
                                                //$i=0;
                                                foreach($wishlistextract as $prospect)  
                                                { ?>
                                        <tr>
                                            <td><?php echo $prospect['SOURCE'] ?></td>
                                            <td><?php echo $prospect['COUNTRY'] ?></td>
                                            <td><?php echo $prospect['COMPANY_NAME'] ?></td>
                                            <td><?php echo $prospect['FIRST_NAME'] ?></td>
                                            <td><?php echo $prospect['LAST_NAME'] ?></td>
                                            <td><?php echo $prospect['ACTIVITY_SECTOR'] ?></td>
                                            <td><?php echo $prospect['PHONENUMBER'] ?></td>
                                            <td><?php echo $prospect['COUNTRY_COMPANY_SIZE'] ?></td>
                                        </tr>
                                        
                                        <?php
                                                //$i++;
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
                    </div> <!-- /.row -->
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
            });
        </script>

    </body>
</html>
<script type="text/javascript">
    $("#wishlist").addClass('active');
</script>