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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/index.css">



    <style>
        .blog-card {
            border: 2px solid black;
            /* border-radius: 20%; */
            border-top-left-radius: 50px;
            border-top-right-radius: 50px;
            background-color: white;
        }

        .card-banner img {
            margin: 0 auto;
            width: 550px;
            height: 400px;
            /* border-top-left-radius: 50px;
            border-top-right-radius: 50px; */
        }

        .card-des {
            font-family: 'Poppins', sans-serif;
            padding: 10px 20px;
            text-align: justify;
        }



        .blog .section-text {
            margin-block: 20px 36px;
        }

        .blog .grid-list {
            gap: 30px;
        }

        .blog-card .card-banner {
            border-radius: 50px 50px 0 0;
        }

        /* 
        .blog-card .img-cover {
            will-change: transform;
        }

        .blog-card:is(:hover, :focus-within) .img-cover {
            transform: scale(1.05) rotate(2deg);
            opacity: 0.8;
        } */

        .blog-card .card-content {
            padding: 20px;
        }

        .blog-card .card-title {
            margin-block: 8px 20px;
        }

        .blog-card :is(.card-meta, .card-meta-wrapper) {
            display: flex;
            align-items: center;
        }

        .blog-card .card-meta {
            flex-wrap: wrap;
            column-gap: 40px;
        }

        .blog-card .card-meta-wrapper {
            gap: 8px;
        }

        .blog-card .card-meta-wrapper ion-icon {
            color: var(--french-bistre);
        }

        .blog .btn {
            margin-block-start: 80px;
            margin-inline: auto;
        }
    </style>
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

    <!-- 
        - #BLOG
      -->

    <div class="container">
        <div class="row">
            <section class="section blog " aria-labelledby="blog-label">
                <div class="container">

                    <h2 class="h2 section-title text-center" id="blog-label">Blog & News</h2>

                    <p class="section-text text-center">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin molestie ligula dignissim.
                    </p>





                    <div>

                        <?php
                        include "connection/config.php";

                        $post_id = $_GET['id'];

                        $sql = "SELECT `id`, `title`, `description`, `image`, `location`, 
                        `status`, `event_date`, `event_type`, `date_created` FROM `review`
                        WHERE id = {$post_id}";

                        $result = mysqli_query($connection, $sql) or die("Query Failed.");
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <div class="blog-card">

                                    <figure class="card-banner img-holder" style="--width: 1024; --height: 683;">
                                        <img src="admin-panel/<?php echo $row['image']; ?>" width="1024" height="683"
                                            loading="lazy" alt="Homemade Business That Now Makes Hundreds Of Millions"
                                            class="img-cover">
                                    </figure>

                                    <div class="card-content">

                                        <h3 class="h4">
                                            <a href="#" class="card-title">
                                                <?php echo $row['title']; ?>
                                            </a>
                                        </h3>

                                        <div class="card-meta">

                                            <a href="#" class="card-meta-wrapper">
                                                <ion-icon name="person-outline" aria-hidden="true"></ion-icon>

                                                <span class="span">admin</span>
                                            </a>

                                            <time class="card-meta-wrapper" datetime="2022-10-12">
                                                <ion-icon name="calendar-clear-outline" aria-hidden="true"></ion-icon>

                                                <span class="span">
                                                    <?php echo $row['event_date']; ?>
                                                </span>
                                            </time>

                                            <a href="#" class="card-meta-wrapper">
                                                <ion-icon name="folder-open-outline" aria-hidden="true"></ion-icon>

                                                <span class="span">
                                                    <?php echo $row['event_type']; ?>
                                                </span>
                                            </a>

                                        </div>

                                    </div>

                                    <h3 class="">
                                        <a href="#" class="card-des">
                                            <?php echo $row['description']; ?>
                                        </a>
                                    </h3>


                                </div>
                                <?php
                            }
                        } else {
                            echo "<h2>No Record Found.</h2>";
                        }

                        ?>
                    </div>


                    <!-- <a href="#" class="btn">
                        <span class="span">Read More</span>

                        <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                    </a> -->

                </div>
            </section>
        </div>
    </div>



    <!-- <div class="pagnav">
        <ul class="pagination modal-4">
            <li><a href="#" class="prev">
                    <i class="fa fa-chevron-left"></i>
                    Previous
                </a>
            </li>
            <li><a href="#">1</a></li>
            <li> <a href="#">2</a></li>
            <li> <a href="#">3</a></li>
            <li> <a href="#">4</a></li>
            <li> <a href="#" class="active">5</a></li>
            <li> <a href="#">6</a></li>
            <li> <a href="#">7</a></li>
            <li><a href="#" class="next"> Next
                    <i class="fa fa-chevron-right"></i>
                </a></li>
        </ul><br>
    </div> -->
    <!-- <div id="pagnav">
       
        <ul class="pagination">
            <li class="page-item disabled">
                <span class="page-link">Previous</span>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active" aria-current="page">
                <span class="page-link">2</span>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
      
    </div> -->


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