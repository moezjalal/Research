<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Khalid&display=swap" rel="stylesheet">
    <link rel="icon" href="./img\1.1.jpg">
    <title>تفصيل الخبر</title>
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
                  <a class="nav-link  d-lg-none border-bottom  " href="index.php">الرئيسية</a>
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
                  <a class="nav-link d-lg-none border-bottom " href="الابحاث.php">أبحاث</a>
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
      </nav><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<main class="container" style="margin-top: 30px;">
    <div class="row g-5">
        <div class="col-md-8">

        <?php
       include 'db__admin.php';
        // التحقق من الاتصال
        if ($conn->connect_error) {
            die("فشل الاتصال: " . $conn->connect_error);
        }

        // التحقق من وجود معرف الخبر في GET
        if (isset($_GET['id'])) {
            $news_id = intval($_GET['id']); // الحصول على المعرف من GET

            // استعلام لجلب الخبر المحدد بناءً على المعرف
            $sql = "SELECT title, content, reg_date, image FROM news WHERE id = $news_id";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    
                    echo '<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">';
                    echo '<div class="carousel-inner">';
                    echo '<div class="carousel-item active" data-bs-interval="10000">';
                    echo '<img src="img/' . htmlspecialchars($row["image"]) . '" class="d-block w-100" style="margin-top: 70px;" alt="' . htmlspecialchars($row["title"]) . '">';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';

                    echo '<article class="blog-post">';
                    echo '<h2 class="display-5 link-body-emphasis mb-1">' . htmlspecialchars($row["title"]) . '</h2>';
                    echo '<p class="news-content">' . nl2br(htmlspecialchars($row["content"])) . '</p>';
                    echo '<hr>';
                    echo '<small class="text-body-secondary">' . date("d F Y", strtotime($row["reg_date"])) . '</small>';
                    echo '</article>';
                }
            } else {
                echo "لا توجد تفاصيل للخبر.";
            }
        } else {
            echo "معرف الخبر غير موجود.";
        }

        $conn->close();
        ?>

        </div>

        <div class="col-md-4" style="margin-top: 30px;">
            <div class="position-sticky" style="top: 2rem;">
                <div class="p-4 mb-3 bg-body-tertiary rounded" style="margin-top: 90px;">
                    <h4 class="fst-italic">حول</h4>
                    <p class="mb-0">مرحبًا بكم في صفحة الأخبار الخاصة بمركز الأبحاث الزراعية، حيث نقدم لكم أحدث المستجدات والأبحاث في مجال الزراعة والبيئة. يسعى مركزنا إلى تعزيز الابتكار والتنمية المستدامة في القطاع الزراعي من خلال البحث العلمي والتعاون مع المزارعين والجهات المعنية</p>
                </div>

                <?php
                // استعلام لجلب آخر 3 أخبار
                $conn = new mysqli($servername, $username, $password, $dbname);
                if ($conn->connect_error) {
                    die("فشل الاتصال: " . $conn->connect_error);
                }

                $sql = "SELECT id, title, summary, image, reg_date FROM news ORDER BY reg_date DESC LIMIT 3";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    echo '<div>';
                    echo '<h4 class="fst-italic"اخر الاخبار</h4>';
                    echo '<ul class="list-unstyled">';

                    // عرض الأخبار
                    while ($row = $result->fetch_assoc()) {
                        echo '<li>';
                        echo '<a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="عرض الخبر.php?id=' . $row["id"] . '">';
                        echo '<img src="uploads/' . htmlspecialchars($row["image"]) . '" alt="' . htmlspecialchars($row["title"]) . '" width="96" height="96"/>';

                        echo '<div class="col-lg-8">';
                        echo '<h6 class="mb-0">' . $row["title"] . '</h6>';
                      
                        echo '</div>';
                        echo '</a>';
                        echo '</li>';
                    }

                    echo '</ul>';
                    echo '</div>';
                } else {
                    echo "لا توجد أخبار لعرضها.";
                }
                ?>

            </div>
        </div>
    </div>
</main>

<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
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

</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</html>
