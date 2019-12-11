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
<h1>Categories</h1>
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
//Recieving the data from the HTML form
$userAddExpenseCategory  = $_POST["useraddexpensecategory"];
$userDeleteExpenseCategory  = $_POST["userdeleteexpensecategory"];
$userAddIncomeCategory  = $_POST["useraddincomecategory"];
$userDeleteIncomeCategory  = $_POST["userdeleteincomecategory"];
/////////////////////////////////////////////////////////////////////////
//Here we're trimming whitespace on inputs and setting all inputs to lowercase
$trimmeduserAddExpenseCategory = trim($userAddExpenseCategory);
$strUserAddExpenseCategory = strtolower($trimmeduserAddExpenseCategory);
//
$trimmeduserDeleteExpenseCategory = trim($userDeleteExpenseCategory);
$strUserDeleteExpenseCategory = strtolower($trimmeduserDeleteExpenseCategory);
//
$trimmeduserAddIncomeCategory = trim($userAddIncomeCategory);
$strUserAddIncomeCategory = strtolower($trimmeduserAddIncomeCategory);
//
$trimmeduserDeleteIncomeCategory = trim($userDeleteIncomeCategory);
$strUserDeleteIncomeCategory = strtolower($trimmeduserDeleteIncomeCategory);
/////////////////////////////////////////////////////////////////////////
//Prints the trimmed and lowercased user input for debugging
print "<br>";
print "Testing:";
print "<br>";
print $strUserAddExpenseCategory;
print "<br>";
print $strUserDeleteExpenseCategory;
print "<br>";
print $strUserAddIncomeCategory;
print "<br>";
print $strUserDeleteIncomeCategory;
print "<br>";
/////////////////////////////////////////////////////////////////////////
//Close the database connection
mysqli_close($connection);
?>