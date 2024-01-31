<?php
include 'dbconnection.php';

//  Creating a table structure for displaying the values coming from the Database
$html = "<html><table style='width:100%' border='1px solid black'><tr>
    <th>id</th>
    <th>Job Title</th>
    <th>Job Description</th>
    <th>Department</th>
    <th>Required Skills</th>
    <th>Hourly Rate</th>
    <th>Application Instructions</th>
    <th>Contact information</th>
    <th>Status</th>
  </tr>";

// Getting everything from the jobposted table
// Faculty members can see every position
$sql1 = "SELECT id, jobTitle, jobDescription, department, requiredSkills, hourlyRate,applicationInstructions, contactInfo, status FROM jobposted";


$result = mysqli_query($conn, $sql1);

if (mysqli_num_rows($result) > 0) {
	    // passing output data of each row to our table structure
	    while($row = mysqli_fetch_assoc($result)) {
			$html = $html."<tr><td>".$row['id']."</td><td>".$row['jobTitle']."</td><td>".$row['jobDescription']."</td><td>".$row['department']."</td>
            <td>".$row['requiredSkills']."</td><td>".$row['hourlyRate']."</td><td>".$row['applicationInstructions']."</td><td>".$row['contactInfo']."</td>
            <td>".$row['status']."</td></tr>";
	    }
	} else {
	    echo "No results";
	}
	
	$html=$html."</table></html>";

  // Displaying the table
	echo $html;

mysqli_close($conn);

?>