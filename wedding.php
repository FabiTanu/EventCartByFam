<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;700;900&family=Poppins:wght@100;200;300&display=swap"
        rel="stylesheet">

    <title>Wedding</title>

    <link rel="stylesheet" href="wed.css">
    <link rel="stylesheet" href="wednav.css">
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

    <article>
        <section class="fline">
            <div class="intro">
                <h1>Wedding Planer</h1>
                <h3>Planners & Event Organizers!</h3>
            </div>

        </section>
        <section class="about">
            <div class="imggg">
                <div class="imgg fimg"><img src="./image1/wed1.jpeg" alt=""></div>
                <div class="imgg simg"><img src="./image1/wed2..jpeg" alt=""></div>
                <div class="imgg timg"><img src="./image1/wed4.avif" alt=""></div>
            </div>
            <div class="aboutPlanner">
                <h1>WEDDING
                    PLANNERS</h1>
                <p>Our wedding planner is dedicated to making your special day extraordinary. With meticulous attention
                    to detail, they handle everything from venue selection to vendor coordination, ensuring a seamless
                    and unforgettable celebration. With creativity and expertise, our wedding planner transforms your
                    vision into reality, allowing you to relax and cherish every moment of your joyous occasion.</p>
            </div>
        </section>
        <section class="venu">
            <div class="vimg vfimg">
                <img src="image1/GrandSylhet.jpg" alt="">
                <div>
                    <h1>Grand Sylhet</h1>
                    <a href="https://grandsylhet.com/"><button>More Info</button></a>
                    <!-- <a href="https://grandsylhet.com/"><button class="btn">More Info</button></a> -->
                </div>
            </div>
            <div class="vimg vsimg">
                <img src="./image1/khans.jpg" alt="">
                <h1>Khan's Palace</h1>
                <a href="https://kpchbd.com/"><button>More Info</button></a>
            </div>
            <div class="vimg vtimg">
                <img src="./image1/kushiara.jpg" alt="">
                <h1>Kushiara</h1>
                <a href="https://www.facebook.com/kushiara.ich/"><button>More Info</button></a>
            </div>
        </section>
        <section class="order">
            <div>
                <img src="./image1/table..jpeg" alt="">
            </div>
            <div>
                <form action="">
                    <input type="text" placeholder="Your Name">
                    <input type="email" placeholder="Your Email">
                    <input type="number" placeholder="Your Number">
                    <textarea name="" id="" cols="30" rows="10" placeholder="Your Address"></textarea>
                    <button class="btn">Order</button>
                </form>
            </div>
        </section>
    </article>


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