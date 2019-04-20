<?php
include("connection.php");

	
    $a=$_REQUEST['stateID'];
	
					   //if(!empty($_POST["country_id"])){
					  $result2 = mysql_query('select * from district where flag=1 and s_id='.$a);
//print_r($result2);                      

						while($row=mysql_fetch_object($result2)){
                         echo "<option value='".$row->d_id."'>".$row->d_name."</option>";
						
                   }
				   
				  
				  ?>