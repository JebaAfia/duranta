<?php

include '../header.php';  

    $sql1 = "SELECT * FROM bikes WHERE id=".$_GET['post_id'];
    $result = $conn->query($sql1);

    $row = $result->fetch_assoc();
    print_r($row);

    $sql = "DELETE FROM bikes WHERE id=".$_GET['post_id'];
    if ($conn->query($sql) === TRUE) {
        if (file_exists('../media/bikes/'.$row['image'])) {
            unlink('../media/bikes/'.$row['image']);
        } 
        header("Location: http://localhost/duranta/admin/bike_page.php?deleted=true");
   
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    
    $conn->close();

?>