<?php
session_start();
require_once ('connection.php');
$conn = getConnection();


$start_at = $_GET['start_at'];
$end_at = $_GET['end_at'];

$query = "SELECT SUM(`cost`) as cost FROM `appointments` WHERE `created_at` BETWEEN '".$start_at."' and '". $end_at ."'";

$result = $conn->query($query);
$appointment = [];

if ($result->num_rows > 0) {
$row = $result->fetch_assoc();

if ($row['cost']) {
    echo $row['cost'];
} else {
    echo 0;
}

} else {
    echo 0;
}


