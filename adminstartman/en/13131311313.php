<?php
session_start();

// التحقق من حالة تسجيل الدخول
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    echo "غير مسموح بالوصول إلى هذه الصفحة.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>شريط جانبي مع الرموز والخيارات</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<div class="sidebar">
        <h2>القائمة الرئيسية</h2>
        <li><a href="../"><i class="fas fa-plus"></i>AR</a></li>
        <ul>
            <!-- قسم الأخبار -->
            <li ><a href="form.php"><i class="fas fa-plus"></i> إضافة خبر</a></li>
            <li ><a href="1212121212.php"><i class="fas fa-newspaper"></i> عرض الأخبار</a></li>

            <!-- قسم الأبحاث -->
            <li><a href="add_research.php"><i class="fas fa-plus"></i> إضافة بحث</a></li>         
            <li  ><a href="1515151515.php"><i class="fas fa-flask"></i> عرض الأبحاث</a></li>

            <!-- قسم القرارات -->
            <li><a href="index.php"><i class="fas fa-plus"></i> إضافة قرار</a></li>
            <li class="active"><a href="13131311313.php"><i class="fas fa-gavel"></i> عرض القرارات</a></li>
        </ul>
    </div>
<div class="content">
    <?php
   include '../../db__admin.php';
    $conn->set_charset("utf8");

    // التحقق من الاتصال
    if ($conn->connect_error) {
        die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
    }

    // جلب الأبحاث من الجدول
    $sql = "SELECT id, title, description, date , nambar FROM decisionsen";
    $result = $conn->query($sql);
    ?>

    <div class="card-container">
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo '<div class="card" style="width: 18rem;">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $row['title'] . '</h5>';
                echo '<p class="card-text">' . substr($row['nambar'], 0, 100) . '</p>';
                echo '<h6 class="card-subtitle mb-2 text-body-secondary">' . $row['description'] . '</h6>';
                echo '<p class="card-text">' . substr($row['date'], 0, 100) . '</p>'; 
                echo '<a href="edit_decision.php?id=' . $row['id'] . '" class="btn btn-primary">تعديل</a>';
                echo '<a href="delete_decision.php?id=' . $row['id'] . '" class="btn btn-danger">حذف</a>';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo "لا توجد أبحاث.";
        }
        $conn->close();
        ?>
    </div>
</div>

<style>
/* تصميم الشريط الجانبي */
.sidebar {
    width: 250px;
    height: 100vh;
    position: fixed;
    top: 0;
    right: 0;
    background-color: #2c3e50;;
    padding-top: 10px;
    color: white;
}

.sidebar h2 {
    text-align: center;
    margin-bottom: 20px;
}

.sidebar ul {
    list-style-type: none;
    padding: 0;
}

.sidebar ul li {
    padding: 10px;
    text-align: right;
}

.sidebar ul li a {
    color: white;
    text-decoration: none;
    font-size: 18px;
}

.sidebar ul li a:hover, .sidebar ul li.active a {
    background-color: #34495e;
    padding: 10px;
    border-radius: 5px;
}

/* تنسيق المحتوى */
.content {
    margin-right: 270px;
    padding: 20px;
}

/* تنسيق البطاقة */
.card-container {
    display: flex;
    flex-wrap: wrap;
    gap: 25px;
}

.card {
    width: 18rem;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.card-body h5, .card-body h6 {
    text-align: right;
}

.card-text {
    text-align: right;
}

/* أزرار التحكم */
.btn-primary, .btn-danger {
    margin: 5px;
}
</style>

</body>
</html>
