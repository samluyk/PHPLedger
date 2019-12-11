<!doctype html>
<!--
/////////////////////////////////////////////////////////////////////////
This page allows us to globally create variables and information
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
/////////////////////////////////////////////////////////////////////////
//Were connecting to the database (server:port/user/password/database)
$connection = mysqli_connect("localhost:3306", "root", "", "test_database");
if($connection === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
/////////////////////////////////////////////////////////////////////////

//Close the database connection
mysqli_close($connection);
?>