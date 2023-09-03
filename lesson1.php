<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database show data on Web : Lesson1</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container p-5 my-5 bg-primary text-white">
    <h1>Database show data on Web : Lesson1</h1>
    <p>6402202057003 Mr.Woratai Khannarat</p> 
</div>
<?php
    require "connect.php";

    // ดึงข้อมูลจากตาราง tb_section
    $query = "SELECT * FROM tb_section ORDER BY SECT_ID DESC";
    $stmt = $db->query($query);
?>

<div class="container mt-3">
    <h2>Section Data</h2>   
    <div class="btn-group">
        <a href="index.php" class="btn btn-outline-danger">กลับไปหน้าหลัก</a>
        <a href="lesson2.php" class="btn btn-outline-danger">Lesson 2 แสดงข้อมูลเฉพาะ SECT_TELEPHONE และ SECT_NAME โดยเรียงจาก SECT_NAME จาก A-Z</a>
        <a href="lesson3.php" class="btn btn-outline-danger">Lesson 3 แสดงข้อมูลทั้งหมด โดยเลือกเฉพาะที่ SECT_TELEPHONE มีเลข 12 และเรียงข้อมูลจาก SECT_NAME จาก Z-Ay</a>
    </div>     
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Section ID</th>
                <th>Section Name</th>
                <th>Building Name</th>
                <th>Telephone</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                <tr>
                    <td><?php echo $row['SECT_ID']; ?></td>
                    <td><?php echo $row['SECT_NAME']; ?></td>
                    <td><?php echo $row['SECT_BUILDING_NAME']; ?></td>
                    <td><?php echo $row['SECT_TELEPHONE']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

</body>
</html>
