<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <title>Employee</title>
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
</head>
<body id="pageForm" class="withoutSubnav">
    <div id="wrapper">
        <div id="top">
            <div id="title" class="clear">
                <a href="#"><img src="assets/img/ob-voc.png" height="40" width="140"></a>
                <span> | EncoreAdmin</span>
            </div>
			<div id="menu" class="clear">
                <ul>
                    <li><a href="<?php echo site_url("index.php/onebitmatter/")?>">Home</a></li>
                    <li><a href="<?php echo site_url("index.php/employee/table")?>">Table</a></li>
                    <li class="active"><a href="<?php echo site_url("index.php/employee/add")?>">Form</a></li>
                    <li><a href="<?php echo site_url("index.php/example")?>">Example</a></li>    
                </ul>
            </div>
            <div id="toolbar" class="clear">
                <p id="user">Logged in as <a href="#">FeedFlush</a></p>
                <div id="buttons">
                    <a href="#" class="button tool">Visit website</a>
                    <a href="login.html" class="button tool">Log out</a>
                </div>
            </div>
        </div>
		</body>
</html>