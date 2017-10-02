<?php
$db = mysqli_connect("localhost","root","","summa");
$name=$_POST['personname'];
$number=$_POST['phonenumber'];
$username =$_POST['uname'];
$password = $_POST['psw'];
$query = "INSERT INTO users VALUES('$name','$username',md5('$password'),'$number')";
$result = mysqli_query($db,$query);
if($result == true){
	echo "Registered <a href='localhost:8080/LoginAssignment/index.html'>Login</a>";
}else{
	echo "Failed";
}
?>
