<?php
// الاتصال بقاعدة البيانات

include 'db__admin.php';
// التحقق من الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
}

// التحقق من وجود ID
if (isset($_GET['id'])) {
    $research_id = $_GET['id'];

    // استعلام لجلب البحث بناءً على الـ ID
    $sql = "SELECT title, introduction, content FROM research WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $research_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "<p>لم يتم العثور على البحث.</p>";
        exit;
    }
} else {
    echo "<p>لم يتم تمرير ID صحيح.</p>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="img/1.1.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $row['title']; ?></title>
    <style>
        @font-face {
            font-family: 'SadokArtBold';
            src: url('/alfont_com_ArbFONTS-19720-sadokartbold_3.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }
        body {
            
            direction: rtl; /* لجعل الصفحة تبدأ من اليمين */
            text-align: right;
            background-color: #f4f4f4;
        }
        body{
            font-family: 'Khalid', sans-serif;
            font-weight: bold;
        }

        .container {
            width: 80%;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1 {
            text-align: center;
            color: green;
            font-size: 2.5em; /* تكبير حجم العنوان */
        }

        h2 {
            color: #555;
            font-size: 1.8em; /* تنسيق كلمة المقدمة */
            margin-top: 30px;
        }

        .introduction {
            margin-right: 20px;
            font-size: 1.4em; /* تكبير خط المقدمة */
            line-height: 1.8;
            color: #333;
        }

        .content {
            margin-top: 30px;
            font-size: 1.3em; /* تكبير خط المحتوى */
            line-height: 1.8;
            color: #444;
        }

        /* إضافة خلفية خفيفة باللون الأخضر */
        .background-green {
            background-color: #f0fdf4; /* bg-green-50 */
        }
    </style>
</head>
<body class="background-green">

<div class="container">
    <h1><?php echo $row['title']; ?></h1> <!-- العنوان في الوسط و باللون الأخضر -->
    
    <h2>المقدمة</h2> <!-- كتابة كلمة المقدمة فوق النص -->
    <p class="introduction"><?php echo $row['introduction']; ?></p> <!-- المقدمة تبدأ من اليمين -->

    <h2>محتوى البحث</h2> <!-- يمكن إضافة عنوان آخر لمحتوى البحث إن أردت -->
    <div class="content">
        <?php echo nl2br($row['content']); ?> <!-- باقي البحث -->
    </div>
</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
