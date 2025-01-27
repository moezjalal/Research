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
$conn->set_charset("utf8");

// التحقق من الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
}

// التحقق من أن هناك معرف ID للخبر المراد حذفه
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    // استعلام الحذف
    $sql = "DELETE FROM decisionsen WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        echo "تم حذف الخبر بنجاح";
        header("Location: 13131311313.php"); 
        exit;
    } else {
        echo "حدث خطأ أثناء الحذف: " . $conn->error;
    }
} else {
    echo "لم يتم تحديد معرف للخبر المراد حذفه.";
}

$conn->close();
?>
