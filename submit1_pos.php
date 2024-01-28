<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'dbconnection.php';

    // Get form data
    $jobTitle = $_POST['jobTitle'];
    $jobDescription = $_POST['jobDescription'];
    $department = $_POST['department'];
    $requiredSkills = $_POST['requiredSkills'];
    $hourlyRate = $_POST['hourlyRate'];
    $applicationInstructions = $_POST['applicationInstructions'];
    $contactInfo = $_POST['contactInfo'];
    $status = $_POST['status'];

    // Insert data into the database
    $sql = "INSERT INTO jobposted (jobTitle, jobDescription, department, requiredSkills, hourlyRate, applicationInstructions, contactInfo, status) VALUES ('$jobTitle', '$jobDescription', '$department', '$requiredSkills', '$hourlyRate', '$applicationInstructions', '$contactInfo', '$status')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    mysqli_close($conn);
}

// Close the database connection

?>
