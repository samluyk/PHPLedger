<!doctype html>
<!--
/////////////////////////////////////////////////////////////////////////
Author: Sam Luyk
Project: PHPLedger
/////////////////////////////////////////////////////////////////////////
-->
<html>
<head>
<meta charset='UTF-8'/>
<meta name='viewport'
      content='width=device-width, initial-scale=1.0, maximum-scale=1.0' />
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<title>Financial Logger</title>

<body>
<center>
<h1>Financial Logger</h1>
<hr class="new1">
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

            "Car Accessories", 
            "Car Insurance",
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
            "Insurance",
            "Investments/Stocks", 
            "Material Items", 
            "Personal/Medical", 
            "Photography", 
            "Technology", 
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
                        <option value="privacy">Privacy Card</option>
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

    <td><form>
    <input type="button" value="Visit Financial Summary Page" onclick="window.location.href='./summary.php'" />
    </form></td>
    <br>
    <td><form>
    <input type="button" value="Visit Query Page" onclick="window.location.href='./query.php'" />
    </form></td>
    <br>
    <td><form>
    <input type="button" value="Delete Latest Entry" onclick="window.location.href='./deletelatest.php'" />
    </form></td>
<!---
    <a href="./deletelatest.php" class="confirmation">Delete Latest Entry</a>
    <script type="text/javascript">
    var elems = document.getElementsByClassName('confirmation');
    var confirmIt = function (e) {
        if (!confirm('Are you sure?')) e.preventDefault();
    };
    for (var i = 0, l = elems.length; i < l; i++) {
        elems[i].addEventListener('click', confirmIt, false);
    }
  </script>
  -->
<br>
</center>
<!--
/////////////////////////////////////////////////////////////////////////
End Query Stuffs
/////////////////////////////////////////////////////////////////////////
-->
</body>
<hr class="new1">
<footer>
<p>Hand written by Sam Luyk. Code here: 
<a href="https://github.com/samluyk/PHPLedger">https://github.com/samluyk/PHPLedger</a></p>
</footer> 
</html>