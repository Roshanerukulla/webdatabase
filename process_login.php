<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the submitted values
    $username = $_POST["username"];
    $password = $_POST["password"];
    $role = $_POST["role"];

   
    if ($role == "employee") {
        header("Location: emp_tbl_view.php");
        exit();
    } elseif ($role == "faculty") {
        header("Location: forms_for_faculty.html");
        exit();
    } else {
        // Handle other cases or display an error message
        echo "Invalid role selected.";
    }
} else {
    // Redirect to the login page if accessed directly without form submission
    header("Location: login_page.html");
    exit();
}
?>
