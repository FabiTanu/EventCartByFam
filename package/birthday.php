<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>birthday</title>

    <!-- bootstrap libraries -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <!-- extranal css -->
    <link rel="stylesheet" href="../css/birthday.css">
    <!-- <link rel="stylesheet" href="../css/service.css"> -->

    <style>
        :root {

            /**colors*/
            --homecolor1: #fac031;
            --homecolor2: #fac031;
            --homecolor3: #fac031;
            --white: #fff;


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
    <?php include "../connection/navuser.php"; ?>


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


                <?php



                while ($row = mysqli_fetch_assoc($result)): ?>
                    <div class="pricing1" data-package-id="<?php echo $row['id']; ?>">
                        <ul class="list-group list-unstyled">
                            <li class="list-group-item text-center text-uppercase">
                                <?php echo $row['service_type'] ?>
                            </li>
                            <li><img src="../admin-panel/<?php echo $row['image'] ?>" class="img-fluid package-image"
                                    alt=""></li>
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
                                <a href="birthday_package_details.php?id=<?php echo $row['id'] ?>"
                                    class="btn abtn-custom">View
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



    <!--  #FOOTER-->
    <?php include "../connection/footer.php"; ?>



    <!-- </section> -->

    <!-- javascript  -->
    <script src="../script.js"></script>

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