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
// التحقق من الاتصال بقاعدة البيانات
if ($conn->connect_error) {
    die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
}

// الحصول على id البحث من الرابط
$id = $_GET['id'];

// التحقق من أن id صالح
if (isset($id) && is_numeric($id)) {
    // استعلام لحذف البحث من قاعدة البيانات
    $sql = "DELETE FROM researchen WHERE id = ?";
    $stmt = $conn->prepare($sql);
    
    if ($stmt) {
        $stmt->bind_param("i", $id);
        $stmt->execute();
        
        // التحقق من نجاح الحذف
        if ($stmt->affected_rows > 0) {
            echo "تم حذف البحث بنجاح.";
        } else {
            echo "لم يتم العثور على البحث.";
        }
        
        $stmt->close();
    } else {
        echo "فشل في إعداد استعلام الحذف.";
    }
} else {
    echo "رقم تعريف البحث غير صالح.";
}

// إغلاق الاتصال
$conn->close();

// إعادة التوجيه إلى صفحة عرض الأبحاث بعد الحذف
header("Location: 1515151515.php"); // عدّل اسم الصفحة إلى صفحة عرض الأبحاث
exit;
?>
