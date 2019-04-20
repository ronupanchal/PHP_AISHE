<?php
$myHost = "localhost"; // use your real host name
$myUserName = "root";   // use your real login user name
$myPassword = "";   // use your real login password
$myDataBaseName = "db_aishe"; // use your real database name

//$con = mysqli_connect( "$myHost", "$myUserName", "$myPassword", "$myDataBaseName" );
$con=mysql_connect("$myHost", "$myUserName", "$myPassword");
	if(!$con)
	{
		exit("database not connected");
	}
	mysql_select_db("db_aishe");


// when got here, successfully connected to database*/
?>
