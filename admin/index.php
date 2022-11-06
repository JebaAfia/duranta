<?php 
	include '../includes/connection.php';
	include '../header.php';
?>
<div class="nav">
	<div class="logo">
		<a href="../duranta"><img src="../media/logo.png" alt="duranta byke logo"></a>
	</div>
	<div class="nav-menu">
		<ul>
            <li>
                <a href="#">CATEGORY</a>
                <ul>
                    <li><a href="bike_categories.php">ALL CATEGORIES</a></li>
                    <li><a href="insert_bike_categories.php">INSERT CATEGORY</a></li>
                    <li><a href="delete_categories.php">DELETE CATEGORY</a></li>
                </ul>
            </li>

            <li>
                <a href="#">BIKE</a>
                <ul>
                    <li><a href="bike_page.php">ALL BIKES</a></li>
                    <li><a href="insert_bike.php">INSERT BIKE</a></li>
                    <li><a href="edit_bike.php">EDIT BIKE</a></li>
                    <li><a href="delete_bike.php">DELETE BIKE</a></li>
                </ul>
            </li>
		</ul>
	</div>
</div>