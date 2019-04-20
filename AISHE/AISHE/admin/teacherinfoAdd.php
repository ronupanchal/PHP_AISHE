<?php 
include("connection.php");


if(isset($_POST['submita']))//Add record
{
	$name_of_the_employee=strtoupper($_POST['ename']);
	$designation=strtoupper($_POST['desi']);
	$gender=strtoupper($_POST['gen']);
	$aadhar_number=strtoupper($_POST['anumber']);
	$date_of_birth=strtoupper($_POST['birth']);
	$social_category=strtoupper($_POST['scategory']);
	$religious_community=strtoupper($_POST['rcommunity']);
	$pwd=$_POST['pwd'];
	$nature_of_appointment=strtoupper($_POST['nappo']);
	$selection_mode=$_POST['smode'];
	$date_of_joining_institution=strtoupper($_POST['dofins']);
	$date_of_joining_teaching_profession=strtoupper($_POST['doftp']);
	$highest_qualification=strtoupper($_POST['hq']);
	$eligibility_qualification=strtoupper($_POST['equa']);
	$broad_discipline_group_category=strtoupper($_POST['bdgcat']);
	$broad_discipline=strtoupper($_POST['bdgroup']);
	$years_spent_exclusively_in_other_job=strtoupper($_POST['noyeart']);
	$job_status=strtoupper($_POST['jstatus']);
	$date_of_change_in_status=strtoupper($_POST['datecstatus']);
	$email=strtoupper($_POST['email']);
	$mobile=strtoupper($_POST['mnum']);

	
	//echo $cinst." ".$instname." ".$aishecode." ".$ad1." ".$ad2." ".$state." ".$country." ".$district." ".$pincode." ".$nameofuni." ".$typeofarea." ".$levelofcourse;
	//echo $country_name." ".$name_of_the_employee." ".$designation." ".$gender." ".$aadhar_number." ".$date_of_birth." ".$social_category." ".$religious_community." ".$pwd." ".$nature_of_appointment." ".$selection_mode." ".$date_of_joining_institution." ".$date_of_joining_teaching_profession." ".$highest_qualification." ".$eligibility_qualification." ".$broad_discipline_group_category." ".$broad_discipline." ".$years_spent_exclusively_in_other_job." ".$job_status." ".$date_of_change_in_status." ".$email." ".$mobile;
	//die;
	//echo $ucode.$uname;
	 //$insertarea = "INSERT INTO panchal_samaj_areas (AREA) VALUES ('".$area."')";
	 
	 //$insertarea = mysql_query("insert into teacherinformation (country_name,name_of_the_employee,designation,gender,aadhar_number,date_of_birth,social_category,religious_community,pwd,nature_of_appointment,selection_mode,date_of_joining_institution,date_of_joining_teaching_profession,highest_qualification,eligibility_qualification,broad_discipline_group_category,broad_discipline,years_spent_exclusively_in_other_job,job_status,date_of_change_in_status,email,mobile)
	 //values('$country_name','$name_of_the_employee','$designation','$gender','$aadhar_number','$date_of_birth','$social_category','$religious_community','$pwd','$nature_of_appointment','$selection_mode','$date_of_joining_institution','$date_of_joining_teaching_profession','$highest_qualification','$eligibility_qualification','$broad_discipline_group_category','$broad_discipline','$years_spent_exclusively_in_other_job','$job_status','$date_of_change_in_status','$email','$mobile'");
	 $insertarea = mysql_query("insert into teacherinformation (name_of_the_employee,designation,gender,aadhar_number,date_of_birth,social_category,religious_community,pwd,nature_of_appointment,selection_mode,date_of_joining_institution,date_of_joining_teaching_profession,highest_qualification,eligibility_qualification,broad_discipline_group_category,broad_discipline,years_spent_exclusively_in_other_job,job_status,date_of_change_in_status,email,mobile)
													values('$name_of_the_employee','$designation','$gender','$aadhar_number','$date_of_birth','$social_category','$religious_community','$pwd','$nature_of_appointment','$selection_mode','$date_of_joining_institution','$date_of_joining_teaching_profession','$highest_qualification','$eligibility_qualification','$broad_discipline_group_category','$broad_discipline','$years_spent_exclusively_in_other_job','$job_status','$date_of_change_in_status','$email','$mobile')");
													
				
     
	 print_r($insertarea);				
	//mysql_query($insertarea);
	 if($insertarea) {
                echo "<script>alert('Record is inserted successfully!')</script>";
          		echo "<script>window.open('teacherinfoDetail.php','_self')</script>";
            }
 }
if(isset($_POST['submitedit']))//Edit record
{
	
	echo $teachinfocode=$_POST['teachinfocode']; 	
	
	$name_of_the_employee=strtoupper($_POST['ename']);
	
	$designation=strtoupper($_POST['desi']);
	$gender=strtoupper($_POST['gen']);
	$aadhar_number=strtoupper($_POST['anumber']);
	$date_of_birth=strtoupper($_POST['birth']);
	$social_category=strtoupper($_POST['scategory']);
	$religious_community=strtoupper($_POST['rcommunity']);
	$pwd=$_POST['pwd'];
	$nature_of_appointment=strtoupper($_POST['nappo']);
	$selection_mode=$_POST['smode'];
	$date_of_joining_institution=strtoupper($_POST['dofins']);
	$date_of_joining_teaching_profession=strtoupper($_POST['doftp']);
	$highest_qualification=strtoupper($_POST['hq']);
	$eligibility_qualification=strtoupper($_POST['equa']);
	$broad_discipline_group_category=strtoupper($_POST['bdgcat']);
	$broad_discipline=strtoupper($_POST['bdgroup']);
	$years_spent_exclusively_in_other_job=strtoupper($_POST['noyeart']);
	$job_status=strtoupper($_POST['jstatus']);
	$date_of_change_in_status=strtoupper($_POST['datecstatus']);
	$email=strtoupper($_POST['email']);
	$mobile=strtoupper($_POST['mnum']);
	
	$result ="update teacherinformation set name_of_the_employee='".$name_of_the_employee."',
											designation='".$designation."',
											gender='".$gender."',
											aadhar_number='".$aadhar_number."',
											date_of_birth='".$date_of_birth."',
											social_category='".$social_category."',
											religious_community='".$religious_community."',
											pwd='".$pwd."',
											nature_of_appointment='".$nature_of_appointment."',
											selection_mode='".$selection_mode."',
											date_of_joining_institution='".$date_of_joining_institution."',
											date_of_joining_teaching_profession='".$date_of_joining_teaching_profession."',
											highest_qualification='".$highest_qualification."',
											eligibility_qualification='".$eligibility_qualification."',
											broad_discipline_group_category='".$broad_discipline_group_category."',
											broad_discipline='".$broad_discipline."',
											years_spent_exclusively_in_other_job='".$years_spent_exclusively_in_other_job."',
											job_status='".$job_status."',
											date_of_change_in_status='".$date_of_change_in_status."',
											email='".$email."',
											mobile= '".$mobile."'
					where sl_no = ".$teachinfocode;
										
mysql_query($result);
 if($result) {
                echo "<script>alert('Record is Update successfully!')</script>";
          		echo "<script>window.open('teacherinfoDetail.php','_self')</script>";
            }
}
?>