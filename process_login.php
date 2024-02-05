<?php
// Include the database connection file
include "dbconnection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Getting the submitted values by the user
    $username = $_POST["username"];
    $password = $_POST["password"];
    $role = $_POST["role"];

    // Validate login credentials against the database
    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password' AND role = '$role'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        // Valid credentials, redirect based on role
        if ($role == "employee") {
            // Redirecting to the 'emp_tbl_view' where user role is 'employee'
            // For this role, the user can only view the Open jobs
            header("Location: emp_tbl_view.php");
            exit();
        } elseif ($role == "faculty") {
            // Redirecting to the 'forms_for_faculty.html' where user role is 'faculty'
            // For this role, the user can add new jobs and close previous job openings
            header("Location: forms_for_faculty.html");
            exit();
        }
    } else {
        // Invalid credentials
        echo "Invalid username, password, or role.";
    }
} else {
    // Redirecting to the login page if accessed directly without form submission
    header("Location: login_page.html");
    exit();
}

// Close the database connection
$conn->close();
?>
