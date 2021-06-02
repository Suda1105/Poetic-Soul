<?php
    $servername = "localhost:3307";
    $username = "root";
    $password = "";
    $db = "poeticsoul";
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password,$db);
    
    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

    // $sql = "SELECT id from poems";
    // $result = mysqli_query($conn,$sql);
    // if(mysqli_num_rows($result)>0){
    //   $cnt = 1;
    //   while($row = mysqli_fetch_assoc($result)){
    //     $id = $row['id'];
    //     $sql = "UPDATE poems set poems.id=$cnt where poems.id=$id;";
    //     if(mysqli_query($conn,$sql)){
    //       echo "Updated Successfully";
    //     }
    //     else{
    //       echo mysqli_error($conn);
    //     }
    //     $cnt++;
    //   }
    // }

    // $sql = "ALTER TABLE poems MODIFY COLUMN content TEXT";

    // if(mysqli_query($conn,$sql)){
    //     echo "Column updated successfully...";
    // }
    // else{
    //     echo mysqli_error($conn);
    // }

    // $sql = "ALTER TABLE poems ADD COLUMN genre VARCHAR(10)";
    // if(mysqli_query($conn,$sql)){
    //     echo "Added genre...";
    // }
    // $sql = "INSERT INTO poems (title, content)
    // VALUES ('Second', 'This is second trial')";


?>