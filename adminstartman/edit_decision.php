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
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// الحصول على id القرار من الرابط
$id = $_GET['id'];

// استعلام لجلب البيانات الخاصة بالقرار
$sql = "SELECT * FROM decisions WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$decision = $result->fetch_assoc();

if (!$decision) {
    echo "القرار غير موجود.";
    exit;
}

// تحديث البيانات عند إرسال النموذج
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $date = $_POST['date'];
    $nambar = $_POST['nambar'];

    // استعلام لتحديث البيانات
    $update_sql = "UPDATE decisions SET title = ?, description = ?, date = ?, nambar = ? WHERE id = ?";
    $update_stmt = $conn->prepare($update_sql);
    $update_stmt->bind_param("ssssi", $title, $description, $date, $nambar, $id);
    if ($update_stmt->execute()) {
        $success = "تم تعديل القرار بنجاح!";
        header("Location: 13131311313.php");
        exit;
    } else {
        $error = "حدث خطأ أثناء التعديل.";
    }
}
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تعديل القرار</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7f9fc;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            max-width: 900px;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        .card {
            border: none;
            padding: 30px;
        }
        .card-title {
            font-size: 1.8rem;
            margin-bottom: 20px;
            color: #333;
            text-align: center;
        }
        .btn-green {
            background-color: #28a745;
            color: white;
            border: none;
            width: 100%;
            padding: 12px;
            font-size: 1.2rem;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 20px;
        }
        .btn-green:hover {
            background-color: #218838;
        }
        .form-control {
            font-size: 1.1rem;
            padding: 12px;
            border-radius: 8px;
            border: 1px solid #ddd;
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }
        .form-control:focus {
            border-color: #28a745;
            box-shadow: 0 0 5px rgba(40, 167, 69, 0.6);
        }
        label {
            font-weight: bold;
            margin-bottom: 8px;
        }
        .alert {
            font-size: 1rem;
            text-align: center;
        }
        @media (max-width: 768px) {
            .form-control {
                font-size: 1rem;
                padding: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <h5 class="card-title">تعديل القرار</h5>
            <?php if (isset($success)) { ?>
                <div class="alert alert-success"><?php echo $success; ?></div>
            <?php } ?>
            <?php if (isset($error)) { ?>
                <div class="alert alert-danger"><?php echo $error; ?></div>
            <?php } ?>
            <form method="POST">
                <div class="form-group">
                    <label for="title">عنوان القرار</label>
                    <input type="text" class="form-control" id="title" name="title" value="<?php echo htmlspecialchars($decision['title']); ?>" required>
                </div>
                <div class="form-group">
                    <label for="description">وصف القرار</label>
                    <textarea class="form-control" id="description" name="description" rows="4" required><?php echo htmlspecialchars($decision['description']); ?></textarea>
                </div>
                <div class="form-group">
                    <label for="nambar">رقم القرار</label>
                    <input type="text" class="form-control" id="nambar" name="nambar" value="<?php echo htmlspecialchars($decision['nambar']); ?>" required>
                </div>
                <div class="form-group">
                    <label for="decision_date">تاريخ صدور القرار</label>
                    <input type="date" name="date" id="decision_date" required value="<?php echo htmlspecialchars($decision['date']); ?>" class="form-control">
                </div> 
                <button type="submit" class="btn-green">
                    <i class="fas fa-save"></i> حفظ التعديلات
                </button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>
