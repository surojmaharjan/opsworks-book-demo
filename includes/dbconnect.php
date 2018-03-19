<?php

// CONNECT TO THE DATABASE
$DB_NAME = 'napalayatravels';//'opsworks_book_demo';
$DB_HOST = '172.31.17.39';//'172.31.87.176'; // CHANGE THIS TO YOUR OPSWORKS MYSQL SERVER PRIVATE IP ADDRESS
$DB_USER = 'root'; // KEEP THIS IN PLACE AS PER CHAPTER 4 
$DB_PASS = 'luldi2hp56'; //'8ePO2O8E0UHG91975I3k'; // KEEP THIS IN PLACE AS PER CHAPTER 4
					
$mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
				
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

?>
