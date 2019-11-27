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

    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin">
    <style>
    h1 {
      color: orange;
      background-color: #222227;
      margin: auto;
      text-align: center;
      font-family: 'Ubuntu', sans-serif;
    }
    body {
      margin: auto;
      text-align: center;
      background-color: #222227;
      color: #3b61f1;
      font-family: 'Ubuntu', sans-serif;
    }
    hr.new1 {
     border-top: 3px solid white;
    }   
    </style>
    </head>

<title>Financial Logger</title>
<body>

<center>
<h1>Financial Logger</h1>
<hr class="new1">
<br>

<!--
/////////////////////////////////////////////////////////////////////////
Get current date:
/////////////////////////////////////////////////////////////////////////
-->
<?php
date_default_timezone_set("America/New_York");
$dateVariable = date('m/d/Y');
echo "Date in php: <br>";
echo $dateVariable;
echo "<br>";
echo "<br>";
echo "Date in JS: <br>";
echo '<script type="text/javascript"><!--
var now = new Date();
document.write((now.getMonth()+1)+"/"+now.getDate()+"/"+now.getFullYear());
//--></script>
';
echo "<br>";
?>
<!--
/////////////////////////////////////////////////////////////////////////
End get current date
/////////////////////////////////////////////////////////////////////////
-->

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
            <input type = "text" id="itemName" name="itemName" required value=""/><br><br>
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
          
            <label for="expenseComment"> Comments: </label>
            <input type = "text" id="expenseComment" name="expenseComment" value=""/><br><br>
            
            <label for="expenseDate"> Date: </label>
            <input type="text" id="expenseDate" value="<?php echo date('m/d/Y');?>"/>
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
            <input type = "text" id="incomeDescription" name="incomeDescription" required value=""/><br><br>

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
            <input type="text" value="<?php echo date('m/d/Y');?>"/>
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

</center>
<!--
/////////////////////////////////////////////////////////////////////////
End Query Stuffs
/////////////////////////////////////////////////////////////////////////
-->
</body>
</html>