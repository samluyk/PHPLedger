<!doctype html>
<!--
/////////////////////////////////////////////////////////////////////////
This page allows us to globally create variables and information

It is not currently used
/////////////////////////////////////////////////////////////////////////
-->
<html>
<head>
<meta charset='UTF-8'/>
<meta name='viewport'
      content='width=device-width, initial-scale=1.0, maximum-scale=1.0' />
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<title>Financial Logger</title>

<body>
<center>
<h1>Program Configuration</h1>
<hr class="new1">
</html>
<?php
date_default_timezone_set("America/New_York");
$sqlhost = "localhost";
$sqlport = "3308";
$sqluser = "root";
$sqlpass = "";
$databaseName = "test_database";
$expenseTableName = "expenses";
$incomeTableName = "income";
/////////////////////////////////////////////////////////////////////////
//Were connecting to the database (server:port/user/password/database)
$connection = mysqli_connect("localhost:3308", "root", "", "test_database");
if($connection === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
/////////////////////////////////////////////////////////////////////////
//test backup
//Close the database connection
mysqli_close($connection);
?>