<!doctype html>

<?php
date_default_timezone_set("America/New_York");
?>

<html>
    <head>
    <meta charset='UTF-8'/>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name='viewport'
      content='width=device-width, initial-scale=1.0, maximum-scale=1.0' />
    </head>
    <title>Delete Latest</title>

    <h1>Delete Most Recent Entry</h1>
    <hr class="new1">
    <br>

<?php
/////////////////////////////////////////////////////////////////////////
//Insert the name of your database and expenses table here
$databaseName = "test_database";
$expenseTableName = "expenses";
$incomeTableName = "income";
/////////////////////////////////////////////////////////////////////////
//Were connecting to the database (server:port/user/password/database)
$connection = mysqli_connect("localhost:3306", "root", "", "$databaseName");
if($connection === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
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
echo "This is the most recent expense input:";
echo "<br>";
echo "<br>";
print "<center><table border=3pt><tr> 
<td>Expense ID</td> 
<td>Expense Date</td> 
<td>The Expense</td> 
<td>Expense Category</td> 
<td>Expense Amount</td>
<td>Expense Comment</td>
<td>Payment Method</td> </tr>";
while($row = mysqli_fetch_array($res))
{
    print "<tr> <td>".$row['expense_id']."</td> <td>".$row['expense_date']."</td> <td>".$row['the_expense']."</td> <td>".$row['expense_category']."</td>
    <td>".$row['expense_amount']."</td> <td>".$row['expense_comment']."</td> <td>".$row['expense_payment_method']."</td> </tr>";
}
print "</table></center>";
}
//////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////
//This successfully prints the most recent insertion into the table
$sql = "SELECT * FROM $incomeTableName ORDER BY incomeid DESC LIMIT 1";
$res = mysqli_query($connection,$sql);

if(mysqli_num_rows($res)<1)
{
print "Error2";
echo "<br>";
}
else
{
echo "<br>";
echo "This is the most recent income input:";
echo "<br>";
echo "<br>";
print "<center><table border=3pt><tr> 
<td>Income ID</td> 
<td>Income Description</td> 
<td>Income Type</td> 
<td>Income Date</td> 
<td>Income Gross</td>
<td>Income Net</td> </tr>";
while($row = mysqli_fetch_array($res))
{
    print "<tr> <td>".$row['incomeid']."</td><td>".$row['incomeDescription']."</td> <td>".$row['incomeType']."</td> <td>".$row['incomeDate']."</td>
    <td>".$row['incomeGrossAmount']."</td> <td>".$row['incomeNetAmount']."</td> </tr>";
}
print "</table></center>";
}
?>
</html>