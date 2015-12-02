<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
    <title>Login</title>
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
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
    <div id="login" class="centerbox">

        <h1><a href="#"><img src="assets/img/ob-voc.png" height="40" width="140"></a> <span>| EncoreAdmin</span></h1>
        <h2>User login</h2>

        <!-- start box content -->
        <div class="boxInside">

           

            <!-- start login form -->
           <?php echo form_open('index.php/sess')?>
                <fieldset>
                    <legend>Login</legend>

                    <!-- start form fields -->
                    <div class="field">
                        <label for="txtUsername">Username:</label>
                        <input id="txtUsername" name="username" class="text" type="text">
                    </div>
                    <div class="field">
                        <label for="txtPassword">Password:</label>
                        <input id="txtPassword" name="password" class="text" type="password">
                    </div>
                    <!-- end form fields -->

                    <!-- start login actions -->
                    <div id="loginActions" class="clear">
                        <input id="btnLogin" class="button primary" type="submit"name="bt" value="Login">
                        <input id="cbRemember" class="text" type="checkbox" checked="checked">
                        <label for="cbRemember">Keep me logged in</label>
                    </div>
                    <!-- end login actions -->
				
                </fieldset>
            </form>
            <!-- end login form -->
		<a href="<?php echo site_url("index.php/onebitmatter/register")?>">Register</a>
		<br>
		<a href="<?php echo site_url("/index.php/search")?>">Search</a>
        </div>
        <!-- end box content -->

    </div>
    <!-- end centered box -->

</body>
</html>