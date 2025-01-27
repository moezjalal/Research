<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Khalid&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="./img/1.1.jpg">
    <title>تفاصيل القرار</title>
    <style>
        body {
            font-family: 'Khalid', sans-serif;
            font-weight: bold;
        }
        body.bg-green-50 {
            background-color: #f0f9f0; /* لون أخضر فاتح للخلفية */
        }
    </style>
</head>
<body class="bg-green-50">

<div class="container mt-5">
    <?php
    // إعداد الاتصال بقاعدة البيانات
    include 'db__admin.php';
    // التحقق من الاتصال
    if ($conn->connect_error) {
        error_log("Database Connection Error: " . $conn->connect_error); // تسجيل الخطأ في ملف خارجي
        die("حدث خطأ غير متوقع. يرجى المحاولة لاحقاً.");
    }

    // التحقق من وجود معرف القرار في GET
    if (isset($_GET['id'])) {
        $decision_id = $_GET['id'];

        // التحقق من أن المعرف عدد صحيح
        if (!filter_var($decision_id, FILTER_VALIDATE_INT)) {
            die('<div class="alert alert-danger text-center" role="alert">معرف القرار غير صالح.</div>');
        }

        // استعلام لجلب القرار بناءً على المعرف
        $sql = "SELECT title, description, date, nambar FROM decisions WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $decision_id);
        $stmt->execute();
        $result = $stmt->get_result();

        // عرض البيانات إذا كانت موجودة
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            echo '<h2 class="text-center mb-4">' . htmlspecialchars($row['title'], ENT_QUOTES, 'UTF-8') . '</h2>';
            echo '<div class="card p-4">';
            echo '<h4 class="text-muted">تاريخ القرار: ' . date("d F Y", strtotime($row['date'])) . '</h4>';
            echo '<p><strong>رقم القرار:</strong> ' . htmlspecialchars($row['nambar'], ENT_QUOTES, 'UTF-8') . '</p>';
            echo '<p class="mt-4">' . nl2br(htmlspecialchars($row['description'], ENT_QUOTES, 'UTF-8')) . '</p>';
            echo '</div>';
        } else {
            echo '<div class="alert alert-warning text-center" role="alert">لم يتم العثور على تفاصيل للقرار المحدد.</div>';
        }

        $stmt->close();
    } else {
        echo '<div class="alert alert-warning text-center" role="alert">معرف القرار غير موجود.</div>';
    }

    $conn->close();
    ?>

    <div class="text-center mt-4">
        <a href="القرارت.php" class="btn btn-success">العودة إلى قائمة القرارات</a> <!-- زر العودة باللون الأخضر -->
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
