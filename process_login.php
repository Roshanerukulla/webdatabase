<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Getting the submitted values by the user
    $username = $_POST["username"];
    $password = $_POST["password"];
    $role = $_POST["role"];

   
    if ($role == "employee") {
        # redirecting to the 'emp_tbl_view' where user role is 'employee'
        # For this role the user can only view the Open jobs
        header("Location: emp_tbl_view.php");
        exit();
    } elseif ($role == "faculty") {
        # redirecting to the 'forms_for_faculty.html' where user role is 'faculty'
        # For this role the user can add new jobs also can close previous job openings
        header("Location: forms_for_faculty.html");
        exit();
    } else {
        // Handle other cases
        echo "Invalid role selected.";
    }
} else {
    // Redirecting to the login page if accessed directly without form submission
    header("Location: login_page.html");
    exit();
}
?>
