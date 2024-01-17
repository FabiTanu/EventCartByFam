<?php

include 'config/dbconn.php';

$id = $_GET['id'];


//folder pic delete
$sql1 = "SELECT * FROM review WHERE id = {$id}";
$result = mysqli_query($connection, $sql1) or die("Query Failed : Select");
$row = mysqli_fetch_assoc($result);
unlink($row['image']);



$query = "DELETE from review WHERE id = '$id'";
$result = mysqli_query($connection, $query);

if ($result) {
    echo "Data Deleted Successfully";
    header("Location:blogs_events.php");
} else {
    echo "Failed";
}
?>