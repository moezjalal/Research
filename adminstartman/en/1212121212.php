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
    <title>عرض الأخبار</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<div class="sidebar">
        <h2>القائمة الرئيسية</h2>
        <li><a href="../"><i class="fas fa-plus"></i>AR</a></li>
        <ul>
            <!-- قسم الأخبار -->
            <li ><a href="form.php"><i class="fas fa-plus"></i> إضافة خبر</a></li>
            <li class="active"><a href="1212121212.php"><i class="fas fa-newspaper"></i> عرض الأخبار</a></li>

            <!-- قسم الأبحاث -->
            <li><a href="add_research.php"><i class="fas fa-plus"></i> إضافة بحث</a></li>         
            <li ><a href="1515151515.php"><i class="fas fa-flask"></i> عرض الأبحاث</a></li>

            <!-- قسم القرارات -->
            <li><a href="index.php"><i class="fas fa-plus"></i> إضافة قرار</a></li>
            <li><a href="13131311313.php"><i class="fas fa-gavel"></i> عرض القرارات</a></li>
        </ul>
    </div>
<div class="content">
    <?php
    include '../../db__admin.php';
    $conn->set_charset("utf8");

    if ($conn->connect_error) {
        die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
    }

    // جلب الأخبار من الجدول
    $sql = "SELECT id, title, summary, image, content FROM newsen";
    $result = $conn->query($sql);
    ?>

    <div class="card-container">
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo '<div class="card" style="width: 18rem;">';
                echo '<img src="' . $row['image'] . '" class="card-img-top" alt="صورة الخبر">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $row['title'] . '</h5>';
                echo '<p class="card-text">' . $row['summary'] . '</p>';
                echo '<a href="edit_news.php?id=' . $row['id'] . '" class="btn btn-primary">تعديل</a>';
                echo '<a href="delete_news.php?id=' . $row['id'] . '" class="btn btn-danger">حذف</a>';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo "لا توجد أخبار.";
        }
        $conn->close();
        ?>
    </div>
</div>

<style>
.sidebar {
    width: 250px;
    height: 100vh;
    position: fixed;
    top: 0;
    right: 0;
    background-color: #2c3e50;
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

.content {
    margin-right: 270px;
    padding: 20px;
}

.card-container {
    display: flex;
    flex-wrap: wrap;
    gap: 25px;
}

.card {
    width: 18rem;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.card-body h5 {
    text-align: right;
}

.card-text {
    text-align: right;
}

.btn-primary, .btn-danger {
    margin: 5px;
}
</style>
</body>
</html>
