<!doctype html>
<!--
/////////////////////////////////////////////////////////////////////////
This page allows us to edit the categories the user can choose from
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
<h1>Edit Categories</h1>
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
/////////////////////////////////////////////////////////////////////////
//This drops the table and all data in it. Very destructive.
/*
$sql = "DROP TABLE tablename";
mysqli_query($connection, $sql);
*/
/////////////////////////////////////////////////////////////////////////
//Creates the table and the columns for the user creatable expense categories
$sql = "CREATE TABLE IF NOT EXISTS `test_database`.`user_expense_categories` 
( `expense_category_id` SMALLINT NOT NULL AUTO_INCREMENT ,
 `user_expense_category` VARCHAR(60) NOT NULL ,
  PRIMARY KEY (`expense_category_id`)) ENGINE = MyISAM; ";
$result = mysqli_query($connection, $sql);
/////////////////////////////////////////////////////////////////////////
//Creates the table and the columns for the user creatable income categories
$sql = "CREATE TABLE IF NOT EXISTS `test_database`.`user_income_categories` 
( `income_category_id` SMALLINT NOT NULL AUTO_INCREMENT ,
 `user_income_category` VARCHAR(60) NOT NULL ,
  PRIMARY KEY (`income_category_id`)) ENGINE = MyISAM; ";
$result = mysqli_query($connection, $sql);
////////////////////////////////////////////////////////////////////
//Table views:
//The following block of code prints all the information in the user_income_categories table, for testing at the moment.
$sql = "SELECT * FROM user_income_categories";
$res = mysqli_query($connection,$sql);
if(mysqli_num_rows($res)<1)
{
print "There are no income categories in the database.";
echo "<br>";
}
else
{
echo "<br>";
print "The complete income categories table looks like:";
echo "<br>";
print "<center><table border=3pt><tr> 
<td>Income Category ID</td> 
<td>Income Category</td></tr>";
while($row = mysqli_fetch_array($res))
{
    print "<tr> <td>".$row['income_category_id']."</td> <td>".$row['user_income_category']."</td> </tr>";
}
print "</table></center>";
}
////////////////////////////////////////////////////////////////////
//The following block of code prints all the information in the user_expense_categories table, for testing at the moment.
$sql = "SELECT * FROM user_expense_categories";
$res = mysqli_query($connection,$sql);
if(mysqli_num_rows($res)<1)
{
print "There are no expense categories in the database.";
echo "<br>";
}
else
{
echo "<br>";
print "The complete expense categories table looks like:";
echo "<br>";
print "<center><table border=3pt><tr> 
<td>Expense Category ID</td> 
<td>Expense Category</td></tr>";
while($row = mysqli_fetch_array($res))
{
    print "<tr> <td>".$row['expense_category_id']."</td> <td>".$row['user_expense_category']."</td> </tr>";
}
print "</table></center>";
}
//Close the database connection
mysqli_close($connection);
?>