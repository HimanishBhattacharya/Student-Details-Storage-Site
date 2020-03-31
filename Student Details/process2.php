<?php
	ini_set('display_errors','1');
	$course=$_POST["course"];
	$addyear=$_POST["addyear"];
	$duration=$_POST["duration"];
	$noi=$_POST["noi"];
	
	$info="Educational: \nUndergoing Course: ".$course."\nAddmission Year: ".$addyear." \nDuration of Course: ".$duration." \nName of Institution: ".$noi."\n-----------------------------------------------------------------\n\n\n";
	$myfile=fopen("database.txt","a") or die("Unable to open file");
	fwrite($myfile,$info);
	fclose($myfile);
	echo "You have succesfully added yourself into our Database";
?>