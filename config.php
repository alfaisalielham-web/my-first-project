
<?php
// ملف الاتصال باسم إلهام
$host = "localhost";     // غيّريه بالـ Host الحقيقي
$dbuser = "root";               // اسم المستخدم الحقيقي
$dbpass = "";                    // كلمة المرور
$dbname   = "ameen_db";      // اسم قاعدة البيانات

$conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);

if (!$conn) {
    
    die("فشل الاتصال بقاعدة البيانات: " . mysqli_connect_error());
}
?>
