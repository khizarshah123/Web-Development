 <?php

$conn =  mysqli_connect('localhost','root','','crud operations') or die();

if(isset($_POST['updatebtn']))
    {
    
        $id = $_POST['id'];
        $email = $_POST['email'];
        $password = $_POST['password'];

            $query = "UPDATE data SET email ='$email' , password='$password' WHERE id ='$id' ";

       $res = mysqli_query($conn,$query);


   if($res)
    {
      header('location:index.php');
    }

    else
        {
             echo('Record not Updated');
        }

    }
    

?> 