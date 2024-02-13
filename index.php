<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="css/indexpage.css">
  <link rel="stylesheet" href="css/nav.css">
  <link rel="stylesheet" href="css/footer.css">
  <style>
    :root {

      /**colors*/
      --homecolor1: rgb(150, 81, 81);
      --homecolor2: rgb(150, 81, 81);
      --homecolor3: rgb(150, 81, 81);
      --white: #fff;


    }
  </style>

</head>

<body>
  <!--navbar-->
  <?php include "connection/nav.php"; ?>



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
    <div class="container">

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
              <a href="section/gallery.php" class="btn">
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
              <a href="section/gallery.php" class="btn">
                <span class="span">View Gallery</span>
              </a>
            </div>
          </div>
        </li>
        <li>
          <div class="collection-card">
            <figure class="card-banner img-holder">
              <img src="image/wi3.jpg" width="500" height="550" loading="lazy" alt="Wedding picture" class="img-cover">
            </figure>
            <div class="card-content">
              <h3 class="h3 card-title">Wedding</h3>
              <a href="section/gallery.php" class="btn">
                <span class="span">View Gallery</span>
              </a>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </section>
  <!--  #FOOTER-->
  <?php include "connection/footer.php"; ?>



  <!-- ----------javascript------  -->

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