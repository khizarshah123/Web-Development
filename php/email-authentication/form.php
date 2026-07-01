<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-2 mb-2">
        <div class="card text-center">
            <div class="card-header">
                <h1 class="text-primary fw-bold text-uppercase">php mailer</h1>
            </div>

            <div class="card-body">
                <form action="mailer.php" method="post">

                    <div class="mb-3">
                    Sender Name
                    <input type="text" name="sendername" class="form-control " placeholder="Enter name">
                    </div>

                    <div class="mb-3"> 
                    Sender Email
                    <input type="email" name="senderemail" class="form-control" placeholder="Enter email">
                    </div>

                   <div class="mb-3"> 
                    Reciver Email
                    <input type="email" name="reciveremail" class="form-control" placeholder="Enter email">
                   </div>

                    <div class="mb-3"> 
                    Reciver name
                    <input type="text" name="recivername" class="form-control"  placeholder="Enter name">
                    </div>

                    <div class="mb-3"> 
                    Subject
                    <input type="text" name="subject" class="form-control"  placeholder="Enter subject">
                    </div>

                    <div class="mb-3">
                    Message
                    <textarea name="message" class="form-control"  placeholder="Enter msg"></textarea>
                     </div>

            </div>
            <div class="card-footer">
                <button type="submit" name="submitted" class="btn btn-outline-danger">Submit</button>
            </div>
            </form>
        </div>
    </div>
</body>

</html>