<?php
date_default_timezone_set("America/New_York");
/////////////////////////////////////////////////////////////////////////
//Here we're connecting to the database
$connection = mysqli_connect("localhost", "root", "", "test_database");
if($connection === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
/////////////////////////////////////////////////////////////////////////
//Taking in the data from the HTML form
$incomeDescription  = $_POST["incomeDescription"];
$incomeType  = $_POST["incomeType"];
$incomeGrossAmount  = $_POST["incomeGrossAmount"];
$incomeNetAmount  = $_POST["incomeNetAmount"];
$incomeDate  = $_POST["incomeDate"];

print $incomeDescription;
print "<br>";
print $incomeType;
print "<br>";
print $incomeGrossAmount;
print "<br>";
print $incomeNetAmount;
print "<br>";
print $incomeDate;
print "<br>";
/////////////////////////////////////////////////////////////////////////
//Here we're trimming whitespace and setting all inputs to lowercase
$trimmedIncomeDescription = trim($incomeDescription);
$trimmedIncomeType = trim($incomeType);
$trimmedIncomeGrossAmount = trim($incomeGrossAmount);
$trimmedIncomeNetAmount = trim($incomeNetAmount);
$trimmedIncomeDate = trim($incomeDate);

$strIncomeDescription = strtolower($trimmedIncomeDescription);
$strIncomeType = strtolower($trimmedIncomeType);
$decIncomeGrossAmount = strtolower($trimmedIncomeGrossAmount);
$decIncomeNetAmount = strtolower($trimmedIncomeNetAmount);
$strIncomeDate = strtolower($trimmedIncomeDate);
/////////////////////////////////////////////////////////////////////////
//Prints for debugging
print $strIncomeDescription;
print "<br>";
print $strIncomeType;
print "<br>";
print $decIncomeGrossAmount;
print "<br>";
print $decIncomeNetAmount;
print "<br>";
print $strIncomeDate;
print "<br>";
/////////////////////////////////////////////////////////////////////////
//This drops the table and all data in it. Very destructive.

$sql = "DROP TABLE income";
mysqli_query($connection, $sql);

/////////////////////////////////////////////////////////////////////////
//Creates the table
$sql = "CREATE TABLE income (incomeid INT AUTO_INCREMENT PRIMARY KEY,
    incomeDescription varchar(200),
    incomeType varchar(60),
    incomeDate date,
    incomeGrossAmount decimal(13,2),
    incomeNetAmount decimal(13,2));";
$result = mysqli_query($connection, $sql);
/////////////////////////////////////////////////////////////////////////
//This is hard coded in information.
	
$sql = "INSERT INTO income (incomeDescription, incomeType, incomeDate, incomeGrossAmount, incomeNetAmount) 
VALUES('$strIncomeDescription', '$strIncomeType', '2019-1-1', '$decIncomeGrossAmount', '$decIncomeNetAmount')";
$res = mysqli_query($connection,$sql)
or die("Didn't successfully insert".mysqli_connect_error());
/////////////////////////////////////////////////////////////////////////
//The following block of code prints the information about the income table
$sql = "SELECT * FROM income";
$res = mysqli_query($connection,$sql);
if(mysqli_num_rows($res)<1)
{
print "No rows, bro";
echo "<br>";
}
else
{
echo "<br>";
print "<center><table border=3pt><tr> <td>Income Description</td> <td>Income Type</td> <td>Income Date</td> <td>Income Gross</td><td>Income Net</td> </tr>";
while($row = mysqli_fetch_array($res))
{
    print "<tr> <td>".$row['incomeDescription']."</td> <td>".$row['incomeType']."</td> <td>".$row['incomeDate']."</td>
    <td>".$row['incomeGrossAmount']."</td> <td>".$row['incomeNetAmount']."</td> </tr>";
}
print "</table></center>";
}
////////////////////////////////////////////////////////////////////
//This successfully prints the latest insertion
$sql = "SELECT * FROM income ORDER BY incomeid DESC LIMIT 1";
$res = mysqli_query($connection,$sql);

if(mysqli_num_rows($res)<1)
{
print "BEEP BOOP Error!";
echo "<br>";
}
else
{
echo "<br>";
print "<center><table border=3pt><tr> <td>Income Description</td> <td>Income Type</td> <td>Income Date</td> <td>Income Gross</td><td>Income Net</td> </tr>";
while($row = mysqli_fetch_array($res))
{
    print "<tr> <td>".$row['incomeDescription']."</td> <td>".$row['incomeType']."</td> <td>".$row['incomeDate']."</td>
    <td>".$row['incomeGrossAmount']."</td> <td>".$row['incomeNetAmount']."</td> </tr>";
}
print "</table></center>";
}
////////////////////////////////////////////////////////////////////
//This drops the table and all data in it. Very destructive.
//$sql = "DROP TABLE income";
//mysqli_query($connection, $sql);
//
////////////////////////////////////////////////////////////////////
mysqli_close($connection);
?>
