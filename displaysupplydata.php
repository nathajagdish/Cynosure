<?php
include("dbcon.php");
error_reporting(0);
?>
<?php 
  $query="SELECT * FROM SUPPLYFORMS";
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
     <th> Batch</th>
     <th> Subject</th>
     <th> Appeared</th>
     <th> Schedule</th>
     <th> Tutor</th>
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
	     <td>".$result['batch']."</td>
	     <td>".$result['subject']."</td>
	     <td>".$result['appeared']."</td>
	     <td>".$result['schedule']."</td>
	     <td>".$result['tutor']."</td>
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

	  