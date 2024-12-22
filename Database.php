<?php
$host = "localhost";
$username = "root"; // اسم المستخدم الخاص بقاعدة البيانات
$password = ""; // كلمة المرور
$dbname = "stitch_up_dreams";

// إنشاء الاتصال
$conn = new mysqli($host, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
