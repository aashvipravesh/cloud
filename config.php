<?php
 // database connection setup section

 $host = 'localhost';
 $username = 'root';
 $password = '';
 $database = 'urls';
 
 $mysqli = new mysqli($host, $username, $password, $database);

 /* check connection */
	if ($mysqli->connect_errno) {
	    printf("Database Connect failed: %s\n", $mysqli->connect_error);
	    exit();
	}

	$check = $mysqli->query("SELECT * 
		FROM information_schema.tables
		WHERE table_schema = '".$database."' 
		    AND table_name = 'businesses'
		LIMIT 1;");
	if($check->num_rows==0){
		printf("Please create table `businesses`");
	    exit();
	}


?>