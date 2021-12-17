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
    <link href="https://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.css" rel="stylesheet"/>


</head>
<style>
    .main-section {
        position: relative;
        background: linear-gradient(rgba(0, 0, 0, .7), rgba(235, 82, 73, .7), rgba(0, 0, 0, .7)), url("imgs/banner-admin.jpg");
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
    <a class="navbar-brand" href="AdminPanel.php">الصفحة الرئيسية</a>

    <!-- Links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="add_appointment.php">إضافة مواعيد</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="earns.php">العائد من المال</a>
        </li>
        <li class="nav-item" style="float: left">
            <a class="nav-link" href="helper/kill_session.php">تسجيل خروج</a>
        </li>

    </ul>
</nav>

<div class="">
    <div class="main-section">
        <div class="row">



            <div class="container" style="color: white; text-align: right" dir="rtl">

                    <div class="row form-group">
                        <div class="col-6">
                            <label for="start_at">تاريخ بداية</label>
                            <input type="date" class="form-control" id="start_at"  name="start_at" >
                        </div>
                        <div class="col-6">
                            <label for="end_at">تاريخ نهاية</label>
                            <input type="date" class="form-control" id="end_at" name="end_at"  >
                        </div>
                    </div>

                    <button id="getEarn" class="btn btn-primary">بحث</button>

                <div class="form-group">
                    <label for="driver_name">العائد</label>
                    <input type="text" class="form-control" id="earn" name="earn" readonly>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function () {
        $('#getEarn').on('click', function () {
            $.ajax({
                url: 'database/getEarns.php',
                type: "get",
                data: {
                    "start_at": $('#start_at').val(),
                    "end_at": $('#end_at').val(),
                },
                success: function (data) {
                    $('#earn').val(data)
                }
            });
        });
    })
</script>

