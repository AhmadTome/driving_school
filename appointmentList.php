<?php
session_start();

if (!isset($_SESSION['email'])) {
    header('Location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>مدرسة تعليم سياقة</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<style>
    .main-section {
        position: relative;
        background: linear-gradient(rgba(0, 0, 0, .7), rgba(235, 82, 73, .7), rgba(0, 0, 0, .7)), url("imgs/banner.jpg");
        height: 600px;
        width: 100%;
        background-size: cover;
    }

    .main-section i {
        font-size: 35px;
        color: #fff;
        position: absolute;
        left: 50%;
        bottom: 15px;
        transform: translateX(-50%);
    }

    .main-section .section-part {
        color: #fff;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
    }

    @-webkit-keyframes blinker {
        from {
            opacity: 1.0;
        }
        to {
            opacity: 0.0;
        }
    }

    .blink {
        text-decoration: blink;
        -webkit-animation-name: blinker;
        -webkit-animation-duration: 0.6s;
        -webkit-animation-iteration-count: infinite;
        -webkit-animation-timing-function: ease-in-out;
        -webkit-animation-direction: alternate;
    }
</style>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark" dir="rtl">
    <!-- Brand/logo -->
    <a class="navbar-brand" href="home.php">الصفحة الرئيسية</a>

    <!-- Links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="#"> اهلا بك <?php echo $_SESSION['Name'] ?>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="appointmentList.php">المواعيد</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="ListOfExams.php">بنك الامتحانات</a>
        </li>
        <li class="nav-item" style="float: left">
            <a class="nav-link" href="helper/kill_session.php">تسجيل خروج</a>
        </li>
    </ul>
</nav>

<div class="">
    <div class="main-section">
        <div class="row">
            <div class="container" style="">
                <div style="text-align: right;height: 550px; overflow-y: auto">
                <?php
                    $appointment = getAppointments();
                foreach ($appointment as $item) {
                    echo '<div class="card" style="margin-top: 15px; padding: 15px">';
                    echo '<h5 class="card-title"> موعد مسجل في تاريخ '. $item['created_at'] .'</h5>';
                    echo '<p class="card-text"> السائق : '. $item['driver_name'] .'</p>';
                    echo '<p class="card-text"> سيارة من نوع : '. $item['carModel'] .'</p>';
                    echo '<p class="card-text"> موعد انتهاء الدرس : '. $item['end_at'] .'</p>';
                    echo ' </div>';
                }
                ?>

                </div>


            </div>
        </div>
    </div>
</div>

</body>
</html>

<?php

function getAppointments()
{
    $servername = "localhost";
    $username = "driving_school";
    $password = "";

    $conn = mysqli_connect($servername, "root",$password, $username,"3306");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    mysqli_set_charset($conn,"utf8");

    $query = "SELECT * FROM `appointments` order by id desc";
    $result = $conn->query($query);
    $appointment = [];

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            array_push($appointment,
                [
                    "id " => $row["id"],
                    "driver_name" => $row["driver_name"],
                    "start_at" => $row["start_at"],
                    "end_at" => $row["end_at"],
                    "carModel" => $row["carModel"],
                    "cost" => $row["cost"],
                    "created_at" => $row["created_at"]
                ]
            );
        }
    }

    return $appointment;
}

?>
