<?php
/////////////////////////////////////////////////////////////////////////
//Sets timezone to EST and links to the external css
date_default_timezone_set("America/New_York");
echo "<link rel='stylesheet' type='text/css' href='style.css' />";
/////////////////////////////////////////////////////////////////////////
//Here we're connecting to the database
$connection = mysqli_connect("localhost", "root", "", "test_database");
if($connection === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
/////////////////////////////////////////////////////////////////////////
//Taking in the data from the HTML form
$itemName  = $_POST["itemName"];
$expenseAmount  = $_POST["expenseAmount"];
$expenseCategory = $_POST["expenseCategory"];
$expenseComment  = $_POST["expenseComment"];
$expenseDate  = $_POST["expenseDate"];
/////////////////////////////////////////////////////////////////////////
//Prints the user input for debugging
print $itemName;
print "<br>";
print $expenseAmount;
print "<br>";
print $expenseCategory;
print "<br>";
print $expenseComment;
print "<br>";
print $expenseDate;
print "<br>";
/////////////////////////////////////////////////////////////////////////
//Here we're trimming whitespace and setting all inputs to lowercase
$trimmedItemName = trim($itemName);
$trimmedExpenseAmount = trim($expenseAmount);
$trimmedExpenseCategory = trim($expenseCategory);
$trimmedExpenseComment = trim($expenseComment);
$trimmedExpenseDate = trim($expenseDate);

$strItemName = strtolower($trimmedItemName);
$decExpenseAmount = strtolower($trimmedExpenseAmount);
$strExpenseCategory = strtolower($trimmedExpenseCategory);
$strExpenseComment = strtolower($trimmedExpenseComment);
$strExpenseDate = strtolower($trimmedExpenseDate);
/////////////////////////////////////////////////////////////////////////
//Prints the trimmed and lowercased user input for debugging
print $strItemName;
print "<br>";
print $decExpenseAmount;
print "<br>";
print $strExpenseCategory;
print "<br>";
print $strExpenseComment;
print "<br>";
print $strExpenseDate;
print "<br>";
/////////////////////////////////////////////////////////////////////////
//This drops the table and all data in it. Very destructive.
/*
$sql = "DROP TABLE expenses";
mysqli_query($connection, $sql);
*/
/////////////////////////////////////////////////////////////////////////
//Creates the Table. It's name is people, and it has 5 columns.
$sql = "CREATE TABLE expenses (expenseid INT AUTO_INCREMENT PRIMARY KEY,
    expenseItemName varchar(100),
    expenseAmount decimal(13,2),
    expenseDate date,
    expenseCategory varchar(60),
    expenseComment varchar(300));";
$result = mysqli_query($connection, $sql);
/////////////////////////////////////////////////////////////////////////
//This is hard coded in information to test
	
$sql = "INSERT INTO expenses (expenseItemName, expenseAmount, expenseDate, expenseCategory, expenseComment) 
VALUES('$strItemName', '$decExpenseAmount', '2019-1-1', '$strExpenseCategory', '$strExpenseComment')";
$res = mysqli_query($connection,$sql)
or die("Didn't successfully insert".mysqli_connect_error());
/////////////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////////////
//The following block of code prints the information in the expenses table
$sql = "SELECT * FROM expenses";
$res = mysqli_query($connection,$sql);
if(mysqli_num_rows($res)<1)
{
print "No rows, bro";
echo "<br>";
}
else
{
echo "<br>";
print "<center><table border=3pt><tr> <td>Expense Item Name</td> <td>Expense Amount</td> <td>Expense Date</td> <td>Expense Category</td><td>Expense Comment</td> </tr>";
while($row = mysqli_fetch_array($res))
{
    print "<tr> <td>".$row['expenseItemName']."</td> <td>".$row['expenseAmount']."</td> <td>".$row['expenseDate']."</td>
    <td>".$row['expenseCategory']."</td> <td>".$row['expenseComment']."</td> </tr>";
}
print "</table></center>";
}
/////////////////////////////////////////////////////////////////////////
//This successfully prints the most recent insertion
$sql = "SELECT * FROM expenses ORDER BY expenseid DESC LIMIT 1";
$res = mysqli_query($connection,$sql);

if(mysqli_num_rows($res)<1)
{
print "No Rows, Error!";
echo "<br>";
}
else
{
echo "<br>";
echo "You inserted the following information:";
echo "<br>";
print "<center><table border=3pt><tr> <td>Expense Item Name</td> <td>Expense Amount</td> <td>Expense Date</td> <td>Expense Category</td><td>Expense Comment</td> </tr>";
while($row = mysqli_fetch_array($res))
{
    print "<tr> <td>".$row['expenseItemName']."</td> <td>".$row['expenseAmount']."</td> <td>".$row['expenseDate']."</td>
    <td>".$row['expenseCategory']."</td> <td>".$row['expenseComment']."</td> </tr>";
}
print "</table></center>";
}
////////////////////////////////////////////////////////////////////
//This drops the table and all data in it. Very destructive.
/*
$sql = "DROP TABLE expenses";
mysqli_query($connection, $sql);
*/
////////////////////////////////////////////////////////////////////
//Close the database connection
mysqli_close($connection);
?>