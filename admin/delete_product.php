<?php
    include '../header.php';  
    check_login(); 
    
$sql = "DELETE FROM products WHERE id=".$_GET['post_id'];

    if ($conn->query($sql) === TRUE) {
        if (file_exists('../media/products/'.$row['image'])) {
        unlink('../media/products/'.$row['image']);
        } 
        redirect('product_page.php?deleted=true');

    } else {
    echo "Error deleting record: " . $conn->error;
    }

$conn->close();
?>