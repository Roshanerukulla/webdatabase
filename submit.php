<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'dbconnection.php'; // Include your database connection script

    // Retrieve form data
    $jobTitle = $_POST['jobTitle'];
    $jobDescription = $_POST['jobDescription'];
    $department = $_POST['department'];
    $requiredSkills = $_POST['requiredSkills'];
    $hourlyRate = $_POST['hourlyRate'];
    $applicationInstructions = $_POST['applicationInstructions'];
    $contactInfo = $_POST['contactInfo'];
    $status = $_POST['status'];

    // Insert data into the jobposted table
    $sql = "INSERT INTO jobposted (jobTitle, jobDescription, department, requiredSkills, hourlyRate, applicationInstructions, contactInfo, status)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ssssdsss", $jobTitle, $jobDescription, $department, $requiredSkills, $hourlyRate, $applicationInstructions, $contactInfo, $status);

    if (mysqli_stmt_execute($stmt)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
?>
