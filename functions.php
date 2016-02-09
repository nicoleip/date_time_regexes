<?php

function getValue($array, $key, $default = null) 
{
	return isset($array[$key]) ? $array[$key] : $default;
}

function validateForm(&$errors) 
{
	global $month, $day, $year;


	if (!validateRequired($month)) {
		$errors['month'][] = 'Please enter a month.';
	} else if (!validateNumeric($month)) {
		$errors['month'][] = 'This must be a number!';
	}
	
	if (!validateRequired($day)) {
		$errors['day'][] = 'Please enter a day.';
	} else if (!validateNumeric($day)) {
		$errors['day'][] = 'This must be a number!';
	}

	if (!validateRequired($year)) {
		$errors['year'][] = 'Please enter a year.';
	} else if (!validateNumeric($year)) {
		$errors['year'][] = 'This must be a number!';
	}
	return empty($errors);
}

function validateSecondForm(&$errors)
{
	global $month, $day, $year, $user_format;


	if (!validateRequired($month)) {
		$errors['month'][] = 'Please enter a month.';
	} else if (!validateNumeric($month)) {
		$errors['month'][] = 'This must be a number!';
	}

	if (!validateRequired($day)) {
		$errors['day'][] = 'Please enter a day.';
	} else if (!validateNumeric($day)) {
		$errors['day'][] = 'This must be a number!';
	}

	if (!validateRequired($year)) {
		$errors['year'][] = 'Please enter a year.';
	} else if (!validateNumeric($year)) {
		$errors['year'][] = 'This must be a number!';
	}
	if (!validateRequired($user_format)) {
		$errors['user_format'][] = 'Please enter the format!';
	}
	return empty($errors);
}


function validateRequired($value) 
{
	return !empty($value);
}

function validateNumeric($value)
{
	return is_numeric($value);
}

function getFieldErrorClass($errors, $filedName, $className = 'error') {
	return !empty($errors[$filedName]) ? $className : '';
}

function formErrors($errors) {
	$html = '';

	foreach ($errors as $error) {
		$html .= sprintf('<p>%s</p>', $error);
	}

	return $html;
}