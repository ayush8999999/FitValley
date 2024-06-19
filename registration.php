
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
    echo "connected";
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["register"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Hash the password securely
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Use prepared statement to insert user data
    $stmt = $conn->prepare("INSERT INTO user1 (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $password);

    if ($stmt->execute()) {
        // Commit changes and redirect to home.html
        $conn->commit();
        header("Location: index1.html");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
