<?php
session_start();

$connect = mysqli_connect('localhost', 'root', '', 'regristrationformdata') or die();


if (isset($_POST['submit'])) {
    $email =  $_POST['email'];
    $pass =   $_POST['password'];

    if (empty($email)  || empty($pass)) {
        echo ('Fields are empty');
    } else {
        $query = "SELECT * FROM formdata WHERE email = '$email' AND pass = '$pass'";

        $result = mysqli_query($connect, $query);


        if (mysqli_num_rows($result) > 0) {
            $_SESSION['islogin'] = true;
            header('location:admindashboard.php');
        } else {
            echo ('Data not match');
        }
    }
}
