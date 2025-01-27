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
if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $decision_number = $_POST['decision_number'];
    $content = $_POST['content'];
    $decision_date = $_POST['decision_date'];
    $stmt = $conn->prepare("INSERT INTO decisions (title, description, date, nambar) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sssi", $title, $content, $decision_date, $decision_number);
    if ($stmt->execute()) {
        echo "تم إضافة القرار بنجاح!";
        
        header("Location: 13131311313.php");  
        
        exit();
    } else {
        echo "حدث خطأ أثناء إضافة القرار: " . $stmt->error;
    }
    $stmt->close();
}
$conn->close();
?>
