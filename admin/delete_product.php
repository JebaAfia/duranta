<?php
    include '../header.php';  

$sql1 = "SELECT * FROM products WHERE id=".$_GET['post_id'];
$result = $conn->query($sql1);

$row = $result->fetch_assoc();
print_r($row);

$sql = "DELETE FROM products WHERE id=".$_GET['post_id'];

    if ($conn->query($sql) === TRUE) {
        if (file_exists('../media/products/'.$row['image'])) {
        unlink('../media/products/'.$row['image']);
        } 
        header("Location: http://localhost/duranta/admin/product_page.php?deleted=true");

    } else {
    echo "Error deleting record: " . $conn->error;
    }

$conn->close();
?>