<?php
    //including the database connection file
    include("connection.php");
	
if(isset($_POST['submit']))//Add record
{	
	
	 $ename=strtoupper($_POST['ename']);
	$edes=strtoupper($_POST['edes']);
	
	//$ed=$_POST['eventnum'];
	
	/* if(isset($_FILES['files'])){
   $errors= array();
	foreach($_FILES['files']['tmp_name'] as $key => $tmp_name ){
		$file_name = $key.$_FILES['files']['name'][$key];
		$file_size =$_FILES['files']['size'][$key];
		$file_tmp =$_FILES['files']['tmp_name'][$key];
		$file_type=$_FILES['files']['type'][$key];	
		
        if($file_size > 2097152){
			$errors[]='File size must be less than 2 MB';
			
        }		
	 $pathimg="../upload/events/".$file_name;
     $query="INSERT into panchal_events (EVENTNAME,EVENTDESCRIPTION,EVENTIMAGENAME,EVENTIMAGE) VALUES('$ename','$edes','$file_name','$pathimg'); ";
      
        if(empty($errors)==true){
          
            if(is_dir("../upload/events/".$file_name)==false){
                move_uploaded_file($file_tmp,"../upload/events/".$file_name);
            }else{									// rename the file if another one exist
                $new_dir="../upload/events/".$file_name.time();
                 rename($file_tmp,$new_dir) ;				
            }
		 mysqli_query($con,$query);			
        }else{
                print_r($errors);
        }
    }*/
	//if(empty($error)){
		//  echo "<script>alert('Record is inserted successfully!')</script>";
       //echo "<script>window.open('eventdetail.php','_self')</script>";
	//}
	//mysqli_query($con,$qryupdate);
	//$img = $_FILES['img'];

if(!empty($files))
{
    $img_desc = reArrayFiles($files);
    //print_r($img_desc);
    
    foreach($img_desc as $val)
    {
        $newname = date('YmdHis',time()).mt_rand().'.jpg';
		$imgpath='../upload/events/'.$newname;
        move_uploaded_file($val['tmp_name'],$imgpath);
    

$query="INSERT into panchal_events (EVENTNAME,EVENTDESCRIPTION,EVENTIMAGENAME,EVENTIMAGE) VALUES('$ename','$edes','$newname','$imgpath'); ";
mysqli_query($con,$query);
}
 	if($query) {
                echo "<script>alert('Record is inserted successfully!')</script>";
          		echo "<script>window.open('eventdetail.php','_self')</script>";
            }
	

	
           
		}
	}
 
if(isset($_POST['submitedit']))//Edit record
{
	 $img=$_POST['img'];// path img
	 $imgn=$_POST['imgn'];//name img
	$iidm=$_POST['iidm'];//id
	$title=strtoupper($_POST['title']);
	$edes=$_POST['edes'];
	$eventdate=$_POST['eventnum'];
	 $f=$_FILES["filess"]["name"];
	if($f=="")
	{
	$image=$imgn;
	$imagepath=$img;
	}
	else
	{
	
	move_uploaded_file($_FILES["filess"]["tmp_name"],"../upload/events/".$_FILES["filess"]["name"]);
	$image=$_FILES["filess"]["name"];
	$imagepath="../upload/events/".$_FILES["filess"]["name"];
	}
	 $qryupdate="UPDATE panchal_samaj_events SET EVENTNAME='$title',EVENTDESCRIPTION='$edes',EVENTIMAGE='$imagepath',EVENTIMAGENAME='$image',EVENTCONTACT='$eventdate' WHERE ID=$iidm";
	mysqli_query($con,$qryupdate);
 	if($qryupdate) {
                echo "<script>alert('Record is Update successfully!')</script>";
          		echo "<script>window.open('eventdetail.php','_self')</script>";
            }
}




function reArrayFiles($file)
{
    $file_ary = array();
    $file_count = count($file['name']);
    $file_key = array_keys($file);
    
    for($i=0;$i<$file_count;$i++)
    {
        foreach($file_key as $val)
        {
            $file_ary[$i][$val] = $file[$val][$i];
        }
    }
    return $file_ary;
}




?>