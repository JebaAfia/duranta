<?php
include '../header.php';

// sql -> exe -> read
    $cat_query = "SELECT * FROM category WHERE `id` > 5";
    $cat_data = $conn->query($cat_query);
    print_r($cat_data);

// sql -> exe -> update

// sql -> exe -> delete


?>