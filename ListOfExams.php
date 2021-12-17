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

                <div style="text-align: right;height: 550px; overflow-y: auto; " dir="rtl">
                    <div style="display: inline-block; width: 33%; text-align: center; cursor: pointer; margin-top: 25px" onclick="window.location = 'exam1.php'">
                        <div>
                            <img src="imgs/exam.jpg" style="height: 300px; width: 300px;">
                        </div>
                        <label style="color:white;margin-top: 20px; font-size: 20px; cursor: pointer">الأمتحان الاول</label>
                    </div>

                    <div style="display: inline-block; width: 33%; text-align: center; cursor: pointer; margin-top: 25px" onclick="window.location = 'exam2.php'">
                        <div>
                            <img src="imgs/exam.jpg" style="height: 300px; width: 300px;">
                        </div>
                        <label style="color:white;margin-top: 20px; font-size: 20px; cursor: pointer">الأمتحان الثاني</label>
                    </div>

                    <div style="display: inline-block; width: 33%; text-align: center; cursor: pointer; margin-top: 25px" onclick="window.location = 'exam3.php'">
                        <div>
                            <img src="imgs/exam.jpg" style="height: 300px; width: 300px;">
                        </div>
                        <label style="color:white;margin-top: 20px; font-size: 20px; cursor: pointer">الأمتحان الثالث</label>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>

</body>
</html>
