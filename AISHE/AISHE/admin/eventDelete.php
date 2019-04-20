<?php
    //including the database connection file
    include("connection.php");
	
if(isset($_GET['delet']))//Delete record
{
	$id=$_GET['delet'];
	$del="UPDATE panchal_events SET FLAG = 1 WHERE ID='$id'";
	$res=mysql_query($del);
	 $file_name=$_GET['imgname1'];
	  if(file_exists($file_name)){
                
				unlink($file_name);
            }
    header('location:eventdetail.php');
           
 }
 if(isset($_POST['deleteall']) && isset($_POST['id']))
	{
		 $file_name=$_POST['id'];
		
			foreach($file_name as $idd)
			{
			 if(file_exists($idd)){
                
				unlink($idd);
            }
			$delm="UPDATE panchal_events SET FLAG = 1 WHERE EVENTIMAGE='$idd'";
			$res1=mysql_query($delm);	
			
			}
		header("Location:eventdetail.php");
	}
	if(isset($_GET['imgname']))
	{
		$edit=$_GET['ie'];
	 $file_name=$_GET['imgname'];
	  if(file_exists($file_name)){
                
				unlink($file_name);
            }
	header("Location:eventEdit.php?edit=$edit");
	}
 if(isset($_GET['status']))
	{
		$s=$_GET['status'];
		$del="UPDATE panchal_events SET STATUS = 1 WHERE ID='$s'";
		$res=mysql_query($del);
			header("Location:eventdetail.php");
	}
		if(isset($_GET['statusd']))
	{
		$s=$_GET['statusd'];
		$del="UPDATE panchal_events SET STATUS = 0 WHERE ID='$s'";
		$res=mysql_query($del);
			header("Location:eventdetail.php");
	}
  ?>