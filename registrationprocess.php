<?php
// Include the database connection file
include "dbconnection.php";

// Process registration form data
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $role = $_POST["role"];

    // Perform database insertion (replace with your actual database schema and queries)
    $sql = "INSERT INTO users (username, password, role) VALUES ('$username', '$password', '$role')";

    if ($conn->query($sql) === TRUE) {
        // Display a success message and redirect after a delay
        echo "<p>Registration successful! Redirecting to login page...</p>";
        echo '<meta http-equiv="refresh" content="2;url=login.html">'; // Redirect after 2 seconds
        exit();
    } else {
        echo "Error: ";
    }
}

// Close the database connection
$conn->close();
?>
