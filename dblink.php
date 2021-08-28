<?php
	$con=mysqli_connect("localhost:3306","root","password");
	if(!$con)
	{
		die('couldnt connect:'.mysql_error());
	}


	$databasename="MartVilla";
	$db_selected=mysqli_select_db($con,$databasename);


	if(!$db_selected)
	{
		die("Can't use $databasename:".mysql_error());
	}
?>