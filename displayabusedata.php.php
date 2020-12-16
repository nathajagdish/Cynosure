<?php
include("dbcon.php");
error_reporting(0);
?>
<?php 
  $query="SELECT * FROM ABUSEDATA";
   $data=mysqli_query($conn,$query);
   $total=mysqli_num_rows($data);
   if($total !=0)
   { ?>
<table width = "100%" border = "1" cellspacing = "1" cellpadding = "1">
<tr>
     <th> Ronn.No</th>
     <th> First Name</th>
     <th> Middle Name</th>
     <th> Last Name</th>
     <th> Branch</th>
     <th> Abuse mentally</th>
     <th> Abuse physically</th>
     <th> Abuse socially</th>
     <th> abuse with Others</th>
     <th> Adress</th>
     <th> country</th>
     <th> Nationality</th>
     <th> Gmail</th>
     <th> Year</th>
     <th> Gender</th>
</tr>
<?php
While($result=mysqli_fetch_assoc($data))	 
{
	echo"<tr>
	     <td>".$result['rollno']."</td>
	     <td>".$result['firstname']."</td>
	     <td>".$result['middlename']."</td>
	     <td>".$result['lastname']."</td>
	     <td>".$result['branch']."</td>
	     <td>".$result['mental']."</td>
	     <td>".$result['physical']."</td>
	     <td>".$result['social']."</td>
	     <td>".$result['others']."</td>
	     <td>".$result['address']."</td>
	     <td>".$result['country']."</td>
	     <td>".$result['nationality']."</td>
	     <td>".$result['gmail']."</td>
	     <td>".$result['year']."</td>
	     <td>".$result['gender']."</td>
		 </tr>";
		 
	
	
}
   }
else
{
	echo"no records founds";
}
?>
</table>

	  