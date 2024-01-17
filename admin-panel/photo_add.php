<?php

if (isset($_POST['submit'])) {

    include 'config/dbconn.php';

    $photo_name = $_POST['Pname'];
    $photo_title = $_POST['Ptitle'];
    $photo_image = $_FILES['image'];
    $photo_category = $_POST['Pages'];
    // echo "<pre>";
    // print_r($product_image);
    // echo "</pre>";
    $image_loc = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    $img_des = "Uploadimage/" . $image_name;
    move_uploaded_file($image_loc, "Uploadimage/" . $image_name);


    //insert product
    $sql = "INSERT INTO `gallery`(`name`, `title`, `image`, `category`) 
    VALUES ('$photo_name','$photo_title','$img_des','$photo_category')";

    // mysqli_query($connection, $sql);

    // header("location:photo_gallery.php");

    if (mysqli_query($connection, $sql)) {
        header("location:photo_gallery.php");
    } else {
        echo "<p style='color:red;text-align:center;margin: 10px 0;'>Can't Insert User.</p>";
    }
}

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product-page</title>

    <!-- bootstraop cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto border border-primary mt-3">
                <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <p class="text-center fw-bold fs-3 text-warning">Gallery Photo Add:</p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Photo Name:</label>
                        <input type="text" name="Pname" class="form-control" placeholder="Enter product name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Product Title:</label>
                        <input type="text" name="Ptitle" class="form-control" placeholder="enter product price">
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Add Image:</label>
                        <input class="form-control" name="image" type="file" id="formFile">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Select Photo Category</label>
                        <select class="form-select" name="Pages">
                            <option value="0">Wedding</option>
                            <option value="1">Birthday</option>
                            <option value="2">Corporate</option>
                            <option value="3">Others</option>
                        </select>
                    </div>
                    <button name="submit" class="bg-danger fs-4 fw-bold my-3 form-control text-white">Upload</button>
                </form>
            </div>
        </div>
    </div>

    <!-- fetch data -->



    <!-- bootstraop js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>