<!-- Write a PHP code to get input for the past 3 days “Total sale amount” from the user.
Display the Total sale details in a HTML page with table as given below. Don’t hard
code the Date, it has to be generated from current date. -->

<?php
$today = date("Y-m-d");
$yesterday = date("Y-m-d", strtotime("-1 day"));
$daybefore = date("Y-m-d", strtotime("-2 day"));

$today1 = $_POST['today'];
$yesterday1 = $_POST['yesterday'];
$daybefore1 = $_POST['daybefore'];

echo "<table border='1'>
<tr>
<th>S. No.</th>
<th>Date</th>
<th>Total Sale Amount</th>
</tr>
<tr>

<td>1</td>
<td>$today</td>
<td>$today1</td>
</tr>
<tr>
<td>2</td>
<td>$yesterday</td>
<td>$yesterday1</td>
</tr>
<tr>
<td>3</td>
<td>$daybefore</td>
<td>$daybefore1</td>
</tr>
<tr>

</table>";
?>

<html>
<head>
<title>Question 4</title>
</head>
<body>
<form action="ques4.php" method="post">
    <hr>
<table border="1">
<tr>
<!-- add s.no  -->

<th>S.No.</th>
<th>Date</th>
<th>Total Sale Amount</th>

</tr>
<tr>
<td>1</td>
<td><?php echo $today; ?></td>
<td><input type="text" name="today"></td>
</tr>
<tr>
<td>2</td>
<td><?php echo $yesterday; ?></td>
<td><input type="text" name="yesterday"></td>
</tr>
<tr>
<td>3</td>
<td><?php echo $daybefore; ?></td>
<td><input type="text" name="daybefore"></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" value="Submit"></td>
</tr>
</table>
<hr>
</form>
</body>
</html>

