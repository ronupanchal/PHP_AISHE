<?php 
include("connection.php");

if(isset($_POST['courseadd']))//Add record
{
	//echo "hi";
	
	$scode=$_POST['scode'];
	$sname=strtoupper($_POST['sname']);
	$cid=$_POST['country'];
	//echo $ucode.$uname;
	 $insertarea = "INSERT INTO state (s_name,c_id) VALUES ('".$sname."',".$cid.")";
	 mysql_query($insertarea);
          if($insertarea) 
			{
                echo "<script>alert('Record is inserted successfully!')</script>";
          		echo "<script>window.open('stateDetail.php','_self')</script>";
            }
 }
 if(isset($_POST['submite']))//Edit record
{
	$sname=strtoupper($_POST['sname']);
	$scode=$_POST['scode'];
	$cid=$_POST['country'];
$result ="update state set s_name='".$sname."',c_id=".$cid." where s_id = ".$scode;
	mysql_query($result);
 if($result) {
                echo "<script>alert('Record is Update successfully!')</script>";
          		echo "<script>window.open('stateDetail.php','_self')</script>";
            }
}
 ?>