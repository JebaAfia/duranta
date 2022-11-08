<?php
    include '../header.php';  

$sql1 = "SELECT * FROM category WHERE id=".$_GET['deleted'];
$result = $conn->query($sql1);

$row = $result->fetch_assoc();
print_r($row);

$sql = "DELETE FROM category WHERE id=".$_GET['deleted'];

    if ($conn->query($sql) === TRUE) {
        if (file_exists('../media/front-image/'.$row['image'])) {
        unlink('../media/front-image/'.$row['image']);
        } 
        header("Location: http://localhost/duranta/admin/product_categories.php?deleted=true");

    } else {
    echo "Error deleting record: " . $conn->error;
    }

$conn->close();
?>