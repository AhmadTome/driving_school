<?php


session_start();
require_once ('connection.php');
$conn = getConnection();

$Name = $_POST['Name'];
$Age = $_POST['Age'];
$email = $_POST['email'];
$password = $_POST['password'];
$code = $_POST['code'];


if ($Name == "" || $Age == "" || $email == "" || $password == "") {
    $_SESSION['Error'] = "فشلت عمليه تسجيل حساب جديد, يرجى ملئ الحقول كاملة";
    header('Location: ../signup.php');
    return;
}

$query = "SELECT * FROM `email_verify` WHERE `email` = '". $email ."' and `code`='". $code ."'";
$result = $conn->query($query);
if ($result->num_rows > 0) {
    $query = "INSERT INTO `users`(`name`, `age`, `email`, `password`, `type`) VALUES ('". $Name ."','". $Age ."','". $email ."','". $password ."','user')";
    $result = $conn->query($query);
    if ($result) {
        echo "تم انشاء الحساب بنجاح";
        $_SESSION['Name'] = $Name;
        $_SESSION['Age'] = $Age;
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;

        header('Location: ../home.php');

    } else {
        $_SESSION['Error'] = "فشلت عمليه تسجيل حساب جديد, البريد الالكتروني مستخدم بالفعل";
        header('Location: ../signup.php');
    }
} else {
    $_SESSION['Error'] = "رمز التحقق خاطئ";
    header('Location: ../signup.php');
}






?>
