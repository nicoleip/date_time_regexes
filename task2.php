<?php
require_once 'functions.php';

$validationErrors = [];
$day = getValue($_POST, 'day');
$month = getValue($_POST, 'month');
$year = getValue($_POST, 'year');
$hours = getValue($_POST, 'hours');
$minutes = getValue($_POST, 'minutes');
$seconds = getValue($_POST, 'seconds');
$day_add = getValue($_POST, 'day_add');
$month_add = getValue($_POST, 'month_add');
$year_add = getValue($_POST, 'year_add');
$hours_add = getValue($_POST, 'hours_add');
$minutes_add = getValue($_POST, 'minutes_add');
$seconds_add = getValue($_POST, 'seconds_add');
$user_format = getValue($_POST, 'user_format');
$result = '' ;
$newDate = '';




if($_POST){
	$result = 'Start typing a date...';
}else{
	validateSecondForm($validationErrors);
}
if(empty($validationErrors)){
	$checkTheDate= checkdate($month, $day, $year);
	if(!$checkTheDate){
		$result = 'This date is NOT correct!';
	}else{
		$year += $year_add;
		$month += $month_add;
		$day += $day_add;
		$hours += $hours_add;
		$minutes += $minutes_add;
		$seconds += $seconds_add;
		$resultDate= mktime($hours, $minutes, $seconds, $month, $day, $year);
		$newDate = date($user_format, $resultDate);		
	}
}


?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Date and Time - Task 2</title>
<style type="text/css">

body {
	font-family: Helvetica;
	font-size: 16px;
	height: 1000px;
}
form > div {
	margin: 0 0 3px 0;
}

form > div > label {
	display: inline-block;
	width: 200px;
}

form div.error {
	color: red;
}

form {
	height: 500px;
	margin: auto;
}

form div.error input,
form div.error select,
form div.error textarea {
	border-color: red;
}

#main {
	width: 400px;
	margin: auto;
}

#result{
width:300px;
float:left;
margin-left: 50px;
}
</style>
</head>
<body>
	<div id="main">
		<h3>Enter the time and date:</h3>
		<form method="post">
		<p><?= $result ?></p>
			<div class="<?= getFieldErrorClass($validationErrors, 'month')?>">
					<label for="month">Enter month:</label>
					<input type="text" id="month" name="month"/>
					<?= formErrors(getValue($validationErrors, 'month', [])) ?>
			</div>
			<div class="<?=getFieldErrorClass($validationErrors, 'day')?>">
					<label for="day">Enter day:</label>
					<input type="text" id="day" name="day"/>
					<?= formErrors(getValue($validationErrors, 'day', [])) ?>
			</div>
			<div class="<?= getFieldErrorClass($validationErrors, 'year')?>">
					<label for="year">Enter year:</label>
					<input type="text" id="year" name="year"/>
					<?= formErrors(getValue($validationErrors, 'year', [])) ?>
			</div>	
			<div>
					<label for="hours">Enter hours:</label>
					<input type="text" id="hours" name="hours"/>
			</div>
			<div>
					<label for="minutes">Enter minutes:</label>
					<input type="text" id="minutes" name="minutes"/>
			</div>
			<div>
					<label for="seconds">Enter seconds:</label>
					<input type="text" id="seconds" name="seconds"/>
			</div>	
				
			<h3>Enter some values you want to add to the prevoius form:</h3>
					
			<div>
					<label for="day_add">Days to add:</label>
					<input type="text" id="day_add" name="day_add"/>				
			</div>			
			<div>
					<label for="month_add">Months to add:</label>
					<input type="text" id="month_add" name="month_add"/>
				
			</div>					
			<div>
					<label for="year_add">Years to add:</label>
					<input type="text" id="year_add" name="year_add"/>
			</div>				
			<div>
					<label for="hours_add">Hours to add:</label>
					<input type="text" id="hours_add" name="hours_add"/>
			</div>
			<div>
					<label for="minutes_add">Minutes to add:</label>
					<input type="text" id="minutes_add" name="minutes_add"/>
				
			</div>
			<div>
					<label for="seconds_add">Seconds to add:</label>
					<input type="text" id="seconds_add" name="seconds_add"/>
				
			</div>				
			<h3>Enter the format and get your result:</h3>	
			<div class="<?= getFieldErrorClass($validationErrors, 'user_format')?>">
					<label for="user_format">Enter format:</label>
					<input type="text" id="user_format" name="user_format"/>
					<?= formErrors(getValue($validationErrors, 'user_format', [])) ?>
			</div>			
			<div class="user_result">
					<label for="user_result">The new date:</label>
					<input type="text" id="user_result" name="user_result" value="<?=$newDate;?>"/>
					</div>	
			<br>
			<br>
			<input type="submit"/>		
		</form>
	</div>	
</body>
</html>