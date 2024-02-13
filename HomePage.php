<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <!-- external css -->

    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/indexpage.css">
    <link rel="stylesheet" href="css/blog.css">
    <link rel="stylesheet" href="css/footer.css">

    <style>
        :root {

            /**colors*/
            --homecolor1: rgb(150, 81, 81);
            --homecolor2: rgb(150, 81, 81);
            --homecolor3: rgb(150, 81, 81);
            --white: #fff;


        }

        .blog-card {
            /* border: 2px solid black; */
            /* border-radius: 20%; */
            border-top-left-radius: 50px;
            border-top-right-radius: 50px;
            background-color: white;
        }

        .card-banner {
            width: 550px;
            height: 300px;
            border-top-left-radius: 50px;
            border-top-right-radius: 50px;
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
                    <li><a href="HomePage.php">Home</a></li>
                    <li>
                        <a href="#">About</a>
                        <i class='bx bxs-chevron-down htmlcss-arrow arrow  '></i>
                        <ul class="htmlCss-sub-menu sub-menu">
                            <li><a href="section/about.php">About Us</a></li>
                            <li><a href="section/partners.php">Preferred Partners</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Services</a>
                        <i class='bx bxs-chevron-down js-arrow arrow '></i>
                        <ul class="js-sub-menu sub-menu">
                            <li><a href="package/wedding.php">Wedding</a></li>
                            <li><a href="package/corporate.php">Corporate Events</a></li>
                            <li><a href="package/birthday.php">Birthday</a></li>
                            <li><a href="#">Social Activities</a></li>
                        </ul>
                    </li>
                    <li><a href="section/gallery.php">Gallery</a></li>
                    <li><a href="review.php">Review</a></li>
                    <li>
                        <a href="#">Profile</a>
                        <i class='bx bxs-chevron-down js-arrow arrow '></i>
                        <ul class="js-sub-menu sub-menu">
                            <li><a href="admin-panel/index.php">Admin</a></li>
                            <li><a href="#">Logout</a></li>
                            <li><a href="birthday.php">Setting</a></li>
                            <li><a href="section/about.php">About Us</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
            <div class="user-box">
                <i class="fa-solid fa-circle-user" onclick="toggleMenu()"></i>

                <div class="sub-menu-wrap" id="subMenu">
                    <div class="sub-menu">
                        <div class="user-info">
                            <img src="image/review_1.png" alt="user">
                            <h3>James Aldrino</h3>
                        </div>
                        <hr>

                        <a href="#" class="sub-menu-link">
                            <img src="image/profile.png" alt="profile">
                            <p>Edit Profile</p>
                            <span>></span>
                        </a>
                        <a href="#" class="sub-menu-link">
                            <img src="image/setting.png" alt="setting">
                            <p>Setting & Privacy</p>
                            <span>></span>
                        </a>
                        <a href="#" class="sub-menu-link">
                            <img src="image/help.png" alt="help">
                            <p>Help & Support</p>
                            <span>></span>
                        </a>
                        <a href="logout.php" class="sub-menu-link">
                            <img src="image/logout.png" alt="logout">
                            <p>Logout</p>
                            <span>></span>
                        </a>
                    </div>

                </div>
            </div>
            <!-- <div class="search-box">
            <i class='bx bx-search'></i>

            <div class="input-box">
                <input type="text" placeholder="Search...">
            </div>
        </div> -->
        </div>
    </nav>



    <!-- intro -->
    <section class="section intro" aria-label="home">
        <div class="container">

            <div class="intro-content">

                <h1 class="h1 intro-title">
                    CAPTURE HAPPY MOMENTS WITH US
                    <span class="span">EVENT <br> PLANNER</span>
                </h1>

                <p class="section-text">
                    Your special day is one of the most singificant milestones in your life, and we understand the
                    importance of making it cetraordinary. Our mission is to alleviate the stress of plannung, allowing
                    you to savor every moment of your special day.
                </p>

                <a href="user/login.php" class="btn">
                    <span class="span">Join Now</span>
                </a>

            </div>

            <div class="wrapper">
                <div class="intro-banner-1 img-holder" style="--width: 400; --height: 550;">
                    <img src="image/bi.jpg" width="400" height="550" alt="view of assortment of decor for interior shop"
                        class="img-cover">
                </div>

                <div class="intro-banner-2 img-holder" style="--width: 500; --height: 850;">
                    <img src="image/wi.jpg" width="500" height="850" alt="ceramic craft ware" class="img-cover">
                </div>

            </div>

        </div>
    </section>

    <!-- About -->


    <section class="section about" aria-label="about">
        <div class="container">
            <div class="wrapper">
                <figure class="about-banner about-banner-1 img-holder">
                    <img src="image/cpi.jpg" alt="picture coming soon" class="img-cover">
                </figure>
                <h2 class="h2 section-title">Make easy you event</h2>
            </div>
            <figure class="about-banner about-banner-2 img-holder">
                <img src="image/bi.webp" alt="picture coming soon" class="img-cover">
            </figure>
            <div class="about-content">

                <h3 class="h2 section-title">Event planning is Our Passion</h3>

                <p class="section-text">
                    Simplifies planning for weddings, birthdays, corporate, and parties.
                </p>

                <a href="#" class="btn">
                    <span class="span">Read More</span>
                </a>

                <figure class="about-banner about-banner-3 img-holder">
                    <img src="image/vi.jpg" alt="picture coming soon" class="img-cover">
                </figure>

            </div>

        </div>
    </section>


    <!-- collection -->

    <section class="section collection text-center" aria-labelledby="collection-label">
        <div class="container-fluid">

            <h2 class="h2 section-title" id="collection-label">
                Event Collection
            </h2>
            <br>
            <ul class="grid-list">

                <li>
                    <div class="collection-card">
                        <figure class="card-banner img-holder">
                            <img src="image/bi2.jpg" alt="Birthday picture" class="img-cover">
                        </figure>
                        <div class="card-content">
                            <h3 class="h3 card-title">Birthday</h3>
                            <a href="#" class="btn">
                                <span class="span">View Gallery</span>
                            </a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="collection-card">
                        <figure class="card-banner img-holder">
                            <img src="image/cpi2.jpg" alt="Corporate picture" class="img-cover">
                        </figure>
                        <div class="card-content">
                            <h3 class="h3 card-title">Corporate</h3>
                            <a href="#" class="btn">
                                <span class="span">View Gallery</span>
                            </a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="collection-card">
                        <figure class="card-banner img-holder">
                            <img src="image/wi3.jpg" width="500" height="550" loading="lazy" alt="Wedding picture"
                                class="img-cover">
                        </figure>
                        <div class="card-content">
                            <h3 class="h3 card-title">Wedding</h3>
                            <a href="#" class="btn">
                                <span class="span">View Gallery</span>
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>


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


                    <ul class="grid-list">
                        <?php
                        include "connection/config.php";

                        /* Calculate Offset Code */
                        $limit = 4;

                        $sql = "SELECT `id`, `title`, `description`, `image`, `location`, 
                                                    `status`, `event_date`, `event_type`, `date_created` FROM `review`
                                                    ORDER BY id DESC LIMIT {$limit}";

                        // $sql = "SELECT post.post_id, post.title, post.post_date,
                        //     category.category_name,post.category,post.post_img FROM post
                        //     LEFT JOIN category ON post.category = category.category_id
                        //     ORDER BY post.post_id DESC LIMIT {$limit}";
                        
                        $result = mysqli_query($connection, $sql) or die("Query Failed. : Recent Post");
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <li>
                                    <div class="blog-card">


                                        <figure class="card-banner img-holder">
                                            <img src="admin-panel/<?php echo $row['image']; ?>" width="1024" height="668"
                                                loading="lazy"
                                                alt="The Detail Process Of Decorating The Clay Vase At Pottery Studio"
                                                class="img-cover">
                                        </figure>

                                        <div class="card-content">

                                            <h3 class="h4">

                                                <a href="single.php?id=<?php echo $row['id']; ?>" class="card-title">
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

                                    </div>
                                </li>
                            <?php }
                        } ?>

                    </ul>

                    <a href="section/blog_post.php" class="btn">
                        <span class="span">Read More</span>

                        <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                    </a>

                </div>
            </section>
        </div>
    </div>
    <!--  #FOOTER-->
    <!--  #FOOTER-->
    <?php include "connection/footer.php"; ?>


    <!-- 
    - ionicon link
  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


    <!-- Make sure to include Bootstrap JS at the end of the body -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


    <script>
        let subMenu = document.getElementById("subMenu");

        function toggleMenu() {
            subMenu.classList.toggle("open-menu");
        }
    </script>

    <script src="script.js"></script>




</body>

</html>