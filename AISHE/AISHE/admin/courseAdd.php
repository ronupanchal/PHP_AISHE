<?php 
include("connection.php");

if(isset($_POST['courseadd']))//Add record
{
	//echo "hi";
	
	$cocode=$_POST['cocode'];
	$coname=strtoupper($_POST['coname']);
	//echo $ucode.$uname;
	 $insertarea = "INSERT INTO course (co_name) VALUES ('".$coname."')";
	 
	 
	 
	mysql_query($insertarea);
	//======================================================================================   
	
            //display success message
          if($insertarea) {
                echo "<script>alert('Record is inserted successfully!')</script>";
          		echo "<script>window.open('courseDetail.php','_self')</script>";
            }
 }
 if(isset($_POST['submite']))//Edit record
{
	$coname=strtoupper($_POST['coname']);
	$cocode=$_POST['cocode'];
	
$result ="update course set co_name='".$coname."' where co_id = ".$cocode;
mysql_query($result);
 if($result) {
                echo "<script>alert('Record is Update successfully!')</script>";
          		echo "<script>window.open('courseDetail.php','_self')</script>";
            }
}
 ?>