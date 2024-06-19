<?php
$servername = "localhost"; // Change to your database server name if needed
$username = "root"; // Change to your database username
$password = ""; // Change to your database password
$dbname = "test"; // Change to your database name

// Create a connection to the database
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the form
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password_1"];
    
    // SQL query to insert data into the "user1" table
    $sql = "INSERT INTO user1 (username, email, password) VALUES ('$username', '$email', '$password')";
    
    if (mysqli_query($conn, $sql)) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    // Close the database connection
    mysqli_close($conn);
}
?>


