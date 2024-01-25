$sql1 = "SELECT MAX(id) AS id FROM jobposted";
$result = mysqli_query($conn, $sql1);
$row = mysqli_fetch_assoc($result);
$newid = $row['id'] + 1;


$sql2 = "INSERT INTO formtest2 (id, jobTitle, jobDescription, department, requiredSkills, hourlyRate,applicationInstructions, contactInfo, status)
VALUES ('".$newid."', '".$fname."', '".$lname."', '".$email."')";

if (mysqli_query($conn, $sql2)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>