<?php
include("dbcon.php");
error_reporting(0);
?>
<?php 
  $query="SELECT * FROM COLLEGEISSUEDATA";
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
     <th> Issue with Mentor</th>
     <th> Issue with  teacher</th>
     <th> Issue with  librians</th>
     <th> Issue with Others</th>
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
	     <td>".$result['mentor']."</td>
	     <td>".$result['teacher']."</td>
	     <td>".$result['library']."</td>
	     <td>".$result['others']."</td>
	     <td>".$result['address']."</td>
	     <td>".$result['country']."</td>
	     <td>".$result['nationality']."</td>
	     <td>".$result['gmail']."</td>
	     <td>".$result['year']."</td>
	     <td>".$result['year']."</td>
		 </tr>";
		 
	
	
}
   }
else
{
	echo"no records founds";
}
?>
</table>

	  