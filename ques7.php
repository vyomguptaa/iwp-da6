<html>

<head>
    <title>Change Password</title>

</head>

<body>
    <form action="ques7.php" method="post">
        Username: <input type="text" name="username"><br>
        Current Password: <input type="password" name="password"><br>
        New Password: <input type="password" name="newpassword"><br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";




$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {

die("Connection failed: " . $conn->connect_error);

}

if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['newpassword'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $newpassword = $_POST['newpassword'];
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        if(strlen($newpassword) >= 8){
            $sql = "UPDATE users SET password = '$newpassword' WHERE username = '$username'";
            if($conn->query($sql) === TRUE){
                echo "Password changed successfully";
            }
            else{
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
        else{
            echo "Password must be atleast 8 characters long";
        }
    }
    else{
        echo "Username or password is incorrect";
    }
}


$conn->close();

?>



