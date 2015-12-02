<!DOCTYPE html>
<html lang="en" dir="ltr">
	<?=form_open("index.php/search/show");?>
	<?php  $search = array("name"=>"search","id"=>"search","value’=>",);?>
	<?=form_input($search);?><input type=submit value="Search" /></p>
	<?=form_close();?>
	<a href="<?php echo site_url("index.php/sess")?>">login</a>
</html>