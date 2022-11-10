<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>calculation</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="#" method="get">
		<input type="number" name="textno1" placeholder="Enter Minute Here"><br><br>
		<input type="number" name="textno2" placeholder="Enter Minute Here"><br><br>
		<input type="submit" name="btnplus" value="+">
		<input type="submit" name="btnminus" value="-">
		<input type="submit" name="btnmul" value="x">
		<input type="submit" name="btndid" value="/">

	</form>
	<hr>
	<div id="result">
		<?php
		if (isset($_GET['btnplus'])) {
			$n1 = $_GET['textno1'];
			$n2 = $_GET['textno2'];
			echo "$n1 + $n2 = ".($n1 + $n2);
			
		}
		elseif (isset($_GET['btnminus'])) {
			$n1 = $_GET['textno1'];
			$n2 = $_GET['textno2'];
			echo "$n1 - $n2 = ".($n1 - $n2);
			
		}
		elseif (isset($_GET['btnmul'])) {
			$n1 = $_GET['textno1'];
			$n2 = $_GET['textno2'];
			echo "$n1 * $n2 = ".($n1 * $n2);
			
		}
		elseif (isset($_GET['btndid'])) {
			$n1 = $_GET['textno1'];
			$n2 = $_GET['textno2'];
			echo "$n1 / $n2 = ".($n1 / $n2);
			
		}



		 ?>
		
	</div>
	
</body>
</html>