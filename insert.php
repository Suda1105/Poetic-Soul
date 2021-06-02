<?php
    include_once "db.php";
    
    if(isset($_POST['new_poem'])){
        $title = $_POST['title'];
        $content = nl2br($_POST['content']);
        
        $genre = $_POST['genre'];

        $sql = "INSERT INTO poems (title,content,genre) VALUES ('$title','$content','$genre')";
        
        if(mysqli_query($conn,$sql)){
            echo "Poem Added Successfully...";
        }
        else{
            echo mysqli_error($conn);
        }
    }
?>
    <button><a href="admin.php">Go to admin page</a></button>
