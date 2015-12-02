<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <title>Select information</title>
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
	<link rel="stylesheet" media="all" type="text/css" href="<?=base_url()?>assets/js/calender/jquery-ui.css" />
	<link rel="stylesheet" media="all" type="text/css" href="<?=base_url()?>assets/js/calender/jquery-ui-timepicker-addon.css" />
	<script type="text/javascript" src="<?=base_url()?>assets/js/calender/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/js/calender/jquery-ui.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/js/calender/jquery-ui-timepicker-addon.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/js/calender/jquery-ui-sliderAccess.js"></script>
	</head>
	<script type="text/javascript">
	$(function(){
		var startDateTextBox = $('#startdate');
		var endDateTextBox = $('#enddate');

		startDateTextBox.datepicker({ 
			dateFormat: 'dd-M-yy',
			onClose: function(dateText, inst) {
				if (endDateTextBox.val() != '') {
					var testStartDate = startDateTextBox.datetimepicker('getDate');
					var testEndDate = endDateTextBox.datetimepicker('getDate');
					if (testStartDate > testEndDate)
						endDateTextBox.datetimepicker('setDate', testStartDate);
				}
				else {
					endDateTextBox.val(dateText);
				}
			},
			onSelect: function (selectedDateTime){
				endDateTextBox.datetimepicker('option', 'minDate', startDateTextBox.datetimepicker('getDate') );
			}
		});
		endDateTextBox.datepicker({ 
			dateFormat: 'dd-M-yy',
			onClose: function(dateText, inst) {
				if (startDateTextBox.val() != '') {
					var testStartDate = startDateTextBox.datetimepicker('getDate');
					var testEndDate = endDateTextBox.datetimepicker('getDate');
					if (testStartDate > testEndDate)
						startDateTextBox.datetimepicker('setDate', testEndDate);
				}
				else {
					startDateTextBox.val(dateText);
				}
			},
			onSelect: function (selectedDateTime){
				startDateTextBox.datetimepicker('option', 'maxDate', endDateTextBox.datetimepicker('getDate') );
			}
		});

	});
	</script>
</head>
<body id="pageForm" class="withoutSubnav">
			<div id="content" class="clear">
            <div id="main" class="clear">
                <div id="head" class="clear">
                    <h1>Select information</h1>
                </div>
				  <form id="formEditor" name="formEditor" class="mainForm clear"  method="post" <<?php echo form_open('index.php/report/get_pdf_form1/'.$id);?>
                    <fieldset class="clear">
						<div class="field clear">
                            <span class="label">Address of company: <span class="star">*</span></span>
							<select id="selSingleDropdown" name="address_com" class="medium">
							  <option selected="selected">-- select --</option></center>
								<?php for ( $num2 = 0; $num2 < count($company); $num2++) {?>
                                <option value="<?php echo $company[$num2]->fulladdress; ?>"><?php echo $company[$num2]->fulladdress; ?></option>
                                <?php } ?>
                            </select>
                        </div>
						<div class="field clear">
                            <span class="label">Date for pdf: <span class="star">*</span></span>
							<input id="startdate" name="date"class="text short" type="text" value="">   
                        </div>
						<div class="field clear">
                            <span class="label">Name of manager: <span class="star">*</span></span>
							<select id="selSingleDropdown" name="name_manager" class="medium">
							  <option selected="selected">-- select --</option></center>
								<?php for ( $num1 = 0; $num1 < count($manager); $num1++) {?>
								<?php if ($manager[$num1]->name_thai != ""):?>
                                <option value="<?php echo $manager[$num1]->name_thai." ".$manager[$num1]->lastname_thai; ?>"><?php echo $manager[$num1]->name_thai." ".$manager[$num1]->lastname_thai; ?></option>
								<?php endif; }?>
                            </select>
                        </div>
						<div class="field clear">
                            <label for="selSingleDropdown">Position of manager: <span class="star">*</span></label>
                            <select id="selSingleDropdown" name="position_manager" class="medium">
                                <option selected="selected">-- select --</option>
								<?php for ( $num = 0; $num < count($manager); $num++) {?>
                                <option value="<?php echo $manager[$num]->position; ?>"><?php echo $manager[$num]->position; ?></option>
                                <?php } ?>
                            </select>
                        </div>
						<div class="field clear">
                            <label for="selSingleDropdown">Faction: <span class="star">*</span></label>
                            <select id="selSingleDropdown" name="faction" class="medium">
                                <option selected="selected">-- select --</option>
								<?php for ( $num7 = 0; $num7 < count($faction); $num7++) {?>
                                <option value="<?php echo $faction[$num7]->name; ?>"><?php echo $faction[$num7]->name; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    <div class="formActions clear">
                        <input id="btnSubmit" class="button primary" type="submit" value="Save">
                        <input id="btnCancel" class="button secondary" type="reset" value="Cancel">
						<?php echo form_close(); ?>
                    </div>
                </form>
            </div>
			 </div>
			 </div>
</body>
</html>