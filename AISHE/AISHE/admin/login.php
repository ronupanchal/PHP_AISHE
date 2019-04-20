<?php
session_start();
	include("connection.php");
	if(isset($_POST["login"]))
	{
	     	if(!empty($_POST['email']) && !empty($_POST['password']))
			{
					
					$username=$_POST['email'];
					$password=$_POST['password'];
					echo $username." ".$password;
					$username=stripslashes( $username);
					
					$password=stripslashes($password);
					$username=mysql_real_escape_string($username);	
					$password=mysql_real_escape_string($password);	
				
			
				$sql="select * from user where u_email='$username' and u_password='$password'";
				
				
				$res=mysql_query($sql);
				$rows=mysql_num_rows($res);
				if($rows==1)
				{
					$_SESSION['login']=$username;
					header("location:adminhome.php");
				}
				else
				{
					echo "<script>alert('Invalid Login!')</script>";
					header("location:index.php");
				}
			}
			else
			{
			 	echo "<script>alert('Invalid Login!')</script>";
          		echo "<script>window.open('index.php','_self')</script>";
			}
	}
	else
	{
		echo "<script>alert('Invalid Login!')</script>";
        echo "<script>window.open('index.php','_self')</script>";
	}
?>