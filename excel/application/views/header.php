<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php //echo $title ?></title>
    <?php
            $base=base_url();
            //  Theme style
            echo "<link rel='stylesheet' href='".$base."application/views/assets/stylesheets/AdminLTE.css' type='text/css' />";
            echo "<link rel='stylesheet' href='".$base."assets/css/bootstrap.min.css' rel='stylesheet' type='text/css' />";
            echo "<link rel='stylesheet' href='".$base."assets/css/font-awesome.min.css' rel='stylesheet' type='text/css' />";
            echo "<link rel='stylesheet' href='".$base."assets/css/ionicons.min.css' rel='stylesheet' type='text/css' />";
            echo "<link rel='stylesheet' href='".$base."assets/css/datatables/dataTables.bootstrap.css' rel='stylesheet' type='text/css' />";
            //view_css('AdminLTE.css', true);
        ?>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    <link href="<?php echo view_css('screen.css', false);?>" media="screen, projection" rel="stylesheet" type="text/css" />
    <link href="<?php echo view_css('print.css', false);?>" media="print" rel="stylesheet" type="text/css" />
    <link href="<?php echo view_css('main.css', false);?>" media="print" rel="stylesheet" type="text/css" />
    <!--[if IE]>
    <link href="<?php echo view_css('ie.css', false);?>" media="screen, projection" rel="stylesheet" type="text/css" />
    <![endif]-->
</head>
<body>