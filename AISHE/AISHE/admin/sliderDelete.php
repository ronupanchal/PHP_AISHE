<?php 
	include("connection.php");
	
	
if(isset($_GET['delet']))//Delete record
{
	
	$id=$_GET['delet'];
	
	$result = "delete from slider where sl_id = ".$id;
	$res=mysql_query($result);
    //header('location:universityDetail.php');           
 }
 if($result) {
                echo "<script>alert('Record is deleted successfully!')</script>";
         		echo "<script>window.open('sliderDetail.php','_self')</script>";
            }
 ?>