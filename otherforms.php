<?php
include("dbcon.php");
error_reporting(0);
?>

<html>
<head>
<title>
</title>

<style>
table
{
color:white;
border-radius:20px;
}

#button
{
background-color:green;
color:white;
height:32px;
width:185px;
border-radius:25px;
}

body
{
background:linear-gradient(red,blue);
}
</style>

</head>

<body>
<br><br><br><br><br><br><br>

<form>
<table border="0" bgcolor="black" align="center" cellspacing="20">
<tr>
<td> First Name</td>
<td><input type="text" name="firstname"placeholder="First Name" required></td>
</tr>
<td>Middle Name</td>
<td><input type="text" name="middlename" placeholder="Middle Name" required></td>
</tr>
<td>Last Name</td>
<td><input type="text" name="lastname" placeholder="Last Name" required></td>
</tr>
<tr>
<td>FEEDBACK</td>
<td><input type="text" name="feedback" placeholder="feedback" required></td>
</tr>
<tr>
<td>PROBLEM STATEMENT</td>
<td><input type="text"name="problem" placeholder= "" required></td>
</tr>
<td>Country</td>
<td><input type="text" name="country" placeholder="country" required></td>
</tr>
<tr>
<td>Permanent Address</td>
<td><input type="text"name="address" placeholder="permanent address" required></td>
</tr>
<tr>
<td>Gmail Address</td>
<td><input type="text" name="gmail"placeholder="Gmail Address" required></td>
</tr>
<tr>
<td>Year</td>
<td><input type="text"name="year" placeholder="year" required></td>
</tr>
<tr>
<td>Branch</td>
<td><input type="text"name="branch" placeholder="Branch" required></td>
</tr>
<tr>
<td>Roll Number</td>
<td><input type="text" name="rollno" placeholder="roll number" required></td>
</tr>
<tr>
<td>Nationality</td>  
<td>
<input type="radio" value="natiobnal" name="nationality" required>National
<input type="radio" value="international" name="nationality" required>International
</td>
</tr>
<td>Gender</td>  
<td>
<input type="radio" value="male" name="gender" required>Male
<input type="radio"value="female" name="gender" required>Female
</td>
</tr>

<tr>
<td  align="center"><input type="submit"  name="submit" value="submit"id="button"> </td>
</tr>
</form>
</table>
</body>
</html>



<?php 
error_reporting(0);

 $rn=$_GET["rollno"];
   $fn=$_GET["firstname"];
   $mn=$_GET["middlename"];
   $ln=$_GET["lastname"];
   $br=$_GET["branch"];
   $f=$_GET["feedback"];
   $p=$_GET["problem"];
   $add=$_GET["address"];
   $gmail=$_GET["gmail"];
   $coun=$_GET["country"];
   $year=$_GET["year"];
   $nat=$_GET["nationality"];
   $gen=$_GET["gender"];
   $query="INSERT INTO OTHERDATA VALUE('$rn','$fn','$mn','$ln','$br','$f','$p','$add','$gmail','$coun','$year','$nat','$gen')";
   $data=mysqli_query($conn,$query);
   if($data)
   {
	   echo"data inserted sucessfully";
   }





?>