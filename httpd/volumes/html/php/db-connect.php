<?php

$dbName = "tins";
$dbUser = "root";
$dbUserpass = "";
$host = "sardine_mysql";

//Database Connection
$dbConnection = mysqli_connect(hostname: $host,
			       username: $dbUser,
			       password: $dbUserpass,
			       database: $dbName);

//Verify that the database connection was either successful or not
if (! $dbConnection) {
  die("Database connection failed.");
}
