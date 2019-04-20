<?php 
include("connection.php");

if(isset($_POST['stadd']))//Add record
{
	//echo "hi";
	
	$stcode=$_POST['stcode'];
	$stname=strtoupper($_POST['stname']);
	$typeuniname=strtoupper($_POST['uniname']);
	//echo $ucode.$uname;
	 $insertarea = "INSERT INTO university (u_name,type_uni) VALUES ('".$stname."','".$typeuniname."')";
	 
	 
	 
	mysql_query($insertarea);
	//======================================================================================   
	
            //display success message
          if($insertarea) {
                echo "<script>alert('Record is inserted successfully!')</script>";
          		echo "<script>window.open('universityDetail.php','_self')</script>";
            }
 }
 if(isset($_POST['submite']))//Edit record
{
	$stname=strtoupper($_POST['stname']);
	$stcode=$_POST['stcode'];
	$typeuniname=$_POST['uniname'];
	
$result ="update university set u_name='".$stname."',type_uni='".$typeuniname."' where u_id = ".$stcode;
mysql_query($result);
 if($result) {
                echo "<script>alert('Record is Update successfully!')</script>";
          		echo "<script>window.open('universityDetail.php','_self')</script>";
            }
}
 ?>