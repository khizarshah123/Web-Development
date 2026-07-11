<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">



<?php
$conn = mysqli_connect('localhost', 'root', '', 'crud operations') or die();
$query = "SELECT * FROM data";

$res = mysqli_query($conn, $query);
echo '
<form action ="formforinsert.php"  method = "post">
<button class = "btn btn-primary text-white my-2 mx-5 btn-sm" type = "submit">Insert Record</button>
</form>

<table class="table my-5 container table-hover table-striped table-bordered">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th colspan ="2" class="text-center" scope="col">Operations</th>
        </tr>
    </thead>
    <tbody>
';

while ($row = mysqli_fetch_assoc($res)) {

    echo '
    <tr>
        <th scope="row">'.$row['id'].'</th>
        <td>'.$row['email'].'</td>
        <td>'.$row['password'].'</td>
        <td><form action = "deleterecord.php" method = "post">         
         <button class = "btn btn-danger text-white btn-md" type ="submit" name = "deleteid" value ="'.$row['id'].'">
          Delete
         </button>
        </form>
        <td>
        <form action = "formforupdate.php" method = "post"> 
          <input type="hidden" name="id" value="'.$row['id'].'">
          <button class = "btn btn-success btn-md text-white " type ="submit" name="updatebtn">Update</button>
        </form>
        
        </td>
    </tr>
    ';
}

echo '
    </tbody>
</table>
';

?>