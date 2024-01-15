<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css\first_page.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg" style="background-color: rgb(157, 113, 113) ;">
        <div class="container">
            <a class="navbar-brand" href="#">EventCart</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="HomePage.php">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Packages
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="wedding.php">Wedding</a></li>
                            <li><a class="dropdown-item" href="birthday.php">Birthday</a></li>
                            <li><a class="dropdown-item" href="other.php">Other Event</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gallery.php">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="OurTeam.php">About</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <section>
        <div class="container">
            <div class="text">
                <h1>Event Management System</h1>
                <P>If you want something you're never had, you must be willing<br>
                    to do something you've never done</P>

                <button><a href="register.php" class="btn">Join Now</a></button>
            </div>
        </div>
    </section>

    <section id="footer">
        <div class="container-fluid footer-container mt-5">
            <footer class="row row-cols-1" style="background-color: rgb(157, 113, 113);">
                <!-- Footer  -->
                <div class="footer-section" style="background-color: rgb(157, 113, 113);">
                    <div class="footer-item">
                        <h2>Company</h2>
                        <p><a href=""> About Us</a></p>
                        <p><a href=""> Contact Us</a></p>
                        <p><a href=""> Our Services</a></p>
                        <p><a href=""> Privacy Policy</a></p>
                    </div>
                    <div class="footer-item">
                        <h2>Get Help </h2>
                        <p><a href=""> FAQ</a></p>
                        <p><a href=""> Shipping </a></p>
                        <p><a href=""> Retuns </a></p>
                        <p><a href=""> Payment Options </a></p>
                    </div>
                    <div class="footer-item">
                        <h2>Online Shop</h2>
                        <p><a href=""> Blogs </a></p>
                        <p><a href=""> Watch </a></p>
                        <p><a href=""> Shoes </a></p>
                        <p><a href=""> Bress </a></p>
                    </div>
                    <div class="footer-item social">
                        <h2> Follow Us </h2>
                        <ul>
                            <li> <i class="fa-brands fa-instagram"></i> </li>
                            <li> <i class="fa-brands fa-linkedin-in"></i> </li>
                            <li> <i class="fa-brands fa-youtube"></i> </li>
                            <li> <i class="fa-brands fa-twitter"></i> </li>
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
    </section>

    <!-- <footer>

     <p>&copy; 2023 My Website. All rights reserved.<br>
      Sumaya Akter Mahi</p>
    </div> 
  </footer> -->




</body>


</html>

<!-- Make sure to include Bootstrap JS at the end of the body -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>