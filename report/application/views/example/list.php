<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
    <title>Example</title>
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
</head>
<body id="pageGallery" class="withoutSubnav">
        <div id="content" class="clear">
            <div id="main" class="clear">
                <div id="topOptions" class="clear">
                </div>
                <div id="gallery" class="clear">
								<?php for( $no = 0; $no < count($img); $no++) {?>		
								<div class="photo">
							  <a class="example-image-link" href="<?php echo $img[$no]->image;?>" data-lightbox="example-1"><img class="thumbnail" src="<?php echo $img[$no]->image;?>" alt="image-1"/></a>
							  <center><p><?php echo $img[$no]->name;?></p></center>
							   </div>
							  <?php } ?>
							</div>			
                        </div>
                    </div>
                </div>
				<script src="<?=base_url()?>assets/js/lightbox/dist/js/lightbox-plus-jquery.min.js"></script>
            </div>
</body>
</html>