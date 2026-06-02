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
        /*about section */
        .about-section{
            padding:60px 0;
        }
        .about-image img{
            width:100%;
            height:600px;
            object-fit:cover;
            border-radius:15px;
            box-shadow:0px 0px 10px gray;
        }
        .about-content{
            padding:20px;
        }
        .about-content h2{
            color:#ff3399;
            margin-bottom:20px;
        }
        .about-content p{
            text-align:justify;
            line-height:30px;
            font-size:17px;

        }
        /*team section */
        .team-section{
            padding:50px 0;

        }
        .team-title{
            text-align:center;
            color:#ff3399;
            margin-bottom:40px;
        }
        .team-card{
            background:white;
            border-radius:15px;
            padding:20px;
            text-align:center;
            box-shadow:0px 0px 10px gray;
        }
        .team-card img{
            width:90%;
            height:300px;
            object-fit:cover;
            border-radius:15px;
        }
        .team-card h4{
            margin-top:15px;
            color:#ff3399;
        }/*gallery */
        .gallery-section{
            padding:50px 0;
        }
        .gallery-title{
            text-align:center;
            color:#ff3399;
            margin-bottom:40px;
        }
        .gallery img{
            width:100%;
            height:250px;
            object-fit:cover;
            border-radius:15px;
            margin-bottom:25px;
            transition:0.5s;
        }
        .gallery img:hover{
            transform:scale(1.05);
        }
        footer{
            background:#ff3399;
            color:white;
            text-align:center;
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
<!---hero section---->
<div class="hero">
    <h1>About Royal Touch</h1>
</div>
<!-----abot section------->
<div class="container about-section">
    <div class="row align-items-center">
        <div class="col-lg-6 about-image">
            <img src="images/about1.png" alt="salon">
        </div>
        <div class="col-lg-6 about-content">
            <h2>Who We Are</h2>
            <p>Welcome to Royal Touch, your destination for elegant nails and timeless beauty. Our passion is to create stunning nail looks that add charm and confidence to your everyday style. From simple elegance to bold artistic designs, we provide services tailored to your unique taste. At Royal Touch, every nail is treated like a masterpiece crafted with care and luxury.</p>
            <p>Royal Touch is more than just a nail studio — it’s a place where style meets sophistication. We specialize in creating beautiful, trendy, and customized nail designs that reflect your personality and grace. With professional care and premium products, we ensure every client leaves feeling confident and glamorous. Your beauty deserves nothing less than a royal touch.</p>
            <P>At Royal Touch, we turn your nail dreams into reality with elegance and perfection. Our studio is designed to provide a relaxing and luxurious experience while enhancing your beauty with stylish nail extensions and creative nail art. We focus on quality, hygiene, and attention to every detail to make your nails look flawless. Every visit to Royal Touch is a step toward confidence, beauty, and a touch of royalty.</P>
        </div>
    </div>
</div>
<!----TEAM SECTION------>
<div class="container team-section">
    <h2 class="team-title">Meet OUR Experts</h2>
    <div class="row g-4">
        <div class="col-lg-4">
            <div class="team-card">
                <img src="images/team1.jpg" alt="team">
                <h4>Nail Artist</h4>
                <p>Expert in Acrylic Nail</p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="team-card">
                <img src="images/team2.jpg" alt="team">
                <h4>Beauty Specialist</h4>
                <p>Specialist in Nail Art</p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="team-card">
                <img src="images/team3.jpg" alt="team">
                <h4>Professional Specialist</h4>
                <p>Expert in Gel Nail</p>
            </div>
        </div>
    </div>
</div>
<!-----gallery-section--------->
<div class="container gallery-section">
    <h2 class="gallery-title">
        Our Nail Designs
    </h2>
    <div class="row gallery">
        <div class="col-lg-4">
            <img src="images/gallery1.jpg" alt="">
        </div>
        <div class="col-lg-4">
            <img src="images/gallery2.jpg" alt="">
        </div>
        <div class="col-lg-4">
            <img src="images/gallery3.jpg" alt="">
        </div>
        <div class="col-lg-4">
            <img src="images/gallery4.jpg" alt="">
        </div>
        <div class="col-lg-4">
            <img src="images/gallery5.jpg" alt="">
        </div>
        <div class="col-lg-4">
            <img src="images/gallery6.jpg" alt="">
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