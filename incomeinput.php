<?php
/////////////////////////////////////////////////////////////////////////
//Sets timezone to EST
date_default_timezone_set("America/New_York");
//links to the external css file
echo "<link rel='stylesheet' type='text/css' href='style.css' />";
/////////////////////////////////////////////////////////////////////////
//Insert the name of your database and income table here
$databaseName = "test_database";
$incomeTableName = "income";
/////////////////////////////////////////////////////////////////////////
//Here we're connecting to the database (server:port/user/password/database)
$connection = mysqli_connect("localhost:3306", "root", "", "$databaseName");
if($connection === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
/////////////////////////////////////////////////////////////////////////
//Taking in the submitted data from the HTML form
$incomeDescription  = $_POST["incomeDescription"];
$incomeType  = $_POST["incomeType"];
$incomeGrossAmount  = $_POST["incomeGrossAmount"];
$incomeNetAmount  = $_POST["incomeNetAmount"];
$incomeDate = date('Y-m-d', strtotime($_POST['incomeDate']));
$incomeComments  = $_POST["incomeComments"];
/////////////////////////////////////////////////////////////////////////
//Here we're trimming whitespace and setting all inputs to lowercase
$trimmedIncomeDescription = trim($incomeDescription);
$trimmedIncomeType = trim($incomeType);
$trimmedIncomeGrossAmount = trim($incomeGrossAmount);
$trimmedIncomeNetAmount = trim($incomeNetAmount);
$trimmedIncomeDate = trim($incomeDate);
$trimmedIncomeComments = trim($incomeComments);

$strIncomeDescription = strtolower($trimmedIncomeDescription);
$strIncomeType = strtolower($trimmedIncomeType);
$decIncomeGrossAmount = strtolower($trimmedIncomeGrossAmount);
$decIncomeNetAmount = strtolower($trimmedIncomeNetAmount);
$strIncomeDate = strtolower($trimmedIncomeDate);
$strIncomeComments = strtolower($trimmedIncomeComments);
/////////////////////////////////////////////////////////////////////////
//This drops the table and all data in it. Very destructive.
/*
$sql = "DROP TABLE $incomeTableName";
mysqli_query($connection, $sql);
*/
/////////////////////////////////////////////////////////////////////////
//Creates the table for income data if it doesn't already exist
$sql = "CREATE TABLE IF NOT EXISTS $incomeTableName (incomeid INT AUTO_INCREMENT PRIMARY KEY,
incomeDescription varchar(200),
incomeType varchar(30),
incomeDate date,
incomeGrossAmount decimal(8,2),
incomeNetAmount decimal(8,2)
incomeComments varchar(200));";
$result = mysqli_query($connection, $sql);
/////////////////////////////////////////////////////////////////////////
//This is the inserts into the database with the data from the form
$sql = "INSERT INTO $incomeTableName (incomeDescription, incomeType, incomeDate, incomeGrossAmount, incomeNetAmount, incomeComments) 
VALUES('$strIncomeDescription', '$strIncomeType', '$strIncomeDate', '$decIncomeGrossAmount', '$decIncomeNetAmount', '$strIncomeComments')";
$res = mysqli_query($connection,$sql)
or die("Didn't successfully insert".mysqli_connect_error());
/////////////////////////////////////////////////////////////////////////
//This successfully prints the most recent insertion into the table
$sql = "SELECT * FROM $incomeTableName ORDER BY incomeid DESC LIMIT 1";
$res = mysqli_query($connection,$sql);

if(mysqli_num_rows($res)<1)
{
print "Error, there are no rows in the income database.";
echo "<br>";
}
else
{
echo "<br>";
echo "This is the most recent income input:";
echo "<br>";
print "<center><table border=3pt><tr> 
<td>Income ID</td> 
<td>Income Description</td> 
<td>Income Type</td> 
<td>Income Date</td> 
<td>Income Gross</td>
<td>Income Net</td>
<td>Income Comments</td> </tr>";
while($row = mysqli_fetch_array($res))
{
    print "<tr> <td>".$row['incomeid']."</td><td>".$row['incomeDescription']."</td> <td>".$row['incomeType']."</td> <td>".$row['incomeDate']."</td>
    <td>".$row['incomeGrossAmount']."</td> <td>".$row['incomeNetAmount']."</td> <td>".$row['incomeComments']."</td>  </tr>";
}
print "</table></center>";
}
////////////////////////////////////////////////////////////////////
//Close the database connection
mysqli_close($connection);
?>