<?php 
include("connection.php");

if(isset($_POST['courseadd']))//Add record
{
	//echo "hi";
	
	$dcode=$_POST['dcode'];
	$dname=strtoupper($_POST['dname']);
	$sid=$_POST['state'];
	echo $dcode.$dname.$sid;
	
	
	 $insertarea = "INSERT INTO district (d_name,s_id) VALUES ('".$dname."',".$sid.")";
	 mysql_query($insertarea);
          if($insertarea) 
			{
                echo "<script>alert('Record is inserted successfully!')</script>";
          		echo "<script>window.open('districtDetail.php','_self')</script>";
            }
 }
 if(isset($_POST['submite']))//Edit record
{
	$dname=strtoupper($_POST['dname']);
	$dcode=$_POST['dcode'];
$result ="update district set d_name='".$dname."' where d_id = ".$dcode;
	mysql_query($result);
 if($result) {
                echo "<script>alert('Record is Update successfully!')</script>";
          		echo "<script>window.open('districtDetail.php','_self')</script>";
            }
}
 ?>