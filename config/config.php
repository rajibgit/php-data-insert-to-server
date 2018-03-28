<?php 

 define("HOSTNAME", "localhost");
 define("USERNAME", "root");
 define("PASSWORD", "");
 define("DBNAME", "phpapp"); 
 
 
$con = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DBNAME)or die("cannot connect to the database"); 
if($con){
	// echo "your database connect successfully ";
}



?>