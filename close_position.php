<?php



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'dbconnection.php';
    // Get form data
    $position_id = $_POST["position_id"];

    // Update the status to 'closed'
    $sql = "UPDATE jobposted SET status = 'close' WHERE id = $position_id";
    $conn->query($sql);

    // Redirect to the view_positions page or another page
    header("Location: fclty_tbl_view.php");
    exit();
}

// Close the database connection
$conn->close();
?>
