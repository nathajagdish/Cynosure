<?php
include("dbcon.php");
error_reporting(0);
?>
<?php 
  $query="SELECT * FROM OTHERDATA";
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
     <th> Feedback</th>
     <th> Problem</th>
     <th> Adress</th>
     <th> country</th>
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
	     <td>".$result['feedback']."</td>
	     <td>".$result['problem']."</td>
	     <td>".$result['adress']."</td>
	     <td>".$result['country']."</td>
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

	  