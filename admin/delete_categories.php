<?php
    include '../header.php';  
    check_login(); 

$sql = "DELETE FROM category WHERE id=".$_GET['deleted'];

    if ($conn->query($sql) === TRUE) {
        if (file_exists('../media/front-image/'.$row['image'])) {
        unlink('../media/front-image/'.$row['image']);
        } 
        redirect("product_categories.php?deleted=true");
    } else {
    echo "Error deleting record: " . $conn->error;
    }
?>