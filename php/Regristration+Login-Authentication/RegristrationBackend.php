<?php
$conn =  mysqli_connect('localhost', 'root', '', 'Database_Name') or die();

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($name) || empty($email) || empty($password)) {
        echo ('Fields are empty');
    } else {
        $query = "INSERT INTO Table_Name (name,email,pass)VALUES('$name','$email','$password')";

        $res = mysqli_query($conn, $query);

        if ($res) {
            echo ('record addded');
        } else {
            echo ('not added');
        }
    }
}
