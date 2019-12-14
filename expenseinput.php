<?php
/////////////////////////////////////////////////////////////////////////
//Sets timezone to EST
date_default_timezone_set("America/New_York");
//Links to the external css
echo "<link rel='stylesheet' type='text/css' href='style.css' />";
/////////////////////////////////////////////////////////////////////////
//Insert the name of your database and expenses table here
$databaseName = "test_database";
$expenseTableName = "expenses";
/////////////////////////////////////////////////////////////////////////
//Were connecting to the database (server:port/user/password/database)
$connection = mysqli_connect("localhost:3306", "root", "", "$databaseName");
if($connection === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
/////////////////////////////////////////////////////////////////////////
//Recieving the data from the HTML form
$itemName  = $_POST["itemName"];
$expenseAmount  = $_POST["expenseAmount"];
$expensePrimaryCategory = $_POST["expensePrimaryCategory"];
$expenseChildCategory = $_POST["childCategory"];
$expenseComment  = $_POST["expenseComment"];
$expensePaymentMethod  = $_POST["paymentMethod"];
$expenseDate = date('Y-m-d', strtotime($_POST['expenseDate']));
/////////////////////////////////////////////////////////////////////////
//Here we're trimming whitespace on inputs and setting all inputs to lowercase
$trimmedItemName = trim($itemName);
$decTrimmedExpenseAmount = trim($expenseAmount);
$trimmedExpensePrimaryCategory = trim($expensePrimaryCategory);
$trimmedExpenseChildCategory = trim($expenseChildCategory);
$trimmedExpenseComment = trim($expenseComment);
$trimmedExpenseDate = trim($expenseDate);
$trimmedPaymentMethod = trim($expensePaymentMethod);
// DECIMAL NOT STRING?!
$strItemName = strtolower($trimmedItemName);
$strPrimaryExpenseCategory = strtolower($trimmedExpensePrimaryCategory);
$strChildExpenseCategory = strtolower($trimmedExpenseChildCategory);
$strExpenseComment = strtolower($trimmedExpenseComment);
$strExpenseDate = strtolower($trimmedExpenseDate);
$strExpensePaymentMethod = strtolower($trimmedPaymentMethod);
/////////////////////////////////////////////////////////////////////////
//This drops the table and all data in it. Very destructive.
/*
$sql = "DROP TABLE $expenseTableName";
mysqli_query($connection, $sql);
*/
/////////////////////////////////////////////////////////////////////////
//Creates the table and the columns if they aren't there already
$sql = "CREATE TABLE IF NOT EXISTS `$databaseName`.`$expenseTableName` 
( `expense_id` SMALLINT NOT NULL AUTO_INCREMENT ,
    `expense_date` DATE NOT NULL ,
    `the_expense` VARCHAR(80) NOT NULL ,
    `parent_category` VARCHAR(40) NOT NULL ,
    `child_category` VARCHAR(40) NOT NULL ,
    `expense_amount` DECIMAL(8,2) NOT NULL ,
    `expense_comment` VARCHAR(300) NOT NULL ,
    `expense_payment_method` VARCHAR(40) NOT NULL ,
    PRIMARY KEY (`expense_id`));";
$result = mysqli_query($connection, $sql);
/////////////////////////////////////////////////////////////////////////
//This inserts the data from the form into the database
$sql = "INSERT INTO $expenseTableName (expense_date, the_expense, parent_category, child_category, expense_amount, expense_comment, expense_payment_method) 
VALUES('$strExpenseDate', '$strItemName', '$strPrimaryExpenseCategory', '$strChildExpenseCategory','$decTrimmedExpenseAmount', '$strExpenseComment', '$strExpensePaymentMethod')";
$res = mysqli_query($connection,$sql)
or die("Didn't successfully insert into the database ".mysqli_error($connection));
/////////////////////////////////////////////////////////////////////////
//This code prints the most recent insertion into the table
$sql = "SELECT * FROM $expenseTableName ORDER BY expense_id DESC LIMIT 1";
$res = mysqli_query($connection,$sql);

if(mysqli_num_rows($res)<1)
{
print "Error, didn't successfully insert the record.";
echo "<br>";
}
else
{
echo "<br>";
echo "You just successfully inserted the following expense:";
echo "<br>";
print "<center><table border=3pt><tr> 
<td>Expense ID</td> 
<td>Expense Date</td> 
<td>The Expense</td> 
<td>Parent Category</td> 
<td>Child Category</td> 
<td>Expense Amount</td>
<td>Expense Comment</td>
<td>Payment Method</td> </tr>";
while($row = mysqli_fetch_array($res))
{
    print "<tr> <td>".$row['expense_id']."</td> <td>".$row['expense_date']."</td> <td>".$row['the_expense']."</td> <td>".$row['parent_category']."</td> <td>".$row['child_category']."</td>
    <td>".$row['expense_amount']."</td> <td>".$row['expense_comment']."</td> <td>".$row['expense_payment_method']."</td> </tr>";
}
print "</table></center>";
}
////////////////////////////////////////////////////////////////////
//This drops the table and all data in it. Very destructive.
/*
$sql = "DROP TABLE $expenseTableName";
mysqli_query($connection, $sql);
*/
////////////////////////////////////////////////////////////////////
//Close the database connection
mysqli_close($connection);
?>