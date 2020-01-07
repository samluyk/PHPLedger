<!doctype html>

<?php
date_default_timezone_set("America/New_York");
/////////////////////////////////////////////////////////////////////////
//Insert the name of your database and expenses table here
$databaseName = "test_database";
$expenseTableName = "expenses";
$incomeTableName = "income";
/////////////////////////////////////////////////////////////////////////
//Were connecting to the database (server:port/user/password/database)
$connection = mysqli_connect("localhost:3308", "root", "", "$databaseName");
if($connection === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
/////////////////////////////////////////////////////////////////////////
?>

<html>
    <head>
    <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <title>Financial Summary</title>

    <h1>Financial Overview</h1>
    <hr class="new1">
	<br>
<center>
    <table cellspacing='0'> <!-- cellspacing='0' is important, must stay -->

	<!-- Table Header -->
	<thead>
		<tr>
			<th>2019 Budget</th>
			<th>January</th>
            <th>February</th>
            <th>March</th>
            <th>April</th>
            <th>May</th>
            <th>June</th>
            <th>July</th>
            <th>August</th>
            <th>September</th>
            <th>October</th>
            <th>November</th>
            <th>December</th>
            <th>Year Total</th>
            <th>Monthly Averge</th>
            
		</tr>
	</thead>
	<!-- Table Header -->

	<!-- Table Body -->
	<tbody>

		<tr>
			<td>Car</td>
			<td>100%</td>
			<td>Yes</td>
		</tr><!-- Table Row -->

		<tr class="even">
			<td>Education</td>
			<td>100%</td>
			<td>Yes</td>
		</tr><!-- Darker Table Row -->

		<tr>
			<td>Entertainment</td>
			<td>20%</td>
			<td>No</td>
		</tr>

		<tr class="even">
			<td>Food</td>
			<td>80%</td>
			<td>No</td>
		</tr>

		<tr>
			<td>Giving</td>
			<td>100%</td>
			<td>Yes</td>
		</tr>

		<tr class="even">
			<td>Hobbies</td>
			<td>23%</td>
			<td>yes</td>
		</tr>

		<tr>
			<td>Home</td>
			<td>80%</td>
			<td>No</td>
		</tr>

        <tr class="even">
			<td>Medical</td>
			<td>20%</td>
			<td>No</td>
        </tr>
        <tr>
			<td>Miscellaneous</td>
			<td>20%</td>
			<td>No</td>
        </tr>
        <tr class="even">
			<td>Personal</td>
			<td>20%</td>
			<td>No</td>
        </tr>
        <tr>
			<td>Savings</td>
			<td>20%</td>
			<td>No</td>
        </tr>
        <tr class="even">
			<td>Utilities</td>
			<td>20%</td>
			<td>No</td>
        </tr>
        
	</tbody>
	<!-- End Table Body -->
</table>
<hr class="new1">
</center>

<!-- 2020 -->

<center>
    <table cellspacing='0'> <!-- cellspacing='0' is important, must stay -->

	<!-- Table Header -->
	<thead>
		<tr>
			<th>2020 Budget</th>
			<th>January</th>
            <th>February</th>
            <th>March</th>
            <th>April</th>
            <th>May</th>
            <th>June</th>
            <th>July</th>
            <th>August</th>
            <th>September</th>
            <th>October</th>
            <th>November</th>
            <th>December</th>
            <th>Year Total</th>
            <th>Monthly Averge</th>
            
		</tr>
	</thead>
	<!-- Table Header -->

	<!-- Table Body -->
	<tbody>

		<tr>
			<td>Car</td>
			<td>100%</td>
			<td>Yes</td>
		</tr><!-- Table Row -->

		<tr class="even">
			<td>Education</td>
			<td>100%</td>
			<td>Yes</td>
		</tr><!-- Darker Table Row -->

		<tr>
			<td>Entertainment</td>
			<td>20%</td>
			<td>No</td>
		</tr>

		<tr class="even">
			<td>Food</td>
			<td>80%</td>
			<td>No</td>
		</tr>

		<tr>
			<td>Giving</td>
			<td>100%</td>
			<td>Yes</td>
		</tr>

		<tr class="even">
			<td>Hobbies</td>
			<td>23%</td>
			<td>yes</td>
		</tr>

		<tr>
			<td>Home</td>
			<td>80%</td>
			<td>No</td>
		</tr>

        <tr class="even">
			<td>Medical</td>
			<td>20%</td>
			<td>No</td>
        </tr>
        <tr>
			<td>Miscellaneous</td>
			<td>20%</td>
			<td>No</td>
        </tr>
        <tr class="even">
			<td>Personal</td>
			<td>20%</td>
			<td>No</td>
        </tr>
        <tr>
			<td>Savings</td>
			<td>20%</td>
			<td>No</td>
        </tr>
        <tr class="even">
			<td>Utilities</td>
			<td>20%</td>
			<td>No</td>
        </tr>
        
	</tbody>
	<!-- End Table Body -->
</table>
<hr class="new1">
</center>
</html>