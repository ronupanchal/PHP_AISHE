<?php 
include("connection.php");

if(isset($_POST['stadd']))//Add record
{
	//echo "hi";
	
	$stcode=$_POST['stcode'];
	$stname=strtoupper($_POST['stname']);
	//echo $ucode.$uname;
	 $insertarea = "INSERT INTO statutory_body (st_name) VALUES ('".$stname."')";
	 
	 
	 
	mysql_query($insertarea);
	//======================================================================================   
	
            //display success message
          if($insertarea) {
                echo "<script>alert('Record is inserted successfully!')</script>";
          		echo "<script>window.open('statutarybodyDetail.php','_self')</script>";
            }
 }
 if(isset($_POST['submite']))//Edit record
{
	$stname=strtoupper($_POST['stname']);
	$stcode=$_POST['stcode'];
	
$result ="update statutory_body set st_name='".$stname."' where st_id = ".$stcode;
mysql_query($result);
 if($result) {
                echo "<script>alert('Record is Update successfully!')</script>";
          		echo "<script>window.open('statutarybodyDetail.php','_self')</script>";
            }
}
 ?>