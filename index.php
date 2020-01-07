<!doctype html>
<html>
<head>
<script src="jquery-3.4.1.min.js"></script>
<link rel="stylesheet" href="bootstrap.css">
<meta charset='UTF-8'/>
<meta name='viewport'
      content='width=device-width, initial-scale=1.0, maximum-scale=1.0' />
<link rel="stylesheet" type="text/css" href="style.css">
<html lang="en">
</head>

<title>Financial Logger</title>

<body>
<center>
<h1>😻 Financial Logger 😻</h1>
<hr class="new1">
<?php
date_default_timezone_set("America/New_York");
?>
<!--
/////////////////////////////////////////////////////////////////////////
Expense Input Form:
/////////////////////////////////////////////////////////////////////////
-->
<h2>⛔ Expense Input Form ⛔</h2><br>
<form method = "post" action="expenseinput.php">
<div class="container">
  <div class="form-group">
    <label for="itemName">Item Name:</label>
    <input type="text" id="itemName" name="itemName" class="form-control" placeholder="Item Name" autofocus required>
  </div>
  <div class="form-group">
    <label for="expenseAmount">Item Amount:</label>
    <input type="text" class="form-control" placeholder="Amount" id="expenseAmount" name="expenseAmount" required>
  </div>
  <div class="form-group">
    <label for="expensePrimaryCategory">Primary Category:</label>
    <select class="form-control" name="expensePrimaryCategory" id="expensePrimaryCategory" required onChange="changecat(this.value);">
            <option value="Car">Car</option>
            <option value="Education">Education</option>
            <option value="Entertainment">Entertainment</option>
            <option value="Food">Food</option>
            <option value="Giving">Giving</option>
            <option value="Hobbies">Hobbies</option>
            <option value="Home">Home</option>
            <option value="Medical">Medical</option>
            <option value="Miscellaneous">Miscellaneous</option>
            <option value="Personal">Personal</option>
            <option value="Saving">Saving</option>
            <option value="Utilities">Utilities</option>
    </select>
  </div>
  <div class="form-group">
            Child Category:
            <select class="form-control" required name="childCategory" id="childCategory">
            <option value="" disabled selected>CATEGORY</option>
            </select>
<?php  
            echo '<script type="text/JavaScript">  
              var childcat = {
                "Car": ["Gas", "Car Insurance", "Upgrades", "Repairs/Maintenance", "Fees", "Purchase/Loan", "Other"],
                "Education": ["Programs", "Certifications", "Books"],
                "Entertainment": ["Tickets", "Games", "Social", "Travel", "General"],
                "Food": ["Groceries", "Fast Food", "Restaurant", "Snacks"],
                "Giving": ["Holiday Gifts", "Special Events", "Donations", "Others"],
                "Hobbies": ["Photography", "Technology"],
                "Home": ["Rent", "Renters Insurance", "Repairs/Maintenance", "Household Items"],
                "Medical": ["Health Care", "Dental Care", "Specialty Care", "Medication", "Medical Devices", "Insurance"],
                "Miscellaneous": ["Taxes", "Fees", "Pets", "Uncategorized"],
                "Personal": ["Clothing", "Hygiene"],
                "Saving": ["401k", "Roth IRA", "Stocks", "Investments"],
                "Utilities": ["Water", "Electricity", "Gas/Heating", "Internet", "Cell Phone"]
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
                </script>';
?> 
</div>
            <div class="form-group">
    <label for="paymentMethod">Payment Method:</label>
    <select required class="form-control" name="paymentMethod" id="paymentMethod">
            <option value="american express">American Express</option>
            <option value="chase visa">Chase Visa</option>
            <option value="nbt visa">NBT Visa</option>
            <option value="privacy.com">Privacy.com</option>
            <option value="cash">Cash</option>
            <option value="other">Other</option>
    </select>
  </div>

  <div class="form-group">
    <label for="expenseComment">Comments:</label>
    <textarea class="form-control" name="expenseComment" id="expenseComment" rows="2"></textarea>
  </div>
  <label for="expenseDate"> Date: </label>
            <input type="date" name="expenseDate" id="expenseDate" value="<?php echo date('Y-m-d'); ?>"/>
            <br>
  <br>🦆
  <button type="submit" class="btn btn-primary btn-lg">Submit</button> 🦆
  </div>
</form> 
<hr class="new1">
<!--
/////////////////////////////////////////////////////////////////////////
End Expense Form Code
/////////////////////////////////////////////////////////////////////////
-->

<!--
/////////////////////////////////////////////////////////////////////////
Begin Income Form:
/////////////////////////////////////////////////////////////////////////
-->
  <center>
  <form method = "post" action = "incomeinput.php">
    <table>

            <h2>💵 Income Input Form 💵</h2><br>
            <label for="incomeDescription"> Description: </label>
            <input type = "text" id="incomeDescription" name="incomeDescription" required value=""/><br><br>

            <label for="incomeType"> Income Type: </label>
            <select name="incomeType"  id="incomeType" required>

            <option disabled selected="selected">CATEGORY</option>
            <?php
            $incometype = array(
              "Paycheck", 
              "Freelance Tech", 
              "Freelance Photo", 
              "Selling Something",
              "Other Income"
            );
            foreach($incometype as $item){
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
End Income Input Form
/////////////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////////////
Buttons (links) at bottom of page
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
<br>
</center>
<!--
/////////////////////////////////////////////////////////////////////////
End Button Stuff
/////////////////////////////////////////////////////////////////////////
-->
</body>
<hr class="new1">
<footer>
<p>🔥 Hand written by Sam Luyk. Code here: 
<a href="https://github.com/samluyk/PHPLedger">https://github.com/samluyk/PHPLedger</a> 🔥 </p>
</br>
</footer> 
</html>