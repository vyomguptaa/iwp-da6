<!-- ques6.php -->
<!-- print previous order on submit button of ques6.php -->


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);


// Check connection

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['item1'])) {
    setcookie("item1", "Item 1", time() + (86400 * 30), "/");
}
if (isset($_POST['item2'])) {
    setcookie("item2", "Item 2", time() + (86400 * 30), "/");
}
if (isset($_POST['item3'])) {
    setcookie("item3", "Item 3", time() + (86400 * 30), "/");
}
if (isset($_POST['item4'])) {
    setcookie("item4", "Item 4", time() + (86400 * 30), "/");
}
if (isset($_POST['item5'])) {
    setcookie("item5", "Item 5", time() + (86400 * 30), "/");
}
$conn->close();

?>

<!-- ques6.php -->
<!-- print previous order on submit button of ques6.php -->

<html>

<head>
    <title>Online Shopping</title>

</head>


<body>
    <form action="ques6.php" method="post">
        <input type="checkbox" name="item1" value="Item 1">Item 1<br>
        <input type="checkbox" name="item2" value="Item 2">Item 2<br>
        <input type="checkbox" name="item3" value="Item 3">Item 3<br>

        <input type="checkbox" name="item4" value="Item 4">Item 4<br>
        <input type="checkbox" name="item5" value="Item 5">Item 5<br>

        <input type="submit" value="Submit">
    </form>


</body>

</html>