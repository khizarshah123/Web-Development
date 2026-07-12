 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regristration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>

  <form action="RegristrationBackend.php" method="post">
    <div class="container mt-5 mb-2 w-50">
        <div class="card text-center">
            <div class="card-header">
                <h1 class="text-primary fw-bold text-uppercase">Regristration</h1>
            </div>

            <div class="card-body">
                <form action="datatomysql.php" method="post">

                    <div class="mb-3">
                   <label> Name
                    <input type="text" name="name" class="form-control " placeholder="Enter name">
                    </label>
                    </div>

                    <div class="mb-3"> 
                     <label>Email
                    <input type="email" name="email" class="form-control" placeholder="Enter email">
                    </label>
                    </div>

                 
                    <div class="mb-3"> 
                   <label>Password
                    <input type="password" name="password" class="form-control"  placeholder="Enter Password">
                    </label>
                    </div>

            </div>
            <div class="card-footer">
                <button type="submit" name="submit" class="btn btn-outline-danger btn-lg">Submit</button>
            </div>
            </form>
        </div>
    </div>
</form>
</body>

</html>