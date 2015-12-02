<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">

	<head>
		<link href="<?=base_url()?>assets\css\style.css" rel="stylesheet" type="text/css" />
		<style>
		p {text-indent: 35px;}
		</style>
	</head>
		<div id="header">
				 <img src = "img/ob-voc2.png" width="110" height="60" >
				 <div id="header2">
				 บริษัท วันบิต แมทเทอร์ จำกัด<br>
				 เลขที่  48/5-6 ซอยรุ่งเรือง ถนนรัชดาภิเษก แขวงสามเสนนอก เขตห้วยขวาง กรุงเทพมหานคร โทร: 08-1663-4999, 0855606789
				</div>
		</div>
			<hr>
			<br>
				<div id ="topic2">
				<b>สัญญาจ้างงาน(ทดลองงาน)</b>
				</div>
				<div id="section7">
				ทำที่บริษัท วันบิต แมทเทอร์ จำกัด
				</div>
				<div id="section7">
				วันที่  <?php echo $date;?>
				</div>
				<div id="section6">
					<p>สัญญาฉบับนี้ทำขึ้นระหว่างบริษัท วันบิต แมทเทอร์ จำกัด โดย นายพเนิน อัศววิภาส และนายวโรดม ด่านสุวรรณดำรงตำแหน่งกรรมการผู้มีอำนาจลงนาม สำนักงานตั้งอยู่เลขที่  <?php echo $address;?> ซึ่งต่อไปนี้ในสัญญาให้เรียกว่า "นายจ้าง" ฝ่ายหนึ่งกับ  <?php echo $employee[0]->name_thai." ".$employee[0]->lastname_thai?> เลขประจำตัวประชาชน <?php echo  $employee[0]->id_card;?>  อยู่บ้านเลขที่ <?php echo  $employee[0]->fulladdress;?> ซึ่งต่อไปนี้ในสัญญา จะเรียกว่า ”ลูกจ้าง” อีกฝ่ายหนึ่ง ทั้งสองฝ่าย ตกลงทำสัญญากันมีข้อความดังต่อไปนี้</p>
					<p>ข้อที่ 1 นายจ้างตกลงจ้างและลูกจ้างตกลงรับจ้างเป็นพนักงานของบริษัทฯ ในตำแหน่ง <?php echo  $employee[0]->position_thai;?> (<?php echo  $employee[0]->position_eng;?>) ตั้งแต่วันที่  <?php echo $firstday;?> <?php echo $firstmonth;?> <?php echo $firstyear;?>  ถึงวันที่ <?php echo $apprentice;?> โดยได้รับค่าจ้างปกติเป็นรายเดือน ในอัตราเดือนละ <?php echo $employee[0]->salary;?> บาท (<?php echo  $thai_salary;?>) กำหนดจ่ายให้ทุกวันที่ 28 ของเดือน หลังจากหักภาษีเงินได้ ณ ที่จ่ายแล้ว โดยจ่ายผ่านบัญชีที่ลูกจ้างแจ้งไว้ต่อนายจ้าง</p>				
					<p>ข้อที่ 2 นายจ้างมีสิทธิโยกย้ายสถานที่ทำงาน ปรับเปลี่ยนตำแหน่งหน้าที่ ความรับผิดชอบของลูกจ้างได้ ตามที่นายจ้างเห็นสมควรและอยู่ในวิสัยที่จะทำได้ ลูกจ้างรับว่ายินยอมที่จะทำตามทุกกรณี</p>
					<p>ข้อที่ 3 ลูกจ้างยินยอมปฏิบัติตามข้อบังคับการทำงาน ระเบียบ คำสั่งของนายจ้างอย่างเคร่งครัด ตลอดเวลาที่เป็นลูกจ้าง</p>
					<p>ข้อที่ 4 ลูกจ้างยินยอมทำงานเต็มความรู้ความสามารถและทำให้เกิดผลงานอย่างเต็มที่ในงานที่ได้รับมอบหมาย</p>
					<p>ข้อที่ 5 ลิขสิทธิ์ สิทธิบัตร และ/หรือทรัพย์สินทางปัญญาอื่นใดที่เกิดขึ้นระหว่างที่ลูกจ้างทดลองงานกับบริษัทฯ ที่เกี่ยวข้องกับงานในตำแหน่งหน้าที่ให้ตกเป็นของบริษัทฯ แต่เพียงผู้เดียว นับแต่เวลาที่ได้กระทำขึ้น และจะไม่กระทำการดัด  แปลง หรือนำงานที่ละเมิดทรัพย์สินทางปัญญาของบุคคลอื่นเข้ามาทำงานตามสัญญานี้</p>
					<p>ข้อที่ 6 ลูกจ้างยินยอมไม่นำข้อมูล หรือลิขสิทธิ์ใดๆ ของนายจ้างไปแสวงหาผลประโยชน์ส่วนตัวหรือไม่เปิดเผยแก่ผู้อื่น</p>
					<p>ข้อที่ 7 กรณีลูกจ้างละเมิด หรือจงใจกระทำผิดสัญญาจ้างงานนี้ หรือข้อบังคับเกี่ยวกับการทำงานของบริษัท ฯนายจ้างมีสิทธิบอกเลิกสัญญาจ้างโดยไม่ต้องแจ้งให้ทราบล่วงหน้า</p>
					<p>ข้อที่ 8 ลูกจ้างจะไม่กระทำการใดๆ อันเป็นการแข่งขันกับธุรกิจของบริษัทฯ เฉพาะที่อาศัยข้อมูลการค้า แนวคิดทางธุรกิจ และ/หรือ ผลิตภัณฑ์การค้าของบริษัทฯ ตลอดระยะเวลาของสัญญานี้ และภายใน 5 ปี นับตั้งแต่วันที่สัญญานี้สิ้นสุดลง</p>
					<p>ข้อที่ 9 ระหว่างการเป็นลูกจ้าง หากลูกจ้างทำให้เกิดความเสียหายใดๆลูกจ้างยินยอมให้บริษัทฯหักค่าจ้างหรือเรียกเงินชดใช้ค่าเสียหายได้เต็มจำนวนในทันทีเช่นกัน</p>
					<p>สัญญาจ้างงานฉบับนี้ทั้งสองฝ่ายได้อ่านและเข้าใจในเนื้อหาของสัญญาจ้างนี้โดยตลอดแล้วเห็นว่าตรงตามเจตนาของตนทุกประการ จึงลงชื่อไว้ต่อหน้าพยานเป็นสำคัญ</p>
				</div>

				<br><br>
				<div id="header">
				 <img src = "img/ob-voc2.png" width="110" height="60" >
				 <div id="header2">
				 บริษัท วันบิต แมทเทอร์ จำกัด<br>
				 เลขที่  48/5-6 ซอยรุ่งเรือง ถนนรัชดาภิเษก แขวงสามเสนนอก เขตห้วยขวาง กรุงเทพมหานคร โทร: 08-1663-4999, 0855606789
				</div>
		</div>
			<hr>
			<br>
			<br>
				<div id="section8">ลงชื่อ..............................................นายจ้าง</div>
				<div id="section8">(<?php echo $name_manager;?>)</div><br>
				<div id="section8">ลงชื่อ..............................................นายจ้าง</div>
				<div id="section8">(<?php echo $name_manager2;?>)</div><br>
				<div id="section8">ลงชื่อ..............................................ลูกจ้าง</div>
				<div id="section8">(<?php echo $employee[0]->name_thai." ".$employee[0]->lastname_thai?>)</div><br>
				<div id="section8">ลงชื่อ..............................................นายพยาน</div>
				<div id="section8">(<?php echo $witness;?>)</div><br>
				<div id="section8">ลงชื่อ..............................................นายพยาน</div>
				<div id="section8">(<?php echo $witness2;?>)</div><br>
				
</html>