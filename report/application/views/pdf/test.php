<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">

	<?php for($num = 1; $num <= 10000; $num++)
	{
		echo $num;
		echo " ";
		if ( $num % 10 == 0 ) 
			echo "<br>";
	}
	?>

</html>