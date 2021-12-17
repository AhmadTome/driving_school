<?php
session_start();
include ('header.php');

?>

<body>

<div class="wrapper fadeInDown">
    <div id="formContent">
        <!-- Tabs Titles -->

        <!-- Icon -->
        <div class="fadeIn first">
            <img src="imgs/logo.png" id="icon" alt="User Icon" />
        </div>

        <!-- Login Form -->
        <form action="database/signup.php" method="post">
            <input type="text" id="Name" class="fadeIn second" name="Name" placeholder="Name">
            <input type="text" id="Age" class="fadeIn second" name="Age" placeholder="Age">
            <input type="text" id="email" class="fadeIn second" name="email" placeholder="email"> <button type="button" id="sendCode">ارسال رمز التأكيد</button>
            <input type="password" id="password" class="fadeIn third" name="password" placeholder="*********">
            <input type="text" id="code" class="fadeIn second" name="code" placeholder="code">
            <input type="submit" class="fadeIn fourth" value="Sign Up">
        </form>

        <p class="text-right" style="color: red">
            <?php
            if (isset($_SESSION['Error'])) {
                echo $_SESSION['Error'];
                unset($_SESSION['Error']);

            }
            ?>
        </p>

        <div id="formFooter">
            <a class="underlineHover" href="login.php">Login?</a>
        </div>

    </div>
</div>


</body>

<script>
    $(document).ready(function () {
       $('#sendCode').on('click',  function () {

           if ($('email').val() == ""){
               alert('يرجى ادخال بريد الكتروني صحيح')
               return;
           }

           $.ajax({
               url: 'database/sendCode.php',
               type: "post",
               data: {
                   "email": $('#email').val(),
               },
               success: function (data) {
                   alert("تم ارسال رمز التحقق بنجاح")
               }
           });
       });
    });
</script>

