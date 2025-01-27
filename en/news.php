<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="icon" href="../img\1.1.jpg">
    <title>news</title>
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
        <p class="card-text text-white">Here you will find all news</p>
    </div>
</div>

<?php
include '../db__admin.php';
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, title, summary, image, content FROM newsen ORDER BY reg_date DESC LIMIT 5";
$result = $conn->query($sql);
?>

<section class="container flex flex-col mx-auto justify-center items-center px-4 py-12">
    <?php
    $index = 0;
    if ($result->num_rows > 0):
        while($row = $result->fetch_assoc()):
            $isImageRight = $index % 2 === 0;
    ?>
    <div class="flex flex-col <?php echo $isImageRight ? 'md:flex-row-reverse' : 'md:flex-row'; ?> my-8 justify-between rounded-3xl  border-[#00A991] bg-gradient-to-<?php echo $isImageRight ? 'l' : 'r'; ?> from-white to-[#B0E4DD4D]" style="border: 2px solid #00A991;">
        <img src="<?php echo isset($row['image']) && !empty($row['image']) ? '../uploads' . $row['image'] : 'path/to/default-image.jpg'; ?>" alt="Image" style="width: 600px; height: 480px; object-fit: cover;" class="rounded-lg  mx-auto md:mx-0 p-4">
        <div class="w-full md:w-1/2 text-center md:text-right p-4">
            <h1 class="text-3xl md:text-5xl font-bold text-gray-800 mb-4"><?php echo $row['title']; ?></h1>
            <p class="text-gray-600 text-lg md:text-2xl leading-relaxed mb-6"><?php echo $row['summary']; ?></p>
            <div class="btn-group">
                <a href="view-news.php?id=<?php echo htmlspecialchars($row['id']); ?>" class="bg-green-600 w-full md:w-44 h-12 md:h-16 text-lg md:text-xl text-white px-4 py-2 rounded-full hover:bg-green-700 text-center flex items-center justify-center">View</a>
            </div>
        </div>
    </div>
    <?php
        $index++;
        endwhile;
    else:
    ?>
        <p>No news available currently</p>
    <?php endif; ?>
    <?php $conn->close(); ?>
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

    </div>
</footer>


<style>
    .bi {
        font-size: 1.5rem; /* Adjust icon size as needed */
        color: #208f18; /* Optional: Change color as needed */
    }
</style>
<style>
    .flex {
        gap: 20px;
    }
</style>

</body>
</html>

      
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
