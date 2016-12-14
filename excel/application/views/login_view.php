
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <title>MediaDEV - Database Analytics Tool</title> 
     <?php
        $base=base_url();
        echo "<script src='".$base."assets/js/jquery-1.4.2.js' type='text/javascript'></script>";
        echo "<script src='".$base."assets/js/global.js' type='text/javascript'></script>";
        echo "<link rel='stylesheet' href='".$base."application/views/assets/stylesheets/login.css'/>";
    ?>
     
</head>
<body>
<div id="wrapper">
<?php 
    echo validation_errors(); 
    $form_attributes = array(
        'id' => 'login-form',
        'name' => 'login-form',
        'class' => 'login-form');
                
    echo form_open('verifylogin', $form_attributes); 
?>
	
    <div class="header">
		<h1>MediaDEV</h1>
		Database Analytics Tool
    </div>
	
    <div class="content">
		<input name="username" type="text" class="input username" placeholder="Username" />
		<div class="user-icon"></div>
		<input name="password" type="password" class="input password" placeholder="Password" />
		<div class="pass-icon"></div>		
    </div>

    <div class="footer">
		<input type="submit" name="submit" value="Login" class="button" />
        <!--<input type="submit" name="submit" value="Register" class="register" /> -->
    </div>
	
    </form>

</div>
<!-- <div class="gradient"></div>  -->
</body>
</html>

