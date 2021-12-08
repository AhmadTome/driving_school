<?php
session_start();
require_once ('connection.php');
$conn = getConnection();


$driver_name = $_POST['driver_name'];
$start_at = $_POST['start_at'];
$end_at = $_POST['end_at'];
$carModel = $_POST['carModel'];
$cost = $_POST['cost'];

$query = "INSERT INTO `appointments`(`driver_name`, `start_at`, `end_at`, `carModel`, `cost`, `created_at`) VALUES ('". $driver_name ."', '". $start_at ."', '". $end_at ."', '". $carModel ."', ". $cost .", '". date("Y/m/d") ."')";


$result = $conn->query($query);

if ($result) {
    $_SESSION['Success'] = "تم تسجيل الموعد بنجاح !";
    header('Location: ../add_appointment.php');
}
else {
    $_SESSION['Error'] = "لم يتم تسجيل الموعد, هناك مشكله حدثت!ّ";
    header('Location: ../add_appointment.php');
}
?>
