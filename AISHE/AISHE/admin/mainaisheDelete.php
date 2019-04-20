<?php 
 include("connection.php");
	
	
if(isset($_GET['delet']))//Delete record
{
	
	$id=$_GET['delet'];
	
	$result = "delete from college where code_of_college = ".$eid;
	$res=mysql_query($result);
	
    //header('location:statutarybodyDetail.php');           
 //}
 if($result) {
                echo "<script>alert('Record is deleted successfully!')</script>";
          		echo "<script>window.open('mainaisheDetail.php','_self')</script>";
            }
}
 ?>