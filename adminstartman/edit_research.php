<?php
session_start();

// التحقق من حالة تسجيل الدخول
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    echo "غير مسموح بالوصول إلى هذه الصفحة.";
    exit;
}
?>
<?php
include '../db__admin.php';
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// الحصول على id البحث من الرابط
$id = $_GET['id'];

// استعلام لجلب البيانات الخاصة بالبحث
$sql = "SELECT * FROM research WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$research = $result->fetch_assoc();

if (!$research) {
    echo "البحث غير موجود.";
    exit;
}

// تحديث البيانات عند إرسال النموذج
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $introduction = $_POST['introduction'];
    $content = $_POST['content'];

    // استعلام لتحديث البيانات
    $update_sql = "UPDATE research SET title = ?, introduction = ?, content = ? WHERE id = ?";
    $update_stmt = $conn->prepare($update_sql);
    $update_stmt->bind_param("sssi", $title, $introduction, $content, $id);
    $update_stmt->execute();
    
    echo "تم تعديل البحث بنجاح!";
    header("Location: 1515151515.php"); // التوجيه إلى 1515151515.php
    exit;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تعديل البحث</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            max-width: 900px;
            margin-top: 20px;
            text-align: center;
        }
        .card {
            padding: 30px;
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }
        .card-title {
            font-size: 1.8rem;
            margin-bottom: 20px;
            color: #333;
        }
        .form-control {
            font-size: 1rem;
            padding: 10px;
            border-radius: 8px;
            border: 1px solid #ddd;
            margin-bottom: 20px;
        }
        .form-control:focus {
            border-color: #28a745;
            box-shadow: 0 0 5px rgba(40, 167, 69, 0.6);
        }
        .btn-green {
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            border: none;
            font-size: 1.2rem;
            border-radius: 8px;
            cursor: pointer;
        }
        .btn-green:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <h5 class="card-title">تعديل البحث</h5>
            <form method="POST">
                <div class="form-group">
                    <label for="title">عنوان البحث</label>
                    <input type="text" class="form-control" id="title" name="title" value="<?= htmlspecialchars($research['title']); ?>" required>
                </div>
                <div class="form-group">
                    <label for="introduction">مقدمة البحث</label>
                    <textarea class="form-control" id="introduction" name="introduction" rows="4" required><?= htmlspecialchars($research['introduction']); ?></textarea>
                </div>
                <div class="form-group">
                    <label for="content">محتوى البحث</label>
                    <textarea class="form-control" id="content" name="content" rows="6" required><?= htmlspecialchars($research['content']); ?></textarea>
                </div>
                <button type="submit" class="btn-green">تعديل</button>
            </form>
        </div>
    </div>
</body>
</html>
