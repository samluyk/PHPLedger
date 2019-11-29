<!doctype html>
<!--
/////////////////////////////////////////////////////////////////////////
Author: Sam Luyk
Project: PHPLedger
Date: Q4 2019
/////////////////////////////////////////////////////////////////////////
-->
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="style.css">
    </head>

<title>Financial Logger</title>
<body>

<center>
<h1>Financial Logger</h1>
<hr class="new1">
<br>
<!--
/////////////////////////////////////////////////////////////////////////
Set time zone globally
/////////////////////////////////////////////////////////////////////////
-->
<?php
date_default_timezone_set("America/New_York");
?>
<!--
/////////////////////////////////////////////////////////////////////////
Expense Input Work:
/////////////////////////////////////////////////////////////////////////
-->
<center>
  <form method = "post" action = "expenseinput.php">
    <table>
            <h2>Expense Input Form</h2><br>
            <label for="expenseName"> Item Name: </label>
            <input type = "text" id="itemName" name="itemName" required autofocus value=""/><br><br>
            <label for="expenseAmount"> Amount: </label>
            <input type = "text" id="expenseAmount" name="expenseAmount" required value=""/><br><br>
            <label for="expenseCategory"> Category: </label>
            <select name="expenseCategory"  id="expenseCategory" required>

          <option selected="selected">CATEGORY</option>

          <?php

          $variableexpenses = array(
            "Business", 
            "Car Accessories", 
            "Car Repair/Maintenance", 
            "Clothing", 
            "Dining out", 
            "Entertainment", 
            "Fast Food", 
            "Fees", 
            "Groceries", 
            "Gas", 
            "Gifts", 
            "Household", 
            "Investments/Stocks", 
            "Material Items", 
            "Personal/Medical", 
            "Photography", 
            "Social", 
            "Taxes", 
            "Technology", 
            "Transportation", 
            "Travel", 
            "Uncategorized"
          );

          foreach($variableexpenses as $item){
          ?>
          <option value="<?php echo strtolower($item); ?>"><?php echo $item; ?></option>
          <?php
          }
          ?>

            </select>
            <br>
            <br>
            <label for="paymentMethod"> Payment method: </label>
            <select name="paymentMethod"> 
                        <option value="credit card">Credit Card</option>
                        <option value="cash">Cash</option>
                        <option value="debit card">Debit Card</option>
                        <option value="other">Other</option>
            </select>
            <br>
            <br>
            <label for="expenseComment"> Comments: </label>
            <input type = "text" id="expenseComment" name="expenseComment" value=""/><br><br>
            
            <label for="expenseDate"> Date: </label>
            <input type="date" name="expenseDate" id="expenseDate" value="<?php echo date('Y-m-d'); ?>"/>
            <br>
            <br/>
            <input type="submit" value = "Submit">
            <br><br>
            <hr class="new1">
    </table>

  </form>
  </center>
<!--
/////////////////////////////////////////////////////////////////////////
End Expense Input Work
/////////////////////////////////////////////////////////////////////////
-->

<!--
/////////////////////////////////////////////////////////////////////////
Begin Income Input Work:
/////////////////////////////////////////////////////////////////////////
-->
  <center>
  <form method = "post" action = "incomeinput.php">
    <table>

            <h2>Income Input Form</h2><br>
            <label for="incomeDescription"> Description: </label>
            <input type = "text" id="incomeDescription" name="incomeDescription" required autofocus value=""/><br><br>

            <label for="incomeType"> Income Type: </label>
            <select name="incomeType"  id="incomeType" required>
            <option selected="selected">CATEGORY</option>

            <?php

            $fixedexpenses = array(
              "Paycheck", 
              "Freelance Tech", 
              "Freelance Photo", 
              "Selling Something",
              "Other Income"
            );

            foreach($fixedexpenses as $item){

            ?>
            <option value="<?php echo strtolower($item); ?>"><?php echo $item; ?></option>
            <?php
            }
            ?>
            </select>
            
            <br>
            <br>

            <label for="incomeGrossAmount"> Gross Amount: </label>
            <input type = "text" id="incomeGrossAmount" name="incomeGrossAmount" value=""/><br><br>
            <label for="incomeNetAmount"> Net Amount: </label>
            <input type = "text" id="incomeNetAmount" name="incomeNetAmount" required value=""/><br><br>
            <label for="incomeDate"> Date: </label>
            <input type="date" name="incomeDate" value="<?php echo date('Y-m-d'); ?>"/>
            <br>
            <br/>
            <input type="submit" value = "Submit">
            <br><br>
            <hr class="new1"> 
    </table>
    
  </form>
  </center>

<!--
/////////////////////////////////////////////////////////////////////////
End Income Input Work
/////////////////////////////////////////////////////////////////////////
-->

<!--
/////////////////////////////////////////////////////////////////////////
Start Query Stuffs
/////////////////////////////////////////////////////////////////////////
-->
  <center>

    <h2><legend>Database Functions</legend></h2>
    <br>

    <td>Delete Latest Entry (Display & confirm this!)</td><br><br>
    <td><form>
    <input type="button" value="Delete Latest Entry" onclick="window.location.href='http://google.com'" />
    </form></td>
    <br>
    <br>

</center>
<!--
/////////////////////////////////////////////////////////////////////////
End Query Stuffs
/////////////////////////////////////////////////////////////////////////
-->
</body>
</html>