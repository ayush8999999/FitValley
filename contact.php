<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Process the form data (you can add your processing logic here)
    
    // Redirect to "index1.html" after processing
    header("Location: index1.html");
    exit;
}
?>
