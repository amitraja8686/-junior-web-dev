<?php
include 'connect.php';
if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $message=$_POST['message'];
        $query="insert into contact_us(name,email,phone,message) values ('$name','$email','$phone','$message')";
        $data=mysqli_query($con,$query);
        if($data)
            {
                echo"<script>alert('message sent successfully');</script>";
            }
            else
                 {
                echo"<script>alert('failed to send message');</script>";
            }
            
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
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
            color:white;
            font-size:25px;
            font-weight:bold;
        }
        .navbar-brand img{
            width:60px;
            height:60px;
            border-radius:50%;
            object-fit:cover;
        } 
        .nav-link{
            color:white;
            font-size:18px;
            margin-left:15px;
        }
        .nav-link:hover{
            color:black !important;
        }
        /*contact */
        .contact-section{
            padding:50px;

        }
        .contact-box{
            background:white;
            padding:30px;
            border-radius:15px;
            box-shadow:0px 0px 10px gray;
        }
        .contact-title{
            color:#ff3399;
            margin-bottom:20px;
            text-align:center;
        }
        .btn-custom{
            background:#ff3399;
            color:white;
            width:100%;
        }
        .btn-custom:hover{
            background:#e60073;
            color:white;
        }
        iframe{
            width:100%;
            height:100%;
            border-radius:15px;
        }
        .map-box{
            height:100%;
            min-height:450px;
        }
        footer{
            background:#ff3399;
            color:white;
            text-align:center;
            padding:15px;
            margin-top:30px;
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
<!-----contact section-------->
<div class="container contact-section">
    <div class="row g-4">
<!---left side form------>
<div class="col-lg-6">
    <div class="contact-box">
        <h2 class="contact-title">
            Contact Us
        </h2>
    <form method="POST">
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" placeholder="Enter Your Name" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" placeholder="Enter Your Email" required>
        </div>
        <div class="mb-3">
            <label>Phone</label>
            <input type="number" name="phone" class="form-control" placeholder="Enter Your Phone Number" required>
        </div>
        <div class="mb-3">
            <label>Message</label>
            <textarea class="form-control" name="message" rows="5" placeholder="Enter Your Message" required></textarea>   </div>
            <button type="submit" name="submit" class="btn btn-custom">Send Message</button>
    </form>
    <hr>
    <div class="mt-4">
        <h4 style="color:#ff3399;">
            Contact Information
        </h4>
        <p>
            <i class="bi bi-telephone-fill"></i>
            +91 8564783948
        </p>
         <p>
            <i class="bi bi-briefcase"></i>
           royaltouch223@gmail.com
        </p>
         <p>
           <i class="bi bi-geo-alt"></i>
          Rajkot,Gujrat,India.
        </p>
         <p>
           <i class="bi bi-instagram"></i>
         @royal_touch_223
        </p>
         <p>
           <i class="bi bi-clock-fill"></i>
       Mon - Sun : 10AM to 8PM 
        </p>
    </div>
    </div>
</div>
<!------right side map---------->
<div class="col-lg-6">
    <div class="map-box">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3705.4909072731043!2d72.15110327378149!3d21.761253762220615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395f5a7fa55555ad%3A0x11e8331148e7840b!2sCrave%20Eatables%20Bachubhai%E2%80%99s!5e0!3m2!1sen!2sin!4v1779456091564!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
    </div>
</div>
        <!------------footer------------------>
        <footer>
            <p>
                2026 Nail Studio | All Rights Reserved
            </p>
        </footer>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script> 
</body>
</html>