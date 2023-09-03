<?php
$host = 'localhost';       // ชื่อโฮสต์ของฐานข้อมูล
$dbname = 'db_tru'; // ชื่อฐานข้อมูล
$username = 'root';   // ชื่อผู้ใช้ฐานข้อมูล
$password = '';   // รหัสผ่านฐานข้อมูล

try {
    // เชื่อมต่อกับฐานข้อมูล MySQL โดยใช้ PDO
    $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

    // ตั้งค่าให้ PDO แสดงข้อผิดพลาดในรูปแบบของ Exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connected to database successfully(เชื่อมได้แล้วคร้าบบ)";
} catch (PDOException $e) {
    echo "เชื่อมผิด ได้ดูใหม่เลย ไอ้บ้า Connection failed: " . $e->getMessage();
}
?>
