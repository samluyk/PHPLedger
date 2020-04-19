<!doctype html>
<html>
<head>
<script src="jquery-3.4.1.min.js"></script>
<link rel="stylesheet" href="bootstrap.css">
<meta charset='UTF-8'/>
<meta name='viewport'
      content='width=device-width, initial-scale=1.0, shrink-to-fit=no'>
<link rel="stylesheet" type="text/css" href="style.css">
<html lang="en">
</head>
<title>Financial Logger</title>
<body>
<br>
<center>
<!--
/////////////////////////////////////////////////////////////////////////
Expense Input Form:
/////////////////////////////////////////////////////////////////////////
-->
<h2>⛔ Expense Input Form ⛔</h2><br>
<form method = "post" action="expenseinput.php">
<div class="container">
  <div class="form-group">
    <label for="itemName">The Expense:</label>
    <input type="text" id="itemName" name="itemName" class="form-control" placeholder="Expense" autofocus required>
  </div>
  <div class="form-group">
    <label for="expenseAmount">Item Cost:</label>
    <input type="number" class="form-control" min="0.01" step="0.01" max="1000000" placeholder="Amount" id="expenseAmount" name="expenseAmount" required>
  </div>
  <div class="form-group">
    <label for="expensePrimaryCategory">Primary Category:</label>
    <select class="form-control" name="expensePrimaryCategory" id="expensePrimaryCategory" required onChange="changecat(this.value);">
            <option value="" disabled selected>CATEGORY</option>
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
                "Car": ["xxxxx", "Gas", "Insurance", "Repairs/Maintenance", "Fees", "Purchase/Loan", "Other"],
                "Education": ["xxxxx", "Programs", "Certifications", "Books"],
                "Entertainment": ["xxxxx", "Tickets", "Games", "Social", "Travel", "General"],
                "Food": ["xxxxx", "Groceries", "Fast Food", "Restaurant"],
                "Giving": ["xxxxx", "Holiday Gifts", "Special Events", "Donations", "Others"],
                "Hobbies": ["xxxxx", "Photography", "Technology"],
                "Home": ["xxxxx", "Rent", "Insurance", "Repairs/Maintenance", "Household Items"],
                "Medical": ["xxxxx", "Medical", "Dental", "Other", "Vision", "Insurance"],
                "Miscellaneous": ["xxxxx", "Taxes", "Fees", "Pets", "Uncategorized"],
                "Personal": ["xxxxx", "Clothing", "Hygiene"],
                "Saving": ["xxxxx", "Roth 401k", "Roth IRA", "Stocks", "Investments"],
                "Utilities": ["xxxxx", "Water", "Electricity", "Gas/Heating", "Internet", "Cell Phone", "Sewer"]
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
    <textarea class="form-control" name="expenseComment" id="expenseComment" rows="1"></textarea>
  </div>
  <label for="expenseDate"> Date: </label>
            <input type="date" name="expenseDate" id="expenseDate" value="<?php echo date('Y-m-d'); ?>"/>
            <br>
  <br>
  <button type="submit" class="btn btn-primary btn-lg">Submit Expense</button>
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
<form method = "post" action="incomeinput.php">
<div class="container">
<h2>💵 Income Input Form 💵</h2><br>

<div class="form-group">
    <label for="incomeDescription">Description:</label>
    <input type="text" id="incomeDescription" name="incomeDescription" class="form-control" placeholder="Description" required>
  </div>
  <div class="form-group">
    <label for="incomeType">Income Type:</label>
    <select required class="form-control" name="incomeType" id="incomeType">
            <option value="paycheck">Paycheck</option>
            <option value="freelance tech">Freelance Tech</option>
            <option value="freelance photo">Freelance Photo</option>
            <option value="selling something">Selling Something</option>
            <option value="other income">Other Income</option>
    </select>
  </div>
  
  <div class="form-group">
    <label for="incomeGrossAmount">Gross Income:</label>
    <input type="number" id="incomeGrossAmount" name="incomeGrossAmount" class="form-control" min="0.01" step="0.01" max="1000000" placeholder="Gross Income" required>
  </div>
  <div class="form-group">
    <label for="incomeTaxAmount">Taxes:</label>
    <input type="number" id="incomeTaxAmount" name="incomeTaxAmount" class="form-control" min="0.01" step="0.01" max="1000000" placeholder="Taxed Amount" required>
  </div>
  <div class="form-group">
    <label for="incomeAutomaticSavingAmount">Automatic Saving:</label>
    <input type="number" id="incomeAutomaticSavingAmount" name="incomeAutomaticSavingAmount" class="form-control" min="0.01" step="0.01" max="1000000" placeholder="Roth 401k Contribuion" required>
  </div>
  <div class="form-group">
    <label for="incomeNetAmount">Net Income:</label>
    <input type="number" id="incomeNetAmount" name="incomeNetAmount" class="form-control" min="0.01" step="0.01" max="1000000" placeholder="Net Income" required>
  </div>
  <div class="form-group">
    <label for="incomeComments">Additional Comments:</label>
    <input type="text" id="incomeComments" name="incomeComments" class="form-control" placeholder="Income Comments">
  </div>

  <label for="incomeDate"> Date: </label>
            <input type="date" name="incomeDate" value="<?php echo date('Y-m-d'); ?>"/>
            <br>
            <br>
  <button type="submit" class="btn btn-primary btn-lg">Submit Income</button>
</div>
<!--
/////////////////////////////////////////////////////////////////////////
End Income Input Form
/////////////////////////////////////////////////////////////////////////
-->

<!--
/////////////////////////////////////////////////////////////////////////
Buttons (links) at bottom of page
/////////////////////////////////////////////////////////////////////////
-->
<hr class="new1">
  <center>
    <td><form>
    <input type="button" value="Visit Query Page" onclick="window.location.href='http://localhost:3000'" />
    </form></td><br>
    <br>
    <td><form>
    <input type="button" value="Delete Latest Entry" onclick="window.location.href='./deletelatest.php'" />
    </form></td>    
    <br>
    <td><form>
    <input type="button" value="Visit Financial Summary Page" onclick="window.location.href='./summary.php'" />
    </form></td>
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
<h4> v1.1 </h4>
</br>
</footer> 
</html>