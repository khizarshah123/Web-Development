<?php
$conn = mysqli_connect('localhost','root','','crud operations') or die();

if(isset($_POST['updatebtn']))
  {
 
$id = $_POST['id'];

$query =  "SELECT * FROM data WHERE id ='$id'";

      $res = mysqli_query($conn , $query);
      $row = mysqli_fetch_assoc($res);

     echo '
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

<form action="Updaterecord.php" method="post">
  <div class="container-fluid ">
  <input type="hidden" name="id" value="'.$row['id'].'">

    <div class="my-5">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" name="email" value="'.$row['email'].'" >

    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name="password" value="'.$row['password'].'">
    </div>

    <button type="submit" class="btn btn-primary" name = "updatebtn">Submit</button>
</form>
</div>
 
';
  }
?>
 