<?php
$db = mysqli_connect("localhost","root","","summa");
if($_SERVER["REQUEST_METHOD"] == "POST"){
	
	$name = mysqli_real_escape_string($db,$_POST['uname']);
	$pass = mysqli_real_escape_string($db,$_POST ['psw']);
	
	$query = "SELECT * FROM users WHERE username ='$name' and password = md5('$pass')";
	
	$result = mysqli_query($db,$query);
	
	
	if($result==true){
		echo "Successfully logged in";
	}else{
		echo "Failed";
	}
	
}