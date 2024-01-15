<?php
include 'config/dbconn.php';

$insert = "select * from gallery";
$result = mysqli_query($connection, $insert);

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Gallery Details</title>
    <link rel="stylesheet" type="text/css"
        href="https://cdn.materialdesignicons.com/2.1.19/css/materialdesignicons.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="assests/css/blogs.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.8/css/dataTables.bootstrap4.min.css">

    <link rel="stylesheet" href=" https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">

</head>


<body>

    <?php
    include("includes/header.php");
    include("includes/sidebar.php");
    include("includes/topbar.php");

    ?>



    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <h2 style="margin-top: 1.5rem;">Gallery Details</h2>
                    </div><!-- /.col -->

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <a class="btn btn-md btn-success" style="font-size: 12px;" href="photo_add.php"><i
                                        class="mdi mdi-account-plus mr-2"></i> Add New Info.
                                </a>
                            </div>

                            <div class="card-body">
                                <table id="example" class="table table-bordered table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Title</th>
                                            <th>Image</th>
                                            <th>Category</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <?php while ($row = mysqli_fetch_assoc($result)) { ?>

                                                <td>
                                                    <?php echo $row['id'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['name'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['title'] ?>
                                                </td>
                                                <td>
                                                    <img src="<?php echo $row['image']; ?>" height="100">
                                                    <!-- <?php echo $row['image'] ?> -->
                                                </td>
                                                <td>
                                                    <?php echo $row['category'] ?>
                                                </td>



                                                <td>
                                                    <a href="photo_update.php?id=<?php echo $row['id'] ?>"
                                                        class="btn btn-info btn-sm active"><i
                                                            class="mdi mdi-account-edit"></i></a>

                                                    <a href="photo_delete.php?id=<?php echo $row['id'] ?>"
                                                        class="btn btn-danger btn-sm active"><i
                                                            onclick="return checkdelete()" class="mdi mdi-delete"></i></a>

                                                </td>



                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.8/js/dataTables.bootstrap4.min.js"></script>
    <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>


    <script>

        new DataTable('#example');

    </script>


    <script>

        function checkdelete() {
            return confirm('Are you sure you want to delete this record?');
        }




    </script>




    <?php
    include("includes/footer.php");
    ?>

</body>

</html>