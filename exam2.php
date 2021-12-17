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
            <div class="container" dir="rtl">

                <table class="table " style="margin-top:20px; text-align: right; border: lightgrey solid; width: 100%">
                    <tbody id="q1">
                    <tr>
                        <td colspan="2">
                            <span class="question">1 - في طريق بلدية ممنوع استعمال الزامور :</span>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="q1"></td>
                        <td>
                            فقط عندما تمر جنب حيوانات
                        </td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="q1" data-answer="true"></td>
                        <td >
                            فقط بالقرب من المستشفيات
                        </td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="q1" data-answer="true"></td>
                        <td>
                            في كل الأحوال ما عدا في حالة خطر لا يمكن منعه بطريقة أخرى
                        </td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="q1"></td>
                        <td>
                            < فقط إذا كانت هناك إشارة سير> ممنوع الزامور
                        </td>
                    </tr>
                    </tbody>
                </table>

                <table class="table " style="margin-top:20px; text-align: right; border: lightgrey solid; width: 100%">
                    <tbody id="q2">
                    <tr>
                        <td colspan="2">
                            <span class="question">2 -إذا ظهر الضوء الازرق على لوحة المقاييس , هذا معناه :</span>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="q2" ></td>
                        <td>
                            إننا نستعمل أضواء الوقوف
                        </td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="q2" ></td>
                        <td >
                            إننا نستعمل الضوء الواطي
                        </td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="q2"></td>
                        <td>
                            إننا نستعمل ماسحات الزجاج الأمامي
                        </td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="q2" data-answer="true"></td>
                        <td>
                            إننا نستعمل الضوء العالي
                        </td>
                    </tr>
                    </tbody>
                </table>

                <table class="table " style="margin-top:20px; text-align: right; border: lightgrey solid; width: 100%">
                    <tbody id="q3">
                    <tr>
                        <td colspan="2">
                            <span class="question">3 - يجب التمهل عند الاقتراب من باص واقف في محطة وقوف :</span>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="q3"></td>
                        <td>
                            فقط إذا كان الباص بارزا خارج المحطة
                        </td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="q3" ></td>
                        <td >
                            فقط إذا كان في داخل الباص ركاب
                        </td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="q3"></td>
                        <td>
                            فقط إذا كان في داخل الباص أولاد
                        </td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="q3"  data-answer="true"></td>
                        <td>
                            في جميع الأحوال
                        </td>
                    </tr>
                    </tbody>
                </table>


                <table class="table " style="margin-top:20px; text-align: right; border: lightgrey solid; width: 100%">
                    <tbody id="q4">
                    <tr>
                        <td colspan="2">
                            <span class="question">4 -رمل على سطح الطريق , يسبب :</span>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="q4" ></td>
                        <td>
                            لا تأثير للرمل على سير المركبة
                        </td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="q4" data-answer="true"></td>
                        <td >
                            احتكاك قليل بين الإطارات والطريق مما يؤدي إلى الزحلقة
                        </td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="q4"></td>
                        <td>
                            زيادة الاحتكاك بين الكاوتشوك والطريق
                        </td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="q4"></td>
                        <td>
                            رمل أو أوساخ تساعد على توقف المركبة حالا
                        </td>
                    </tr>
                    </tbody>
                </table>

                <table class="table " style="margin-top:20px; text-align: right; border: lightgrey solid; width: 100%">
                    <tbody id="q5">
                    <tr>
                        <td colspan="2">
                            <span class="question">5 -يضاء ضوء السير الى الخلف :</span>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="q5" data-answer="true"></td>
                        <td>
                            عند استعمال الغيار الخلفي فقط
                        </td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="q5" ></td>
                        <td >
                            يضاء بواسطة مفتاح كهربائي منفصل
                        </td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="q5"></td>
                        <td>
                            يستعمل في ساعات الليل فقط
                        </td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="q5" ></td>
                        <td>
                            ممنوع استعماله عند الرجوع إلى الخلف
                        </td>
                    </tr>
                    </tbody>
                </table>

                <table class="table " style="margin-top:20px; text-align: right; border: lightgrey solid; width: 100%">
                    <tbody id="q6">
                    <tr>
                        <td colspan="2">
                            <span class="question">6 -استعمال الزامور في طريق بلدية :</span>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="q6" data-answer="true"></td>
                        <td>
                            يجوز للتحذير عندما لا تكون وسيلة أخرى لمنع الخطر
                        </td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="q6" ></td>
                        <td >
                            يجوز فقط في طريق ليست بلدية
                        </td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="q6"></td>
                        <td>
                            يجوز فقط في طريق بلدية
                        </td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="q6" ></td>
                        <td>
                            ممنوع في طريق بلدية
                        </td>
                    </tr>
                    </tbody>
                </table>

                <table class="table " style="margin-top:20px; text-align: right; border: lightgrey solid; width: 100%">
                    <tbody id="q7">
                    <tr>
                        <td colspan="2">
                            <span class="question">7 - يرينا مقياس السرعة :</span>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="q7" ></td>
                        <td>
                            سرعة دوران عجلة المحرك
                        </td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="q7" data-answer="true"></td>
                        <td >
                            سرعة سير المركبة كم / ساعة
                        </td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="q7"></td>
                        <td>
                            سرعة العجلات المسننة في جهاز الغيار
                        </td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="q7" ></td>
                        <td>
                            سرعة دوران المحرك
                        </td>
                    </tr>
                    </tbody>
                </table>

                <table class="table " style="margin-top:20px; text-align: right; border: lightgrey solid; width: 100%">
                    <tbody id="q8">
                    <tr>
                        <td colspan="2">
                            <span class="question">8 -عليك جلب المركبة للكراج لفحص توازن العجلات :</span>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="q8" data-answer="true"></td>
                        <td>
                            عندما ترى الإطارات (الكاوتشوك) تتلف بسرعة
                        </td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="q8" ></td>
                        <td >
                            عندما تشعر أن فرامل اليد ضعيفة
                        </td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="q8"></td>
                        <td>
                            عندما تشعر أن فرامل الرجل لا توقف المركبة
                        </td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="q8" ></td>
                        <td>
                            عندما تشعر أن الهواء في العجلات يتناقص بسرعة
                        </td>
                    </tr>
                    </tbody>
                </table>

                <table class="table " style="margin-top:20px; text-align: right; border: lightgrey solid; width: 100%">
                    <tbody id="q9">
                    <tr>
                        <td colspan="2">
                            <span class="question">9 - إذا لم تتمكن من تشغيل المحرك, وتشعر برائحة شديدة للوقود, يكون السبب أن :</span>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="q9" ></td>
                        <td>
                            الوقود قد نفذ من خزان الوقود
                        </td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="q9" data-answer="true"></td>
                        <td >
                            الكاربوريتر مشبع بالوقود
                        </td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="q9" ></td>
                        <td>
                            أنبوب الوقود مسدود
                        </td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="q9" ></td>
                        <td>
                            الكاربوريتر تعطل عن العمل
                        </td>
                    </tr>
                    </tbody>
                </table>

                <table class="table " style="margin-top:20px; text-align: right; border: lightgrey solid; width: 100%">
                    <tbody id="q10">
                    <tr>
                        <td colspan="2">
                            <span class="question">10 - عندما يتوقف المحرك بصورة فجائية فما عليك فحصه أولا :</span>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="q10" data-answer="true"></td>
                        <td>
                            إذا كان هناك خلل في التيار الكهربائي
                        </td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="q10" ></td>
                        <td >
                            إذا أضواء المركبة تنير
                        </td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="q10" ></td>
                        <td>
                            إذا كان هناك ماء كافي في الرادياتور
                        </td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="q10" ></td>
                        <td>
                            إذا كان هناك زيت كافي في المحرك
                        </td>
                    </tr>
                    </tbody>
                </table>




                <div class="row">
                    <button class="btn btn-primary" onclick="getResult()">تسليم الامتحان</button>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
<script>
    function getResult() {
        var ele = $(document).find("[data-answer='true']:checked");
        alert('نتيجة امتحانك هي ' + ele.length + " / 10")
    }
</script>
</html>
