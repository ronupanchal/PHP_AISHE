<?php
include("connection.php");

$a=$_REQUEST['countryID'];
					   //if(!empty($_POST["country_id"])){
					  $result2 = mysql_query('select * from state where flag=1 and c_id='.$a);
    

					  while($row=mysql_fetch_object($result2)){
                         echo "<option value='".$row->s_id."'>".$row->s_name."</option>";
						
                   }
				   
				  
				  ?>
				  