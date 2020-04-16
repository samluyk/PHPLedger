<?php
/////////////////////////////////////////////////////////////////////////
//links to the external css file
echo "<link rel='stylesheet' type='text/css' href='style.css' />";
/////////////////////////////////////////////////////////////////////////
//Insert the name of your database and income table here
$databaseName = "test_database";
$incomeTableName = "income";
/////////////////////////////////////////////////////////////////////////
//Here we're connecting to the sql server (server:port/user/password)
$connection = mysqli_connect("localhost:3308", "root", "");
if($connection === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
/////////////////////////////////////////////////////////////////////////
//Create the database if it doesn't exist already
$sql = "CREATE DATABASE IF NOT EXISTS `$databaseName`
    DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci";
$result = mysqli_query($connection, $sql);
/////////////////////////////////////////////////////////////////////////
//Here we're connecting to the database (server:port/user/password/database)
$connection = mysqli_connect("localhost:3308", "root", "", "$databaseName");
if($connection === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
/////////////////////////////////////////////////////////////////////////
//Taking in the submitted data from the HTML form
$incomeDescription  = $_POST["incomeDescription"];
$incomeType  = $_POST["incomeType"];
$incomeGrossAmount  = $_POST["incomeGrossAmount"];
$incomeTaxAmount = $_POST["incomeTaxAmount"];
$incomeAutomaticSavingAmount = $_POST["incomeAutomaticSavingAmount"];
$incomeNetAmount  = $_POST["incomeNetAmount"];
$incomeDate = date('Y-m-d', strtotime($_POST['incomeDate']));
$incomeComments  = $_POST["incomeComments"];
/////////////////////////////////////////////////////////////////////////
//Here we're trimming whitespace and setting all inputs to lowercase
$trimmedIncomeDescription = trim($incomeDescription);
$trimmedIncomeType = trim($incomeType);
$trimmedIncomeGrossAmount = trim($incomeGrossAmount);
$trimmedIncomeTaxAmount = trim($incomeTaxAmount);
$trimmedIncomeAutomaticSavingAmount = trim($incomeAutomaticSavingAmount);
$trimmedIncomeNetAmount = trim($incomeNetAmount);
$trimmedIncomeDate = trim($incomeDate);
$trimmedIncomeComments = trim($incomeComments);

$strIncomeDescription = strtolower($trimmedIncomeDescription);
$strIncomeType = strtolower($trimmedIncomeType);
$decIncomeGrossAmount = strtolower($trimmedIncomeGrossAmount);
$decIncomeTaxAmount = strtolower($trimmedIncomeTaxAmount);
$decIncomeAutomaticSavingAmount = strtolower($trimmedIncomeAutomaticSavingAmount);
$decIncomeNetAmount = strtolower($trimmedIncomeNetAmount);
$strIncomeDate = strtolower($trimmedIncomeDate);
$strIncomeComments = strtolower($trimmedIncomeComments);
/////////////////////////////////////////////////////////////////////////
//Creates the table for income data if it doesn't already exist
$sql = "CREATE TABLE `$databaseName`.`$incomeTableName` ( `incomeid` INT NOT NULL AUTO_INCREMENT ,
`incomeDescription` VARCHAR(200) NOT NULL ,
`incomeType` VARCHAR(30) NOT NULL ,
`incomeDate` DATE NOT NULL ,
`incomeGrossAmount` DECIMAL(8,2) NOT NULL ,
`incomeTaxAmount` DECIMAL(8,2) NOT NULL ,
`incomeSavingAmount` DECIMAL(8,2) NOT NULL ,
`incomeNetAmount` DECIMAL(8,2) NOT NULL ,
`incomeComments` VARCHAR(200) NOT NULL ,
PRIMARY KEY (`incomeid`)) ENGINE = MyISAM; ";
$result = mysqli_query($connection, $sql);
/////////////////////////////////////////////////////////////////////////
//This is the inserts into the database with the data from the form
$sql = "INSERT INTO $incomeTableName (incomeDescription, incomeType, incomeDate, incomeGrossAmount, incomeTaxAmount, incomeSavingAmount, incomeNetAmount, incomeComments) 
VALUES('$strIncomeDescription', '$strIncomeType', '$strIncomeDate', '$decIncomeGrossAmount', '$decIncomeTaxAmount', '$decIncomeAutomaticSavingAmount', '$decIncomeNetAmount', '$strIncomeComments')";
$res = mysqli_query($connection,$sql)
or die("Didn't successfully insert".mysqli_connect_error());
/////////////////////////////////////////////////////////////////////////
//This prints the most recent insertion into the table
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
<td>Taxed Amount</td>
<td>Automatic Saving</td>
<td>Income Net</td>
<td>Income Comments</td> </tr>";
while($row = mysqli_fetch_array($res))
{
    print "<tr> <td>".$row['incomeid']."</td><td>".$row['incomeDescription']."</td> <td>".$row['incomeType']."</td> <td>".$row['incomeDate']."</td>
    <td>".$row['incomeGrossAmount']."</td> <td>".$row['incomeTaxAmount']."</td> <td>".$row['incomeSavingAmount']."</td> <td>".$row['incomeNetAmount']."</td> <td>".$row['incomeComments']."</td>  </tr>";
}
print "</table></center>";
}
////////////////////////////////////////////////////////////////////
//Close the database connection
mysqli_close($connection);
?>