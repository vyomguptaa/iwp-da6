

<?php
$person1 = $_POST['person1'];
$person2 = $_POST['person2'];
$person3 = $_POST['person3'];
$age1 = $_POST['age1'];
$age2 = $_POST['age2'];
$age3 = $_POST['age3'];
$char1 = strlen($person1);
$char2 = strlen($person2);
$char3 = strlen($person3);
$word1 = str_word_count($person1);
$word2 = str_word_count($person2);
$word3 = str_word_count($person3);

echo "<table border='1'>
<tr>
<th>Name</th>
<th>Age</th>
<th>Character Count</th>
<th>Word Count</th>
</tr>
<tr>
<td>$person1</td>
<td>$age1</td>
<td>$char1</td>
<td>$word1</td>
</tr>
<tr>
<td>$person2</td>
<td>$age2</td>
<td>$char2</td>
<td>$word2</td>
</tr>
<tr>
<td>$person3</td>
<td>$age3</td>
<td>$char3</td>
<td>$word3</td>
</tr>
</table>";


?>

<html>
<head>
<title>Question 3</title>
</head>
<body>
<form action="ques3.php" method="post">
    <hr>
<table border="1">
<tr>
<th>Name</th>
<th>Age</th>

</tr>
<tr>
<td><input type="text" name="person1"></td>
<td><input type="text" name="age1"></td>
</tr>
<tr>
<td><input type="text" name="person2"></td>
<td><input type="text" name="age2"></td>
</tr>
<tr>
<td><input type="text" name="person3"></td>
<td><input type="text" name="age3"></td>
</tr>
</table>
<hr>
<input type="submit" value="Submit">
</form>
</body>

</html>