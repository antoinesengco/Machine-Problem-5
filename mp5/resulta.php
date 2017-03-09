<!DOCTYPE html>
<html>
<head>
	<title>Card Results</title>
	<style type="text/css">
		div {
    background-color: #42cef4;
    width: 300px;
    border: 25px solid #0b7aef;
    padding: 25px;
    margin-left:550px;
    margin-top:250px;
}
	</style>
</head>
<body>

<div>
	<?php
		$percentage=0;

		if($_GET['1'] == 'correct')
			$percentage  = $percentage+25;
		if($_GET['2'] == 'correct')
			$percentage = $percentage+25;
		if($_GET['3'] == 'correct')
			$percentage = $percentage+25;
		if($_GET['4'] == 'correct')
			$percentage = $percentage+25;
	?>
	<?php
		if($percentage==100){
	?>
		<h3 style="margin-left:50px;">You're 100% normal</h3>
	<?php		
		} else if($percentage==75){
	?>
		<h3 style="margin-left:50px;">You're 75% normal and 25% addict</h3>
	<?php		
		} else if($percentage==50){
	?>
		<h3 style="margin-left:50px;">You're 50% normal and 50% addict</h3>
	<?php		
		} else if($percentage==25){
	?>	
		<h3 style="margin-left:105px;">You're 25% normal and 75% addict</h3>
	<?php
		} else {
	?>
		<h3 style="margin-left:50px;">You're 100% addict</h3>
	<?php }
	?>
	<a href="1.php" style="margin-left:105px;">Play Again?</a>
	</div>
</body>
</html>