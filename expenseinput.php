<?php
date_default_timezone_set("America/New_York");
//////////////////////////////////////////////////////////////////////
//Here we're connecting to the database
$connection = mysqli_connect("localhost", "root", "", "test_database");
if($connection === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
////////////////////////////////////////////////////////////////////
//Taking in the data from the HTML form
$itemName  = $_POST["itemName"];
$expenseAmount  = $_POST["expenseAmount"];
$expenseCategory = $_POST["expenseCategory"];
$expenseCategory2  = $_POST["expenseCategory2"];
$expenseComment  = $_POST["expenseComment"];
$expenseDate  = $_POST["expenseDate"];
////////////////////////////////////////////////////////////////////
//Prints for debugging
print $itemName;
print "<br>";
print $expenseAmount;
print "<br>";
print $expenseCategory;
print "<br>";
print $expenseCategory2;
print "<br>";
print $expenseComment;
print "<br>";
print $expenseDate;
print "<br>";
//////////////////////////////////////////////////////////////////////
//Here we're taking in the data from the HTML form, and assigning them to PHP variables to use later on.

$trimmedItemName = trim($itemName);
$trimmedExpenseAmount = trim($expenseAmount);
$trimmedexpenseCategory = trim($expenseAmount2);
$trimmedexpenseCategory2 = trim($lastName2);
$trimmedExpenseComment = trim($expenseComment);
$trimmedExpenseDate = trim($expenseDate);

$strItemName = strtolower($trimmedItemName);
$decExpenseAmount = strtolower($trimmedExpenseAmount);
$strExpenseCategory = strtolower($trimmedexpenseCategory);
$strExpenseCategory2 = strtolower($trimmedexpenseCategory2);
$strExpenseComment = strtolower($trimmedExpenseComment);
$strExpenseDate = strtolower($trimmedExpenseDate);

//////////////////////////////////////////////////////////////////////
//This drops the table and all data in it. !Very destructive!
//$sql = "DROP TABLE expenses";
//mysqli_query($connection, $sql);
////////////////////////////////////////////////////////////////////
//Creates the Table. It's name is people, and it has 5 columns.
//$sql = "CREATE TABLE expenses (userid INT AUTO_INCREMENT PRIMARY KEY,
//    firstName varchar(20),
//    lastName varchar(20),
//    emailAddress varchar(40),
//    chosenEvent1 varchar(20));";
//$result = mysqli_query($connection, $sql);
////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////
//Source of code to check and see if a value is in the database:
//https://stackoverflow.com/questions/11292468/how-to-check-if-value-exists-in-a-mysql-database
//Handles registering for multiple events with the same email:
//https://www.dofactory.com/sql/where-and-or-not
//The following code will insert the users information to the people table IF they haven't already 
//entered their email and chosen the same event with that email address.
/*$result = $connection->query("SELECT emailAddress FROM people WHERE chosenEvent1 = '$strSelectedEvent' AND emailAddress = '$strEmailAddress'");
if($result->num_rows == 0) 
{		
     	$sql = "INSERT INTO people (firstName, lastName, emailAddress, chosenEvent1)
			    VALUES ('$strFirstName', '$strLastName', '$strEmailAddress', '$strSelectedEvent')";
	    $res = mysqli_query($connection, $sql);
    print "<center>You've successfully registered for that event!</center>";
    //print "<center><a href="project2.html">Click to go back!</a></center>";
} 
else {
    print "<center>You've already registered for that event with that email address! Go back!</center>";
        //print "<center><a href="project2.html">Click to go back!</a></center>";
}
*/
////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////
//This drops the table and all data in it. Very destructive.
//$sql = "DROP TABLE people";
//mysqli_query($connection, $sql);
//
//mysqli_close($connection);
?>

