<?php
session_start();

// التحقق من حالة تسجيل الدخول
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    echo "غير مسموح بالوصول إلى هذه الصفحة.";
    exit;
}
?>
<?php
// الاتصال بقاعدة البيانات
include '../../db__admin.php';
// التحقق من الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {
    // جمع البيانات من النموذج
    $title = $_POST['title'];
    $introduction = $_POST['introduction'];
    $content = $_POST['content'];

    // استعلام لإدخال البيانات في قاعدة البيانات
    $sql = "INSERT INTO researchen (title, introduction, content) VALUES ('$title', '$introduction', '$content')";

    if ($conn->query($sql) === TRUE) {
        echo "تم إضافة البحث بنجاح!";
        header("Location: 1515151515.php"); // التوجيه إلى صفحة معينة بعد النجاح
        exit();
    } else {
        echo "خطأ: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إضافة بحث</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://kit.fontawesome.com/a076d05399.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   
    <link rel="stylesheet" href="../style.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            display: flex;
        }
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
            flex-grow: 1;
            padding: 0;
            margin-right: 250px;
            max-width: 90%;
        }

        .card {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin: 0;
        }

        .card-title {
            font-size: 2rem;
            margin-bottom: 30px;
            color: #333;
            font-weight: bold;
            text-align: center;
        }

        .form-control {
            font-size: 1.2rem;
            padding: 15px;
            border-radius: 8px;
            border: 1px solid #ddd;
            margin-bottom: 20px;
            width: 100%;
            max-width: 800px;
        }

        .btn-green {
            background-color: #28a745;
            color: white;
            border: none;
            width: 100%;
            padding: 15px;
            font-size: 1.4rem;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-green:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <!-- الشريط الجانبي -->
    <div class="sidebar">
        <h2>القائمة الرئيسية</h2>
        <li><a href="../"><i class="fas fa-plus"></i>AR</a></li>
        <ul>
            <!-- قسم الأخبار -->
            <li ><a href="form.php"><i class="fas fa-plus"></i> إضافة خبر</a></li>
            <li ><a href="1212121212.php"><i class="fas fa-newspaper"></i> عرض الأخبار</a></li>
            <!-- قسم الأبحاث -->
            <li class="active"><a href="add_research.php"><i class="fas fa-plus"></i> إضافة بحث</a></li>         
            <li  ><a href="1515151515.php"><i class="fas fa-flask"></i> عرض الأبحاث</a></li>

            <!-- قسم القرارات -->
            <li><a href="index.php"><i class="fas fa-plus"></i> إضافة قرار</a></li>
            <li ><a href="13131311313.php"><i class="fas fa-gavel"></i> عرض القرارات</a></li>
        </ul>
    </div>

    <!-- المحتوى الرئيسي -->
    <div class="content" style=" flex-grow: 1;
            padding: 0;
            margin-right: 250px;
            max-width: 90%;">
        <div class="card" style=" border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin: 0;">
            <h5 class="card-title" style="font-size: 2rem;
            margin-bottom: 30px;
            color: #333;
            font-weight: bold;
            text-align: center;">إضافة بحث جديد</h5>
            <form action="" method="post">
                <div class="form-group">
                    <label for="title">عنوان البحث</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
                <div class="form-group">
                    <label for="introduction">مقدمة البحث</label>
                    <textarea class="form-control" id="introduction" name="introduction" rows="4" required></textarea>
                </div>
                <div class="form-group">
                    <label for="content">محتوى البحث</label>
                    <textarea class="form-control" id="content" name="content" rows="6" required></textarea>
                </div>
                <button type="submit" name="submit" class="btn-green">إضافة</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
