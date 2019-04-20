<?php 
include("connection.php");

if(isset($_POST['courseadd']))//Add record
{
	//echo "hi";
	
	$ccode=$_POST['ccode'];
	$cname=strtoupper($_POST['cname']);
	//echo $ucode.$uname;
	 $insertarea = "INSERT INTO country (c_name) VALUES ('".$cname."')";
	 mysql_query($insertarea);
          if($insertarea) 
			{
                echo "<script>alert('Record is inserted successfully!')</script>";
          		echo "<script>window.open('countryDetail.php','_self')</script>";
            }
 }
 if(isset($_POST['submite']))//Edit record
{
	$cname=strtoupper($_POST['cname']);
	$ccode=$_POST['ccode'];
$result ="update country set c_name='".$cname."' where c_id = ".$ccode;
	//echo $cname.$ccode;print_r($result);
	//die;
	mysql_query($result);
 if($result) {
                echo "<script>alert('Record is Update successfully!')</script>";
          		echo "<script>window.open('countryDetail.php','_self')</script>";
            }
}
 ?>