<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Activity</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Student Data Insert</h1>

        <form action="dataInsert" method="post" enctype="multipart/form-data">
            @csrf

            <label for= "name" class="control-label">Name:</label>
            <input type="text" name="name" class="form-control"> <br>

            <label for= "phone" class="control-label">Phone:</label>
            <input type="text" name="phone" class="form-control"> <br>

            <label for= "address" class="control-label">Address:</label>
            <input type="text" name="address" class="form-control"> <br>

            <label for= "age" class="control-label">Age:</label>
            <input type="number" name="age" class="form-control"> <br>

            <input type="submit" class="btn btn-primary">




        </form>
    </div>
</body>
</html>