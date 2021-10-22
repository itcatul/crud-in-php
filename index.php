<?php 
include('connection.php');
include('header.php');
extract($_REQUEST);
if(isset($save))
{
	$query="select * from info where `username` ='$uname' ";
	$sql=mysqli_query($con,$query);
	
	
	
	//$query="insert into users values('','$n','$e','$pass','$m','$adds','$gen','$qua','$state','$dob','$image',now())";
	$query="INSERT INTO `info`(`Full name`, `Address`, `Contact`, `a_contact`, `adhharcardno`, `bussinestype`, `bussinescity`, `bussinesvillage`, `bussinestaluka`, `adharcardphoto`, `bankpassphoto`, `shapatpatarphoto`, `emailid`, `bussinesname`, `bussinesstype`, `totalemp`, `man`, `women`, `business`, `addressb`, `village`, `taluka`, `district`, `pincode`, `datetime`) VALUES ('$funame','$add','$contact','$acontact','$adcno','$btype',$'bcity','$bvillage','$btaluka','$adcpho','$bppho','$sppho','$email','$bname','$butype','$templ','$men','$women','$bussines','$address','$village','$taluka','$district','$pincode','$dtime')";
	$query1="INSERT INTO `login`( `username`, `password`) VALUES ('$uname','$pass')";

	//upload image
	mkdir("image/$uname");
	move_uploaded_file($_FILES['pic']['tmp_name'],"image/$uname/".$_FILES['pic']['name']);
	
	
	if(mysqli_query($con,$query)&& mysqli_query($con,$query1 ))
	{
	echo "Records Saved Successfully '$uname'</h3>";	
	}
	else
	{
		echo "try again";
		
	}
	
		

	}
	
}




?>
<!--
<html>
	<head>
		<title>Registration Form</title>
		<script>
			function deleteRecord(x)
			{
				if(confirm("You want to delete  ?"))
				{
				window.location.href='delete.php?Stu_id='+x;	
					
				}					
			}
		</script>
	</head>
	<body>
		
	</body>
</html>
<!-- 
display All records
	//echo "<table border='1' style='width:40%;float:left;margin-left:2%'>";
	//echo "<Tr><th>Sr.No</th><th>Fullname</th><th></th>
	//<th>Mobile</th><th>Image</th><th>Update</th><th>Delete</th></tR>";
	
<table  class="table table-hover" id="tableToExcelps2" border="2px">
<thead >
<tr class="table-info" style=" border-bottom:solid 3px black;border-top:solid 3px black;">
<th scope="col">Full Name</th>
<th scope="col">Address</th>
	<th scope="col">contact</th>
	<th scope="col">Alter Contact</th>
	<th scope="col">Addhar card No</th>
	<th scope="col">Bussines type</th>
	<th scope="col">Bussines City</th>
	<th scope="col">Bussines vilage</th>
	<th scope="col">Bussiness taluka</th>
	<th scope="col">Addhar card Photo </th>
	<th scope="col">Bank Passbook phto</th> 
	<th scope="col">Shapat patar Photo</th>
	<th scope="col">Email ID</th>
	<th scope="col">Business Name</th>
	<th scope="col">Business type</th>
	<th scope="col">Total Employee</th>
	<th scope="col">Men</th>
	<th scope="col">Women</th>
	<th scope="col">Address</th>
	<th scope="col">Village</th>
	<th scope="col">taluka</th>
	<th scope="col">District</th>
	<th scope="col">pincode</th>
	<th scope="col">Date Time</th>
	<th scope="col">Username</th>
	<th scope="col">Upadte</th>
	<th scope="col">Delete</th>
	</tr>
!-->
 /*<?PHP

	$sql=mysqli_query($con,"select * from info");
	$i=1;
	while($fetch=mysqli_fetch_array($sql))
	{
?><tbody>
<tr>
<th scope="row" class="table-danger" ><?php {echo $fetch['Full name'];	} ?></th>
<td><?php {echo $fetch['Address'];}?></td>
<td><?php {echo $fetch['Contact'];	} ?></td>
<td><?php {echo $fetch['Alter contact'];	} ?></td>
<td><?php {echo $fetch['Adhar card nmbr'];	} ?>
<?php {echo $fetch['Bussines type'];	} ?>
<?php {echo $fetch['Bussines city'];	} ?></td>
<td><?php {echo $fetch['Bussines village'];	} ?></td>
<td><?php {echo $fetch['Bussines taluka'];	} ?></td>
<td><?php {echo $fetch['Adhar card photo'];	} ?></td>

<td><?php {echo $fetch['Bank passbok photo'];	} ?></td>
<td><?php {echo $fetch['Shapat patar photo'];	} ?></td>

<td><?php {echo $fetch['Email id'];	} ?></td>
<td><?php {echo $fetch['Business name'];	} ?></td>
<td><?php {echo $fetch['Business type'];	} ?></td>
<td><?php {echo $fetch['Total employee'];	} ?></td>
<td><?php {echo $fetch['Man'];	} ?></td>
<td><?php {echo $fetch['Women'];	} ?></td>
<td><?php {echo $fetch['Business'];	} ?></td>
<td><?php {echo $fetch['adress'];	} ?></td>
<td><?php {echo $fetch['village'];	} ?></td>
<td><?php {echo $fetch['taluka'];	} ?></td>
<td><?php {echo $fetch['district'];	} ?></td>
<td><?php {echo $fetch['pincode'];	} ?></td>
<td><?php {echo $fetch['datetime'];	} ?></td>
<td><?php {echo $fetch['username'];	} ?></td>
<td><?php {echo [''];	} ?><a href='update.php?id=$id'>Upadate</td>
<td><?php {echo [''];	} ?><a href='#' onclick='deleteRecord(".$username.")'></td>
<!--
echo "<td><a href='update.php?id=$id'>Update</a></td>";
echo "<td><a href='#' onclick='deleteRecord(".$id.")'>Delete</a></td>";

echo "</tr>";
$i++;

</tr>
-->	
<?php
}

?>
</thead>
</table>
<center>
<input type="button" value="Download as Excel" class="btn btn-primary" onclick="saveAsExcel('tableToExcelps2', 'जेष्ठतायादी-प.स-2.xls')"/><br>
<br>
</center>
</div>
<!--
	echo "<td><a href='update.php?id=$id'>Update</a></td>";
	echo "<td><a href='#' onclick='deleteRecord(".$id.")'>Delete</a></td>";
	
	echo "</tr>";
	$i++;
	}
	echo "</table>";
?>
-->