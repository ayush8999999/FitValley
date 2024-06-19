
<?php
// Database configuration
$servername = "localhost";
$username = "root"; // Change this if your MySQL username is different
$password = "";     // Change this if your MySQL password is different
$dbname = "test";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }else{
        echo("database");
    }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM user1 WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Login successful
        header("Location: index1.html");
        exit();
    } else {
        echo("Login failed");
        // header("Location: error.html");
        
        exit();
    }
}
?>
