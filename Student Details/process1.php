<?php
	header('Location: Educational.html');
	$age=$_POST["age"];
	$height=$_POST["height"];
	$gender=$_POST["gender"];
	
	$info="Personal: \nAge: ".$age." \nHeight: ".$height." \nGender: ".$gender."\n\n";
	$myfile=fopen("database.txt","a") or die("Unable to open file");
	fwrite($myfile,$info);
	fclose($myfile);
	
?>