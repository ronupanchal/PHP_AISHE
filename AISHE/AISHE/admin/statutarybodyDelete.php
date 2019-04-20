<?php 
 include("connection.php");
	
	
if(isset($_GET['delet']))//Delete record
{
	
	$id=$_GET['delet'];
	
	$result = "delete from statutory_body where st_id = ".$id;
	$res=mysql_query($result);
	
    //header('location:statutarybodyDetail.php');           
 //}
 if($result) {
                echo "<script>alert('Record is deleted successfully!')</script>";
          		echo "<script>window.open('statutarybodyDetail.php','_self')</script>";
            }
}
 ?>