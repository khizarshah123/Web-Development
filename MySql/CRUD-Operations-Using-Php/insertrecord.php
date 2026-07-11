
<?php

$conn = mysqli_connect('localhost','root','','crud operations') or die();

if(isset($_POST['Submit']))
    {
       $email =  $_POST['email'];
       $password = $_POST['password'];

   $query = "INSERT INTO data(email,password) VALUES('$email','$password')";

   $res = mysqli_query($conn,$query);

   if($res)
    {
      header('location:index.php');
    }

    else
        {
            echo('Record not added');  
        }




    }
?>

