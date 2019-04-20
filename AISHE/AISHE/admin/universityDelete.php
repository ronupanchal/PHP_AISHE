<?php 
	include("connection.php");
	
	
if(isset($_GET['delet']))//Delete record
{
	
	$id=$_GET['delet'];
	
	$result = "delete from university where u_id = ".$id;
	$res=mysql_query($result);
    //header('location:universityDetail.php');           
 }
 if($result) {
                echo "<script>alert('Record is deleted successfully!')</script>";
         		echo "<script>window.open('universityDetail.php','_self')</script>";
            }
 ?>