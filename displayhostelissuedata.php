<?php
include("dbcon.php");
error_reporting(0);
?>
<?php 
  $query="SELECT * FROM HOSTELISSUEDATA";
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
     <th> Issue with Warden</th>
     <th> Issue with  Roomate</th>
     <th> Issue in  Mess</th>
     <th> Issue with Others</th>
     <th> Adress</th>
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
	     <td>".$result['warden']."</td>
	     <td>".$result['roomate']."</td>
	     <td>".$result['mess']."</td>
	     <td>".$result['others']."</td>
	     <td>".$result['address']."</td>
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

	  