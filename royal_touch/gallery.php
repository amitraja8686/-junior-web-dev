<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }
        body{
            background:#fff0f5;
            font-family:Arial;
        }
        /*navbar */
        .navbar{
            background:#ff3399;
        }
        
        .navbar-brand{
            color:white !important;
            font-size:25px;
            font-weight:bold;
        }
        .navbar-brand img{
            width:70px;
            height:70px;
            border-radius:50%;
            object-fit:cover;
        }
        .nav-link{
            color:white !important;
            margin-left:15px;
            font-size:18px;
        }
        .nav-link:hover{
            color:black !important;
        }
        /*hero section */
        .hero{
            background:url('banner.jpg');
            background-size:cover;
            background-position:center;
            height:400px;
            display:flex;
            justify-content:center;
            align-items:center;
            color:white;
            text-align:center;
        }
        .hero h1{
            font-size:60px;
            background:rgba(0,0,0,0.5);
            padding:20px;
            border-radius:10px;
        }
        .gallery-section{
            padding:60px 0;
        }
        .gallery-title{
            text-align:center;
            color:#ff3399;
            margin-bottom:40px;
        }
        .gallery-box{
            overflow:hidden;
            border-radius:15px;
            box-shadow:0px 0px 10px gray;
            margin-bottom:30px;
            background:white;
        }
        .gallery-box img{
            width:100%;
            height:300px;
            object-fit:cover;
            transition:0.5s;
        }
        .galler-box img:hover{
            transform:scale(1.1);
        }
        .gallery-content{
            padding:15px;
            text-align:center;
        }
        .gallery-content h4{
            color:#ff3399;
        }
        footer{
            background:#ff3399;
            color:white;
            text-align:center;
            padding:20px;
            margin-top:40px;
        }
    </style>
</head>
<body>
       <!--navbar-->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a href="#" class="navbar-brand">
<!----logo--->
<img src="images/logo.png" alt="logo">
Royal Touch
        </a>
            <button class="navbar-toggler bg-light " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="home.php" class="nav-link">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="about_us.php" class="nav-link">
                            About Us
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="gallery.php" class="nav-link">
                            Gallery
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="Appoitment.php" class="nav-link">
                            Appoitment
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="contact_us.php" class="nav-link">
                            Contact Us
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="login.php" class="nav-link">
                            Login
                        </a>
                    </li>
                </ul>
            </div>
    </div>
</nav>
<!-----hero section-------->
<div class="hero">
    <h1>Our Gallery</h1>
</div>
<!----gallery section-------->
<div class="container gallery-section">
    <h2 class="gallery-title">
        Beautiful Nail Designs
    </h2>
    <div class="row">
<!---image1------>
<div class="col-lg-4 col-md-6">
<div class="gallery-box">
    <img src="images/img1.jpg" alt="Nail Art">
    <div class="gallery-content">
        <h4>Luxury Nail Art</h4>
        <p>premium glossy nail extensions with elegent</p>
    </div>
</div>
</div>
<!---image2------>
<div class="col-lg-4 col-md-6">
<div class="gallery-box">
    <img src="images/img2.jpeg" alt="Nail Art">
    <div class="gallery-content">
        <h4>Gel Extensions</h4>
        <p>Trendy Gel Nail Extensions For Modern Fashion Lovers.</p>
    </div>
</div>
</div>
<!---image3------>
<div class="col-lg-4 col-md-6">
<div class="gallery-box">
    <img src="images/img3.jpg" alt="Nail Art">
    <div class="gallery-content">
        <h4>French Tips</h4>
        <p>Stylish And Classy French Tip Nail Designs.</p>
    </div>
</div>
</div>
<!---image4------>
<div class="col-lg-4 col-md-6">
<div class="gallery-box">
    <img src="images/img4.jpeg" alt="Nail Art">
    <div class="gallery-content">
        <h4>Bridal Nails</h4>
        <p>elegent bridal nail art for special occasions</p>
    </div>
</div>
</div>
<!---image5------>
<div class="col-lg-4 col-md-6">
<div class="gallery-box">
    <img src="images/img5.jpg" alt="Nail Art">
    <div class="gallery-content">
        <h4>Beautiful Pink</h4>
        <p>Beautiful Pink Nail Extensions With Creative Art.</p>
    </div>
</div>
</div>
<!---image6------>
<div class="col-lg-4 col-md-6">
<div class="gallery-box">
    <img src="images/img6.jpg" alt="Nail Art">
    <div class="gallery-content">
        <h4>Modern Design</h4>
        <p>Trendy Nail Designs Inspired By Modern Beauty.</p>
    </div>
</div>
</div>
    </div>
</div>
<!---footer--->
<footer>
    <h5>Royal Touch</h5>
    <p>Beautiful Nails,Beautiful You.</p>
    <p>
        <i class="bi bi-telephone-fill"></i>
        +91 7847384787
    </p>
    <p>
        <i class="bi bi-envelope-fill"></i>
        royaltouch223@gmail.com
    </p>
    <p>
        <i class="bi bi-instagram"></i>
        @royal_touch
    </p>
    <p>
       2026 Royal Touch | All Rights Reserved
    </p>

</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>