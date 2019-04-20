<?php
session_start();
	include("connection.php");
		if(isset($_POST["login"]))
	{
	
			if(!empty($_POST['Email']) && !empty($_POST['Password']))
			{
				$username=$_POST['Email'];
					$password=$_POST['Password'];
					
					$username=stripslashes( $username);
					$password=stripslashes($password);
					$username=mysqli_real_escape_string($con,$username);	
					$password=mysqli_real_escape_string($con,$password);	
				
			
				$sql="select * from  ocm_admin_login where EMAILID='$username' and PASSWORD='$password'";
				
				$res=mysqli_query($con,$sql);
				$rows=mysqli_num_rows($res);
				if($rows==1)
				{
					$_SESSION['login']=$username;
					header("location:adminhome.php");
				}
				else
				{
					header("location:index.php");
				}
			}
			else
			{
			 	echo "<script>alert('Invalid Login!')</script>";
          		echo "<script>window.open('index.php','_self')</script>";
			}
	}else
	{
			 echo "<script>alert('Invalid Login!')</script>";
          		echo "<script>window.open('index.php','_self')</script>";
	}
?>