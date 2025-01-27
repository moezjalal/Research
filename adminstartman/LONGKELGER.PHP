
<?php
session_start();

// التحقق من إرسال البيانات
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // اسم المستخدم وكلمة المرور الصحيحين
    $correct_username = "ADMISTEG";
    $correct_password = "pNCWNVIENVjcniwvoenbvornb1848416"; // يمكنك تغيير كلمة المرور

    // التحقق من صحة البيانات
    if ($username === $correct_username && $password === $correct_password) {
        $_SESSION['logged_in'] = true;
        $_SESSION['username'] = $username;
        header("Location: index.php"); // التوجيه إلى الصفحة الرئيسية
        exit;
    } else {
        $error = "اسم المستخدم أو كلمة المرور غير صحيح.";
    }
    
}

?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل الدخول</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }
        .login-container {
            width: 100%;
            max-width: 400px;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }
        .btn-green {
            background-color: #28a745;
            color: #fff;
            width: 100%;
            padding: 10px;
            border-radius: 8px;
            border: none;
            font-size: 1rem;
        }
        .btn-green:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h3 class="text-center mb-4">تسجيل الدخول</h3>
        <?php if (!empty($error)) : ?>
            <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php endif; ?>
        <form method="POST" action="">
            <div class="mb-3">
                <label for="username" class="form-label">اسم المستخدم</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">كلمة المرور</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn-green">تسجيل الدخول</button>
        </form>
    </div>
    
    <script src="php.php"></script>

</body>
</html>
