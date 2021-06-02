<?php
    include "db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poems</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/retrieve.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<h2>हिंदी कविता</h2>
<div class="container mt-5 poems" id="parent">
    
    <?php 
        $sql = "SELECT title, content, genre FROM poems";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            $cnt = 1;
            while($row = mysqli_fetch_assoc($result)) {
                if($row["genre"]=="hindi"){ ?>
                    <script>
                        var text1 = <?php echo json_encode($row['title']) ?>;
                        var text2 = <?php echo json_encode($row['content']) ?>;
                        $("#parent").append("<a href='#poem"+<?php echo $cnt?> + "'class='btn btn-danger' data-toggle='collapse'>"+ text1 +"</a>");
                        $("#parent").append("<div id='poem"+<?php echo $cnt?> + "'class='content collapse'><h6>"+ text2 +"</h6></div>");
                        $("#parent").append("<br><hr><br>");
                    </script>
                <?php $cnt++;}
            } 
        } ?>
    </div>
</body>
</html>