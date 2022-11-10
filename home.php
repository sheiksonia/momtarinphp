<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>php form</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="#" method="get">
		<input type="number" name="text" placeholder="Enter  number here">
		<br><br>
		<input type="submit" name="btn" value="calculater">
		
		</form>
		<hr>
		<div id="result">
			<?php
			if (isset($_GET['btn'])) {
				$t = $_GET['text'];
				$h = $t/60;
				$m = $t%60;
				echo floor($h).' hr : '.$m.' min';

				
			}




			?>


			
		</div>
	
	
</body>
</html>