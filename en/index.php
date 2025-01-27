<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="icon" href="../img\1.1.jpg">
    <title>Agricultural Research</title>
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
      <div id="carouselExampleCaptions" class="carousel slide" style="max-height: 600px; overflow: hidden;">
        <div class="carousel-indicators custom-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../img/1..jpg" class="d-block w-100" alt="Slide 1"style="height: 600px; object-fit: cover;">
            <div class="carousel-caption">
              <h5 id="carousel-title-1">Agricultural Technology Development</h5>
              <p id="carousel-text-1">New research to enhance agricultural production efficiency using the latest technologies.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="../img/1..jpg" class="d-block w-100" alt="Slide 2" style="height: 600px; object-fit: cover;">
            <div class="carousel-caption">
              <h5 id="carousel-title-2">Natural Resource Conservation</h5>
              <p id="carousel-text-2">Ongoing studies to protect the environment and ensure sustainability of agricultural resources.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="../img/1..jpg" class="d-block w-100" alt="Slide 3" style="height: 600px; object-fit: cover;">
            <div class="carousel-caption">
              <h5 id="carousel-title-3">Increasing Productivity and Quality</h5>
              <p id="carousel-text-3">Scientific research to boost productivity and quality of agricultural crops to meet global demands.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>
<style>
    /* Text and image size adjustments */
.carousel-caption h5 {
    font-size: 1.8rem;
    font-weight: bold;
}

.carousel-caption p {
    font-size: 1.2rem;
}

/* Media query for adjusting text on mobile */
@media (max-width: 768px) {
    .carousel-caption h5 {
        font-size: 1.4rem;
    }
    .carousel-caption p {
        font-size: 1rem;
    }
    .carousel-caption {
        /* Semi-transparent background to enhance text clarity */
        padding: 10px;
    }
}

.dropdown-menu {
  background-color: white; /* Set background to white */
  border: 1px solid #ddd; /* Optional: Add a border for better visibility */
  color: #333; /* Optional: Set text color to ensure readability */
}

.dropdown-menu .dropdown-item:hover {
  background-color: #f8f9fa; /* Optional: Light gray background on hover */
}

</style>
<section class="container mx-auto px-4 py-12">
    <div class="flex flex-col md:flex-row-reverse items-center">
        <!-- Section containing the image -->
        <div class="w-full md:w-1/2 mb-6 md:mb-0 md:pr-8">
            <img src="../img/icon/icon-big.png" alt="Image referring" class="w-full h-auto rounded-lg object-cover">
        </div>
        <!-- Section containing the text -->
        <div class="w-full md:w-1/2 text-right p-4">
            <h1 class="text-3xl md:text-5xl font-bold text-gray-800 mb-4">About the Center</h1>
            <p class="text-gray-600 text-lg md:text-2xl leading-relaxed mb-6">
                "The Agricultural and Animal Research Center was established as one of the oldest scientific institutions in Libya, 
                <br>
                founded as a governmental entity with a legal personality according to Law No. 109 of 1971. The center operates 
                <br>
                through three main specialties covering all regions of Libya, in addition to around 11 affiliated research stations.
                <br>
                Join us in our journey towards a better agricultural future!"
            </p>
            <button class="bg-green-600 w-full md:w-44 h-16 text-xl text-white px-6 py-2 rounded-full hover:bg-green-700">
            <a href="about-center.html" class="flex items-center justify-center w-full h-full">View More</a>
            </button>
        </div>
    </div>
    <!-- Small icon image -->
    
</section>


<?php
// Database connection
include '../db__admin.php';
// Check connection
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

// Fetch the latest three news items based on addition date
$sql = "SELECT id, title, summary, image, content FROM newsen ORDER BY reg_date DESC LIMIT 3"; // Added 'id' in the query
$result = $conn->query($sql);
?>

<section class="container flex flex-col mx-auto justify-between items-center px-4 py-12">
    <div class="relative mt-36 mb-8 text-center md:text-right">
        <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">News</h1>
        <p class="text-gray-600 text-lg md:text-2xl leading-relaxed">
            News about the center will be published in this section.
        </p>
    </div>
    <?php
// Variable to control image alignment
$index = 0;
if ($result->num_rows > 0): 
    while($row = $result->fetch_assoc()): 
        $isImageRight = $index % 2 === 0;
?>
    <div class="flex flex-col <?php echo $isImageRight ? 'md:flex-row-reverse' : 'md:flex-row'; ?> my-8 justify-between rounded-3xl  border-[#00A991] bg-gradient-to-<?php echo $isImageRight ? 'l' : 'r'; ?> from-white to-[#B0E4DD4D]"  style="border: 1px solid #00A991;">
        <!-- Image -->
        <img src="<?php echo isset($row['image']) && !empty($row['image']) ? 'uploads/' . $row['image'] : 'path/to/default-image.jpg'; ?>" alt="Illustrative Image" style="width: 600px; height: 480px; object-fit: cover;" class="rounded-lg  mx-auto md:mx-0 p-4">

        <!-- Text -->
        <div class="w-full md:w-1/2 text-center md:text-right p-4">
            <h1 class="text-3xl md:text-5xl font-bold text-gray-800 mb-4"><?php echo $row['title']; ?></h1>
            <p class="text-gray-600 text-lg md:text-2xl leading-relaxed mb-6"><?php echo $row['summary']; ?></p>
            <!-- PHP Button Code to Link to Detailed View Page -->
            <div class="btn-group">
    <a href="view-news.php?id=<?php echo htmlspecialchars($row['id']); ?>" class="bg-green-600 w-full md:w-44 h-12 md:h-16 text-lg md:text-xl text-white px-4 py-2 rounded-full hover:bg-green-700 text-center flex items-center justify-center">
        View
    </a>
</div>

        </div>
    </div>
<?php 
    $index++;
    endwhile; 
else: 
?>
    <p>No news available at the moment</p>
<?php endif; ?>

<div class="flex justify-center">
    <button class="bg-green-600 w-44 h-16 text-xl text-white px-6 py-2 rounded-full hover:bg-green-700">
        <a href="news.php" class="flex items-center justify-center w-full h-full">View More</a>
    </button>
</div>

<?php
$conn->close();
?>
<?php
// الاتصال بقاعدة البيانات
include '../db__admin.php';
// التحقق من الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
}

// استعلام لحساب عدد الأبحاث
$sql_count = "SELECT COUNT(*) AS total_researches FROM research";
$result_count = $conn->query($sql_count);

// جلب عدد الأبحاث
$total_researches = 0;
if ($result_count && $result_count->num_rows > 0) {
    $row_count = $result_count->fetch_assoc();
    $total_researches = $row_count['total_researches'];
}
// إغلاق الاتصال
$conn->close();
?>
<!-- إضافة رابط Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

<section class="flex container mx-auto w-full items-center justify-around py-8 mt-12 mx-5 custom-bg rounded-xl" style="border: 1px solid #00A991;">
    <!-- قسم الفروع -->
    <div class="flex flex-col items-center space-y-2" data-section-id="branch">
        <div class="text-purple-500 text-7xl" style="margin-top: 20px;">
            <i class="fas fa-building"></i>
        </div> <!-- أيقونة الفروع -->
        <h2 class="text-2xl font-semibold text-gray-700">Branches</h2>
        <div class="circular-progress position-relative" style="margin-top: 10px; top: -20px;">
            <svg class="progress-circle" width="120" height="120"style="margin-top: 10px;">
                <circle class="circle-bg" cx="60" cy="60" r="54"></circle>
                <circle id="branch-progress" class="circle-bar" cx="60" cy="60" r="54"></circle>
            </svg>
            <span id="branch-count" class="position-absolute top-50 start-50 translate-middle text-xl font-bold text-green-500">0</span>
        </div>
    </div>

    <!-- قسم الموظفين -->
    <div class="flex flex-col items-center space-y-2" data-section-id="employee">
        <div class="text-purple-500 text-7xl" style="margin-top: 20px;">
            <i class="fas fa-users"></i>
        </div> <!-- أيقونة الموظفين -->
        <h2 class="text-2xl font-semibold text-gray-700" style="margin-top: 10px;">Staff</h2>
        <div class="circular-progress position-relative" style="margin-top: 10px; top: -20px;">
            <svg class="progress-circle" width="120" height="120"style="margin-top: 10px;">
                <circle class="circle-bg" cx="60" cy="60" r="54"></circle>
                <circle id="employee-progress" class="circle-bar" cx="60" cy="60" r="54"></circle>
            </svg>
            <span id="employee-count" class="position-absolute top-50 start-50 translate-middle text-xl font-bold text-blue-500">0</span>
        </div>
    </div>

    <!-- قسم الأبحاث -->
    <?php
    // الاتصال بقاعدة البيانات
    include '../db__admin.php';
    // التحقق من الاتصال
    if ($conn->connect_error) {
        die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
    }

    // استعلام لحساب عدد الأبحاث
    $sql_count = "SELECT COUNT(*) AS total_researches FROM researchen";
    $result_count = $conn->query($sql_count);

    // عدد الأبحاث الافتراضي
    $total_researches = 0;

    if ($result_count->num_rows > 0) {
        $row_count = $result_count->fetch_assoc();
        $total_researches = $row_count['total_researches'];
    }

    // إغلاق الاتصال
    $conn->close();
    ?>

    <div class="flex flex-col items-center space-y-2"  data-section-id="research">
        <div class="text-blue-500 text-7xl" style="margin-top: 20px;">
            <i class="fas fa-flask"></i>
        </div>
        <h2 class="text-2xl font-semibold text-gray-700" style="margin-top: 10px;">Research</h2>
        <div class="circular-progress position-relative" style="margin-top: 10px; top: -20px;">
            <svg class="progress-circle" width="120" height="120"style="margin-top: 10px;">
                <circle class="circle-bg" cx="60" cy="60" r="54"></circle>
                <circle id="research-progress" class="circle-bar" cx="60" cy="60" r="54"></circle>
            </svg>
            <span id="research-count" class="position-absolute top-50 start-50 translate-middle text-xl font-bold text-purple-500">0</span>
        </div>
    </div>
</section>

<style>
.circular-progress {
    width: 120px;
    height: 120px;
    position: relative;
}

.progress-circle {
    transform: rotate(-90deg);
}

.circle-bg {
    fill: none;
    stroke: #e6e6e6;
    stroke-width: 12;
}

.circle-bar {
    fill: none;
    stroke: #00A991;
    stroke-width: 12;
    stroke-linecap: round;
    stroke-dasharray: 339;
    stroke-dashoffset: 339;
    transition: stroke-dashoffset 0.3s linear;
}

.text-green-500, .text-blue-500, .text-purple-500 {
    color: #00A991;
}

.text-xl {
    font-size: 1.25rem;
}

.text-3xl {
    font-size: 2rem;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function () {
    // بيانات التقدم لكل قسم
    const sections = [
        { id: 'branch', total: 5, speed: 500 },       // عدد الفروع
        { id: 'employee', total: 719, speed: 10 },   // عدد الموظفين
        { id: 'research', total: <?php echo $total_researches; ?>, speed: 50 } // عدد الأبحاث من PHP
    ];

    // دالة لتحديث التقدم
    const animateProgress = (idPrefix, total, speed) => {
        let count = 0;
        const counterElement = document.getElementById(`${idPrefix}-count`);
        const progressElement = document.getElementById(`${idPrefix}-progress`);
        const dashArray = 339; // محيط الدائرة

        const interval = setInterval(() => {
            count++;
            const progress = Math.round((count / total) * 100); // نسبة التقدم
            const dashOffset = dashArray - (dashArray * progress) / 100; // تحويل النسبة إلى إزاحة دائرية
            counterElement.textContent = count; // تحديث النص
            progressElement.style.strokeDashoffset = dashOffset; // تحديث الدائرة

            if (count >= total) clearInterval(interval); // إيقاف التقدم عند الوصول للعدد الكلي
        }, speed);
    };

    // مراقبة الأقسام
    const options = {
        root: null, // النافذة (viewport) الافتراضية
        threshold: 0.5 // القسم يجب أن يكون مرئيًا بنسبة 50% على الأقل
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const sectionId = entry.target.getAttribute('data-section-id'); // الحصول على معرف القسم
                const section = sections.find(s => s.id === sectionId); // البحث عن بيانات القسم

                if (section) {
                    animateProgress(section.id, section.total, section.speed); // تشغيل التقدم
                    observer.unobserve(entry.target); // إزالة المراقبة لهذا القسم
                }
            }
        });
    }, options);

    // إضافة مراقبة لكل قسم
    sections.forEach(section => {
        const element = document.querySelector(`[data-section-id="${section.id}"]`);
        if (element) {
            observer.observe(element);
        }
    });
});
</script>

<?php
// الاتصال بقاعدة البيانات
include '../db__admin.php';
// التحقق من الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال بالقاعدة: " . $conn->connect_error);
}

// استعلام لجلب آخر 6 أبحاث
$sql = "SELECT * FROM researchen ORDER BY id DESC LIMIT 6";
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
</section>


<div class="flex justify-center mt-8">
    <button class="bg-green-600 w-44 h-16 text-xl text-white px-6 py-2 rounded-full hover:bg-green-700">
        <a href="research.php" class="flex items-center justify-center w-full h-full">View More</a>
    </button>
</div>
</section>
    
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
</body>
</html>
