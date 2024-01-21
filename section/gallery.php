<?php
include '../../admin-panel/config/dbconn.php';

$insert = "select * from gallery";
$result = mysqli_query($connection, $insert);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="../../css/card.css">
    <link rel="stylesheet" href="../../css/gallery.css">
    <!-- <link rel="stylesheet" href="css/style2.css"> -->
</head>

<body>
    <!--navbar-->

    <nav>
        <div class="navbar">
            <i class='bx bx-menu'></i>
            <div class="logo"><a href="#">EventCart</a></div>
            <div class="nav-links">
                <div class="sidebar-logo">
                    <span class="logo-name">EventCart</span>
                    <i class='bx bx-x'></i>
                </div>
                <ul class="links" id="linkscall">
                    <li><a href="HomePage.php">HOME</a></li>
                    <li>
                        <a href="#">About</a>
                        <i class='bx bxs-chevron-down htmlcss-arrow arrow '></i>
                        <ul class="htmlCss-sub-menu sub-menu">
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="OurTeam.php">Preferred Partners</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Services</a>
                        <i class='bx bxs-chevron-down js-arrow arrow '></i>
                        <ul class="js-sub-menu sub-menu">
                            <li><a href="wedding.php">Weeding</a></li>
                            <li><a href="#">Corporate Events</a></li>
                            <li><a href="birthday.php">Birthday</a></li>
                            <li><a href="#">Social Activities</a></li>
                        </ul>
                    </li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="review.php">Review</a></li>
                    <li>
                        <a href="#">Services</a>
                        <i class='bx bxs-chevron-down js-arrow arrow '></i>
                        <ul class="js-sub-menu sub-menu">
                            <li><a href="wedding.php">Weeding</a></li>
                            <li><a href="#">Corporate Events</a></li>
                            <li><a href="birthday.php">Birthday</a></li>
                            <li><a href="#">Social Activities</a></li>
                        </ul>
                    </li>

                </ul>
            </div>

            <!-- <div class="logout" id="logout">
                <a href="#">Logout</a>
            </div> -->

            <div class="search-box">
                <i class='bx bx-search'></i>

                <div class="input-box">
                    <input type="text" placeholder="Search...">
                </div>
            </div>
        </div>
    </nav>
    <br> <br><br> <br> <br> <br>

    <!-- body -->
    <main>
        <div class="container">
            <div class="row">

                <?php while ($row = mysqli_fetch_assoc($result)) {
                    echo "

                    <div class='col-sm-4 '>
                        <div class='card'>
                            <div class='image'>
                            <img src='../../admin-panel/$row[image]' height='250' width='150' alt='image'>
                            </div>
                            <div class='card-inner font-monospace'>
                                <div class='header'>
                                    <h2>$row[name]</h2>
                                    <h3>$row[title]</h2>
                                </div>
                                <div class='content'>
                                    <p>$row[category]</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
                } ?>


            </div>
        </div>
    </main>
    <br> <br><br>


    <!--  #FOOTER-->
    <!-- <section class="footSection container-fluid"> -->
    <footer class="footer ">
        <div class="container">

            <div class="section footer-top">

                <div class="footer-brand">

                    <a href="#" class="logo">EventCart</a>

                    <p class="footer-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer non porttitor augue, in
                        convallis risus.
                        Sed efficitur nulla quis luctus pulvinar. Cras nec pulvinar condimentum lacus.
                    </p>

                    <ul class="social-list">

                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-facebook"></ion-icon>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-twitter"></ion-icon>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-instagram"></ion-icon>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-youtube"></ion-icon>
                            </a>
                        </li>

                    </ul>

                </div>

                <ul class="footer-list">

                    <li>
                        <p class="footer-list-title">Explore Us</p>
                    </li>

                    <li>
                        <a href="#" class="footer-link">About Us</a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">Collection</a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">Features</a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">Blog & News</a>
                    </li>

                </ul>

                <ul class="footer-list">

                    <li>
                        <p class="footer-list-title">Support</p>
                    </li>

                    <li>
                        <a href="#" class="footer-link">Account</a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">Feedback</a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">Support Center</a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">Our Stores</a>
                    </li>

                </ul>

                <div class="footer-list">

                    <p class="footer-list-title">Get in Touch</p>

                    <p class="footer-text">
                        Question or feedback?
                        We’d love to hear from you
                    </p>

                    <a href="#" class="btn">
                        <span class="span">Contact Us</span>

                        <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                    </a>

                </div>

            </div>

            <div class="footer-bottom">

                <p class="copyright">
                    Copyright 2022 codewithFAM. All Right Reserved
                </p>

            </div>

        </div>
    </footer>


    <script src="script.js"></script>


    <!-- 
    - ionicon link
    -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


    <!-- Make sure to include Bootstrap JS at the end of the body -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>