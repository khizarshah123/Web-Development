<?php
$conn = mysqli_connect('localhost','root','','crud operations') or die();

if(isset($_POST['deleteid']))
    {

  $deleteid = $_POST['deleteid'];

 $query = "DELETE FROM data WHERE id = '$deleteid' ";

   $res = mysqli_query($conn,$query) ;


   if($res)
    {
      header('location:index.php');
    }

    else
        {
             echo('Record not Deleted');
        }

    }

?>