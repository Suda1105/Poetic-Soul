<?php
    include_once("db.php");

    if(isset($_POST['delete_poem'])){
        $id = $_POST["id"];
        $sql = "DELETE FROM poems where id = $id";
        if(mysqli_query($conn,$sql)){
             echo "Poem deleted successfully...";
        }
        else{
            echo mysqli_error($conn);
        }
    }

?>

    <button><a href="admin.php">Go to admin page</a></button>



    