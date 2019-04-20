<?php 
include("connection.php");

if(isset($_POST['submita']))//Add record
{
	$code_of_college=$_POST['codeofinst'];
	$name_of_college=strtoupper($_POST['nameofinst']);
	$aishe_code=strtoupper($_POST['codeofaishe']);
	$postal_address_line1=strtoupper($_POST['address1']);
	$postal_address_line2=strtoupper($_POST['address2']);
	$country=strtoupper($_POST['country']);
	$state=strtoupper($_POST['statename']);
	$district=strtoupper($_POST['districtname']);
	$pin_code=$_POST['pincode'];
	$web_site=strtoupper($_POST['website']);
	$year_of_establishment=$_POST['estyear'];
	$name_of_principal=strtoupper($_POST['nameofprincipal']);
	$principal_contactno=strtoupper($_POST['contactno']);
	$principal_email_id=strtoupper($_POST['emailid']);
	$name_of_collage_nodal_officer_for_aishe=strtoupper($_POST['nameofnodelofficer']);
	$designation_of_nodel_officer=strtoupper($_POST['designation']);
	$telephone_no_of_nodel_officer=strtoupper($_POST['telephoneno']);
	$mobile_no_of_nodel_officer=strtoupper($_POST['mobileno']);
	$email_id_of_nodel_officer=strtoupper($_POST['nodelemail']);
	$name_of_university_to_which_affiliated=strtoupper($_POST['nameofuniversity']);
	$university_type=strtoupper($_POST['typeofuniversity']);
	$the_statutory_body_through_which_recognized=strtoupper($_POST['nameofstatutorybody']);
	$year_of_affiliation_with_university=strtoupper($_POST['yearaffiliation']);
	$location_of_the_college=strtoupper($_POST['location']);
	$long=$_POST['longitude'];
	$lati=$_POST['latitude'];
	$level_of_course=strtoupper($_POST['course_level']);
	$type_of_college=strtoupper($_POST['typeofinstitution']);
	$management_of_college=strtoupper($_POST['typeofmanagement']);
	$course=strtoupper($_POST['coursename']);
	$pre_requesting_course=strtoupper($_POST['prerequesting']);
	$intake=$_POST['intake'];
	$fee=$_POST['fee'];
	
	//echo $code_of_college." ".$name_of_college." ".$aishe_code." ".$postal_address_line1." ".$postal_address_line2." ".$country." ".$state." ".$pin_code." ".$web_site." ".$year_of_establishment." ".$name_of_principal." ".$principal_contactno." ".$principal_email_id." ".$name_of_collage_nodal_officer_for_aishe." ".$designation_of_nodel_officer." ".$telephone_no_of_nodel_officer." ".$mobile_no_of_nodel_officer." ".$email_id_of_nodel_officer." ".$name_of_university_to_which_affiliated." ".$university_type." ".$the_statutory_body_through_which_recognized." ".$year_of_affiliation_with_university." ".$location_of_the_college." ".$long." ".$lati." ".$level_of_course." ".$type_of_college." ".$management_of_college." ".$course." ".$pre_requesting_course." ".$fee." ".$intake;
	//echo $code_of_college." ".$name_of_college." ".$aishe_code." ".$postal_address_line1." ".$postal_address_line2." ".$country." ".$state." ".$pin_code." ".$web_site." ".$year_of_establishment." ".$name_of_principal." ".$principal_contactno." ".$principal_email_id." ".$name_of_collage_nodal_officer_for_aishe." ".$designation_of_nodel_officer." ".$telephone_no_of_nodel_officer." ".$mobile_no_of_nodel_officer." ".$email_id_of_nodel_officer." ".$name_of_university_to_which_affiliated." ".$university_type." ".$the_statutory_body_through_which_recognized." ".$year_of_affiliation_with_university." ".$long." ".$lati." ".$level_of_course." ".$type_of_college." ".$management_of_college." ".$course." ".$pre_requesting_course." ".$fee." ".$intake;
 	
	
	//echo $ucode.$uname;
	 //$insertr = mysql_query("insert into college (code_of_college,name_of_college,aishe_code,postal_address_line1,postal_address_line2,country,state,district,pin_code,web_site,year_of_establishment,name_of_principal,principal_contactno,principal_email_id,name_of_collage_nodal_officer_for_aishe,designation_of_nodel_officer,telephone_no_of_nodel_officer,mobile_no_of_nodel_officer,email_id_of_nodel_officer,name_of_university_to_which_affiliated,university_type,the_statutory_body_through_which_recognized,year_of_affiliation_with_university,location_of_the_college,long,lati,level_of_course,type_of_college,management_of_college,course,pre-requesting_course,fee,intake)
	 //values($code_of_college,'$name_of_college','$aishe_code','$postal_address_line1','$postal_address_line2','$country','$state','$district','$pin_code','$web_site','$year_of_establishment','$name_of_principal','$principal_contactno','$principal_email_id','$name_of_collage_nodal_officer_for_aishe','$designation_of_nodel_officer','$telephone_no_of_nodel_officer','$mobile_no_of_nodel_officer','$email_id_of_nodel_officer','$name_of_university_to_which_affiliated','$university_type','$the_statutory_body_through_which_recognized','$year_of_affiliation_with_university','$location_of_the_college','$long','$lati','$level_of_course','$type_of_college','$management_of_college','$course','$pre_requesting_course','$fee','$intake')");
	 
	  $insertr = mysql_query("insert into college (code_of_college,name_of_college,aishe_code,postal_address_line1,postal_address_line2,country,state,district,pin_code,web_site,year_of_establishment,name_of_principal,principal_contactno,principal_email_id,name_of_collage_nodal_officer_for_aishe,designation_of_nodel_officer,telephone_no_of_nodel_officer,mobile_no_of_nodel_officer,email_id_of_nodel_officer,name_of_university_to_which_affiliated,university_type,the_statutory_body_through_which_recognized,year_of_affiliation_with_university,location_of_the_college,longi,lati,level_of_course,type_of_college,management_of_college,course,pre_requesting_course,fee,intake)
	 values($code_of_college,'$name_of_college','$aishe_code','$postal_address_line1','$postal_address_line2','$country','$state','$district','$pin_code','$web_site','$year_of_establishment','$name_of_principal','$principal_contactno','$principal_email_id','$name_of_collage_nodal_officer_for_aishe','$designation_of_nodel_officer','$telephone_no_of_nodel_officer','$mobile_no_of_nodel_officer','$email_id_of_nodel_officer','$name_of_university_to_which_affiliated','$university_type','$the_statutory_body_through_which_recognized','$year_of_affiliation_with_university','$location_of_the_college',$long,$lati,'$level_of_course','$type_of_college','$management_of_college','$course','$pre_requesting_course','$fee','$intake')");
	 
          if($insertr) {
                echo "<script>alert('Record is inserted successfully!')</script>";
          		echo "<script>window.open('mainaisheDetail.php','_self')</script>";
            }
 }
 if(isset($_POST['submitedit']))//Edit record
{
	echo $collagecode=$_POST['collagecode']; 	
	$code_of_college=$_POST['codeofinst'];	
	$name_of_college=strtoupper($_POST['nameofinst']);
	$aishe_code=strtoupper($_POST['codeofaishe']);
	$postal_address_line1=strtoupper($_POST['address1']);
	$postal_address_line2=strtoupper($_POST['address2']);
	$country=strtoupper($_POST['country']);
	$state=strtoupper($_POST['statename']);
	$district=strtoupper($_POST['districtname']);
	$pin_code=$_POST['pincode'];
	$web_site=strtoupper($_POST['website']);
	$year_of_establishment=$_POST['estyear'];
	$name_of_principal=strtoupper($_POST['nameofprincipal']);
	$principal_contactno=strtoupper($_POST['contactno']);
	$principal_email_id=strtoupper($_POST['emailid']);
	$name_of_collage_nodal_officer_for_aishe=strtoupper($_POST['nameofnodelofficer']);
	$designation_of_nodel_officer=strtoupper($_POST['designation']);
	$telephone_no_of_nodel_officer=strtoupper($_POST['telephoneno']);
	$mobile_no_of_nodel_officer=strtoupper($_POST['mobileno']);
	$email_id_of_nodel_officer=strtoupper($_POST['nodelemail']);
	$name_of_university_to_which_affiliated=strtoupper($_POST['nameofuniversity']);
	$university_type=strtoupper($_POST['typeofuniversity']);
	$the_statutory_body_through_which_recognized=strtoupper($_POST['nameofstatutorybody']);
	$year_of_affiliation_with_university=strtoupper($_POST['yearaffiliation']);
	$location_of_the_college=strtoupper($_POST['location']);
	$long=$_POST['longitude'];
	$lati=$_POST['latitude'];
	$level_of_course=strtoupper($_POST['course_level']);
	$type_of_college=strtoupper($_POST['typeofinstitution']);
	$management_of_college=strtoupper($_POST['typeofmanagement']);
	$course=strtoupper($_POST['coursename']);
	$pre_requesting_course=strtoupper($_POST['prerequesting']);
	$intake=$_POST['intake'];
	$fee=$_POST['fee'];
	
$result ="update college set 
								name_of_college='".$name_of_college."',
								aishe_code='".$aishe_code."',
								postal_address_line1='".$postal_address_line1."',
								postal_address_line2='".$postal_address_line2."',
								country='".$country."',
								state='".$state."',
								district='".$district."',
								pin_code='".$pin_code."',
								web_site='".$web_site."',
								year_of_establishment='".$year_of_establishment."',
								name_of_principal='".$name_of_principal."',
								principal_contactno='".$principal_contactno."',
								principal_email_id='".$principal_email_id."',
								name_of_collage_nodal_officer_for_aishe='".$name_of_collage_nodal_officer_for_aishe."',
								designation_of_nodel_officer='".$designation_of_nodel_officer."',
								telephone_no_of_nodel_officer='".$telephone_no_of_nodel_officer."',
								mobile_no_of_nodel_officer='".$mobile_no_of_nodel_officer."',
								email_id_of_nodel_officer='".$email_id_of_nodel_officer."',
								name_of_university_to_which_affiliated='".$name_of_university_to_which_affiliated."',
								university_type='".$university_type."',
								the_statutory_body_through_which_recognized='".$the_statutory_body_through_which_recognized."',
								year_of_affiliation_with_university='".$year_of_affiliation_with_university."',
								location_of_the_college='".$location_of_the_college."',
								long='".$long."',
								lati='".$lati."',
								level_of_course='".$level_of_course."',
								type_of_college='".$type_of_college."',
								management_of_college='".$management_of_college."',
								course='".$course."',
								pre_requesting_course='".$pre_requesting_course."',
								intake='".$intake."',
								fee='".$fee."'										
					where  code_of_college= ".$collagecode;
										
mysql_query($result);

 if($result) {
                echo "<script>alert('Record is Update successfully!')</script>";
          		echo "<script>window.open('mainaisheDetail.php','_self')</script>";
            }
}
 ?>