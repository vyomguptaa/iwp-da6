
<html>

<head>
    <title>Online Shopping</title>
</head>

<body>

    <form action="ques8.php" method="post">
        <h1>Online Shopping</h1>
        <h2>Order ID: <?php echo rand(100000, 999999); ?></h2>
        <h2>Items</h2>
        <input type="checkbox" name="item1" value="item1">Item 1<br>
        <input type="checkbox" name="item2" value="item2">Item 2<br>
        <input type="checkbox" name="item3" value="item3">Item 3<br>
        <input type="checkbox" name="item2" value="item4">Item 4<br>
        <input type="checkbox" name="item3" value="item5">Item 5<br>


        <input type="submit" value="Submit">

    </form>
    <br>
    <br>

    <h2>Previous Orders</h2>
    <marquee behavior="scroll" direction="up" scrollamount="2">
        <?php
        if (isset($_COOKIE['item1'])) {
            echo $_COOKIE['item1'] . "<br>";
        }
        if (isset($_COOKIE['item2'])) {
            echo $_COOKIE['item2'] . "<br>";
        }
        if (isset($_COOKIE['item3'])) {
            echo $_COOKIE['item3'] . "<br>";
        }
        if (isset($_COOKIE['item4'])) {
            echo $_COOKIE['item4'] . "<br>";
        }
        if (isset($_COOKIE['item5'])) {
            echo $_COOKIE['item5'] . "<br>";
        }
        ?>
    </marquee>

</body>

</html>