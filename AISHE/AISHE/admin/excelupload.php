<?php
include("connection.php");
include('spreadsheet-reader-master/php-excel-reader/excel_reader2.php');
include('spreadsheet-reader-master/SpreadsheetReader.php');
echo "hi";
if (isset($_POST["import"]))
{
    
   
  $allowedFileType = ['application/vnd.ms-excel','text/xls','text/xlsx','application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'];
  
  if(in_array($_FILES["file"]["type"],$allowedFileType)){

        $targetPath = '../upload/'.$_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'], $targetPath);
        
        $Reader = new SpreadsheetReader($targetPath);
        
        $sheetCount = count($Reader->sheets());
        for($i=0;$i<$sheetCount;$i++)
        {
            
            $Reader->ChangeSheet($i);
            
            while($row = mysql_fetch_assoc($Reader))
            {
				
				
				//$name_of_the_employee=strtoupper($_POST['ename']);
				$name_of_the_employee = "";
                if(isset($Row[0])) {
                    $name_of_the_employee = mysql_real_escape_string($Row[0]);
                }
				
				//$designation=strtoupper($_POST['desi']);
				$designation = "";
                if(isset($Row[1])) {
                    $designation = mysql_real_escape_string($Row[1]);
                }
				
				//$gender=strtoupper($_POST['gen']);
				$gender = "";
                if(isset($Row[2])) {
                    $gender = mysql_real_escape_string($Row[2]);
                }
				
				//$aadhar_number=strtoupper($_POST['anumber']);
				$aadhar_number = "";
                if(isset($Row[3])) {
                    $aadhar_number = mysql_real_escape_string($Row[3]);
                }
				
				//$date_of_birth=strtoupper($_POST['birth']);
				$date_of_birth = "";
                if(isset($Row[4])) {
                    $date_of_birth = mysql_real_escape_string($Row[4]);
                }
				
				//$social_category=strtoupper($_POST['scategory']);
				$social_category = "";
                if(isset($Row[5])) {
                    $social_category = mysql_real_escape_string($Row[5]);
                }
				
				//$religious_community=strtoupper($_POST['rcommunity']);
				$religious_community = "";
                if(isset($Row[6])) {
                    $religious_community = mysql_real_escape_string($Row[6]);
                }
				
				//$pwd=$_POST['pwd'];
				$pwd = "";
                if(isset($Row[7])) {
                    $pwd = mysql_real_escape_string($Row[7]);
                }
				
				//$nature_of_appointment=strtoupper($_POST['nappo']);
				$nature_of_appointment = "";
                if(isset($Row[8])) {
                    $nature_of_appointment = mysql_real_escape_string($Row[8]);
                }
				
				//$selection_mode=$_POST['smode'];
				$selection_mode = "";
                if(isset($Row[9])) {
                    $selection_mode = mysql_real_escape_string($Row[9]);
                }
				
				//$date_of_joining_institution=strtoupper($_POST['dofins']);
				$date_of_joining_institution = "";
                if(isset($Row[10])) {
                    $date_of_joining_institution = mysql_real_escape_string($Row[10]);
                }
				
				//$date_of_joining_teaching_profession=strtoupper($_POST['doftp']);
				$date_of_joining_teaching_profession = "";
                if(isset($Row[11])) {
                    $date_of_joining_teaching_profession = mysql_real_escape_string($Row[11]);
                }
				
				//$highest_qualification=strtoupper($_POST['hq']);
				$highest_qualification = "";
                if(isset($Row[12])) {
                    $highest_qualification = mysql_real_escape_string($Row[12]);
                }
				
				//$eligibility_qualification=strtoupper($_POST['equa']);
				$eligibility_qualification = "";
                if(isset($Row[13])) {
                    $eligibility_qualification = mysql_real_escape_string($Row[13]);
                }
				
				//$broad_discipline_group_category=strtoupper($_POST['bdgcat']);
				$broad_discipline_group_category = "";
                if(isset($Row[14])) {
                    $broad_discipline_group_category = mysql_real_escape_string($Row[14]);
                }
				
				//$broad_discipline=strtoupper($_POST['bdgroup']);
				$broad_discipline = "";
                if(isset($Row[15])) {
                    $broad_discipline = mysql_real_escape_string($Row[15]);
                }
				
				//$years_spent_exclusively_in_other_job=strtoupper($_POST['noyeart']);
				$years_spent_exclusively_in_other_job = "";
                if(isset($Row[16])) {
                    $years_spent_exclusively_in_other_job = mysql_real_escape_string($Row[16]);
                }
				
				//$job_status=strtoupper($_POST['jstatus']);
				$job_status = "";
                if(isset($Row[17])) {
                    $job_status = mysql_real_escape_string($Row[17]);
                }
				
				//$date_of_change_in_status=strtoupper($_POST['datecstatus']);
				$date_of_change_in_status = "";
                if(isset($Row[18])) {
                    $date_of_change_in_status = mysql_real_escape_string($Row[18]);
                }
				
				//$email=strtoupper($_POST['email']);
				$email = "";
                if(isset($Row[19])) {
                    $email = mysql_real_escape_string($Row[19]);
                }
				
				//$mobile=strtoupper($_POST['mnum']);
				$mobile = "";
                if(isset($Row[20])) {
                    $mobile = mysql_real_escape_string($Row[20]);
                }
				
          
                
                
                if (!empty($name_of_the_employee) || !empty($designation) || !empty($gender) || !empty($date_of_birth) || !empty($social_category) || !empty($religious_community) || !empty($pwd) || !empty($nature_of_appointment) || !empty($selection_mode) || !empty($date_of_joining_institution) || !empty($date_of_joining_teaching_profession) || !empty($highest_qualification) || !empty($eligibility_qualification) || !empty($broad_discipline_group_category) || !empty($broad_discipline) || !empty($years_spent_exclusively_in_other_job) || !empty($job_status) || !empty($date_of_change_in_status) || !empty($email) || !empty($mobile) ) {
                    $query = "insert into teacherinformation (name_of_the_employee,designation,gender,aadhar_number,date_of_birth,social_category,religious_community,pwd,nature_of_appointment,selection_mode,date_of_joining_institution,date_of_joining_teaching_profession,highest_qualification,eligibility_qualification,broad_discipline_group_category,broad_discipline,years_spent_exclusively_in_other_job,job_status,date_of_change_in_status,email,mobile)
													values('$name_of_the_employee','$designation','$gender','$aadhar_number','$date_of_birth','$social_category','$religious_community','$pwd','$nature_of_appointment','$selection_mode','$date_of_joining_institution','$date_of_joining_teaching_profession','$highest_qualification','$eligibility_qualification','$broad_discipline_group_category','$broad_discipline','$years_spent_exclusively_in_other_job','$job_status','$date_of_change_in_status','$email','$mobile')");
	
                    
					die; exit;
					$result = mysql_query($query);
                
                    if (! empty($result)) {
                        $type = "success";
                        $message = "Excel Data Imported into the Database";
                    } else {
                        $type = "error";
                        $message = "Problem in Importing Excel Data";
                    }
                }
             }
        
         }
  }
  else
  { 
        $type = "error";
        $message = "Invalid File Type. Upload Excel File.";
  }
}
?>