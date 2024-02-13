<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Birthday Demo</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

  <link rel="stylesheet" href="../css/birth.css">
  <link rel="stylesheet" href="../css/style3.css">
  <link rel="stylesheet" href="../css/service.css">
  <!-- <link rel="stylesheet" href="../css/nav.css"> -->

  <style>
    :root {

      /**colors*/
      --homecolor1: #fac031;
      --homecolor2: #fac031;
      --homecolor3: #fac031;
      --white: #fff;


    }

    .package-image {
      width: 100%;
      /* Ensure images are responsive */
      height: 200px;
      /* Set a fixed height for all images */
      object-fit: cover;
      /* Maintain aspect ratio while covering the container */
    }

    .pricing1 {
      width: 18%;
      min-height: 200px;
      float: left;
      background: gray;
      margin-left: 12%;
      margin-top: 5rem;

    }
  </style>

</head>

<body>
  <?php
  include '..\connection\config.php';


  $query = "SELECT * FROM birthday_service";
  $result = mysqli_query($connection, $query);
  ?>
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
              <li><a href="about.php">About Us</a></li>
              <li><a href="package/section/partners.php">Preferred Partners</a></li>
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
          <li><a href="package/section/gallery.php">Gallery</a></li>
          <li><a href="review.php">Review</a></li>
          <li>
            <a href="#">Profile</a>
            <i class='bx bxs-chevron-down js-arrow arrow '></i>
            <ul class="js-sub-menu sub-menu">
              <li><a href="admin-panel/index.php">Admin</a></li>
              <li><a href="#">Logout</a></li>
              <li><a href="birthday.php">Setting</a></li>
              <li><a href="package/section/about.php">About Us</a></li>
            </ul>
          </li>

        </ul>
      </div>
      <div class="user-box">
        <i class="fa-solid fa-circle-user" onclick="toggleMenu()"></i>

        <div class="sub-menu-wrap" id="subMenu">
          <div class="sub-menu">
            <div class="user-info">
              <img src="../image/review_1.png" alt="user">
              <h3>James Aldrino</h3>
            </div>
            <hr>

            <a href="#" class="sub-menu-link">
              <img src="../image/profile.png" alt="profile">
              <p>Edit Profile</p>
              <span>></span>
            </a>
            <a href="#" class="sub-menu-link">
              <img src="../image/setting.png" alt="setting">
              <p>Setting & Privacy</p>
              <span>></span>
            </a>
            <a href="#" class="sub-menu-link">
              <img src="../image/help.png" alt="help">
              <p>Help & Support</p>
              <span>></span>
            </a>
            <a href="#" class="sub-menu-link">
              <img src="../image/logout.png" alt="logout">
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


  <!--main home-->


  <div class="main">
    <div class="container">

      <div class="row">

        <div class="col-lg-8 col-sm-12 ">
          <div class="men_text">
            <h1>Where Yours<span>Dreams</span><br>Take Off</h1>
          </div>
          <div class="main_text">
            <p>
              "Crafting Unforgettable Moments: Where Your Dreams Become Experiences.
              Welcome to EVENTCART, where events transcend the ordinary. Our passion lies in sculpting
              moments that transcend the expected, weaving dreams into tangible, awe-inspiring realities.
              From intimate affairs to grand celebrations, we blend innovation and precision, creating
              experiences that mesmerize and memories that linger.
              Experience the extraordinary, crafted exclusively for you."
            </p>
            <div class="main_btn">
              <a href="#Order" class="book_btn">Get a book<i class="fa-solid fa-angle-right"></i></a>

            </div>
          </div>
        </div>

        <div class="col-lg-4 col-sm-12 ">
          <div class="main_image">
            <img src="../image/birth1.jpg" alt="Event Image">
          </div>
        </div>
      </div>
    </div>

  </div>


  <!------------------------services-------------------->
  <div class="container-fluid custom-container">
    <div class="row">
      <div class="col-lg-12">
        <div class="title1">
          <!-- <h2 class="h2 text-uppercase text-center mb-4" style="margin-top:15rem">Our<span>Birthday</span>Package</h2> -->
          <h1 style="color:black; margin-top:12rem;">Our<span>Birthday</span>Package</h1>

        </div>


        <?php while ($row = mysqli_fetch_assoc($result)): ?>
          <div class="pricing1" data-package-id="<?php echo $row['id']; ?>">
            <ul class="list-group list-unstyled">
              <li class="list-group-item text-center text-uppercase">
                <?php echo $row['service_type'] ?>
              </li>
              <li><img src="../admin-panel/<?php echo $row['image'] ?>" class="img-fluid package-image" alt=""></li>
              <li class="list-group-item text-center"><b>THIS PACKAGE INCLUDES:</b></li>
              <?php
              // Fetch features for the current package
              $service_type = $row['service_type'];
              $features_query = "SELECT * FROM features_list WHERE service_type = '$service_type'";
              $features_result = mysqli_query($connection, $features_query);

              while ($feature = mysqli_fetch_assoc($features_result)) {
                echo "<li class='list-group-item'>" . $feature['title'] . "</li>";
              }
              ?>
              <li class="list-group-item font-weight-bold">Price: $
                <?php echo $row['price'] ?>
              </li>
              <li class="list-group-item font-weight-bold">
                <a href="birthday_package_details.php?id=<?php echo $row['id'] ?>" class="btn abtn-custom">View
                  Details</a>
              </li>
            </ul>
          </div>
        <?php endwhile; ?>
      </div><!-- end of col-lg-12 -->
    </div><!-- end of row -->
  </div><!-- end of container-fluid -->

  <!------------------E-invitation------------------>
  <section class="invite" id="invite">
    <div class="title1">
      <h1>Card<span>Design</span></h1>
      <p>Choose the best card Design.</p>
    </div>
    <div class="invitation-row">
      <div class="invitation-box">
        <img src="../image/birth1.jpg" alt="">
      </div>
      <div class="invitation-box">
        <img src="../image/birth1.jpg" alt="">
      </div>
      <div class="invitation-box">
        <img src="../image/birth1.jpg" alt="">
      </div>
      <div class="invitation-box">
        <img src="../image/birth1.jpg" alt="">
      </div>
      <div class="invitation-box">
        <img src="../image/birth1.jpg" alt="">
      </div>
      <div class="invitation-box">
        <img src="../image/birth1.jpg" alt="">
      </div>
    </div>
  </section>

  <!----------------------------venue Section-------------->
  <div class="container">
    <section class="venue" id="venue">
      <div class="title1">
        <h1><span>V</span>enues</h1>
      </div>
      <div class="venue-list">
        <div class="venue-box">
          <img src="../img/meatup.jpg" alt="img">
          <div class="venue-info">
            <h2>Sylhet</h2>
            <p>Meatup</p>
            <a href="https://www.facebook.com/meatuprestaurant"><button class="btn">More Info</button></a>
          </div>
        </div>
        <div class="venue-box">
          <img src="../img/Cremo.jpg" alt="img">
          <div class="venue-info">
            <h2>Sylhet</h2>
            <p>Cremo Coffee</p>
            <a href="https://www.facebook.com/CremoCoffee.bd"><button class="btn">More Info</button></a>
          </div>
        </div>
        <div class="venue-box">
          <img src="../img/bd1.jpg" alt="img">
          <div class="venue-info">
            <h2>Sylhet</h2>
            <p>Sky Dine</p>
            <a href="https://www.facebook.com/skydinesylhet/"><button class="btn">More Info</button></a>
          </div>
        </div>
        <div class="venue-box">
          <img src="../img/cclube.jpg" alt="img">
          <div class="venue-info">
            <h2>Sylhet</h2>
            <p>The Coffee Club</p>
            <a href="https://www.facebook.com/thecoffeeclubbd/"><button class="btn">More Info</button></a>
          </div>
        </div>
        <div class="venue-box">
          <img src="../img/union.jpg" alt="img">
          <div class="venue-info">
            <h2>Sylhet</h2>
            <p>Unoon</p>
            <a href="https://www.facebook.com/unoon.eidgah"><button class="btn">More Info</button></a>
          </div>
        </div>
        <div class="venue-box">
          <img src="../img/bd3.jpg" alt="img">
          <div class="venue-info">
            <h2>Sylhet</h2>
            <p>Platinum Lounge</p>
            <a href="https://www.facebook.com/PlatinumLoungeSylhet/"><button class="btn">More
                Info</button></a>
          </div>
        </div>
      </div>
    </section>

  </div>

  <!--Review-->
  <div class="container">
    <section>
      <div class="rev-section">
        <div class="title1">
          <h1><span>R</span>eviews</h1>
        </div>
        <div class="reviews">

          <div class="review">
            <div class="head-review">
              <img src="../image/review_2.png" width="250px">
            </div>
            <div class="body-review">
              <div class="name-review">Sam.B</div>
              <div class="place-review">Germany</div>
              <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half"></i>
              </div>
              <div class="desc-review">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Obcaecati
                eligendi suscipit illum officia ex eos.</div>
            </div>
          </div>
          <div class="review">
            <div class="head-review">
              <img src="../image/review_2.png" width="250px">
            </div>
            <div class="body-review">
              <div class="name-review">Rose.F</div>
              <div class="place-review">Paris</div>
              <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <div class="desc-review">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Obcaecati
                eligendi suscipit illum officia ex eos.</div>
            </div>
          </div>
          <div class="review">
            <div class="head-review">
              <img src="../image/review_2.png" width="250px">
            </div>
            <div class="body-review">
              <div class="name-review">Harry.H</div>
              <div class="place-review">New York</div>
              <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half"></i>
              </div>
              <div class="desc-review">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Obcaecati
                eligendi suscipit illum officia ex eos.</div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!--Booking-->
  <!-- 
        - #BLOG
      -->

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

  <script src="../script.js"></script>
  <!-- </section> -->


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



</body>

</html>