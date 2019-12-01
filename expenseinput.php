<?php
/////////////////////////////////////////////////////////////////////////
//Sets timezone to EST
date_default_timezone_set("America/New_York");
//Links to the external css
echo "<link rel='stylesheet' type='text/css' href='style.css' />";
/////////////////////////////////////////////////////////////////////////
//Were connecting to the database (server/user/password/database)
$connection = mysqli_connect("localhost", "root", "", "test_database");
if($connection === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
/////////////////////////////////////////////////////////////////////////
//Recieving the data from the HTML form
$itemName  = $_POST["itemName"];
$expenseAmount  = $_POST["expenseAmount"];
$expenseCategory = $_POST["expenseCategory"];
$expenseComment  = $_POST["expenseComment"];
$expensePaymentMethod  = $_POST["paymentMethod"];
$expenseDate = date('Y-m-d', strtotime($_POST['expenseDate']));
/////////////////////////////////////////////////////////////////////////
//Prints the user input for debugging
/*
print "<br>";
print "Direct user inputs for debugging:";
print "<br>";
print $itemName;
print "<br>";
print $expenseAmount;
print "<br>";
print $expenseCategory;
print "<br>";
print $expensePaymentMethod;
print "<br>";
print $expenseComment;
print "<br>";
print $expenseDate;
print "<br>";
*/
/////////////////////////////////////////////////////////////////////////
//Here we're trimming whitespace on inputs and setting all inputs to lowercase
$trimmedItemName = trim($itemName);
$trimmedExpenseAmount = trim($expenseAmount);
$trimmedExpenseCategory = trim($expenseCategory);
$trimmedExpenseComment = trim($expenseComment);
$trimmedExpenseDate = trim($expenseDate);
//
$strItemName = strtolower($trimmedItemName);
$decExpenseAmount = strtolower($trimmedExpenseAmount);
$strExpenseCategory = strtolower($trimmedExpenseCategory);
$strExpenseComment = strtolower($trimmedExpenseComment);
$strExpenseDate = strtolower($trimmedExpenseDate);
/////////////////////////////////////////////////////////////////////////
//Prints the trimmed and lowercased user input for debugging
/*
print "<br>";
print "Trimmed and lowercased user inputs for debugging:";
print "<br>";
print $strItemName;
print "<br>";
print $decExpenseAmount;
print "<br>";
print $strExpenseCategory;
print "<br>";
print $strExpenseComment;
print "<br>";
print $expensePaymentMethod;
print "<br>";
print $strExpenseDate;
print "<br>";
*/
/////////////////////////////////////////////////////////////////////////
//This drops the table and all data in it. Very destructive.
/*
$sql = "DROP TABLE expenses";
mysqli_query($connection, $sql);
*/
/////////////////////////////////////////////////////////////////////////
//Creates the table and the columns.
$sql = "CREATE TABLE `test_database`.`expenses2` 
( `expense_id` SMALLINT NOT NULL AUTO_INCREMENT ,
    `expense_date` DATE NOT NULL ,
    `the_expense` VARCHAR(80) NOT NULL ,
    `expense_category` VARCHAR(50) NOT NULL ,
    `expense_amount` DECIMAL(8,2) NOT NULL ,
    `expense_comment` VARCHAR(300) NOT NULL ,
    `expense_payment_method` VARCHAR(15) NOT NULL ,
    PRIMARY KEY (`expense_id`)) ENGINE = InnoDB;";
$result = mysqli_query($connection, $sql);
/////////////////////////////////////////////////////////////////////////
//This inserts the data from the form into the database
$sql = "INSERT INTO expenses2 (expense_date, the_expense, expense_category, expense_amount, expense_comment, expense_payment_method) 
VALUES('$strExpenseDate', '$strItemName', '$strExpenseCategory', '$decExpenseAmount', '$strExpenseComment', '$expensePaymentMethod')";
$res = mysqli_query($connection,$sql)
or die("Didn't successfully insert".mysqli_connect_error());
/////////////////////////////////////////////////////////////////////////
//The following block of code prints the information in the expenses table, for testing at the moment.
$sql = "SELECT * FROM expenses2";
$res = mysqli_query($connection,$sql);
if(mysqli_num_rows($res)<1)
{
print "No rows, bro. Error!";
echo "<br>";
}
else
{
echo "<br>";
print "The complete expenses table looks like:";
echo "<br>";
print "<center><table border=3pt><tr> <td>Expense Date</td> <td>The Expense</td> <td>Expense Category</td> <td>Expense Amount</td><td>Expense Comment</td><td>Payment Method</td> </tr>";
while($row = mysqli_fetch_array($res))
{
    print "<tr> <td>".$row['expense_date']."</td> <td>".$row['the_expense']."</td> <td>".$row['expense_category']."</td>
    <td>".$row['expense_amount']."</td> <td>".$row['expense_comment']."</td> <td>".$row['expense_payment_method']."</td> </tr>";
}
print "</table></center>";
}
/////////////////////////////////////////////////////////////////////////
//This successfully prints the most recent insertion into the table
$sql = "SELECT * FROM expenses2 ORDER BY expense_id DESC LIMIT 1";
$res = mysqli_query($connection,$sql);

if(mysqli_num_rows($res)<1)
{
print "Error";
echo "<br>";
}
else
{
echo "<br>";
echo "The most recent database insert:";
echo "<br>";
print "<center><table border=3pt><tr> <td>Expense Date</td> <td>The Expense</td> <td>Expense Category</td> <td>Expense Amount</td><td>Expense Comment</td><td>Payment Method</td> </tr>";
while($row = mysqli_fetch_array($res))
{
    print "<tr> <td>".$row['expense_date']."</td> <td>".$row['the_expense']."</td> <td>".$row['expense_category']."</td>
    <td>".$row['expense_amount']."</td> <td>".$row['expense_comment']."</td> <td>".$row['expense_payment_method']."</td> </tr>";
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