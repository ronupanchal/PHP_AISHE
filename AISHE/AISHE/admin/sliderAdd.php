<?php
    //including the database connection file
    include("connection.php");
	
if(isset($_POST['submitadd']))//Add record
{
	$title=strtoupper($_POST['slname']);
	
	if(isset($_FILES['files'])){
    $errors= array();
	foreach($_FILES['files']['tmp_name'] as $key => $tmp_name ){
		$file_name = $key.$_FILES['files']['name'][$key];
		$file_size =$_FILES['files']['size'][$key];
		$file_tmp =$_FILES['files']['tmp_name'][$key];
		$file_type=$_FILES['files']['type'][$key];	
		
        if($file_size > 2097152){
			$errors[]='File size must be less than 2 MB';
			
        }		
	 $pathimg="../upload/slider/".$file_name;
     $query="INSERT into slider (sl_title,sl_image) VALUES('$title','$pathimg'); ";
      
        if(empty($errors)==true){
          
            if(is_dir("../upload/slider/".$file_name)==false){
                move_uploaded_file($file_tmp,"../upload/slider/".$file_name);
            }else{									// rename the file if another one exist
                $new_dir="../upload/slider/".$file_name.time();
                 rename($file_tmp,$new_dir) ;				
            }
		 mysql_query($query);			
        }else{
                print_r($errors);
        }
    }
	if(empty($error)){
		  echo "<script>alert('Record is inserted successfully!')</script>";
          echo "<script>window.open('bannerDetail.php','_self')</script>";
	}
}
	
           
 }
 

if(isset($_POST['submitedit']))//Edit record
{
	 $img=$_POST['img'];
	 $imgn=$_POST['imgn'];
	$iidm=$_POST['iidm'];
	$title=strtoupper($_POST['btitle']);
	
	 $f=$_FILES["filess"]["name"];
	if($f=="")
	{
	$image=$imgn;
	$imagepath=$img;
	}
	else
	{
	
	move_uploaded_file($_FILES["filess"]["tmp_name"],"../upload/banners/".$_FILES["filess"]["name"]);
	$image=$_FILES["filess"]["name"];
	$imagepath="../upload/banners/".$_FILES["filess"]["name"];
	}
	 $qryupdate="UPDATE panchal_banner SET BTITLE='$title',BIMAGENAME='$image',BIMAGEPATH='$imagepath' WHERE ID=$iidm";
	mysqli_query($con,$qryupdate);
 	if($qryupdate) {
                echo "<script>alert('Record is Update successfully!')</script>";
          		echo "<script>window.open('bannerDetail.php','_self')</script>";
            }
}

?>