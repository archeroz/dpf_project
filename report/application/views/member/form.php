<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
    <title>Form Register</title>
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta http-equiv="content-language" content="pl">
    <meta name="robots" content="all">
    <meta name="copyright" content="Copyright &copy; MultimediaDesign">
    <meta name="description" lang="pl" content="Encore Admin">
    <meta name="keywords" lang="pl" content="Encore Admin, admin theme, admin skin, admin panel">
	<base href="<?=base_url()?>">
	<link href="<?=base_url()?>assets/css/global.css" rel="stylesheet" type="text/css" />
	<link href="<?=base_url()?>assets/css/layout.css" rel="stylesheet" type="text/css" />
	<link href="<?=base_url()?>assets/css/skin/blue.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="<?=base_url()?>assets/js/lightbox/dist/css/lightbox.css">
	<script src="assets/js/jquery-1.11.3.min.js"></script>
	<script>
		$(document).ready(function(){
			$("input").focus(function(){
				$(this).css("background-color", "#cccccc");
			});
			$("input").blur(function(){
				$(this).css("background-color", "#ffffff");
			});
		});
	</script>
</head>
<!-- you may use body ID to make different CSS styles for different pages -->
<body id="pageLogin">

    <!-- start centered box -->
    <div id="login" class="centerbox2">

        <h1><a href="<?php echo site_url("index.php/onebitmatter/login")?>"><img src="assets/img/ob-voc.png" height="40" width="140"></a> <span>| EncoreAdmin</span></h1>
        <center><h2>Register</h2></center>

        <!-- start box content -->
        <div class="boxInside">

           

            <!-- start login form -->
            
                    
                    <form id="formLogin" name="formEditor" class=".mainForm .shortest"  method="post" <?php echo form_open('index.php/member/add_member')?>
                 <!-- start form fields -->
				 <div class="field">
                        <label for="txtUsername">Username:</label>
                        <input id="username" name="username" class="text" type="text">
                        <label for="password">Password:</label>
                        <input id="password" name="password" class="text" type="password">
                        <label for="name">Name:</label>
                        <input id="name" name="name" class="text" type="text">
						<div class="field"><br></div>
                    </div>
                    <!-- end form fields -->

                    <!-- start login actions -->
                    <div class="formActions clear">
                        <input id="btnSubmit" class="button primary" type="submit" value="Register">
						<input   id="btnCancel"  class="button secondary" type="submit" name="Submit2"value="Cancel" onclick='<?php echo site_url("index.php/onebitmatter/login")?>'>
                        
						<?php echo form_close(); ?>
                    </div>
                </form>
                    <!-- end login actions -->
				
                
            <!-- end login form -->
		
        </div>
        <!-- end box content -->

    </div>
    <!-- end centered box -->

</body>
</html>