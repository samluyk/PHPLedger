<!doctype html>
<html>
    <head><link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin">

    </head>
<!--
/////////////////////////////////////////////////////////////////////////
Author: Sam Luyk
Title: 
Date: November 2019

Comments:

Database Structure: https://docs.google.com/spreadsheets/d/11O2Av2tqxhU2a7UjzWdV23_ghOZOWMwhxmih87SZh8A/edit#gid=0

Useful Links:
https://www.php.net/manual/en/function.htmlentities.php
https://stackoverflow.com/questions/1053424/how-do-i-get-php-errors-to-display?rq=1
https://stackoverflow.com/questions/49106290/php-html-why-cant-i-echo-a-variable-date-in-a-date-input-field
https://stackoverflow.com/questions/42275768/html-php-form-input-type-date
https://css-tricks.com/prefilling-date-input/

/////////////////////////////////////////////////////////////////////////
-->
<style>
        body {
            background-color: grey;
            font-family: Ubuntu, "times new roman", times, roman, serif;
            font-family: Ubuntu, sans-serif;
        }
        h1   {color: orange;}
        h2   {color: white;}  
        h3   {color: white;} 
        h4   {color: white;}              
        p    {color: green;}
        fieldset {width: 900px;}
        
</style>

<title>Financial Logger</title>
<body>

<center>
<h1>Financial Logger</h1>
<hr>
<br>
<?php
date_default_timezone_set("America/New_York");
?>

<?php
$dateVariable = date('m/d/Y');
echo "php date: <br>";
echo $dateVariable;
echo "<br>";
echo "<br>";
echo "js date: <br>";
echo '<script type="text/javascript"><!--
var now = new Date();
document.write((now.getMonth()+1)+"/"+now.getDate()+"/"+now.getFullYear());
//--></script>
';

echo "<br>";
?>


<center>
<form method = "post" action = "expenseinput.php">
    <fieldset><table>
            <legend><b><i>Expense Input Form</b></i></legend>
            <h2>Expense Input Form</h2><br>
            <label for="expenseName"> Item Name: </label>
            <input type = "text" id="itemName" name="itemName" required value=""/><br><br>

            <label for="expenseAmount"> Amount: </label>
            <input type = "text" id="expenseAmount" name="expenseAmount" required value=""/><br><br>

            <label for="expenseCategory"> Category: </label>

            <select name="expenseCategory2"  id="expenseCategory" required>
            <option value="rent">Rent</option>
            <option value="rentExpense">Rent Expense</option>
            <option value="groceries">Groceries</option>
            <option value="clothing">Clothing</option>
            </select>
  <br><br>


            <label for="expenseComment"> Comments: </label>
            <input type = "text" id="expenseComment" name="expenseComment" value=""/><br><br>
            
            <label for="expenseDate"> Date: </label>
            <input type="text" id="expenseDate" value="<?php echo date('m/d/Y');?>"/>
            <br>
            <br/>
            <input type="submit" value = "Submit">
            <br><br><br>
    </table>
    </fieldset>
</form>
</center>

<center>
<form method = "post" action = "incomeinput.php">
    <fieldset><table>
            <legend><b><i>Income Input Form</b></i></legend>
            <h2>Income Input Form</h2><br>
            <label for="incomeDescription"> Description: </label>
            <input type = "text" id="incomeDescription" name="incomeDescription" required value=""/><br><br>

            <label for="incomeType"> Income Type: </label>
            <select name="incomeType"  id="incomeType" required>
            <option value="paycheck">Paycheck</option>
            <option value="freelance">Freelance Work</option>
            <option value="selling">Selling Something</option>
            <option value="other">Other</option>
            </select><br><br>

            <label for="incomeGrossAmount"> Gross Amount: </label>
            <input type = "text" id="incomeGrossAmount" name="incomeGrossAmount" value=""/><br><br>

            <label for="incomeNetAmount"> Net Amount: </label>
            <input type = "text" id="incomeNetAmount" name="incomeNetAmount" required value=""/><br><br>

            <label for="incomeDate"> Date: </label>
            <input type="text" value="<?php echo date('m/d/Y');?>"/>
            <br>
            <br/>
            <input type="submit" value = "Submit">
            <br><br><br>  
    </table>
    </fieldset>
</form>
</center>
<center>
<fieldset>
    <legend><b><i>Database Functions</b></i></legend>
    <br>
    <td>View Database</td><br><br>
    <td><form>
    <input type="button" value="View Database" onclick="window.location.href='http://google.com'" />
    </form></td>
    <br><br>

    <td>Delete Latest Entry (Display & confirm this!)</td><br><br>
    <td><form>
    <input type="button" value="Delete Latest Entry" onclick="window.location.href='http://google.com'" />
    </form></td>
    <br>

<br>
</fieldset>
</center>
</body>
</html>