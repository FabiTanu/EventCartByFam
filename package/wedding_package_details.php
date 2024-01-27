<?php
include '..\connection\config.php'; 

$id = $_GET['id'];
$query = "SELECT * FROM wedding_service WHERE id = '$id'";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_assoc($result)

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Wedding Packages</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
          href="https://cdn.materialdesignicons.com/2.1.19/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/service.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <style>
        body {
            margin-top: 6%;
        }

    
        .btn.btn-sm.btn-light.active:hover {
            background: white;
        }
        .list-group-item:first-child {
            border-top-left-radius: 0rem;
            border-top-right-radius: 0rem;
        }

        .list-group-item.active{
            border-color: #00125100;
        }
    </style>
</head>
<body>



<div class="container">
    
     <div class="row">
        <div class="col-md-8 p-0" style="margin-bottom: 20px;"> <!-- border:1px solid rgba(0,0,0,.125) -->
        
            <div class="float-left bg-white">
                <h5 class="h5 text-uppercase mb-5 pt-3 pl-3 pr-3">
                    <span class="float-left text-capitalize"><?php echo $row['service_type']?></span>
                    <span class="float-right text-capitalize">Price: <?php echo $row['price']?></span>
                </h5>
                <img src="../admin-panel/<?php echo $row['image']?>" style="width:100%; max-height:500px; " alt="">

                <ul class="list-group">
                        <li class="list-group-item list-group-item-action bg-danger flex-column align-items-start active">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1 pt-2 pb-2">FUNCTIONS AND SERVICES</h5>
                            </div>
                        </li>

                        <?php
                            // Fetch features for the current package
                            $service_type = $row['service_type'];
                            $features_query = "SELECT * FROM features_list WHERE service_type = '$service_type'";
                            $features_result = mysqli_query($connection, $features_query);
                            ?>

                        <?php while ($feature = mysqli_fetch_assoc($features_result)) : ?>
                          
                                
                            <li class="list-group-item list-group-item-action flex-column align-items-start">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1"><i class="mdi mdi-check mr-3"></i><?php echo $feature['title']; ?></h5>
                                </div>
                                <p class="mb-1 ml-3 text-capitalize"><?php echo $feature['description']; ?></p>
                            </li>

                            <?php endwhile; ?>
                             
                       
                    </ul>
                </div>
               
            </div><!-- end of col-md-8 p-0 pl-3 -->

            <div class="col-md-4" style="margin-bottom: 20px;">
               
                        
               <form action=" " method="post" style="background: white;padding: 20px;">
                   
                    <h5 class="h5 text-center mb-3 m-0">Wedding Planning Starts Here</h5>
                   <div class="form-group">
                       <input type="text" class="form-control" name="user_name" placeholder="Name" id="user_name">
                   </div>

               

                   <div class="form-group">
                       <input type="number" id="user_phone" class="form-control" name="user_phone" placeholder="Phone number">
                   </div>

                   <div class="form-group">
                       <input type="email" class="form-control" name="user_email" id="user_email" placeholder="youremail@gmail.com">
                   </div>


                   <div class="form-group">
                       <select class="custom-select form-control" id="venue" name="venue">
                       <option value=" " > Select Venue</option>
                       <option value="Khan Palace"  >Khan Palace</option>
                       <option value="AmanUllah" >AmanUllah Convention Centre</option>
                       <option value="Kushiara"  >Kushiara Convention Centre</option>
                       <!-- Add more options as needed -->
                   </select>
               </div>

                  


                   <div class="form-row">
                       <div class="input-group col-md-12">
                           <input type="date" class="form-control" name="date" data-provide="datepicker" id="date"
                                  placeholder="Birthday Date">
<!-- 
                           <div class="input-group-append">
                               <span class="input-group-text" style="background: white;"><i
                                           style="font-size: 20px;color:#19b5bc;" class="mdi mdi-calendar-check"
                                           id="wedding_date" aria-hidden="true"></i></span>
                           </div> -->
                       </div>
                   </div>

                   <div class="text-center mt-3">
                       <input type="hidden" name="booking_id" value="<?php echo $row['id']?>">
                       <button type="submit" name="register" class="btn btn-success btn-sm text-uppercase font-weight-bold"
                               style="margin-top: -5px;">Book Now
                       </button>
                   </div>
               </form>
       </div>
   </div>
  

</div><!-- end of container -->



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>

<script>

$(document).ready(function () {
   $('#wedding_date').datepicker();
});
</script>
</body>
</html>


<?php 

if (isset($_POST['register'])) {
$user_name = $_POST['user_name'];
$user_phone = $_POST['user_phone'];
$user_email = $_POST['user_email'];
$venue = $_POST['venue'];
$date = $_POST['date'];

$event_type = $row['service_type'];

 // Insert data into the 'booking' table
 $query = "INSERT INTO booking (user_name, user_phone, user_email, venue, date, event_type)
 VALUES ('$user_name', '$user_phone', '$user_email', '$venue', '$date', '$event_type')";

   if (mysqli_query($connection, $query)) {
   echo "<script> location.href = 'wedding.php'</script>";
   exit;
   } else {
   echo 'Error: ' . mysqli_error($connection);
   }
}

// Close the database connection
mysqli_close($connection);





?>