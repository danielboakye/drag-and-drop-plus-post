<?php 

echo "<pre>";
$courses = $_GET['courses'];

foreach ($courses as $key => $value) {
	$courses[$key] = htmlspecialchars($value);
}

print_r($courses);

 ?>