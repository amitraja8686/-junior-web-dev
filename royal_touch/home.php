<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
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
    <div class="hero">
        <h2>beautiful Nails,Beautiful You</h2>
    </div>
    <div class="container">
        <h2 class="section-title">Nail Design</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card">
                    <img src="images/img1.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>Acrylic Nails</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <img src="images/img2.jpeg" class="card-img-top">
                    <div class="card-body">
                        <h5>Gel Extensions</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <img src="images/img3.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>French Tips</h5>
                    </div>
                </div>
            </div>
        </div>
        <h2 class="section-title">Gallery</h2>
        <div class="row g-3">
            <div class="col-md-4">
                <img src="images/gallery1.jpg" class="gallery-img">
            </div>
            <div class="col-md-4">
                <img src="images/gallery2.jpg" class="gallery-img">
            </div>
            <div class="col-md-4">
                <img src="images/gallery3.jpg" class="gallery-img">
            </div>
            <div class="col-md-4">
                <img src="images/gallery4.jpg" class="gallery-img">
            </div>
            <div class="col-md-4">
                <img src="images/gallery5.jpg" class="gallery-img">
            </div>
            <div class="col-md-4">
                <img src="images/gallery.6jpg" class="gallery-img">
            </div>
        </div>


        <h2 class="section-title">
            Customer-Review
        </h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="review">
                    <h5>Priya Patel⭐⭐⭐⭐⭐</h5>
                    <p>Amazing Nail Art And Services.</p>
                </div>
            </div>

             <div class="col-md-4">
                <div class="review">
                    <h5>Kaveri Desani ⭐⭐⭐⭐⭐</h5>
                    <p>Professional Staff and beautiful designs.</p>
                </div>
            </div>

             <div class="col-md-4">
                <div class="review">
                    <h5>Swati meghani⭐⭐⭐⭐⭐</h5>
                    <p>best nails extension studio</p>
                </div>
            </div>
        </div>
    </div>
    <h2 class="section-title">
        Feedback Form
    </h2>
    <div class="feedback-box mb-5">
       <form method="POST">
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Message</label>
            <textarea name="message" class="form-control" rows="4" required></textarea>
        </div>
        <div class="mb-3">
            <label>
                Rating
            </label>
            <select name="rating" class="form-control" required>
                <option value="">select rating</option>
                <option value="1">⭐</option>
                <option value="2">⭐⭐</option>
                <option value="3">⭐⭐⭐</option>
                <option value="4">⭐⭐⭐⭐</option>
                <option value="5">⭐⭐⭐⭐⭐</option>
            </select>
        </div>
        <button type="submit" name="feedback">
            Send Feedback
        </button>
       </form> 
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