
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>المتميزون - التسجيل</title>
    <link rel="stylesheet" href="Css1.css">
</head>
<body>
    <div class="DivNumber1">
        <form action="Form.php" method="post">

            <?//    Heading     ?>

            <h1>إنشاء حساب جديد</h1>

            <?//    First-Name     ?>

            <label for="FirstName">    <b>الاسم الاول</b>   </label>
            <input type="text" placeholder="ادخل الاسم الاول" name="FirstName" required 
            pattern="[A-Za-zأ-ي]{2,25}" title="الاسم يحتاج ان يكون من حرفين علي الاقل وبدون ارقام">

            <?//    Last-Name     ?>

            <label for="LastName">      <b>اسم العائلة</b>    </label>
            <input type="text" placeholder="ادخل اسم العائلة" name="LastName" required 
            pattern="[A-Za-zأ-ي]{2,25}" title="الاسم يحتاج ان يكون من حرفين علي الاقل وبدون ارقام">

            <?//    Email     ?>

            <label for= "Email">        <b>البريد الالكتروني</b>  </label>
            <input type="email" placeholder="ادخل البريد الالكتروني" name="Email"  required >

            <?//    Password      ?>

            <label for="Passwordd">      <b>كلمة السر</b>     </label>
            <input type="password" placeholder="ادخل كلمة السر" name="Passwordd" required 
            pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
            title=" يجب ان تحتوي كلمة السر علي الاقل علي رقم واحد 
            وحرف كبير وحرف صغير وان تكون كلمة السر
             مكونة من 8 خانات عل الاقل." >

            <?//    Phone-Number     ?>

            <label for="PhoneNumber">     <b>الهاتف المحمول</b>   </label>
            <input type="tel" placeholder="ادخل الهاتف المحمول" name="PhoneNumber" >

            <?//    Buttons-(Sign_up-Cancel)       ?>

            <div class="Buttons">
                 <button type="submit"><b>تسجيل</b></button>
            
                 <button class="CancelButton" type="button"><b>الغاء</b></button>
            </div>

        </form>
        
    </div>
    
</body>
</html>
