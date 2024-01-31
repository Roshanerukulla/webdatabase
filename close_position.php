<?php



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'dbconnection.php';
    // Getting the 'id' from the close_pos.html
    $position_id = $_POST["position_id"];

    // Updating the status to 'closed'
    $sql = "UPDATE jobposted SET status = 'close' WHERE id = $position_id";
    $conn->query($sql);

    // Redirecting to the view_positions page 
    header("Location: fclty_tbl_view.php");
    exit();
}


$conn->close();
?>
