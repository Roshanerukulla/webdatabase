<?php
include 'dbconnection.php';

$html = "<html><table style='width:100%' border='1px solid black'><tr>
    <th>Job Title</th>
    <th>Job Description</th>
    <th>Department</th>
    <th>Required Skills</th>
    <th>Application Instructions</th>
    <th>Contact information</th>
    <th>Status</th>
  </tr>";

// get id
$sql1 = "SELECT jobTitle, jobDescription, department, requiredSkills, applicationInstructions, contactInfo, status FROM jobposted WHERE status='open'";
$result = mysqli_query($conn, $sql1);

if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
	    	//$price_tax = ( $price * $tax) + $price;
			$html = $html."<tr><td>".$row['jobTitle']."</td><td>".$row['jobDescription']."</td><td>".$row['department']."</td>
            <td>".$row['requiredSkills']."</td><td>".$row['applicationInstructions']."</td><td>".$row['contacInfo']."</td>
            <td>".$row['status']."</td></tr>";
	    }
	} else {
	    echo "No results";
	}
	
	$html=$html."</table></html>";
	echo $html;

mysqli_close($conn);

?>