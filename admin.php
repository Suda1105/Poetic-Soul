<?php
    include_once "db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body{
            text-align: center;
            padding-top: 10%;
        }
    </style>
</head>
<body>
    <div class="container">
        <button class="btn btn-danger btn-lg"><a href="insert.html" style="color: white;">Insert</a></button>
        <br><br>
        <!-- <button class="btn btn-danger btn-lg"><a href="delete.php" style="color: white;">Delete</a></button> -->
        <a href="#ids" class = "btn btn-lg btn-danger" data-toggle='collapse'>Delete</a>
        <br><br>
        <div id="ids" class="collapse">
            <form action="delete.php" method="post">
                <label for="id">Enter the id of poem to be deleted:</label>
                <input type="text" name="id" id="id" required>
                <br><br>
                <input type="submit" name="delete_poem" value = "Delete">
            </form>
        </div>
        <br><br>
        <button class="btn btn-danger btn-lg"><a href="retrieve_hindi.php" style="color: white;">Hindi Poems</a></button>
        <button class="btn btn-danger btn-lg"><a href="retrieve_marathi.php" style="color: white;">Marathi Poems</a></button>
    </div>
</body>
</html>