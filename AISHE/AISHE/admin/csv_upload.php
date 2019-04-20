<?php
	include("connection.php");
	if (isset($_POST["import"]))
	{
		$fileName = $_FILES["file"]["tmp_name"];
    
		if ($_FILES["file"]["size"] > 0)
		{
        
			$file = fopen($fileName, "r");
        
			while (($column = fgetcsv($file, 10000, ",")) !== FALSE)
			{
				  echo $query = "insert into teacherinformation (name_of_the_employee,designation,gender,aadhar_number,date_of_birth,social_category,religious_community,pwd,nature_of_appointment,selection_mode,date_of_joining_institution,date_of_joining_teaching_profession,highest_qualification,eligibility_qualification,broad_discipline_group_category,broad_discipline,years_spent_exclusively_in_other_job,job_status,date_of_change_in_status,email,mobile)
							values ('" . $column[0] . "','" . $column[1] . "','" . $column[2] . "','" . $column[3] . "','" . $column[4] . "','" . $column[5] . "','" . $column[6] . "','" . $column[7] . "','" . $column[8] . "','" . $column[9] . "','" . $column[10] . "','" . $column[11] . "','" . $column[12] . "','" . $column[13] . "','" . $column[14] . "','" . $column[15] . "','" . $column[16] . "','" . $column[17] . "','" . $column[18] . "','" . $column[19] . "','" . $column[20] . "')";


				$result = mysql_query($query);
            
				if (! empty($result))
				{
					$type = "success";
					$message = "CSV Data Imported into the Database";
					echo "<script>window.open('teacherinfoDetail.php','_self')</script>";
				}
				else 
				{
					$type = "error";
					$message = "Problem in Importing CSV Data";
				}
			}
		}
	}
	
?>