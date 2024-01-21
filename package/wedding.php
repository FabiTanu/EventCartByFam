<?php
include '..\connection\config.php'; 


$query = "SELECT * FROM wedding_service";
$result = mysqli_query($connection, $query);
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="../css/service.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="../css/wed.css">
    
</head>

<body>


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
                        <i class='bx bxs-chevron-down htmlcss-arrow arrow  '></i>
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
                    <li><a href="contact.php">Contact Us</a></li>

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



    
    <section class="fline">
        <div class="intro">
             <h1>EventKart</h1>
             <h3>Wedding Planners & Event Organizers!</h3>
        </div>
     </section>
     <section class="about">
         <div class="imggg">
             <div class="imgg fimg"><img src="../image/wed1.jpeg" alt=""></div>
             <div class="imgg simg"><img src="../image/wed2..jpeg" alt=""></div>
             <div class="imgg timg"><img src="../image/wed4.avif" alt=""></div>
         </div>
         <div class="aboutPlanner">
                 <h1>EventKart-</h1>
                   <h2 style="color: rgb(77, 35, 30);"> A WEDDING PLANNERS</h2>
                 <p>Embark on your journey of forever with EventKart – where dreams unfold into cherished memories. From intimate vows to grand celebrations, we specialize in turning your love story into an enchanting event. Trust us to design an extraordinary day that mirrors your unique bond. Your love, our expertise – let's make your wedding a celebration as special as the love you share."</p>
         </div>
     </section>



       <!------------------------services-------------------->
<section class="service">
  <div class="container-fluid custom-container">
    <div class="row">
      <div class="col-lg-12">
        
        <div class="title">
        <!-- <h2 class="h2 text-uppercase text-center mb-4" style="margin-top:15rem">Our<span>Birthday</span>Package</h2> -->
        <h1 style="color:black;">Our<span>Wedding</span>Package</h1>
      
    </div>

        <?php while ($row = mysqli_fetch_assoc($result)): ?>
          <div class="pricing" data-package-id="<?php echo $row['id']; ?>">
            <ul class="list-group list-unstyled">
              <li class="list-group-item text-center text-uppercase"><?php echo $row['service_type']?></li>
              <li><img src="../admin-panel/<?php echo $row['image']?>" class="img-fluid package-image" alt=""></li>
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
              <li class="list-group-item font-weight-bold">Price: $ <?php echo $row['price']?>
              </li>
              <li class="list-group-item font-weight-bold">
                <a href="wedding_package_details.php?id=<?php echo $row['id']?>" class="btn btn-custom">View Details</a>
              </li>
            </ul>
          </div>
        <?php endwhile; ?>
      </div><!-- end of col-lg-12 -->
    </div><!-- end of row -->
  </div><!-- end of container-fluid -->

</section>


     <section class="venu"style="margin-top: 10rem;">   
           
             <div class="vimg vfimg">
                 <img src="../image/GrandSylhet.jpg" alt="">
                 <div>
                     <h1>Grand Sylhet</h1>
                     <a href="https://grandsylhet.com/"><button>More Info</button></a>
                     <!-- <a href="https://grandsylhet.com/"><button class="btn">More Info</button></a> -->
                 </div>
             </div>
             <div class="vimg vsimg">
                 <img src="../image/khans.jpg" alt="">
                 <h1>Khan's Palace</h1>
                 <a href="https://kpchbd.com/"><button>More Info</button></a>
             </div>
             <div class="vimg vtimg">
                 <img src="../image/kushiara.jpg" alt="">
                 <h1>Kushiara</h1>
                     <a href="https://www.facebook.com/kushiara.ich/"><button>More Info</button></a>
             </div>
     </section>
     <section class="order">
         <div>
             <img src="../image/table..jpeg" alt="">
         </div>
         <div>
             <form action="">
                <h1 style="text-align: center; color:rgb(77, 35, 30);">Order</h1>
                 <input type="text" placeholder="Your Name">
                 <input type="email" placeholder="Your Email">
                 <input type="number" placeholder="Your Number">
                 <textarea name="text" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
                 <button class="btn">Order</button>
             </form>
         </div>
     </section>


   







    <footer class="footer ">
        <div class="container">

            <div class="section footer-top">

                <div class="footer-brand">

                    <a href="#" style="color:#fff;
                    font-size: 3rem;">EventKart</a>

                    <p class="footer-text">
                        Thank you for exploring our wedding packages! We appreciate your interest in making your special day extraordinary with us. Should you have any questions or wish to discuss further details, feel free to reach out. We look forward to the possibility of being part of your joyous celebration!
                    </p>

                    

                </div>

                <ul class="footer-list">
                    <li><p class="footer-list-title">Explore Us</p></li>
                    <li><a href="#" class="footer-link">About Us</a></li>
                    <li><a href="#" class="footer-link">Collection</a></li>
                    <li><a href="#" class="footer-link">Features</a></li>
                    <li><a href="#" class="footer-link">Blog & News</a></li>
                </ul>

                <ul class="footer-list">
                    <li><p class="footer-list-title">Support</p></li>
                    <li><a href="#" class="footer-link">Account</a></li>
                    <li><a href="#" class="footer-link">Feedback</a></li>
                    <li><a href="#" class="footer-link">Support Center</a></li>
                    <li><a href="#" class="footer-link">Our Stores</a></li>    
                </ul>

                <div class="footer-list">

                    <p class="footer-list-title">Get in Touch</p>

                    <p class="footer-text">
                        Question or feedback?
                        We’d love to hear from you
                    </p>

                    <button>Contact Us</button>

                </div>

            </div>
            <hr>
            <div  class="sociallist">
                <ul class="social-list">

                        
                    <a href="#" class="social-link">
                        <ion-icon name="logo-facebook"></ion-icon>
                    </a>
                
                    <a href="#" class="social-link">
                        <ion-icon name="logo-twitter"></ion-icon>
                    </a>
                
                    <a href="#" class="social-link">
                        <ion-icon name="logo-instagram"></ion-icon>
                    </a>
                
                    <a href="#" class="social-link">
                        <ion-icon name="logo-youtube"></ion-icon>
                    </a>
                

            </ul>
            </div>
            <hr>

            <div class="footer-bottom">

                <p class="copyright">
                    Creat by FAM
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