<?php
require 'functions.php';

$month = getValue($_POST, 'month');
$day = getValue($_POST, 'day');
$year = getValue($_POST, 'year');
$validationErrors = [];
$result = '';

// checkdate($month, $day, $year) - returns true if the date is valid

if(!$_POST){
	$result = 'Please enter a date:';	
}else{	
	validateForm($validationErrors);
}
if(empty($validationErrors)){
	$checkTheDate= checkdate($month, $day, $year);
	if(!$checkTheDate){
		$result = 'The date is NOT correct!';
	}else{
		$result = 'The date is correct!';
	}
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Date and Time - Task 1</title>

<style type="text/css">

body{
	font-family: Helvetica;
	font-size: 16px;
	
}
form > div {
	margin: 0 0 3px 0;
}

form > div > label {
	display: inline-block;
	width: 100px;
}

form div.error {
	color: red;
}

#main {
width:170px;
margin: auto;
background-color : #7ABF57;
color: #24391a;
padding:15px;
border-radius: 10px;
}

form div.error input,
form div.error select,
form div.error textarea {
	border-color: red;
}

</style>
</head>
<body>
<div id="main">
	<p>	<?= $result ?></p>
		<form  method="post">	
		<div class="<?= getFieldErrorClass($validationErrors, 'month')?>">
				<label for="month">Enter month:</label>
				<input type="text" id="month" name="month"/>
				<?= formErrors(getValue($validationErrors, 'month', [])) ?>
			</div>
		<br>
		<br>
		<div class="<?= getFieldErrorClass($validationErrors, 'day')?>">
				<label for="day">Enter day:</label>
				<input type="text" id="day" name="day"/>
				<?= formErrors(getValue($validationErrors, 'day', [])) ?>
			</div>
		<br>
		<br>		
		<div class="<?= getFieldErrorClass($validationErrors, 'year')?>">
				<label for="year">Enter year:</label>
				<input type="text" id="year" name="year"/>
				<?= formErrors(getValue($validationErrors, 'year', [])) ?>
			</div>	
		<br>
		<br>
		<input type="submit" />			
	</form>
</div>
</body>
</html>