<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding Demo</title>

    <!-- bootstrap libraries -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <!-- extarnal css -->
    <link rel="stylesheet" href="../css/wedding.css">


    <style>
        :root {

            /**colors*/
            --homecolor1: rgb(77, 35, 30);
            --homecolor2: rgb(225, 135, 125);
            --homecolor3: rgb(170, 112, 105);
            --white: #fff;


        }
    </style>
</head>

<body>

    <?php
    include '..\connection\config.php';


    $query = "SELECT * FROM wedding_service";
    $result = mysqli_query($connection, $query);
    ?>

    <!--navbar-->
    <?php
    include "../connection/navuser.php";
    ?>




    <!------ vennu -------->
    <section class="venu" style="margin-top: 10rem;">

        <?php
        /* Calculate Offset Code */
        $limit = 6;
        $birth = "Birthday";
        $sql = "SELECT `id`, `venue_name`, `place`, `category`, `image`, `location` FROM `venue` WHERE category='Birthday' ORDER BY id DESC LIMIT 3 ";

        $result = mysqli_query($connection, $sql) or die("Query Failed. : Recent Post");
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {

                ?>

                <div class="vimg vfimg">
                    <img src="../admin-panel/<?php echo $row['image']; ?>" alt="">
                    <div>
                        <h1>
                            <?php echo $row['venue_name']; ?>
                        </h1>
                        <a href="<?php echo $row['location']; ?>">
                            <button>More Info</button></a>
                        <!-- <a href="https://grandsylhet.com/"><button class="btn">More Info</button></a> -->
                    </div>
                </div>
                <!-- <div class="vimg vsimg">
                    <img src="../image/khans.jpg" alt="">
                    <h1>Khan's Palace</h1>
                    <a href="https://kpchbd.com/"><button>More Info</button></a>
                </div>
                <div class="vimg vtimg">
                    <img src="../image/kushiara.jpg" alt="">
                    <h1>Kushiara</h1>
                    <a href="https://www.facebook.com/kushiara.ich/"><button>More Info</button></a>
                </div> -->
            <?php }
        } ?>
    </section>




    <!--  #FOOTER-->
    <!--  #FOOTER-->
    <?php include "../connection/footer.php"; ?>

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