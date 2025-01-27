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
    <title>خبر</title>
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
            <li class="active"><a href="form.php"><i class="fas fa-plus"></i> إضافة خبر</a></li>
            <li ><a href="1212121212.php"><i class="fas fa-newspaper"></i> عرض الأخبار</a></li>

            <!-- قسم الأبحاث -->
            <li ><a href="add_research.php"><i class="fas fa-plus"></i> إضافة بحث</a></li>         
            <li  ><a href="1515151515.php"><i class="fas fa-flask"></i> عرض الأبحاث</a></li>

            <!-- قسم القرارات -->
            <li><a href="index.php"><i class="fas fa-plus"></i> إضافة قرار</a></li>
            <li ><a href="13131311313.php"><i class="fas fa-gavel"></i> عرض القرارات</a></li>
        </ul>
    </div>
    <div class="content" style="flex-grow: 1; padding: 0; margin-right: 250px; max-width: 90%;">
        <div class="card" style="border: 1px solid #ddd; border-radius: 8px; padding: 20px; background-color: #ffffff; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); margin: 0;">
            <h5 class="card-title" style="font-size: 2rem; margin-bottom: 30px; color: #333; font-weight: bold; text-align: center;">
                إضافة بحث جديد
            </h5>
            <!-- المحتوى الرئيسي -->
            <form action="add_news.php" method="post" enctype="multipart/form-data" style="display: flex; flex-direction: column; gap: 15px;">
                <div class="form-group" style="display: flex; flex-direction: column;">
                    <label for="title" style="font-weight: bold; margin-bottom: 5px;">عنوان الخبر:</label>
                    <input type="text" name="title" id="title" required style="padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
                </div>
    
                <div class="form-group" style="display: flex; flex-direction: column;">
                    <label for="summary" style="font-weight: bold; margin-bottom: 5px;">ملخص الخبر:</label>
                    <textarea name="summary" id="summary" required style="padding: 10px; border: 1px solid #ddd; border-radius: 5px;"></textarea>
                </div>
    
                <div class="form-group" style="display: flex; flex-direction: column;">
                    <label for="image" style="font-weight: bold; margin-bottom: 5px;">تحميل الصورة:</label>
                    <input type="file" name="image" id="image" accept="image/*" required style="padding: 10px;">
                </div>
    
                <div class="form-group" style="display: flex; flex-direction: column;">
                    <label for="content" style="font-weight: bold; margin-bottom: 5px;">محتوى الخبر:</label>
                    <textarea name="content" id="content" required style="padding: 10px; border: 1px solid #ddd; border-radius: 5px;"></textarea>
                </div>
    
                <button type="submit" name="submit" style="padding: 10px 20px; border: none; border-radius: 5px; background-color: #4CAF50; color: white; font-weight: bold; cursor: pointer; align-self: center;">
                    إضافة الخبر
                </button>
           
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
