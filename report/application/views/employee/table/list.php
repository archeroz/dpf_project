<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <title>Edit Employee</title>
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
<?php 
	if ( !isset($page) ) 
	{
		$page=1;
	} // กำหนดหน้า = 1 ในกรณีที่ไม่ได้กำหนดมาก่อน
	if ( array_key_exists ( 'page',$_GET) )
	{
		$page = $_GET['page'];
	}
	$itemsPerPage=10; // กำหนดจำนวนรายการต่อหน้า	
	$allItems = count($employee); // กำหนดจำนวนรายการทั้งหมด
	$totalPage = ceil($allItems / $itemsPerPage); // หาค่าจำนวนหน้าทั้งหมด
	if ( $page < 1 ) $page = 1; // ถ้าหน้าที่ต้องการแสดงผลน้อยกว่าหน้า 1 ให้กำหนดเป็นหน้า 1
	if ( $page > $totalPage ) $page = $totalPage; // ถ้าหน้าที่ต้องการแสดงผลมากกว่าจำนวนหน้าทั้งหมด ให้กำหนดเป็นหน้าสุดท้าย
	$startItem = ($page-1)*$itemsPerPage; // คำนวณหารายการแรกที่จะแสดงผล
	$endItem = $startItem+$itemsPerPage-1; // คำนวณหารายการสุดท้าที่จะแสดงผล
	$self = "index.php/emoliyee/table";
	?>

<body id="pageForm" class="withoutSubnav">
  
         <div id="content" class="clear">
         <div id="main" class="clear">
							<div id="head" class="clear">
								<h1>Table</h1>
								<div id="actions">
									<a href="<?php echo site_url("index.php/employee/add")?>" class="button primary">Add New Customer</a>
								</div>
							</div>
         <div id="topOptions" class="clear">
						<form id="formBulkActions" action="#" method="get">
							<div id="bulkActions">
								<label for="selBulkActions">Check to delete</label>
							</div>
						</form>
					<ul class="pagination">
					<?php  if ( $page > 1)
					{
						echo "<li class=\"button small pagePrev\"><a href=$self?page=1 title=\"Previous page\">|<</a></li>" ;
						echo "<li class=\"button small pagePrev\"><a href=$self?page=".($page-1)." title=\"Previous page\">Previous</a></li>";
					}
					// แสดงลิงค์ของทุกหน้า
					for ( $i = 1; $i <= $totalPage; $i++ ) {
						echo "<li><a href=$self?page=$i>";
						echo "$i";
						echo "</a></li> ";
					}
					// ถ้าหน้าที่กำลังแสดงผลเป็นหน้าสุดท้าย ก็ไม่ต้องแสดงลิงค์ไปหน้าสุดท้าย
					if ( $page < $totalPage ) {
						echo "<li class=\"button small pageNext\"><a href=\"$self?page=".($page+1)."\" title=\"Next page\">Next</a></li> ";
						echo "<li class=\"button small pageNext\"><a href=\"$self?page=$totalPage\" title=\"Next page\">>|</a></li> ";
					}
					?>
					</ul>
         </div>
						<table id="tableItems" class="clear" cellpadding="0" cellspacing="0">
									<thead>
										<tr>
											<th class="colCheck"><input id="cbSelectAll" type="checkbox"></th>
											<th class="colCount">ID</a></th>
											<th class="colName left sortable">Name</a></th>
											<th class="colStatus sortable">Status</a></th>
											<th class="colActions right">Actions</th>
										</tr>
									</thead>
								<tbody>
								<?php if (count($employee)>0):?>
								<?php for( $no = $startItem; $no <= $endItem; $no++) {?>
								<tr class="odd">
									<td class="colCheck"><input name="cbSelect[]" type="checkbox"></td>
									<td class="colCount"><?php echo $employee[$no]->id;?></td>
									<td class="colName left"><a href="index.php/employee/select/<?php echo $employee[$no]->id;?>"><?php echo $employee[$no]->name_thai;?>&nbsp&nbsp<?php echo $employee[$no]->lastname_thai;?></a></td>
									<td class="colStatus"><a href="#"><img src="assets/img/ico/icoStatusGreen.png" alt="Active"></a></td>
									<td class="colActions right">
										<a class="actionEdit" href="index.php/employee/edit/<?php echo $employee[$no]->id;?>">Edit</a>
										<a class="actionDelete" href="index.php/employee/delete_employee/<?php echo $employee[$no]->id;?>">Delete</a>
									</td>
								</tr>
								<?php if(($no+1 == $allItems  ) || ($no+1 > $allItems )) break; ?>
								<?php }endif;?>          
								</tbody>	
					</table>
         <div id="bottomOptions" class="clear">
                    <form id="formViewOptions" action="#" method="get">
                        <div id="viewOptions">
                            <label for="selItemsPerPage">Items per page:</label>
                            <select id="selItemsPerPage">
                                <option selected="selected">10</option>
                                <option>25</option>
                                <option>50</option>
                                <option>100</option>
                            </select>
                        </div>
                    </form>
                    <ul class="pagination">
					<?php  if ( $page > 1)
					{
						echo "<li class=\"button small pagePrev\"><a href=$self?page=1 title=\"Previous page\">|<</a></li>" ;
						echo "<li class=\"button small pagePrev\"><a href=$self?page=".($page-1)." title=\"Previous page\">Previous</a></li>";
					}
					// แสดงลิงค์ของทุกหน้า
					for ( $i = 1; $i <= $totalPage; $i++ ) {
						echo "<li><a href=$self?page=$i>";
						echo "$i";
						echo "</a></li> ";
					}
					// ถ้าหน้าที่กำลังแสดงผลเป็นหน้าสุดท้าย ก็ไม่ต้องแสดงลิงค์ไปหน้าสุดท้าย
					if ( $page < $totalPage ) {
						echo "<li class=\"button small pageNext\"><a href=\"$self?page=".($page+1)."\" title=\"Next page\">Next</a></li> ";
						echo "<li class=\"button small pageNext\"><a href=\"$self?page=$totalPage\" title=\"Next page\">>|</a></li> ";
					}
					?>
					</ul>
         </div>
         </div>
		

		</body>
</html>