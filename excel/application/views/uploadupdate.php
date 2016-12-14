
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
            <?php include('templates/side-menu.php'); ?>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Upload Updated Prospects
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Upload Updated Prospects</li>
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
                                    <h3 class="box-title"><?php if (isset($success)) 
                                            echo $success;
                                          elseif (isset($error)) 
                                            echo $error;  
                                          else 
                                            echo "Upload Prospects File"; ?></h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    
                                    <?php echo form_open_multipart('previewUpdate/preview');?> 
                                    <form  action="" method="" id="form">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <input type="file"  name="userfile" id="userfile" required>
                                            
                                        </div>
                                        <button type="submit" class="btn btn-primary" value="upload">Update</button>
                                        <!-- <div class="btn btn-primary" id="preview">Update</div> -->
                                        

                                    </form>
                                    <div id="demo"></div>
       
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
</body>
</html>
<script type="text/javascript">
    $("#update").addClass('active');
</script>

<script type="text/javascript">

    $("#preview").click(function(){

        var formData = new FormData($('form')[0]);
        alert(formData);
        // $.ajax({
        //     url: "<?php echo base_url(); ?>" + "previewUpdate/preview",
        //     type: 'POST',
        //     xhr: function() {  // Custom XMLHttpRequest
        //         var myXhr = $.ajaxSettings.xhr();
        //         if(myXhr.upload){ // Check if upload property exists
        //             myXhr.upload.addEventListener('progress',progressHandlingFunction, false); // For handling the progress of the upload
        //         }
        //         return myXhr;
        //     },
        //     //Ajax events
        //     beforeSend: beforeSendHandler,
        //     success: completeHandler,
        //     error: errorHandler,
        //     // Form data
        //     data: formData,
        //     //Options to tell jQuery not to process data or worry about content-type.
        //     cache: false,
        //     contentType: false,
        //     processData: false,
        //     success: function(response) {
        //         alert(response);
        //     }
        });

        
       


        // $.ajax({
        //     url: "<?php echo base_url(); ?>" + "previewUpdate/preview",
        //     formData: {file:files},
        //     dataType: 'JSON',
        //     method: 'GET',  
        //     success: function(response) {
        //         alert(response);
        //     },
        //     error: function(err) {
        //         alert('NONO');
        //     }
        // });
    });



</script>