<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="icon" href="../img\1.1.jpg">
    <title>research</title>
    <style>
       .navbar {
            background-color: #FFF !important;
            border: none;
            box-shadow: none;
            flex-direction: row;
            height: 90px;
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
</head>
<body class="bg-green-50">
<nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary fixed-top">
  <div class="container-fluid">
  <a class="navbar-brand" href="">
  <img src="../img/h.jpg" alt="Logo" style="width: 280px; height: auto;">
</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Main Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0 d-flex flex-column flex-lg-row justify-content-center">
          <!-- Nav Links -->
          <li class="nav-item">
            <a class="nav-link active d-lg-none border-bottom " href="index.php">Home</a>
            <a class="nav-link active d-none d-lg-block" href="index.php" style="margin-top: 10px;">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-lg-none border-bottom" href="about-center.html">About Center</a>
            <a class="nav-link d-none d-lg-block" href="about-center.html" style="margin-top: 10px;">About Center</a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-lg-none border-bottom" href="decisions.php">Decisions</a>
            <a class="nav-link d-none d-lg-block" href="decisions.php" style="margin-top: 10px;">Decisions</a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-lg-none border-bottom" href="#">Scientific Journal</a>
            <a class="nav-link d-none d-lg-block" href="#" style="margin-top: 10px;">Scientific Journal</a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-lg-none border-bottom" href="news.php">News</a>
            <a class="nav-link d-none d-lg-block" href="news.php" style="margin-top: 10px;">News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-lg-none border-bottom" href="research.php">Research</a>
            <a class="nav-link d-none d-lg-block" href="research.php" style="margin-top: 10px;">Research</a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-lg-none border-bottom" href="contact-us.html">Contact Us</a>
            <a class="nav-link d-none d-lg-block" href="contact-us.html" style="margin-top: 10px;">Contact Us</a>
          </li>
        </ul>
        <div class="dropdown mt-3">
        <button class="btn dropdown-toggle" type="button" id="languageDropdown" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: white; color: #333;">
          <i class="fas fa-globe"></i>
        </button>
          <ul class="dropdown-menu" aria-labelledby="languageDropdown">
            <li><a class="dropdown-item" href="../index.php">العربي</a></li>
            <li><a class="dropdown-item" href="">English</a></li>
          </ul>
        </div>
        <form class="d-flex mt-3 justify-content-center align-items-center" role="search" method="GET" action="search_results.php">
            <input 
                class="form-control me-2" 
                type="search" 
                name="query" 
                placeholder="Search for resolution" 
                aria-label="بحث" 
                style="width: 200px; height: 40px; border-radius: 8px; font-size: 16px;"
            >
            <button 
                class="btn btn-success" 
                type="submit" 
                style="height: 40px; border-radius: 8px; padding: 0 25px; font-size: 16px;  "
            >
            Search
            </button>
        </form>
      </div>
    </div>
  </div>
</nav>   
    

    <style>
        @font-face {
            font-family: 'SadokArtBold';
            src: url('/alfont_com_ArbFONTS-19720-sadokartbold_3.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        .card {
            height: 450px;
            position: relative;
            border-radius: 0;
        }

        .card-img {
            height: 100%;
            object-fit: cover;
            width: 100%;
            border-radius: 0;
        }

        .card-img-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-size: 40px;
            font-weight: bold;
            text-align: center;
            font-family: 'SadokArtBold';
            background-color: rgba(0, 0, 0, 0.5);
        }

        .card-text {
            margin-top: 70px;
        }

        .carousel-caption p {
            font-size: 1.2rem;
        }

        @media (max-width: 768px) {
            .carousel-caption h5 {
                font-size: 1.4rem;
            }
            .carousel-caption p {
                font-size: 1rem;
            }
            .carousel-caption {
                padding: 10px;
            }
        }
    </style>
</head>
<body>      
<div class="card text-bg-dark">
    <img src="../img/76.jpg" class="card-img" alt="...">
    <div class="card-img-overlay">
        <p class="card-text text-white">On this page, you will find all research articles</p>
    </div>
</div>

<style>
    .carousel-caption p {
        font-size: 1.2rem;
    }

    /* Media query for text on phones */
    @media (max-width: 768px) {
        .carousel-caption h5 {
            font-size: 1.4rem;
        }
        .carousel-caption p {
            font-size: 1rem;
        }
        .carousel-caption {
            padding: 10px;
        }
    }
</style>   
<?php
// الاتصال بقاعدة البيانات
include '../db__admin.php';
// التحقق من الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال بالقاعدة: " . $conn->connect_error);
}

// استعلام لجلب آخر 6 أبحاث
$sql = "SELECT * FROM researchen ORDER BY id DESC LIMIT 300000";
$result = $conn->query($sql);

// التحقق من وجود نتائج
if ($result->num_rows > 0) {
    // تقسيم الأبحاث إلى مجموعات من 2 بحث في كل صف
    $researches = $result->fetch_all(MYSQLI_ASSOC);
} else {
    $researches = [];
}

// إغلاق الاتصال
$conn->close();
?>



<section>
    <section class="container mx-auto p-8">
        <h1 class="text-4xl font-bold mb-8 text-center">Research</h1>
        <div class="space-y-6">
            <?php
            // تقسيم الأبحاث إلى مجموعات من 2 بحث في كل صف
            for ($i = 0; $i < count($researches); $i += 2) {
                echo '<div class="flex flex-col md:flex-row h-auto md:h-[400px] gap-5">';  // تقليص الطول هنا

                // الصندوق الأيسر
                echo '<div class="flex flex-col w-full md:w-1/2 p-6 custom-box-left m-2 bg-gray-100 rounded-lg shadow-lg min-h-[400px]">';  // تقليص الطول هنا
                echo '<h1 class="text-2xl font-semibold mb-4"  >' . htmlspecialchars($researches[$i]['title'], ENT_QUOTES, 'UTF-8') . '</h1>';
                echo '<p class="text-lg text-black">' . htmlspecialchars($researches[$i]['introduction'], ENT_QUOTES, 'UTF-8') . '</p>';
                echo '<a href="عرض البحث.php?id=' . urlencode($researches[$i]['id']) . '" class="text-green-600 mt-auto" style="color:#00A991;">Read more</a>';
                echo '</div>';

                // تحقق إذا كان هناك بحث آخر في نفس الصف
                if (isset($researches[$i + 1])) {
                    // الصندوق الأيمن
                    echo '<div class="flex flex-col w-full md:w-1/2 p-6 custom-box-right m-2 bg-gray-100 rounded-lg shadow-lg min-h-[400px]">';  // تقليص الطول هنا
                    echo '<h1 class="text-2xl font-semibold mb-4">' . htmlspecialchars($researches[$i + 1]['title'], ENT_QUOTES, 'UTF-8') . '</h1>';
                    echo '<p class="text-lg text-black">' . htmlspecialchars($researches[$i + 1]['introduction'], ENT_QUOTES, 'UTF-8') . '</p>';
                    echo '<a href="عرض البحث.php?id=' . urlencode($researches[$i + 1]['id']) . '" class="text-green-600 mt-auto" style="color:#00A991;">Read more</a>';
                    echo '</div>';
                }

                echo '</div>';
            }
            ?>
        </div>
    </section>

    <style>
      .custom-box-right {
        
        border-radius: 30px;
        border: 1px solid #00A991;
       }
    
      .custom-box-left {
        
        border-radius: 30px;
        border: 1px solid #00A991;
      }
      .custom-box-right {
        background: linear-gradient(270deg, white 0%, rgba(176, 228, 221, 0.4) 100%);
        min-height: 350px; /* الحد الأدنى للارتفاع */
        height: auto; 

      }
      .custom-box-left {
        background: linear-gradient(270deg, rgba(176, 228, 221, 0.4) 0%, white 100%);
        min-height: 350px; /* الحد الأدنى للارتفاع */
        height: auto; 
      }
      .custom-box-left h2{
        
      }
      .custom-box-right:hover, .custom-box-left:hover {
         transform: scale(1.02); /* تكبير بسيط */
         box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1); /* ظل خفيف */
         transition: transform 0.3s ease, box-shadow 0.3s ease;
}


    
    .flex {
        gap: 20px; 
    }
    
    .m-2 {
        margin: 20px; 
    }
    .custom-bg {
    width: 100%;
    height: 300px;
    background: linear-gradient(180deg, rgba(176, 228, 221, 0.50) 0%, rgba(176, 228, 221, 0.15) 100%);
    border-radius: 15px;
    margin-top: 50px;
    margin-left: 20px;
    margin-right: 20px;
}
</style>
<footer class="w-[100%] bg-gray-100 py-4 mt-6">
    <div class="container mx-auto px-4 flex flex-col md:flex-row items-center justify-between text-gray-700">
        <!-- حقوق النشر -->
        <div class="mb-2 md:mb-0 text-center md:text-right">
<p>© 2024 Agricultural Research Center - All Rights Reserved</p>
</div>

        
        <!-- مواقع التواصل -->
        <div class="flex items-center justify-center md:justify-end space-x-4 md:space-x-8">
            <a href="https://www.facebook.com/p/%D9%85%D8%B1%D9%83%D8%B2-%D8%A7%D9%84%D8%A8%D8%AD%D9%88%D8%AB-%D8%A7%D9%84%D8%B2%D8%B1%D8%A7%D8%B9%D9%8A%D8%A9-%D9%88%D8%A7%D9%84%D8%AD%D9%8A%D9%88%D8%A7%D9%86%D9%8A%D8%A9-arclibya-100068484918462/">
                <img src="../img/icon/Facebook.png" alt="Facebook" class="h-6 w-6">
            </a>
            <a href="#">
                <img src="../img/icon/Twitter.png" alt="Twitter" class="h-6 w-6">
            </a>
            <a href="#">
                <img src="../img/icon/instgram.png" alt="Instagram" class="h-6 w-6">
            </a>
            <a href="#">
                <img src="../img/icon/Website.png" alt="Website" class="h-6 w-6">
            </a>
        </div>
        
        <!-- البرمجة -->
        <div class="mt-2 md:mt-0 text-center md:text-left">
<p>Developed by Moez Jalal | <a href="https://wa.me/218942933793" class="text-blue-500 hover:underline">Contact via WhatsApp</a></p>
</div>

    </div>
</footer>


<style>
    .bi {
        font-size: 1.5rem; /* Adjust icon size as needed */
        color: #208f18; /* Optional: Change color as needed */
    }
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    
    