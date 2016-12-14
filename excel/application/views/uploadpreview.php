<?php $base=base_url(); $x = 0;

            //======== COLUMN TO SHOW =========== 
            $date_of_last_update = false;
            $source = false;
            $comments = false;
            $company_name = false;
            $salutation = false;
            $first_name = false;
            $last_name = false;
            $exact_job_title = false;
            $job_category = false;
            $job_level = false;
            $address1 = false;
            $address2 = false;
            $postcode = false;
            $city = false;
            $region = false;
            $country = false;
            $phonenumber = false;
            $directline = false;
            $email = false;
            $website = false;
            $activity_sector = false;
            $subactivity_sector = false;
            $annual_turnover = false;
            $global_company_size = false;
            $country_company_size = false;
            $it_dm_cycle_locally_made = false;
            $location_of_it_dm_cycle = false;
            $hqlocation = false;
            $erp = false;
            $crm = false;
            $number_of_users = false;
            $number_of_vms = false;
            $virtualization_solution = false;
            $backup_recovery_solution = false;
            $storage_solution = false;
            $collaboration_tools = false;
            $business_intelligence = false;
            $cloud_solution = false;
            //======== COLUMN TO SHOW ===========


            //=========== HIGHLIGHTED AFFECTED DATA PER COLUMN =================
            $class_1 = array();
            $class_2 = array();
            $class_3 = array();
            $class_4 = array();
            $class_5 = array();
            $class_6 = array();
            $class_7 = array();
            $class_8 = array();
            $class_9 = array();
            $class_10 = array();
            $class_11 = array();
            $class_12 = array();
            $class_13 = array();
            $class_14 = array();
            $class_15 = array();
            $class_16 = array();
            $class_17 = array();
            $class_18 = array();
            $class_19 = array();
            $class_20 = array();
            $class_21 = array();
            $class_22 = array();
            $class_23 = array();
            $class_24 = array();
            $class_25 = array();
            $class_26 = array();
            $class_27 = array();
            $class_28 = array();
            $class_29 = array();
            $class_30 = array();
            $class_31 = array();
            $class_32 = array();
            $class_33 = array();
            $class_34 = array();
            $class_35 = array();
            $class_36 = array();
            $class_37 = array();
            $class_38 = array();
            $show_row = array();
            //=========== HIGHLIGHTED AFFECTED DATA PER COLUMN =================

            $message = 'No rows will be afffected, You can click the continue button to save the data from excel.';
            $confirmMessage = 'If you click continue button all the selected item will update in database';


            foreach($log as $isDif) {

                $show_row[$x] = 'hide'; //BY DEFAULT ALL ROWS ARE HIDDEN

                if(trim($isDif['DATE_OF_LAST_UPDATE']) != trim($fromdatabase[$x][0]['DATE_OF_LAST_UPDATE'])) {
                    $date_of_last_update = true;
                    $class_1[$x] = 'hightlight';
                    $show_row[$x] = 'show';
                    $message = $confirmMessage;
                } else {
                    $class_1[$x] = 'nothing';
                }

                if(trim($isDif['SOURCE']) != trim($fromdatabase[$x][0]['SOURCE']) ) {
                    $source = true;
                    $class_2[$x] = 'hightlight';
                    $show_row[$x] = 'show';
                    $message = $confirmMessage;
                } else {
                    $class_2[$x] = 'nothing';
                }

                if(trim($isDif['COMMENTS']) != trim($fromdatabase[$x][0]['COMMENTS']) ) {
                    $comments = true;
                    $class_3[$x] = 'hightlight';
                    $show_row[$x] = 'show';
                    $message = $confirmMessage;
                } else {
                    $class_3[$x] = 'nothing';
                }

                if(trim($isDif['COMPANY_NAME']) != trim($fromdatabase[$x][0]['COMPANY_NAME']) ) {
                    $company_name = true;
                    $class_4[$x] = 'hightlight';
                    $show_row[$x] = 'show';
                    $message = $confirmMessage;
                } else {
                    $class_4[$x] = 'nothing';
                }

                if(trim($isDif['Salutation']) != trim($fromdatabase[$x][0]['Salutation']) ) {
                    $salutation = true;
                    $class_5[$x] = 'hightlight';
                    $show_row[$x] = 'show';
                    $message = $confirmMessage;
                } else {
                    $class_5[$x] = 'nothing';
                }

                if(trim($isDif['FIRST_NAME']) != trim($fromdatabase[$x][0]['FIRST_NAME']) ) {
                    $first_name = true;
                    $class_6[$x] = 'hightlight';
                    $show_row[$x] = 'show';
                    $message = $confirmMessage;
                } else {
                    $class_6[$x] = 'nothing';
                }

                if(trim($isDif['LAST_NAME']) != trim($fromdatabase[$x][0]['LAST_NAME']) ) {
                    $last_name = true;
                    $class_7[] = 'hightlight';
                    $show_row[$x] = 'show';
                    $message = $confirmMessage;
                } else {
                    $class_7[] = 'nothing';
                }

                if(trim($isDif['EXACT_JOB_TITLE']) != trim($fromdatabase[$x][0]['EXACT_JOB_TITLE']) ) {
                    $exact_job_title = true;
                    $class_8[$x] = 'hightlight';
                    $show_row[$x] = 'show';
                    $message = $confirmMessage;
                } else {
                    $class_8[$x] = 'nothing';
                }

                if(trim($isDif['JOB_CATEGORY']) != trim($fromdatabase[$x][0]['JOB_CATEGORY']) ) {
                    $job_category = true;
                    $class_9[$x] = 'hightlight';
                    $show_row[$x] = 'show';
                    $message = $confirmMessage;
                } else {
                    $class_9[$x] = 'nothing';
                }

                if(trim($isDif['JOB_LEVEL']) != trim($fromdatabase[$x][0]['JOB_LEVEL']) ) {
                    $job_level = true;
                    $class_10[$x] = 'hightlight';
                    $show_row[$x] = 'show';
                    $message = $confirmMessage;
                } else {
                    $class_10[$x] = 'nothing';
                }

                if(trim($isDif['ADDRESS1']) != trim($fromdatabase[$x][0]['ADDRESS1']) ) {
                    $address1 = true;
                    $class_11[$x] = 'hightlight';
                    $show_row[$x] = 'show';
                    $message = $confirmMessage;
                } else {
                    $class_11[$x] = 'nothing';
                }

                if(trim($isDif['ADDRESS2']) != trim($fromdatabase[$x][0]['ADDRESS2']) ) {
                    $address2 = true;
                    $class_12[$x] = 'hightlight';
                    $show_row[$x] = 'show';
                    $message = $confirmMessage;
                } else {
                    $class_12[$x] = 'nothing';
                }

                if(trim($isDif['POSTCODE']) != trim($fromdatabase[$x][0]['POSTCODE']) ) {
                    $postcode = true;
                    $class_13[$x] = 'hightlight';
                    $show_row[$x] = 'show';
                    $message = $confirmMessage;
                } else {
                    $class_13[$x] = 'nothing';
                }

                if(trim($isDif['CITY']) != trim($fromdatabase[$x][0]['CITY']) ) {
                    $city = true;
                    $class_14[$x] = 'hightlight';
                    $show_row[$x] = 'show';
                    $message = $confirmMessage;
                } else {
                    $class_14[$x] = 'nothing';
                }

                if(trim($isDif['REGION']) != trim($fromdatabase[$x][0]['REGION']) ) {
                    $region = true;
                    $class_15[$x] = 'hightlight';
                    $show_row[$x] = 'show';
                    $message = $confirmMessage;
                } else {
                    $class_15[$x] = 'nothing';
                }


                if(trim($isDif['COUNTRY']) != trim($fromdatabase[$x][0]['COUNTRY']) ) {
                    $country = true;
                    $class_16[$x] = 'hightlight';
                    $show_row[$x] = 'show';
                    $message = $confirmMessage;
                } else {
                    $class_16[$x] = 'nothing';
                }

                if(trim($isDif['PHONENUMBER']) != trim($fromdatabase[$x][0]['PHONENUMBER']) ) {
                    $phonenumber = true;
                    $class_17[$x] = 'hightlight';
                    $show_row[$x] = 'show';
                    $message = $confirmMessage;
                } else {
                    $class_17[$x] = 'nothing';
                }

                if(trim($isDif['DIRECTLINE']) != trim($fromdatabase[$x][0]['DIRECTLINE']) ) {
                    $directline = true;
                    $class_18[$x] = 'hightlight';
                    $show_row[$x] = 'show';
                    $message = $confirmMessage;
                } else {
                    $class_18[$x] = 'nothing';
                }

                if(trim($isDif['EMAIL']) != trim($fromdatabase[$x][0]['EMAIL']) ) {
                    $email = true;
                    $class_19[$x] = 'hightlight';
                    $show_row[$x] = 'show';
                    $message = $confirmMessage;
                } else {
                    $class_19[$x] = 'nothing';
                }

                if(trim($isDif['WEBSITE']) != trim($fromdatabase[$x][0]['WEBSITE']) ) {
                    $website = true;
                    $class_20[$x] = 'hightlight';
                    $show_row[$x] = 'show';
                    $message = $confirmMessage;
                } else {
                    $class_20[$x] = 'nothing';
                }

                if(trim($isDif['ACTIVITY_SECTOR']) != trim($fromdatabase[$x][0]['ACTIVITY_SECTOR']) ) {
                    $activity_sector = true;
                    $class_21[$x] = 'hightlight';
                    $show_row[$x] = 'show';
                    $message = $confirmMessage;
                } else {
                    $class_21[$x] = 'nothing';
                }

                if(trim($isDif['SUBACTIVITY_SECTOR']) != trim($fromdatabase[$x][0]['SUBACTIVITY_SECTOR']) ) {
                    $subactivity_sector = true;
                    $class_22[$x] = 'hightlight';
                    $show_row[$x] = 'show';
                    $message = $confirmMessage;
                } else {
                    $class_22[$x] = 'nothing';
                }

                if(trim($isDif['ANNUAL_TURNOVER']) != trim($fromdatabase[$x][0]['ANNUAL_TURNOVER']) ) {
                    $annual_turnover = true;
                    $class_23[$x] = 'hightlight';
                    $show_row[$x] = 'show';
                    $message = $confirmMessage;
                } else {
                    $class_23[$x] = 'nothing';
                }

                if(trim($isDif['GLOBAL_COMPANY_SIZE']) != trim($fromdatabase[$x][0]['GLOBAL_COMPANY_SIZE']) ) {
                    $global_company_size = true;
                    $class_24[$x] = 'hightlight';
                    $show_row[$x] = 'show';
                    $message = $confirmMessage;
                } else {
                    $class_24[$x] = 'nothing';
                }

                if(trim($isDif['COUNTRY_COMPANY_SIZE']) != trim($fromdatabase[$x][0]['COUNTRY_COMPANY_SIZE']) ) {
                    $country_company_size = true;
                    $class_25[$x] = 'hightlight';
                    $show_row[$x] = 'show';
                    $message = $confirmMessage;
                } else {
                    $class_25[$x] = 'nothing';
                }

                if(trim($isDif['IT_DM_CYCLE_LOCALLY_MADE']) != trim($fromdatabase[$x][0]['IT_DM_CYCLE_LOCALLY_MADE']) ) {
                    $it_dm_cycle_locally_made = true;
                    $class_26[$x] = 'hightlight';
                    $show_row[$x] = 'show';
                    $message = $confirmMessage;
                } else {
                    $class_26[$x] = 'nothing';
                }

                if(trim($isDif['LOCATION_OF_IT_DM_CYCLE']) != trim($fromdatabase[$x][0]['LOCATION_OF_IT_DM_CYCLE']) ) {
                    $location_of_it_dm_cycle = true;
                    $class_27[$x] = 'hightlight';
                    $show_row[$x] = 'show';
                    $message = $confirmMessage;
                } else {
                    $class_27[$x] = 'nothing';
                }

                if(trim($isDif['HQLOCATION']) != trim($fromdatabase[$x][0]['HQLOCATION']) ) {
                    $hqlocation = true;
                    $class_28[$x] = 'hightlight';
                    $show_row[$x] = 'show';
                    $message = $confirmMessage;
                } else {
                    $class_28[$x] = 'nothing';
                }

                if(trim($isDif['ERP']) != trim($fromdatabase[$x][0]['ERP']) ) {
                    $erp = true;
                    $class_29[$x] = 'hightlight';
                    $show_row[$x] = 'show';
                    $message = $confirmMessage;
                } else {
                    $class_29[$x] = 'nothing';
                }

                if(trim($isDif['CRM']) != trim($fromdatabase[$x][0]['CRM']) ) {
                    $crm = true;
                    $class_30[] = 'hightlight';
                    $show_row[$x] = 'show';
                    $message = $confirmMessage;
                } else {
                    $class_30[$x] = 'nothing';
                }

                if(trim($isDif['NUMBER_OF_USERS']) != trim($fromdatabase[$x][0]['NUMBER_OF_USERS']) ) {
                    $number_of_users = true;
                    $class_31[$x] = 'hightlight';
                    $show_row[$x] = 'show';
                    $message = $confirmMessage;
                } else {
                    $class_31[$x] = 'nothing';
                }

                if(trim($isDif['NUMBER_OF_VMS']) != trim($fromdatabase[$x][0]['NUMBER_OF_VMS']) ) {
                    $number_of_vms = true;
                    $class_32[$x] = 'hightlight';
                    $show_row[$x] = 'show';
                    $message = $confirmMessage;
                } else {
                    $class_32[$x] = 'nothing';
                }

                if(trim($isDif['Virtualization_Solution']) != trim($fromdatabase[$x][0]['Virtualization_Solution']) ) {
                    $virtualization_solution = true;
                    $class_33[$x] = 'hightlight';
                    $show_row[$x] = 'show';
                    $message = $confirmMessage;
                } else {
                    $class_33[$x] = 'nothing';
                }

                if(trim($isDif['Backup_Recovery_Solution']) != trim($fromdatabase[$x][0]['Backup_Recovery_Solution']) ) {
                    $backup_recovery_solution = true;
                    $class_34[$x] = 'hightlight';
                    $show_row[$x] = 'show';
                    $message = $confirmMessage;
                } else {
                    $class_34[$x] = 'nothing';
                }

                if(trim($isDif['Storage_Solution']) != trim($fromdatabase[$x][0]['Storage_Solution']) ) {
                    $storage_solution = true;
                    $class_35[$x] = 'hightlight';
                    $show_row[$x] = 'show';
                    $message = $confirmMessage;
                } else {
                    $class_35[$x] = 'nothing';
                }

                if(trim($isDif['Collaboration_Tools']) != trim($fromdatabase[$x][0]['Collaboration_Tools']) ) {
                    $collaboration_tools = true;
                    $class_36[$x] = 'hightlight';
                    $show_row[$x] = 'show';
                    $message = $confirmMessage;
                } else {
                    $class_36[$x] = 'nothing';
                }

                if(trim($isDif['Business_Intelligence']) != trim($fromdatabase[$x][0]['Business_Intelligence']) ) {
                    $business_intelligence = true;
                    $class_37[$x] = 'hightlight';
                    $show_row[$x] = 'show';
                    $message = $confirmMessage;
                } else {
                    $class_37[$x] = 'nothing';
                }

                if(trim($isDif['Cloud_Solution']) != trim($fromdatabase[$x][0]['Cloud_Solution']) ) {
                    $cloud_solution = true;
                    $class_38[$x] = 'hightlight';
                    $show_row[$x] = 'show';
                    $message = $confirmMessage;
                } else {
                    $class_38[$x] = 'nothing';
                }


                $x++;
            }



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
                         <?php echo form_open('uploadupdate/read');?> 
                       


                        <div class="">
                            <!-- general form elements disabled -->
                            <div class="box box-warning" style="float:left;">
                                <div class="box-header">
                                    <h3 class="box-title">
                                    File Name: (<?php  echo $filename; ?>)
                                    </h3>
                                    
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                  
                                        <div style="display: block; width: auto; height: auto; overflow-x: scroll;">
                                            <div style="display: block;">
                                                From Database <span class="legend-color" style="background: #333"></span>
                                                From Excel Sheet <span  class="legend-color" style="background: #3c8dbc"></span>
                                                Affected Data <span  class="legend-color" style="background: #ff0000"></span>
                                            </div>

                                            <table  class="tbl-data" >
                                                <tr>
                                                    <td><b style="display: inline-block; width: 50px;">ID</b></td>
                                                    <?php if($date_of_last_update) { ?>
                                                    <td><b>Date of Last Update</b></td>
                                                    <?php } ?>

                                                    <!-- FROM DATABASE -->
                                                    <?php if($source) { ?>
                                                    <td><b style="display: inline-block; width: 150px;">Source</b></td>
                                                    <?php } ?>

                                                     <?php if($comments) { ?>
                                                    <td><b style="display: inline-block; width: 200px;">Comments</b></td>
                                                    <?php } ?>

                                                     <?php if($company_name) { ?>
                                                    <td><b style="display: inline-block; width: 150px;">Company Name</b></td>
                                                    <?php } ?>

                                                     <?php if($salutation) { ?>
                                                    <td><b>Salutation</b></td>
                                                    <?php } ?>

                                                     <?php if($first_name) { ?>
                                                    <td><b style="display: inline-block; width: 150px;">First Name</b></td>
                                                    <?php } ?>

                                                     <?php if($last_name) { ?>
                                                    <td><b style="display: inline-block; width: 150px;">Last Name</b></td>
                                                    <?php } ?>

                                                     <?php if($exact_job_title) { ?>
                                                    <td><b style="display: inline-block; width: 150px;">Exact Job Title</b></td>
                                                    <?php } ?>

                                                    <?php if($job_category) { ?>
                                                    <td><b style="display: inline-block; width: 150px;">Job Category</b></td>
                                                    <?php } ?><!-- 10 -->

                                                    <?php if($job_level) { ?>
                                                    <td><b style="display: inline-block; width: 150px;">Job Level</b></td>
                                                    <?php } ?>

                                                    <?php if($address1) { ?>
                                                    <td><b style="display: inline-block; width: 200px;">Address1</b></td>
                                                    <?php } ?>

                                                    <?php if($address2) { ?>
                                                    <td><b style="display: inline-block; width: 200px;">Address2</b></td>
                                                    <?php } ?>

                                                    <?php if($postcode) { ?>
                                                    <td><b>Postcode</b></td>
                                                    <?php } ?>

                                                    <?php if($city) { ?>
                                                    <td><b>City</b></td>
                                                    <?php } ?>

                                                    <?php if($region) { ?>
                                                    <td><b >Region</b></td>
                                                    <?php } ?>

                                                    <?php if($country) { ?>
                                                    <td><b>Country</b></td>
                                                    <?php } ?>

                                                    <?php if($phonenumber) { ?>
                                                    <td><b>Phonenumber</b></td>
                                                    <?php } ?>

                                                    <?php if($directline) { ?>
                                                    <td><b style="display: inline-block; width: 100px;">Directline</b></td>
                                                    <?php } ?>

                                                    <?php if($email) { ?>
                                                    <td><b>Email</b></td>
                                                    <?php } ?>

                                                    <?php if($website) { ?>
                                                    <td><b>Website</b></td>
                                                    <?php } ?>

                                                    <?php if($activity_sector) { ?>
                                                    <td><b>Activity Sector</b></td>
                                                    <?php } ?>

                                                    <?php if($subactivity_sector) { ?>
                                                    <td><b>Subactivity Sector</b></td>
                                                    <?php } ?>

                                                    <?php if($annual_turnover) { ?>
                                                    <td><b>Annual Trunover</b></td>
                                                    <?php } ?>

                                                    <?php if($global_company_size) { ?>
                                                    <td  style="width: 200px;"><b>Global Company Size</b></td>
                                                    <?php } ?> 
                                                    <!-- 25 -->

                                                     <?php if($country_company_size) { ?>
                                                    <td  style=" width: 200px;"><b>Country Company Size</b></td>
                                                    <?php } ?>

                                                    <?php if($it_dm_cycle_locally_made) { ?>
                                                    <td><b>IT DM Cycle Locally Made</b></td>
                                                    <?php } ?>

                                                    <?php if($location_of_it_dm_cycle) { ?>
                                                    <td><b>Location of IT DM Cycle</b></td>
                                                    <?php } ?>

                                                    <?php if($hqlocation) { ?>
                                                    <td><b>Hqlocation</b></td>
                                                    <?php } ?>

                                                    <?php if($erp) { ?>
                                                    <td><b>ERP</b></td>
                                                    <?php } ?>

                                                    <?php if($crm) { ?>
                                                    <td><b>CRM</b></td>
                                                    <?php } ?>

                                                    <?php if($number_of_users) { ?>
                                                    <td><b>Number of Users</b></td>
                                                    <?php } ?>

                                                    <?php if($number_of_vms) { ?>
                                                    <td><b>Number of VMS</b></td>
                                                    <?php } ?>

                                                    <?php if($virtualization_solution) { ?>
                                                    <td><b>Virtualization Solution</b></td>
                                                    <?php } ?>

                                                    <?php if($backup_recovery_solution) { ?>
                                                    <td><b>Backup Recovery Solution</b></td>
                                                    <?php } ?>

                                                    <?php if($storage_solution) { ?>
                                                    <td><b>Storage Solution</b></td>
                                                    <?php } ?>

                                                    <?php if($collaboration_tools) { ?>
                                                    <td><b>Collaboration Tools</b></td>
                                                    <?php } ?>

                                                    <?php if($business_intelligence) { ?>
                                                    <td><b>Business Intelligence</b></td>
                                                    <?php } ?>

                                                    <?php if($cloud_solution) { ?>
                                                    <td><b>Cloud Solution</b></td>
                                                    <?php } ?>
                                                    <!-- FROM DATABASE -->

                                                    <td class="separator">
                                                        
                                                    </td>
                                                    <td>
                                                        
                                                    </td><!-- //40 -->


                                                    <!-- FROM EXCEL -->
                                                    <?php if($source) { ?>
                                                    <td><b class="excel-row-color" style="display: inline-block; width: 150px;">Source</b></td>
                                                    <?php } ?>

                                                     <?php if($comments) { ?>
                                                    <td><b  class="excel-row-color" style="display: inline-block; width: 200px;">Comments</b></td>
                                                    <?php } ?>

                                                     <?php if($company_name) { ?>
                                                    <td><b class="excel-row-color"  style="display: inline-block; width: 150px;">Company Name</b></td>
                                                    <?php } ?>

                                                     <?php if($salutation) { ?>
                                                    <td><b class="excel-row-color" >Salutation</b></td>
                                                    <?php } ?>

                                                     <?php if($first_name) { ?>
                                                    <td><b  class="excel-row-color" style="display: inline-block; width: 150px;">First Name</b></td>
                                                    <?php } ?>

                                                     <?php if($last_name) { ?>
                                                    <td><b class="excel-row-color"  style="display: inline-block; width: 150px;">Last Name</b></td>
                                                    <?php } ?>

                                                     <?php if($exact_job_title) { ?>
                                                    <td><b  class="excel-row-color" style="display: inline-block; width: 150px;">Exact Job Title</b></td>
                                                    <?php } ?>

                                                    <?php if($job_category) { ?>
                                                    <td><b  class="excel-row-color" style="display: inline-block; width: 150px;">Job Category</b></td>
                                                    <?php } ?>

                                                    <?php if($job_level) { ?>
                                                    <td><b class="excel-row-color"  style="display: inline-block; width: 150px;">Job Level</b></td>
                                                    <?php } ?>

                                                    <?php if($address1) { ?>
                                                    <td><b class="excel-row-color" style="display: inline-block; width: 200px;">Address1</b></td>
                                                    <?php } ?>

                                                    <?php if($address2) { ?>
                                                    <td><b  class="excel-row-color" style="display: inline-block; width: 200px;">Address2</b></td>
                                                    <?php } ?>

                                                    <?php if($postcode) { ?>
                                                    <td><b class="excel-row-color" >Postcode</b></td>
                                                    <?php } ?>

                                                    <?php if($city) { ?>
                                                    <td><b class="excel-row-color" >City</b></td>
                                                    <?php } ?>

                                                    <?php if($region) { ?>
                                                    <td><b class="excel-row-color"  >Region</b></td>
                                                    <?php } ?>

                                                    <?php if($country) { ?>
                                                    <td><b class="excel-row-color" >Country</b></td>
                                                    <?php } ?>

                                                    <?php if($phonenumber) { ?>
                                                    <td><b class="excel-row-color" >Phonenumber</b></td>
                                                    <?php } ?>

                                                    <?php if($directline) { ?>
                                                    <td><b class="excel-row-color"  style="display: inline-block; width: 100px;">Directline</b></td>
                                                    <?php } ?>

                                                    <?php if($email) { ?>
                                                    <td><b class="excel-row-color" >Email</b></td>
                                                    <?php } ?>

                                                    <?php if($website) { ?>
                                                    <td><b class="excel-row-color" >Website</b></td>
                                                    <?php } ?>

                                                    <?php if($activity_sector) { ?>
                                                    <td><b class="excel-row-color" >Activity Sector</b></td>
                                                    <?php } ?>

                                                    <?php if($subactivity_sector) { ?>
                                                    <td><b class="excel-row-color" >Subactivity Sector</b></td>
                                                    <?php } ?>

                                                    <?php if($annual_turnover) { ?>
                                                    <td><b class="excel-row-color" >Annual Trunover</b></td>
                                                    <?php } ?>

                                                    <?php if($global_company_size) { ?>
                                                    <td class="excel-row-color"  style="width: 200px;"><b>Global Company Size</b></td>
                                                    <?php } ?>

                                                    <?php if($country_company_size) { ?>
                                                    <td class="excel-row-color"  style="width: 200px;"><b>Country Company Size</b></td>
                                                    <?php } ?>

                                                    <?php if($it_dm_cycle_locally_made) { ?>
                                                    <td><b class="excel-row-color" >IT DM Cycle Locally Made</b></td>
                                                    <?php } ?>

                                                    <?php if($location_of_it_dm_cycle) { ?>
                                                    <td><b class="excel-row-color" >Location of IT DM Cycle</b></td>
                                                    <?php } ?>

                                                    <?php if($hqlocation) { ?>
                                                    <td><b class="excel-row-color" >Hqlocation</b></td>
                                                    <?php } ?>

                                                    <?php if($erp) { ?>
                                                    <td><b class="excel-row-color" >ERP</b></td>
                                                    <?php } ?>

                                                    <?php if($crm) { ?>
                                                    <td><b class="excel-row-color" >CRM</b></td>
                                                    <?php } ?>

                                                    <?php if($number_of_users) { ?>
                                                    <td><b class="excel-row-color" >Number of Users</b></td>
                                                    <?php } ?>

                                                    <?php if($number_of_vms) { ?>
                                                    <td><b class="excel-row-color" >Number of VMS</b></td>
                                                    <?php } ?>

                                                    <?php if($virtualization_solution) { ?>
                                                    <td><b class="excel-row-color" >Virtualization Solution</b></td>
                                                    <?php } ?>

                                                    <?php if($backup_recovery_solution) { ?>
                                                    <td><b class="excel-row-color" >Backup Recovery Solution</b></td>
                                                    <?php } ?>

                                                    <?php if($storage_solution) { ?>
                                                    <td><b class="excel-row-color" >Storage Solution</b></td>
                                                    <?php } ?>

                                                    <?php if($collaboration_tools) { ?>
                                                    <td><b class="excel-row-color" >Collaboration Tools</b></td>
                                                    <?php } ?>

                                                    <?php if($business_intelligence) { ?>
                                                    <td><b class="excel-row-color" >Business Intelligence</b></td>
                                                    <?php } ?>

                                                    <?php if($cloud_solution) { ?>
                                                    <td><b class="excel-row-color" >Cloud Solution</b></td>
                                                    <?php } ?>
                                                    <!-- FROM EXCEL -->

                                                   
                                                    <td  > <label class="check-label" style="width: 100px; float:right;">Select All <input type="checkbox" id="select_all" style="float:right;"></label></td>
                                                </tr>
                                                <?php
                                                    $i=0;
                                                 foreach($log as $value) { 
                                                    if($show_row[$i] == 'show') {
                                                  ?>
                                                <tr height="30" class="exe-row" id="row-<?= $value['Unique_ID'] ?>">

                                                   
                                                    <td><label class="check-label"><?= $value['Unique_ID'] ?></label></td>

                                                   <!-- FROM DATABASE -->
                                                   <?php if($date_of_last_update) { ?>
                                                    <td><label class="check-label <?= $class_1[$i] ?> "  ><?= $fromdatabase[$i][0]['DATE_OF_LAST_UPDATE'] ?></label></td>
                                                    <?php } ?>

                                                    <?php if($source) { ?>
                                                    <td><label class="check-label <?= $class_2[$i] ?>"><?= $fromdatabase[$i][0]['SOURCE'] ?></label></td>
                                                    <?php } ?>

                                                     <?php if($comments) { ?>
                                                    <td><label class="check-label <?= $class_3[$i] ?>"><?= $fromdatabase[$i][0]['COMMENTS'] ?></label></td>
                                                    <?php } ?>

                                                     <?php if($company_name) { ?>
                                                    <td><label class="check-label <?= $class_4[$i] ?>" ><?= $fromdatabase[$i][0]['COMPANY_NAME'] ?></label></td>
                                                    <?php } ?>

                                                     <?php if($salutation) { ?>
                                                    <td><label class="check-label <?= $class_5[$i] ?>"><?= $fromdatabase[$i][0]['Salutation'] ?></label></td>
                                                    <?php } ?>

                                                     <?php if($first_name) { ?>
                                                    <td><label class="check-label <?= $class_6[$i] ?>"><?= $fromdatabase[$i][0]['FIRST_NAME'] ?></label></td>
                                                    <?php } ?>

                                                     <?php if($last_name) { ?>
                                                    <td><label class="check-label <?= $class_7[$i] ?>"><?= $fromdatabase[$i][0]['LAST_NAME'] ?></label></td>
                                                    <?php } ?>

                                                     <?php if($exact_job_title) { ?>
                                                    <td><label class="check-label <?= $class_8[$i] ?>"><?= $fromdatabase[$i][0]['EXACT_JOB_TITLE'] ?></label></td>
                                                    <?php } ?>

                                                    <?php if($job_category) { ?>
                                                    <td><label class="check-label <?= $class_9[$i] ?>"><?= $fromdatabase[$i][0]['JOB_CATEGORY'] ?></label></td>
                                                    <?php } ?> <!-- 10 -->

                                                    <?php if($job_level) { ?>
                                                    <td><label class="check-label <?= $class_10[$i] ?>"><?= $fromdatabase[$i][0]['JOB_LEVEL'] ?></label></td>
                                                    <?php } ?>

                                                    <?php if($address1) { ?>
                                                    <td><label class="check-label <?= $class_11[$i] ?>"><?= $fromdatabase[$i][0]['ADDRESS1'] ?></label></td>
                                                    <?php } ?>

                                                    <?php if($address2) { ?>
                                                    <td><label class="check-label <?= $class_12[$i] ?>"><?= $fromdatabase[$i][0]['ADDRESS2'] ?></label></td>
                                                    <?php } ?>

                                                    <?php if($postcode) { ?>
                                                    <td><label class="check-label <?= $class_13[$i] ?>"><?= $fromdatabase[$i][0]['POSTCODE'] ?></label></td>
                                                    <?php } ?>

                                                    <?php if($city) { ?>
                                                    <td><label class="check-label <?= $class_14[$i] ?>"><?= $fromdatabase[$i][0]['CITY'] ?></label></td>
                                                    <?php } ?>

                                                    <?php if($region) { ?>
                                                    <td><label class="check-label <?= $class_15[$i] ?>"><?= $fromdatabase[$i][0]['REGION'] ?></label></td>
                                                    <?php } ?>

                                                    <?php if($country) { ?>
                                                    <td><label class="check-label <?= $class_16[$i] ?>"><?= $fromdatabase[$i][0]['COUNTRY'] ?></label></td>
                                                    <?php } ?>

                                                    <?php if($phonenumber) { ?>
                                                    <td><label class="check-label <?= $class_17[$i] ?>"><?= $fromdatabase[$i][0]['PHONENUMBER'] ?></label></td>
                                                    <?php } ?>

                                                    <?php if($directline) { ?>
                                                    <td><label class="check-label <?= $class_18[$i] ?>"><?= $fromdatabase[$i][0]['DIRECTLINE'] ?></label></td>
                                                    <?php } ?>

                                                    <?php if($email) { ?>
                                                    <td><label class="check-label <?= $class_19[$i] ?>"><?= $fromdatabase[$i][0]['EMAIL'] ?></label></td>
                                                    <?php } ?> <!-- 20 -->

                                                    <?php if($website) { ?>
                                                    <td><label class="check-label <?= $class_20[$i] ?>"><?= $fromdatabase[$i][0]['WEBSITE'] ?></label></td>
                                                    <?php } ?>

                                                    <?php if($activity_sector) { ?>
                                                    <td><label class="check-label <?= $class_21[$i] ?>"><?= $fromdatabase[$i][0]['ACTIVITY_SECTOR'] ?></label></td>
                                                    <?php } ?>

                                                    <?php if($subactivity_sector) { ?>
                                                    <td><label class="check-label <?= $class_22[$i] ?>"><?= $fromdatabase[$i][0]['SUBACTIVITY_SECTOR'] ?></label></td>
                                                    <?php } ?>

                                                    <?php if($annual_turnover) { ?>
                                                    <td><label class="check-label <?= $class_23[$i] ?>"><?= $fromdatabase[$i][0]['ANNUAL_TURNOVER'] ?></label></td>
                                                    <?php } ?>

                                                    <?php if($global_company_size) { ?>
                                                    <td><label class="check-label <?= $class_24[$i] ?>"><?= $fromdatabase[$i][0]['GLOBAL_COMPANY_SIZE'] ?></label></td>
                                                    <?php } ?>

                                                     <?php if($country_company_size) { ?>
                                                    <td><label class="check-label <?= $class_25[$i] ?>"><?= $fromdatabase[$i][0]['COUNTRY_COMPANY_SIZE'] ?></label></td>
                                                    <?php } ?>

                                                    <?php if($it_dm_cycle_locally_made) { ?>
                                                    <td><label class="check-label <?= $class_26[$i] ?>"><?= $fromdatabase[$i][0]['IT_DM_CYCLE_LOCALLY_MADE'] ?></label></td>
                                                    <?php } ?>

                                                    <?php if($location_of_it_dm_cycle) { ?>
                                                    <td><label class="check-label <?= $class_27[$i] ?>"><?= $fromdatabase[$i][0]['LOCATION_OF_IT_DM_CYCLE'] ?></label></td>
                                                    <?php } ?>

                                                    <?php if($hqlocation) { ?>
                                                    <td><label class="check-label <?= $class_28[$i] ?>"><?= $fromdatabase[$i][0]['HQLOCATION'] ?></label></td>
                                                    <?php } ?>

                                                    <?php if($erp) { ?>
                                                    <td><label class="check-label <?= $class_29[$i] ?>"><?= $fromdatabase[$i][0]['ERP'] ?></label></td>
                                                    <?php } ?> <!-- 30 -->

                                                    <?php if($crm) { ?>
                                                    <td><label class="check-label <?= $class_30[$i] ?>"><?= $fromdatabase[$i][0]['CRM'] ?></label></td>
                                                    <?php } ?>

                                                    <?php if($number_of_users) { ?>
                                                    <td><label class="check-label <?= $class_31[$i] ?>"><?= $fromdatabase[$i][0]['NUMBER_OF_USERS'] ?></label></td>
                                                    <?php } ?>

                                                    <?php if($number_of_vms) { ?>
                                                    <td><label class="check-label <?= $class_32[$i] ?>"><?= $fromdatabase[$i][0]['NUMBER_OF_VMS'] ?></label></td>
                                                    <?php } ?>

                                                    <?php if($virtualization_solution) { ?>
                                                    <td><label class="check-label <?= $class_33[$i] ?>"><?= $fromdatabase[$i][0]['Virtualization_Solution'] ?></label></td>
                                                    <?php } ?>

                                                    <?php if($backup_recovery_solution) { ?>
                                                    <td><label class="check-label <?= $class_34[$i] ?>"><?= $fromdatabase[$i][0]['Backup_Recovery_Solution'] ?></label></td>
                                                    <?php } ?>

                                                    <?php if($storage_solution) { ?>
                                                    <td><label class="check-label <?= $class_35[$i] ?>"><?= $fromdatabase[$i][0]['Storage_Solution'] ?></label></td>
                                                    <?php } ?>

                                                    <?php if($collaboration_tools) { ?>
                                                    <td><label class="check-label <?= $class_36[$i] ?>"><?= $fromdatabase[$i][0]['Collaboration_Tools'] ?></label></td>
                                                    <?php } ?>

                                                    <?php if($business_intelligence) { ?>
                                                    <td><label class="check-label <?= $class_37[$i] ?>"><?= $fromdatabase[$i][0]['Business_Intelligence'] ?></label></td>
                                                    <?php } ?>

                                                    <?php if($cloud_solution) { ?>
                                                    <td><label class="check-label <?= $class_38[$i] ?>"><?= $fromdatabase[$i][0]['Cloud_Solution'] ?></label></td>
                                                    <?php } ?>

                                                   <!-- FROM DATABASE -->


                                                     <td class="separator">
                                                        
                                                    </td><!-- //40 -->
                                                    <td></td>

                                                   


                                                   <!-- FROM EXCEL -->
                                                   
                                                    <?php if($date_of_last_update) { ?>
                                                    <td><label class="check-label <?= $class_1[$i] ?>  excel-row-color"  ><?= $value['DATE_OF_LAST_UPDATE'] ?></label></td>
                                                    <?php } ?>

                                                    <?php if($source) { ?>
                                                    <td><label class="check-label <?= $class_2[$i] ?> excel-row-color"><?= $value['SOURCE'] ?></label></td>
                                                    <?php } ?>

                                                     <?php if($comments) { ?>
                                                    <td><label class="check-label <?= $class_3[$i] ?> excel-row-color"><?= $value['COMMENTS'] ?></label></td>
                                                    <?php } ?>

                                                     <?php if($company_name) { ?>
                                                    <td><label class="check-label <?= $class_4[$i] ?> excel-row-color" ><?= $value['COMPANY_NAME'] ?></label></td>
                                                    <?php } ?>

                                                     <?php if($salutation) { ?>
                                                    <td><label class="check-label <?= $class_5[$i] ?> excel-row-color"><?= $value['Salutation'] ?></label></td>
                                                    <?php } ?>

                                                     <?php if($first_name) { ?>
                                                    <td><label class="check-label <?= $class_6[$i] ?> excel-row-color"><?= $value['FIRST_NAME'] ?></label></td>
                                                    <?php } ?>

                                                     <?php if($last_name) { ?>
                                                    <td><label class="check-label <?= $class_7[$i] ?> excel-row-color"><?= $value['LAST_NAME'] ?></label></td>
                                                    <?php } ?>

                                                     <?php if($exact_job_title) { ?>
                                                    <td><label class="check-label <?= $class_8[$i] ?> excel-row-color"><?= $value['EXACT_JOB_TITLE'] ?></label></td>
                                                    <?php } ?>

                                                    <?php if($job_category) { ?>
                                                    <td><label class="check-label <?= $class_9[$i] ?> excel-row-color"><?= $value['JOB_CATEGORY'] ?></label></td>
                                                    <?php } ?>

                                                    <?php if($job_level) { ?>
                                                    <td><label class="check-label <?= $class_10[$i] ?> excel-row-color"><?= $value['JOB_LEVEL'] ?></label></td>
                                                    <?php } ?>

                                                    <?php if($address1) { ?>
                                                    <td><label class="check-label <?= $class_11[$i] ?> excel-row-color"><?= $value['ADDRESS1'] ?></label></td>
                                                    <?php } ?>

                                                    <?php if($address2) { ?>
                                                    <td><label class="check-label <?= $class_12[$i] ?> excel-row-color"><?= $value['ADDRESS2'] ?></label></td>
                                                    <?php } ?>

                                                    <?php if($postcode) { ?>
                                                    <td><label class="check-label <?= $class_13[$i] ?> excel-row-color"><?= $value['POSTCODE'] ?></label></td>
                                                    <?php } ?>

                                                    <?php if($city) { ?>
                                                    <td><label class="check-label <?= $class_14[$i] ?> excel-row-color"><?= $value['CITY'] ?></label></td>
                                                    <?php } ?>

                                                    <?php if($region) { ?>
                                                    <td><label class="check-label <?= $class_15[$i] ?> excel-row-color"><?= $value['REGION'] ?></label></td>
                                                    <?php } ?>

                                                    <?php if($country) { ?>
                                                    <td><label class="check-label <?= $class_16[$i] ?> excel-row-color"><?= $value['COUNTRY'] ?></label></td>
                                                    <?php } ?>

                                                    <?php if($phonenumber) { ?>
                                                    <td><label class="check-label <?= $class_17[$i] ?> excel-row-color"><?= $value['PHONENUMBER'] ?></label></td>
                                                    <?php } ?>

                                                    <?php if($directline) { ?>
                                                    <td><label class="check-label <?= $class_18[$i] ?> excel-row-color"><?= $value['DIRECTLINE'] ?></label></td>
                                                    <?php } ?>

                                                    <?php if($email) { ?>
                                                    <td><label class="check-label <?= $class_19[$i] ?> excel-row-color"><?= $value['EMAIL'] ?></label></td>
                                                    <?php } ?>

                                                    <?php if($website) { ?>
                                                    <td><label class="check-label <?= $class_20[$i] ?> excel-row-color"><?= $value['WEBSITE'] ?></label></td>
                                                    <?php } ?>

                                                    <?php if($activity_sector) { ?>
                                                    <td><label class="check-label <?= $class_21[$i] ?> excel-row-color"><?= $value['ACTIVITY_SECTOR'] ?></label></td>
                                                    <?php } ?>

                                                    <?php if($subactivity_sector) { ?>
                                                    <td><label class="check-label <?= $class_22[$i] ?> excel-row-color"><?= $value['SUBACTIVITY_SECTOR'] ?></label></td>
                                                    <?php } ?>

                                                    <?php if($annual_turnover) { ?>
                                                    <td><label class="check-label <?= $class_23[$i] ?> excel-row-color"><?= $value['ANNUAL_TURNOVER'] ?></label></td>
                                                    <?php } ?>

                                                    <?php if($global_company_size) { ?>
                                                    <td><label class="check-label <?= $class_24[$i] ?> excel-row-color"><?= $value['GLOBAL_COMPANY_SIZE'] ?></label></td>
                                                    <?php } ?>

                                                     <?php if($country_company_size) { ?>
                                                    <td><label class="check-label <?= $class_25[$i] ?> excel-row-color"><?= $value['COUNTRY_COMPANY_SIZE'] ?></label></td>
                                                    <?php } ?>

                                                    <?php if($it_dm_cycle_locally_made) { ?>
                                                    <td><label class="check-label <?= $class_26[$i] ?> excel-row-color"><?= $value['IT_DM_CYCLE_LOCALLY_MADE'] ?></label></td>
                                                    <?php } ?>

                                                    <?php if($location_of_it_dm_cycle) { ?>
                                                    <td><label class="check-label <?= $class_27[$i] ?> excel-row-color"><?= $value['LOCATION_OF_IT_DM_CYCLE'] ?></label></td>
                                                    <?php } ?>

                                                    <?php if($hqlocation) { ?>
                                                    <td><label class="check-label <?= $class_28[$i] ?> excel-row-color"><?= $value['HQLOCATION'] ?></label></td>
                                                    <?php } ?>

                                                    <?php if($erp) { ?>
                                                    <td><label class="check-label <?= $class_29[$i] ?> excel-row-color"><?= $value['ERP'] ?></label></td>
                                                    <?php } ?>

                                                    <?php if($crm) { ?>
                                                    <td><label class="check-label <?= $class_30[$i] ?> excel-row-color"><?= $value['CRM'] ?></label></td>
                                                    <?php } ?>

                                                    <?php if($number_of_users) { ?>
                                                    <td><label class="check-label <?= $class_31[$i] ?> excel-row-color"><?= $value['NUMBER_OF_USERS'] ?></label></td>
                                                    <?php } ?>

                                                    <?php if($number_of_vms) { ?>
                                                    <td><label class="check-label <?= $class_32[$i] ?> excel-row-color"><?= $value['NUMBER_OF_VMS'] ?></label></td>
                                                    <?php } ?>

                                                    <?php if($virtualization_solution) { ?>
                                                    <td><label class="check-label <?= $class_33[$i] ?> excel-row-color"><?= $value['Virtualization_Solution'] ?></label></td>
                                                    <?php } ?>

                                                    <?php if($backup_recovery_solution) { ?>
                                                    <td><label class="check-label <?= $class_34[$i] ?> excel-row-color"><?= $value['Backup_Recovery_Solution'] ?></label></td>
                                                    <?php } ?>

                                                    <?php if($storage_solution) { ?>
                                                    <td><label class="check-label <?= $class_35[$i] ?> excel-row-color"><?= $value['Storage_Solution'] ?></label></td>
                                                    <?php } ?>

                                                    <?php if($collaboration_tools) { ?>
                                                    <td><label class="check-label <?= $class_36[$i] ?> excel-row-color"><?= $value['Collaboration_Tools'] ?></label></td>
                                                    <?php } ?>

                                                    <?php if($business_intelligence) { ?>
                                                    <td><label class="check-label <?= $class_37[$i] ?> excel-row-color"><?= $value['Business_Intelligence'] ?></label></td>
                                                    <?php } ?>

                                                    <?php if($cloud_solution) { ?>
                                                    <td><label class="check-label <?= $class_38[$i] ?> excel-row-color"><?= $value['Cloud_Solution'] ?></label></td>
                                                    <?php } ?>


                                                   <!-- FROM EXCEL -->
                                                  
                                                    <td ><input type="checkbox" class="checkbox"  name="uni_id[]" value="<?= $value['Unique_ID'] ?>" id="check-<?= $value['Unique_ID'] ?>" style="float:right;"></td>
                                                </tr>
                                                <?php }
                                                  $i++;
                                                } ?>
                                            </table>
                                        </div>
                                        

                                    <div style="height: 50px; margin-top: 20px; border-top: solid 1px #888; float: left;">
                                        <p>
                                            <b>Warning: </b>
                                            <?php echo $message;  ?>
                                        </p>
                                        <a href="<?= $base.'uploadupdate'; ?>" class="btn btn-warning" >Cancel</a>
                                        <button class="btn btn-primary" >Continue</button>  
                                      
   
                                    </div>  
                                
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!--/.col (right) -->
                          </form>

                        

                    </div>   <!-- /.row -->
                </section><!-- /.content --><!-- /.content -->
            </aside><!-- /.right-side -->
            
        </div><!-- ./wrapper -->

        
<?php

           // echo "<script src='".$base."assets/js/bootstrap.min.js' type='text/javascript'></script>";
             echo "<script src='".$base."assets/js/jquery-3.1.1.min.js' type='text/javascript'></script>";
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

    $(".exe-row").click(function(){
       var identification = $(this).attr('id').split('-')[1];
      
       if($('#check-'+identification).prop('checked')) {
            $('#check-'+identification).prop('checked', false);
            $('#select_all').prop('checked', false);
            $( this ).removeClass( "row-selected" );
            
        } else {
            $('#check-'+identification).prop('checked', true);
             $( this ).addClass( "row-selected" );
            
            
        }

    });

   

</script>
<script type="text/javascript">
   $("#select_all").change(function(){  //"select all" change 
    $(".checkbox").prop('checked', $(this).prop("checked")); //change all ".checkbox" checked status

    if($("#select_all").prop('checked')) {

        $('.checkbox').each(function(i, obj) {
            var dd = $(this).attr('id').split('-')[1];
            $("#row-"+dd ).addClass( "row-selected" );
        //test
        });
    } else {
        $('.checkbox').each(function(i, obj) {
            var dd = $(this).attr('id').split('-')[1];
            $("#row-"+dd ).removeClass( "row-selected" );
        //test
        });
    }

});

//".checkbox" change 
$('.checkbox').change(function(){ 
    //uncheck "select all", if one of the listed checkbox item is unchecked
    if(false == $(this).prop("checked")){ //if this item is unchecked
       
        $("#select_all").prop('checked', false); //change "select all" checked status to false
    }
    //check "select all" if all checkbox items are checked
    if ($('.checkbox:checked').length == $('.checkbox').length ){
       
        $("#select_all").prop('checked', true);
    }
});



</script>
