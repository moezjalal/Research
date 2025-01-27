<?php
session_start();

// التحقق من حالة تسجيل الدخول
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    echo "غير مسموح بالوصول إلى هذه الصفحة.";
    exit;
}
?>
<?php
include '../../db__admin.php';
// التحقق من الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
}

// التحقق من إرسال النموذج
if (isset($_POST['submit'])) {
    // جلب البيانات من النموذج
    $title = $conn->real_escape_string($_POST['title']);
    $summary = $conn->real_escape_string($_POST['summary']);
    $content = $conn->real_escape_string($_POST['content']);
    
    // معالجة الصورة
    $targetDir = "../../uploads/";
    $imageName = basename($_FILES["image"]["name"]);
    $targetFilePath = $targetDir . $imageName;

    if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)) {
        // استعلام SQL لإضافة الخبر
        $sql = "INSERT INTO newsen (title, summary, image, content) VALUES ('$title', '$summary', '$targetFilePath', '$content')";

        if ($conn->query($sql) === TRUE) {
            echo "تم إضافة الخبر بنجاح";
            header("Location: 1212121212.php");  
        
            exit();
        } else {
            echo "خطأ: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "فشل في تحميل الصورة.";
    }
}

$conn->close();
?>
