<?php 
include('connection.php');
//include('header.php');
//extract($_REQUEST);
if(isset($save))
{
	$query="select * from `login` where `username` ='$uname' ";
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