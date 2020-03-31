<html>

<head></head>
<body>
<?php
	//ini_set('display_errors','1');

	$name=$_POST["name"];
	$email=$_POST["email"];
	$phone=$_POST["phone"];
	$linked=$_POST["lilink"];
	
	//$filename = 'database.txt';
	$file = file_get_contents('database.txt');
	if(strpos($file, $email)) 
	{
		echo "Email already in use";
		unset($file);
		exit;
	}
	if(strpos($file, $linked)) 
	{
		echo "Linked In already in use";
		unset($file);
		exit;
	}
	

	
	$myfile = fopen("database.txt", "a") or die("Unable to open file!");
	$info="Contact: \nName: ".$name." \nEmail: ".$email." \nPhone: ".$phone." \nLinkedin Profile: ".$linked." \n\n";
	fwrite($myfile, $info);
	fclose($myfile);
	header('Location: Personal.html');
	
	
?>
</body>
</html>