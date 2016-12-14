<?php $base=base_url(); ?>
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
                        Extract
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
                        <!--/.col (left) -->
                        <!-- right column -->
                        <div class="col-md-6">
                            <!-- general form elements disabled -->
                            <div class="box box-warning">
                                <div class="box-header">
                                    <h3 class="box-title">Criteria</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <?php echo form_open('extractdata/extractlist'); ?>
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Country</label>
                                            <select name="country" class="form-control">
                                                <!--<option></option> -->
                                                <?php 
                                                foreach( $countryList as $countryopt) { ?>
                                                <option value='<?php echo $countryopt->country?>'><?php echo $countryopt->country?></option>
                                                <?php }
                                            ?>
                                            </select>
                                            
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Company</label>
                                            <input name= "company" type="text" class="form-control" placeholder="Enter ..."/>
                                        </div>
                            

                                        <!-- select -->
                                        <div class="form-group">
                                            <label>Activity Sector</label>
                                            <select name="activity_sector" class="form-control">
                                                <option></option>
                                                <?php 
                                                foreach( $activtysectorList as $ASopt) { ?>
                                                <option value='<?php echo $ASopt->activity_sector?>'><?php echo $ASopt->activity_sector?></option>
                                                <?php }
                                            ?>
                                            </select>
                                        </div>
                                    
                                    <div class="form-group">
                                            <label>Company Size</label>
                                            <select name="company_size" class="form-control">
                                                <option></option>
                                                <?php 
                                                foreach( $companysizeList as $CSopt) { ?>
                                                <option value='<?php echo $CSopt->company_size?>'><?php echo $CSopt->company_size?></option>
                                                <?php }
                                            ?>
                                            </select>
                                        </div>
                                        

                                        
                                        <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>

                                    </form>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!--/.col (right) -->
                    </div>   <!-- /.row -->
                </section><!-- /.content --><!-- /.content -->
            </aside><!-- /.right-side -->
            
        </div><!-- ./wrapper -->
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
    $("#extract").addClass('active');
</script>