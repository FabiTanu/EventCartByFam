<?php
include '../connection/config.php';
session_start();
$loginEmail = $_POST['loginEmail'];
$loginpass = $_POST['loginpass'];

$sql = "SELECT * FROM `users` WHERE user_email='$loginEmail' and pass='$loginpass' ";
$result = mysqli_query($connection, $sql);

if (mysqli_num_rows($result)) {

    $_SESSION['loginEmail'] = $loginEmail;
    echo "<script>location.href='../HomePage.php'</script>";
} else {

    echo "<script> alert('Email and Password id  not matching')</script>";
    echo "<script> location.href = 'login.php'</script>";

}

?>