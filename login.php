<?php
session_start();
$message="";
if(count($_POST)>0) {
 
$servername="localhost";
$username="id11994940_cynosure";
$password="cynosure";
$db="id11994940_cynosure";
$conn=mysqli_connect($servername,$username,$password,$db);


$result = mysqli_query($conn,"SELECT * FROM login_user WHERE user_name='" . $_POST["user_name"] . "' and password = '". $_POST["password"]."'");
$row  = mysqli_fetch_array($result);
if(is_array($row)) {
$_SESSION["id"] = $row['id'];
$_SESSION["name"] = $row['name'];
} else {
$message = "Invalid Username or Password!";
}
}
if(isset($_SESSION["id"])) {
header("Location:index.php");
}
?>
<html>
<head>
<style>


.d{
	background-color: coral;
	margin-left:25%;
	margin-right:25%;
	height:50%;
	padding-top:10%;
}
</style>
<title>User Login</title>
</head>
<body>
<div class="d">
<form name="frmUser" method="post" action="" align="center">
<div class="message"><?php if($message!="") { echo $message; } ?></div>
<h3 align="center">Enter Login Details</h3>
 Username:<br>
 <input type="text" name="user_name">
 <br>
 Password:<br>
<input type="password" name="password">
<br><br>
<input type="submit" name="submit" value="Submit">
<input type="reset">
</form></div>
</body>
</html>