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
include '../db__admin.php';
$conn->set_charset("utf8");

// التحقق من الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
}

// التحقق من أن هناك معرف ID للخبر
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    // جلب بيانات الخبر
    $sql = "SELECT title, summary, image, content FROM news WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $news = $result->fetch_assoc();
    } else {
        echo "لم يتم العثور على الخبر.";
        exit;
    }
}

// تحديث بيانات الخبر عند إرسال النموذج
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $summary = $_POST['summary'];
    $content = $_POST['content'];

    // تحقق إذا تم تحميل صورة جديدة
    if (!empty($_FILES['image']['name'])) {
        $image = "../uploads/" . basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'], $image);
    } else {
        $image = $news['image']; // الاحتفاظ بالصورة القديمة في حال لم يتم تحميل صورة جديدة
    }

    // تحديث الخبر في قاعدة البيانات
    $sql = "UPDATE news SET title='$title', summary='$summary', image='$image', content='$content' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header("Location: 1212121212.php");
        exit();
    } else {
        echo "حدث خطأ أثناء التحديث: " . $conn->error;
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تعديل الخبر</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }
        .container {
            margin-top: 50px;
            max-width: 800px;
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }
        .form-label {
            font-weight: bold;
        }
        .form-control {
            border-radius: 8px;
            margin-bottom: 15px;
        }
        .form-control:focus {
            border-color: #28a745;
            box-shadow: 0 0 5px rgba(40, 167, 69, 0.5);
        }
        .btn {
            width: 100%;
            border-radius: 8px;
            padding: 10px;
            font-size: 1.2rem;
        }
        .btn-success {
            background-color: #28a745;
            border: none;
        }
        .btn-success:hover {
            background-color: #218838;
        }
        .preview-image {
            display: block;
            max-width: 100%;
            margin: 10px 0;
            border-radius: 8px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center mb-4">تعديل الخبر</h2>
        <form method="post" enctype="multipart/form-data">
            <label for="title" class="form-label">العنوان:</label>
            <input type="text" name="title" id="title" class="form-control" value="<?= $news['title'] ?>" required>

            <label for="summary" class="form-label">الملخص:</label>
            <textarea name="summary" id="summary" class="form-control" style="height: 100px;" required><?= $news['summary'] ?></textarea>

            <label for="image" class="form-label">الصورة الحالية:</label>
            <img src="<?= $news['image'] ?>" alt="الصورة الحالية" class="preview-image">
            <label for="image" class="form-label">رفع صورة جديدة:</label>
            <input type="file" name="image" id="image" class="form-control">

            <label for="content" class="form-label">المحتوى:</label>
            <textarea name="content" id="content" class="form-control" style="height: 150px;" required><?= $news['content'] ?></textarea>

            <button type="submit" class="btn btn-success mt-3">حفظ التعديلات</button>
        </form>
    </div>
</body>
</html>
