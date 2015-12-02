<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <title>index</title>
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
    <div id="content" class="clear">
            <div id="main" class="clear">
                <div id="head" class="clear">
                    <h1>Welcome</h1>
                </div>
                <div id="quick" class="clear">
                    <div class="quickLink">
                        <a href="<?php echo site_url("index.php/employee/add")?>"><img src="assets/img/ico/icoAddUser.png" alt="Add user"><span>Add user</span></a>
                    </div>
                    <div class="quickLink">
						 <a href="<?php echo site_url("index.php/employee/table")?>"><img src="assets/img/ico/icoWriteArticle.png" alt="Write article"><span>Edit user</span></a>
                    </div>
                    <div class="quickLink">
                        <a href="<?php echo site_url("index.php/employee/table")?>"><img src="assets/img/ico/icoBrowse.png" alt="Browse orders"><span>Delete user</span></a>
                    </div>
                </div>
            </div>
		</body>
</html>