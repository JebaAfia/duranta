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
						<ul name="bike_category">
						<?php
							$sql = "SELECT * FROM category;";
							$categories = $conn->query($sql);
							while($category = $categories->fetch_assoc()) {
								$cat_id = $category['id'];
								$selected = '';
								if($cat_id == $result['bike_category']){
								$selected = 'selected';
								}
								// echo '<option '.$selected.' value="'.$cat_id.'">'.$category['categories'].'</option>';
								echo '<li>'.'<a href="pages.php" '.$selected.' value="'.$cat_id.'">'.$category['categories'].'</a>'.'</li>';
							}
						?>

							<!-- <li><a href="pages.php">JUNIOR BIKES</a></li>
							<li><a href="display.php?cat=mtb_dual_suspension_bike">MTB DUAL SUSPENSION BIKES</a></li>
							<li><a href="display.php?cat=kids_bike">KIDS BIKES</a></li>
							<li><a href="display.php?cat=racing_bike">ROAD/RACING BIKES</a></li>
							<li><a href="display.php?cat=mtb_bike">MTB BIKES</a></li>
							<li><a href="display.php?cat=classic_bike">CLASSIC BIKES</a></li>
							<li><a href="display.php?cat=fat_bike">FAT BIKES</a></li>
							<li><a href="display.php?cat=bmx_bike">BMX BIKES</a></li>
							<li><a href="display.php?cat=folding_bike">FOLDING BIKES</a></li>
							<li><a href="display.php?cat=e_bike">E BIKES</a></li>
							<li><a href="display.php?cat=latest">LATEST BIKES</a></li>
							<li><a href="display.php?cat=upcoming">UPCOMMING BIKES</a></li>
							<li><a href="display.php?cat=scooty">SCOOTY</a></li>
							<li><a href="display.php?cat=available">Available</a></li>
							<li><a href="display.php?cat=tri_cycle">Tri Cycle</a></li> -->
						</ul>
					</li>
					<li>
						<a href="#">ACCESSORIES</a>
						<ul>
							<li><a href="display.php?cat=frame">FRAME</a></li>
							<li><a href="display.php?cat=fork">FORK</a></li>
							<li><a href="display.php?cat=handlebar">HANDLEBAR</a></li>
							<li><a href="display.php?cat=saddle">SADDLE</a></li>
							<li><a href="display.php?cat=paddle">PADDLE</a></li>
							<li><a href="display.php?cat=mudguard">MUDGUARD</a></li>
							<li><a href="display.php?cat=training_wheel">TRAINING WHEEL</a></li>
							<li><a href="display.php?cat=chain">CHAIN</a></li>
							<li><a href="display.php?cat=crank_set">CRANK SET</a></li>
							<li><a href="display.php?cat=alloy_rim">ALLOY RIM</a></li>
							<li><a href="display.php?cat=steel_rim">STEEL RIM</a></li>
							<li><a href="display.php?cat=tire">TIRE</a></li>
							<li><a href="display.php?cat=tube">TUBE</a></li>
							<li><a href="display.php?cat=carrier">CARRIER</a></li>
							<li><a href="display.php?cat=bell">BELL</a></li>
							<li><a href="display.php?cat=chain_cover">CHAIN COVER</a></li>
							<li><a href="display.php?cat=spoke">SPOKE</a></li>
							<li><a href="display.php?cat=free_wheel">FREE WHEEL</a></li>
							<li><a href="display.php?cat=bb_set">BB SET</a></li>
							<li><a href="display.php?cat=chain_set">CHAIN SET</a></li>
							<li><a href="display.php?cat=shifter">SHIFTER</a></li>
							<li><a href="display.php?cat=derailleur">DERAILLEUR</a></li>
						</ul>
					</li>
				</ul>
			</li>
			<li><a href="store.php">FLAGSHIP OUTLETS</a></li>
			<li><a href="contact.php">CONTACT US</a></li>
		</ul>
	</div>
</div>