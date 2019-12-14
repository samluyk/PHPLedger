<!doctype html>
<!--
/////////////////////////////////////////////////////////////////////////
Author: Sam Luyk
Project: PHPLedger
/////////////////////////////////////////////////////////////////////////
-->
<html>
<head>
<script src="jquery-3.4.1.min.js"></script>
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
            <label for="expenseName"> *Item Name: </label>
            <input type = "text" id="itemName" name="itemName" required autofocus value=""/><br><br>
            <label for="expenseAmount"> *Amount: </label>
            <input type = "text" id="expenseAmount" name="expenseAmount" required value=""/><br><br>
            <label for="expensePrimaryCategory"> *Parent Category: </label>
            <select name="expensePrimaryCategory"  id="expensePrimaryCategory" required onChange="changecat(this.value);">
            <option disabled selected="selected">CATEGORY</option>
            <option value="Home">Home</option>
            <option value="Utilities">Utilities</option>
            <option value="Food">Food</option>
            <option value="Car">Car</option>
            <option value="Personal">Personal</option>
            <option value="Hobbies">Hobbies</option>
            <option value="Medical">Medical</option>
            <option value="Entertainment">Entertainment</option>
            <option value="Education">Education</option>
            <option value="Retirement">Retirement</option>
            <option value="Miscellaneous">Miscellaneous</option>
            <option value="Giving">Giving</option>
            </select>
            <br>
            <br>
            *Child Category:
            <select required name="childCategory" id="childCategory">
            <option value="" disabled selected>CATEGORY</option>
            </select>
            <?php  
            echo '<script type="text/JavaScript">  
              var childcat = {
              Home: ["Rent", "Renters Insurance", "Repairs/Maintenance", "Household Items"],
              Utilities: ["Water", "Electricity", "Gas/Heating", "Internet", "Cell Phone"],
              Food: ["Groceries", "Fast Food", "Restaurant", "Snacks"],
              Car: ["Gas", "Car Insurance", "Upgrades", "Repairs/Maintenance", "Fees", "Purchase/Loan", "Other"],
              Personal: ["Clothing", "Hygiene"],
              Hobbies: ["Photography", "Technology"],
              Medical: ["Health Care", "Dental Care", "Specialty Care", "Medication", "Medical Devices", "Insurance"],
              Entertainment: ["Tickets", "Games", "Social", "Travel", "General"],
              Education: ["Programs", "Certifications", "Books"],
              Retirement: ["401k", "Roth IRA", "Stocks", "Investments"],
              Miscellaneous: ["Taxes", "Fees", "Pets", "Uncategorized"],
              Giving: ["Holiday Gifts", "Birthdays", "Donations", "Others"]
}
              function changecat(value) {
              if (value.length == 0) document.getElementById("childCategory").innerHTML = "<option></option>";
              else {
               var catOptions = "";
               for (categoryId in childcat[value]) {
              catOptions += "<option>" + childcat[value][categoryId] + "</option>";
          }
          document.getElementById("childCategory").innerHTML = catOptions;
      }
  }
     </script>' 
; 
?> 

            <br>
            <br>
            <label for="paymentMethod"> *Payment method: </label>
            <select name="paymentMethod"  id="paymentMethod" required>
            <option disabled selected="selected">PAYMENT METHOD</option>
            <?php
            $paymentmethod = array(
              "American Express", 
              "Chase Visa", 
              "NBT Visa", 
              "Privacy.com",
              "Cash",
              "Other"
            );
            foreach($paymentmethod as $item){
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
            
            <label for="expenseDate"> *Date: </label>
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
            <label for="incomeDescription"> *Description: </label>
            <input type = "text" id="incomeDescription" name="incomeDescription" required value=""/><br><br>

            <label for="incomeType"> *Income Type: </label>
            <select name="incomeType"  id="incomeType" required>
            <option disabled selected="selected">CATEGORY</option>
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
            <label for="incomeNetAmount"> *Net Amount: </label>
            <input type = "text" id="incomeNetAmount" name="incomeNetAmount" required value=""/><br><br>
            <label for="incomeDate"> *Date: </label>
            <input type="date" name="incomeDate" value="<?php echo date('Y-m-d'); ?>"/>
            <br>
            <br>
            <label for="incomeComments">Comments: </label>
            <input type = "text" id="incomeComments" name="incomeComments" value=""/><br><br>
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
    <input type="button" value="Visit Query Page" onclick="window.location.href='http://localhost:3000'" />
    </form></td>
    <br>
    <td><form>
    <input type="button" value="Delete Latest Entry" onclick="window.location.href='./deletelatest.php'" />
    </form></td>    
    <br>
    <td><form>
    <input type="button" value="Visit Financial Summary Page" onclick="window.location.href='./summary.php'" />
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
</br>
</footer> 
</html>