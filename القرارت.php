<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Khalid&display=swap" rel="stylesheet">
    <link rel="icon" href="img\1.1.jpg">
    <title>القرارات</title>
    <style>
         body{
            font-family: 'Khalid', sans-serif;
            font-weight: bold;
        }

       
       
        .navbar {
            background-color: #FFF !important;
            border: none;
            box-shadow: none;
            flex-direction: row;
        }
        .navbar-nav {
            flex-direction: row;
            background-color: #FFF;
            white-space: nowrap; 
        }
        .nav-item {
            margin: 0 5px;
            margin-right: 25px;
        }
        .navbar-brand img {
            width: 300px;
            height: auto;
        }
        .fa-globe {
            color: #208f18;
        }
        .nav-link:hover {
            position: relative;
            color: #208f18;
        }
        .nav-link:hover::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: #208f18;
            transition: width 0.3s;
        }
        .language-icon .dropdown-menu {
            left: 200px;
            right: auto;
            margin-top: 0.25rem;
        }
        @media (max-width: 768px) {
    .nav-link {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
    }
}

    
    
</style>

    </style>
</head>
<body class="bg-green-50">
<nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary fixed-top" style="font-size:19px;">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="./img/h.jpg" alt="Logo" style="width: 250px; height: auto;">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">القائمة الرئيسية</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav mx-auto mb-2 mb-lg-0 d-flex flex-column flex-lg-row justify-content-center">
                <li class="nav-item">
                  <a class="nav-link active d-lg-none border-bottom " href="index.php">الرئيسية</a>
                  <a class="nav-link active d-none d-lg-block" href="index.php" style="margin-top: 10px;">الرئيسية</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link d-lg-none border-bottom" href="عن المركز.html">عن المركز</a>
                  <a class="nav-link d-none d-lg-block" href="عن المركز.html" style="margin-top: 10px;">عن المركز</a>
                </li>
                <li class="nav-item">
                <a class="nav-link d-lg-none border-bottom" href="القرارت.php">القرارت</a>
                  <a class="nav-link d-none d-lg-block" href="القرارت.php" style="margin-top: 10px;">القرارت</a>
                </li>
                <li class="nav-item">
                <a class="nav-link d-lg-none border-bottom" href="#">المجله العلميه</a>
                  <a class="nav-link d-none d-lg-block" href="#" style="margin-top: 10px;">المجله العلمية</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link d-lg-none border-bottom" href="الاخبار.php">أخبار</a>
                  <a class="nav-link d-none d-lg-block" href="الاخبار.php"style="margin-top: 10px;">أخبار</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link d-lg-none border-bottom" href="الابحاث.php">أبحاث</a>
                  <a class="nav-link d-none d-lg-block" href="الابحاث.php"style="margin-top: 10px;">أبحاث</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link d-lg-none border-bottom" href="تواصل معنا.html">تواصل معنا</a>
                  <a class="nav-link d-none d-lg-block" href="تواصل معنا.html"style="margin-top: 10px;">تواصل معنا</a>
                </li>
              </ul>
              <div class="dropdown mt-3">
        <button class="btn dropdown-toggle" type="button" id="languageDropdown" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: white; color: #333;">
          <i class="fas fa-globe"></i>
        </button>
          <ul class="dropdown-menu" aria-labelledby="languageDropdown">
          <li><a class="dropdown-item" href="">العربية</a></li>

            <li><a class="dropdown-item" href="./en">English</a></li>
          </ul>
        </div>
        <form class="d-flex mt-3 justify-content-center align-items-center" role="search" method="GET" action="search_results.php">
            <input 
                class="form-control me-2" 
                type="search" 
                name="query" 
                placeholder="بحث عن قرار" 
                aria-label="بحث" 
                style="width: 200px; height: 40px; border-radius: 8px; font-size: 16px;"
            >
            <button 
                class="btn btn-success" 
                type="submit" 
                style="height: 40px; border-radius: 8px; padding: 0 25px; font-size: 16px;  "
            >
                بحث
            </button>
        </form>
            </div>
          </div>
        </div>
      </nav>
      
      
      <style>
    /* إضافة الخط المخصص */
    @font-face {
        font-family: 'SadokArtBold';
        src: url('/alfont_com_ArbFONTS-19720-sadokartbold_3.ttf') format('truetype');
        font-weight: normal;
        font-style: normal;
    }

    .card {
        height: 450px; /* تعيين ارتفاع البطاقة */
        position: relative; /* للحفاظ على تراكب النص والصورة */
        border-radius: 0; /* إلغاء الحواف الدائرية */
    }

    .card-img {
        height: 100%; /* ضبط ارتفاع الصورة على 100% لملء البطاقة */
        object-fit: cover; /* لضمان ملء الصورة بشكل صحيح دون تشويه */
        width: 100%; /* لضبط عرض الصورة لتتطابق مع عرض البطاقة */
        border-radius: 0; /* إلغاء الحواف الدائرية للصورة أيضًا */
    }

    .card-img-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        display: flex;
        justify-content: center; /* توسيط النص أفقيًا */
        align-items: center; /* توسيط النص عموديًا */
        color: white; /* لون النص */
        font-size: 40px; /* حجم الخط */
        font-weight: bold; /* سماكة الخط */
        text-align: center; /* محاذاة النص في المنتصف */
        font-family: 'SadokArtBold'; /* استخدام الخط المخصص */
        background-color: rgba(0, 0, 0, 0.5); /* خلفية شفافة للتباين مع النص */
    }
    .card-text {
        margin-top:70px;

    }
</style>
      
      
      
      <div class="card text-bg-dark">
    <img src="img/76.jpg" class="card-img" alt="...">
    <div class="card-img-overlay">
        <p class="card-text text-white">في هذي الصفحه سوف تجد جميع القرارات</p> <!-- النص باللون الأبيض -->
    </div>
</div>
<style>
        body {
            background-color: #f8f9fa;
        }
        .decision-card {
            background-color: #fff;
            border: 1px solid #dee2e6;
            border-radius: 8px;
            margin-bottom: 15px;
            padding: 15px;
            transition: box-shadow 0.3s;
        }
        .decision-card:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .decision-date {
            color: #6c757d;
        }
    </style>
</head>
<body>

<div class="container py-5">
    <h1 class="mb-4 text-center" style="font-family: 'Arial', sans-serif; color: #333;">Decisions</h1>
    <div class="row">
       <?php
include 'db__admin.php';
// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to fetch data
$sql = "SELECT id, title, description, date, nambar FROM decisions ORDER BY date DESC";
$result = $conn->query($sql);

// Check if there are results
if ($result->num_rows > 0) {
    echo '<table class="table custom-table">';
    echo '<thead>';
    echo '<tr>';
    echo '<th>العنوان</th>';
    echo '<th>التاريخ</th>';
    echo '<th>رقم القرار</th>';
    echo '<th>الوصف</th>';
    echo '<th>الإجراء</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    
    // عرض البيانات
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . htmlspecialchars($row["title"]) . '</td>';
        echo '<td>' . date("d F Y", strtotime($row["date"])) . '</td>';
        echo '<td>' . htmlspecialchars($row["nambar"]) . '</td>';
        echo '<td>' . htmlspecialchars($row["description"]) . '</td>';
        echo '<td><a href="decision_detail.php?id=' . $row["id"] . '" class="btn btn-primary btn-sm" style="background-color: #28a745; border: none;
">عرض المزيد</a></td>';
        echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';
} else {
    echo "<p>No decisions available to display.</p>";
}

// Close the connection
$conn->close();
?>
    </div>
</div>

<style>
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 30px;
    }

    .table {
        width: 100%;
        margin-bottom: 30px;
        border-radius: 12px;
        background-color: #f9f9f9;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        overflow: hidden;
    }

    .table th, .table td {
        padding: 15px;
        text-align: center;
        vertical-align: middle;
        font-size: 15px;
    }

    .table th {
        background-color: #4CAF50;
        color: white;
        font-weight: bold;
        letter-spacing: 1px;
    }

    .table td {
        background-color: #fff;
        color: #333;
        transition: background-color 0.3s;
    }

    .table tr:hover td {
        background-color: #e8f5e9;
    }

    .btn-primary {
        background-color: #28a745;
        border-color: #28a745;
        padding: 8px 15px;
        text-transform: uppercase;
        font-weight: 500;
        border-radius: 25px;
        transition: all 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #218838;
        color: #fff;
    }

    .table-striped tbody tr:nth-child(odd) {
        background-color: #f4f4f4;
    }

    /* Add responsive design */
    @media (max-width: 768px) {
        .table th, .table td {
            font-size: 12px;
            padding: 10px;
        }

        .table thead {
            display: none; /* Hide table header for small screens */
        }

        .table, .table tbody, .table tr, .table td {
            display: block;
            width: 100%;
        }

        .table tr {
            margin-bottom: 15px;
        }

        .table td {
            position: relative;
            padding-left: 50%;
            text-align: right;
            border-bottom: 1px solid #ddd;
        }

        .table td::before {
            content: attr(data-label);
            position: absolute;
            left: 0;
            font-weight: bold;
            text-transform: uppercase;
            font-size: 12px;
            color: #4CAF50;
        }

        .btn-primary {
            font-size: 12px;
            padding: 6px 12px;
        }
    }
</style>



    </div>
</div>

<footer class="w-[100%] bg-gray-100 py-4 mt-6">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center justify-between text-gray-700">
            <!-- حقوق النشر -->
            <div class="mb-2 md:mb-0 text-center md:text-right">
                <p>© 2024 مركز الأبحاث الزراعية - جميع الحقوق محفوظة</p>
            </div>
            
            <!-- مواقع التواصل -->
            <div class="flex items-center justify-center md:justify-end space-x-4 md:space-x-8">
                <a href="https://www.facebook.com/p/%D9%85%D8%B1%D9%83%D8%B2-%D8%A7%D9%84%D8%A8%D8%AD%D9%88%D8%AB-%D8%A7%D9%84%D8%B2%D8%B1%D8%A7%D8%B9%D9%8A%D8%A9-%D9%88%D8%A7%D9%84%D8%AD%D9%8A%D9%88%D8%A7%D9%86%D9%8A%D8%A9-arclibya-100068484918462/">
                    <img src="img/icon/Facebook.png" alt="Facebook" class="h-6 w-6">
                </a>
                <a href="#">
                    <img src="img/icon/Twitter.png" alt="Twitter" class="h-6 w-6">
                </a>
                <a href="#">
                    <img src="img/icon/instgram.png" alt="Instagram" class="h-6 w-6">
                </a>
                <a href="#">
                    <img src="img/icon/Website.png" alt="Website" class="h-6 w-6">
                </a>
            </div>
            
            <!-- البرمجة -->
            <div class="mt-2 md:mt-0 text-center md:text-left">
                <p>تمت البرمجة من قبل معز جلال | <a href="https://wa.me/218942933793" class="text-blue-500 hover:underline">للتواصل عبر واتساب</a></p>
            </div>
        </div>
    </footer>
 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
