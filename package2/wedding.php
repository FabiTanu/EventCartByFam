<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Birthday</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

  <link rel="stylesheet" href="../css/wedding.css">
  <link rel="stylesheet" href="../css/style3.css">
</head>

<body>
  <!--navbar-->
  <?php include '../connection/nav.php'; ?>




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
              <a href="#Order" class="book_btn">Get a book</a>
              <i class="fa-solid fa-angle-right"></i>
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


  <!------packages----->
  <div class="title">
    <h1><span>P</span>ackages</h1>
  </div>
  <div class="container" id="container">
    <div class="row">
      <div class="col-4">
        <div class="package">
          <h2>Basic Package</h2>
          <p>Price: $299.99</p>
          <button><a href="basic.php" style="color: azure;"> See Details </a></button>
        </div>
      </div>
      <div class="col-4">
        <div class="package">
          <h2>Premium Package</h2>
          <p>Price: $599.99</p>
          <button><a href="premium.php" style="color: azure;"> See Details </a></button>
        </div>
      </div>
      <div class="col-4">
        <div class="package">
          <h2>Deluxe Package</h2>
          <p>Price: $999.99</p>
          <a href="deluxe.php"><button style="color: azure;">See Details</button></a>
        </div>
      </div>
    </div>
  </div>
  </div>

  <!------------------------services-------------------->
  <section class="service" id="service">
    <div class="title">
      <h1><span>S</span>ervice</h1>
    </div>
    <div class="services-row">
      <div class="services-col">
        <i class="fas fa-book-open"></i>
        <h2>Invitation</h2>
        <p>Lorem ipsum dolor sit amet, at mei dolore tritani repudiandae.</p>
      </div>
      <div class="services-col">
        <i class="fas fa-camera"></i>
        <h2>Photography & Video</h2>
        <p>Lorem ipsum dolor sit amet, at mei dolore tritani repudiandae.</p>
      </div>
      <div class="services-col">
        <i class="fas fa-brush"></i>
        <h2>Beauty & Makeup</h2>
        <p>Lorem ipsum dolor sit amet, at mei dolore tritani repudiandae.</p>
      </div>
      <div class="services-col">
        <i class="fas fa-birthday-cake"></i>
        <h2>Wedding cake</h2>
        <p>Lorem ipsum dolor sit amet, at mei dolore tritani repudiandae.</p>
      </div>
      <div class="services-col">
        <i class="fas fa-music"></i>
        <h2>music band</h2>
        <p>Lorem ipsum dolor sit amet, at mei dolore tritani repudiandae.</p>
      </div>
      <div class="services-col">
        <i class="fas fa-utensils"></i>
        <h2>Catering</h2>
        <p>Lorem ipsum dolor sit amet, at mei dolore tritani repudiandae.</p>
      </div>
    </div>
  </section>

  <!------------------E-invitation------------------>
  <section class="invite" id="invite">
    <div class="title">
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
      <div class="title">
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
        <div class="title">
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
  <footer class="footer " style="background-color: rgb(236, 68, 90);">
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
  <!-- </section> -->


  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


  <!-- Make sure to include Bootstrap JS at the end of the body -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="script.js"></script>
</body>

</html>