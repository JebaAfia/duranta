<?php 
	include 'includes/connection.php';
?>
<div class="nav">
	<div class="logo">
		<a href="/duranta"><img src="media/logo.png" alt="duranta byke logo"></a>
	</div>
	<div class="nav-menu">
		<ul>
			<li><a href="/duranta">HOME</a></li>
			<li><a href="javascript:void(0)">ABOUT US</a>
				<ul>
					<li><a href="about.php">CORPORATE PROFILE</a></li>
					<li><a href="factory.php">FACTORY</a></li>
					<li><a href="quality.php">QUALITY AND<br>COMPLIANCE</a></li>
				</ul>
			</li>	
			<li>
				<a href="javascript:void(0)">PRODUCTS</a>
				<ul>
					<li>
						<a href="index.php#category">BIKES</a>
						<ul>
						<?php
							$sql = "SELECT * FROM category WHERE category_type='bike'";
							$categories = $conn->query($sql);
							while($category = $categories->fetch_assoc()) {
								$cat_id = $category['id'];
								$selected = '';
								if($cat_id == $category['id']){
								$selected = 'selected';
								}
								echo '<li><a href="'.url('pages.php?id='.$cat_id).'">'.$category['categories'].'</a></li>';
							}
						?>
						</ul>
					</li>
					<li>
						<a href="#">ACCESSORIES</a>
						<ul>
						<?php
							$sql = "SELECT * FROM category WHERE category_type='accessories'";
							$categories = $conn->query($sql);
							while($category = $categories->fetch_assoc()) {
								$cat_id = $category['id'];
								$selected = '';
								if($cat_id == $category['id']){
								$selected = 'selected';
								}
								echo '<li><a href="'.url('pages.php?id='.$cat_id).'">'.$category['categories'].'</a></li>';
							}
						?>
						</ul>
					</li>
				</ul>
			</li>
			<li><a href="store.php">FLAGSHIP OUTLETS</a></li>
			<li><a href="contact.php">CONTACT US</a></li>
		</ul>
	</div>
</div>