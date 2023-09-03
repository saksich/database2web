<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database show data on Web : Lesson2</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    
</head>

<body>
    <div class="container p-5 my-5 bg-primary text-white">
        <h1>Database show data on Web : Lesson2</h1>
        <p>6402202057003 Mr.Woratai Khannarat</p>
    </div>
    <?php
    require "connect.php";

    // ดึงข้อมูล SECT_TELEPHONE และ SECT_NAME โดยเรียงจาก SECT_NAME จาก A-Z
    $query = "SELECT SECT_TELEPHONE, SECT_NAME FROM tb_section ORDER BY SECT_NAME ASC";
    $stmt = $db->query($query);
    ?>

    <div class="container mt-3">
        <h2>Section Data</h2>
        <div class="btn-group">
            <a href="index.php" class="btn btn-outline-primary">กลับไปหน้าหลัก</a>
            <a href="lesson1.php" class="btn btn-outline-primary">Lesson 1 แสดงข้อมูลทั้งหมดโดยเรียงจาก SECT_ID จากมากไปหาน้อย</a>
            <a href="lesson3.php" class="btn btn-outline-primary">Lesson 3 แสดงข้อมูลทั้งหมด โดยเลือกเฉพาะที่ SECT_TELEPHONE มีเลข 12 และเรียงข้อมูลจาก SECT_NAME จาก Z-A</button>
        </div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th style="width: 1000px;">Telephone</th>
                    <th style="width: 1000px;">Section Name</th>

                </tr>
            </thead>
            <tbody>
                <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                    <tr>
                        <td><?php echo $row['SECT_TELEPHONE']; ?></td>
                        <td><?php echo $row['SECT_NAME']; ?></td>

                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

</body>

</html>
