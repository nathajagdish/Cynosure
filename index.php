<?php
session_start();
?>
<html>
<head>
<title>User Login</title>
</head>
<body>

<?php
if($_SESSION["id"]) {
?>
Welcome <?php echo $_SESSION["name"]; ?>. Click here to <a href="logout.php" tite="Logout">Logout.
<?php
}else echo "<h1>Please login first .</h1>";
?>
<div>
<a href="displaysupplydata.php"style="color:#FF5722">Display supply Data</a><br><br>
<a href="displayothersforms.php"style="color:#FF5722">Display Others form data</a><br><br>
<a href="displayhostelissuedata.php"style="color:#FF5722">Display hostel forms Data</a><br><br>
<a href="displaycollegeissuedata.php"style="color:#FF5722">Display collegeissue forms data</a><br><br>
<a href="displayabusedata.php.php"style="color:#FF5722">Display Abuse forms data</a><br><br>
<a href=""style="color:#FF5722">supplyData</a><br><br>

</div>
</body>
</html>