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
$connection = mysqli_connect("localhost:3306", "root", "", "$databaseName");
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

    <h1>Database GUI</h1>
    <hr class="new1">
    <br>
    <center>Financial Overview</center>

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
			<td>Create pretty table design</td>
			<td>100%</td>
			<td>Yes</td>
		</tr><!-- Table Row -->

		<tr class="even">
			<td>Take the dog for a walk</td>
			<td>100%</td>
			<td>Yes</td>
		</tr><!-- Darker Table Row -->

		<tr>
			<td>Waste half the day on Twitter</td>
			<td>20%</td>
			<td>No</td>
		</tr>

		<tr class="even">
			<td>Feel inferior after viewing Dribble</td>
			<td>80%</td>
			<td>No</td>
		</tr>

		<tr>
			<td>Wince at "to do" list</td>
			<td>100%</td>
			<td>Yes</td>
		</tr>

		<tr class="even">
			<td>Vow to complete personal project</td>
			<td>23%</td>
			<td>yes</td>
		</tr>

		<tr>
			<td>Procrastinate</td>
			<td>80%</td>
			<td>No</td>
		</tr>

        <tr class="even">
			<td>Waste half the day on Twitter</td>
			<td>20%</td>
			<td>No</td>
        </tr>
        <tr>
			<td>Waste half the day on Twitter</td>
			<td>20%</td>
			<td>No</td>
        </tr>
        <tr class="even">
			<td>Waste half the day on Twitter</td>
			<td>20%</td>
			<td>No</td>
        </tr>
        <tr>
			<td>Waste half the day on Twitter</td>
			<td>20%</td>
			<td>No</td>
        </tr>
        <tr class="even">
			<td>Waste half the day on Twitter</td>
			<td>20%</td>
			<td>No</td>
        </tr>
        <tr>
			<td>Waste half the day on Twitter</td>
			<td>20%</td>
			<td>No</td>
        </tr>
        <tr class="even">
			<td>Waste half the day on Twitter</td>
			<td>20%</td>
			<td>No</td>
        </tr>
        <tr>
			<td>Waste half the day on Twitter</td>
			<td>20%</td>
			<td>No</td>
        </tr>
        <tr class="even">
			<td>Waste half the day on Twitter</td>
			<td>20%</td>
			<td>No</td>
        </tr>
        <tr>
			<td>Waste half the day on Twitter</td>
			<td>20%</td>
			<td>No</td>
        </tr>
        <tr class="even">
			<td>Waste half the day on Twitter</td>
			<td>20%</td>
			<td>No</td>
        </tr>
        <tr>
			<td>Waste half the day on Twitter</td>
			<td>20%</td>
			<td>No</td>
        </tr>
        <tr class="even">
			<td>Waste half the day on Twitter</td>
			<td>20%</td>
			<td>No</td>
        </tr>
        <tr>
			<td>Waste half the day on Twitter</td>
			<td>20%</td>
			<td>No</td>
        </tr>
        <tr class="even">
			<td>Waste half the day on Twitter</td>
			<td>20%</td>
			<td>No</td>
        </tr>
        <tr>
			<td>Waste half the day on Twitter</td>
			<td>20%</td>
			<td>No</td>
        </tr>
        <tr class="even">
			<td>Waste half the day on Twitter</td>
			<td>20%</td>
			<td>No</td>
        </tr>
        

	</tbody>
	<!-- End Table Body -->

</table>
</center>
</html>