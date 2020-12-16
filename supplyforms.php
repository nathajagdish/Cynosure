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
margin-left:70px;
height:32px;
width:185px;
border-radius:25px;
}

body
{
background:repeating-radial-gradient(red, yellow 10%, green 15%);
}
</style>

</head>

<body>
<br><br><br><br><br><br><br>

<form>
<table border="0" bgcolor="black" align="center" cellspacing="20">
<tr>
<td> Roll Number</td>
<td><input type="text" placeholder="Roll Number" name="rollno"required></td>

<tr>
<td> First Name</td>
<td><input type="text" placeholder="First Name" name="firstname"required></td>
</tr>
<td>Middle Name</td>
<td><input type="text" placeholder="Middle Name" name="middlename"required></td>
</tr>
<td>Last Name</td>
<td><input type="text" placeholder="Last Name" name="lastname" required></td>
</tr>
<tr>
<td>Branch</td>
<td>
<select name="branch">
<option value="cse">CSE</option>
<option value="ece">ECE</option>
<option value="biotech">BIOTECH</option>
<option value="MECHANICAL">MECHANICAL</option>
<option value="civil">CIVIL</option>
</select>
</td>

</tr>

<tr>
<td>Batch</td>
<td>
<select name="batch">
<option value="2017-2021">2019-2023</option>
<option value="2018-2022">2018-2022</option>
<option value="2017-2021">2017-2021</option>
<option value="2016-2020">2016-2020</option>
<option value="2015-2019">2015-2019</option>
<option value="2014-2018">2014-2018</option>
<option value="2013-2017">2013-2017</option>
<option value="2012-2016">2012-2016</option>
<option value="2011-2015">2011-2015</option>
<option value="2010-2014">2010-2014</option>
</select>
</tr>
<tr>
<td> SUBJECT</td>
<td><input type="text" name="subject" placeholder="WRITE SUBJECT" required></td>


</tr>

<tr>
<td>TIMES YOU APPEARED SUPPLY</td>
<td>
<input type="radio" value="once" name="appeared"/>ONCE
<br/>
<input type="radio" value="TWICE" name="appeared"/>TWICE 
<br/>
<input type="radio" value="THRICE" name="appeared"/>THRICE
<br/>
<input type="radio" value="ALL of ABOVE" name="appeared"/>ALL OF ABOVE
<br/
</td>
</tr>
<tr>
<td>SCHEDULE  YOU WANT FOR PREPARATION</td>
<td>
<input type="radio" value="per day" name="schedule"/>PER DAY
<br/>
<input type="radio" value="per week" name="schedule"/>PER WEEK 
<br/>
<input type="radio" value="only WEEKENDS" name="schedule"/>ONLY WEEKENDS 
<br/>
<input type="radio" value="one month" name="schedule"/>ONE MONTH 
<br/
</td>
</tr>
<tr>
<td>TUTOR</td>
<td>
<input type="radio" value="JAGDISH" name="tutor"/>JAGDISH 
<br/>
<input type="radio" value="NISHA" name="tutor"/>NISHA
<br/>
<input type="radio" value="ANAYA" name="tutor"/>ANAYA
<br/>
<input type="radio" value="BISWOJIT" name="tutor"/>BISWOJIT
<br/>
<input type="radio" value="ABHINASH" name="tutor"/>ABHINASH
<br/>
<input type="radio" value="EBRAN" name="tutor"/>EBRAN
<br/>
<tr>
<td>Gender</td>  
<td>
<input type="radio" value="male" name="gender" required>Male
<input type="radio"  value="female" name="gender" required>Female
</td>
</tr>

<tr>
<td ><center><input type="submit" id="button" name="submit" value="submit"></center></td>
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
   $bat=$_GET["batch"];
   $sub=$_GET["subject"];
   $app=$_GET["appeared"];
   $sch=$_GET["schedule"];
   $tut=$_GET["tutor"];
   $gen=$_GET["gender"];
   $query="INSERT INTO SUPPLYFORMS VALUE('$rn','$fn','$mn','$ln','$br','$bat','$sub','$app','$sch','$tut','$gen')";
   $data=mysqli_query($conn,$query);
   if($data)
   {
	   echo"data inserted sucessfully";
   }





?>