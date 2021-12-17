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
                            <span class="question">1 - عندما تكون امامك جزيرة سير بدون اشارة, عليك اجتيازها دائما   :</span>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="q1"></td>
                        <td>
                            من جهة الطريق العريض أكثر
                        </td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="q1" data-answer="true"></td>
                        <td >
                            من جهة اليمين الا اذا كانت هناك اشارة سير تدل على غير ذلك
                        </td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="q1"></td>
                        <td>
                            من جهة اليسار
                        </td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="q1"></td>
                        <td>
                            من المكان الذي فيه ازدحام لحركة السير
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
                            <span class="question">3 - في طريق ذات اتجاهين الذي يشمل ثلاثة مسالك هل مسموح استعمال المسلك الأوسط :</span>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="q3" data-answer="true"></td>
                        <td>
                            مسموح فقط للاجتياز أو الانعطاف إلى اليسار
                        </td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="q3" ></td>
                        <td >
                            مسموح فقط لمركبة خصوصية تزيد سرعتها على 80 كم / س
                        </td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="q3"></td>
                        <td>
                            مسموح فقط لمركبة خصوصية من إنتاج 1975 فما دون
                        </td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="q3"></td>
                        <td>
                            مسموح فقط لمركبة أمن
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
                            <span class="question">5 -عندما تسير ليلا, زمن رد الفعل يكون :</span>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="q5" ></td>
                        <td>
                            اقل لان حواس السائق يقظة
                        </td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="q5" ></td>
                        <td >
                            زمن رد الفعل يتعلق بصلاحية الفرامل
                        </td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="q5"></td>
                        <td>
                            زمن رد الفعل لا يتغير في الظلام
                        </td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="q5" data-answer="true"></td>
                        <td>
                            أن تميل المركبة إلى التزحلق كلما زادت السرعة
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
                            <span class="question">7 - هل مسموح إن ندفع مركبة بدون تشغيل المحرك لطريق ممنوع الدخول فيه لمركبات آلية ؟ :</span>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="q7" data-answer="true"></td>
                        <td>
                            لا, ممنوع دخول المركبة قانونيا حتى بالدفع فهذا يعد سياقة مركبة آلية
                        </td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="q7" ></td>
                        <td >
                            مسموح وعندما المحرك يشتغل بغيار النيوترال
                        </td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="q7"></td>
                        <td>
                            مسموح, ولكن يجب السير على الرصيف
                        </td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="q7" ></td>
                        <td>
                            مسموح عندما المحرك يكون شغال
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
                            <span class="question">9 - في طريق شديد الانحدار يجب أن نحافظ على مسافة أكبر من المركبة التي أمامنا:</span>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="q9" ></td>
                        <td>
                            فقط في حالة جو ممطر وعند وجود خطر التزحلق
                        </td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="q9" ></td>
                        <td >
                            ليلا فقط
                        </td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="q9" data-answer="true"></td>
                        <td>
                            في جميع الحالات
                        </td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="q9" ></td>
                        <td>
                            فقط عندما تكون هناك إشارة سير انحدار خطر
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
