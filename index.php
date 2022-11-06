<!DOCTYPE html>
<html lang="en-US">
	
<?php 
	include 'header.php';
?>
<body>
	<div id="wrapper">
  	<?php include 'navbar.php';?>
		<div class="full_screen_slider header" style="background:url('media/bg1.jpg');" id="wellcome">
			<div class="heading">
				<div class="center">
					<div class="heading_link_container">
					<div class="heading_link"></div>
					<a href="#about">TAKE A RIDE</a>
					</div>
				</div>
			</div>
		</div>
		<div id="about" class="about"  style="background:url('media/b1.jpg');">
			<div class="big_gear">
			<div class="anim">
			</div>
				<div class="gear_bg">
					<h2>THE STORY OF<br>YOUR DURANTA<br>BICYCLE </h2>
					<p>
						Your trusted DURANTA bikes are being manufactured by Rangpur Metal Industries Limited since 2013. It is a Sister concern of RFL Group,
						one of the largest manufacturing conglomerates in Bangladesh. The factory is located at Hobigong, which is 140 km away from Dhaka city and
						the 21,934 sq meter factory can produce 300,000 bicycles per year. The export business has started in 2015. Your bikes are made in a factory
						that is globally compliant with world standard high tech mechanical testing lab for components. That's why they are very popular locally and
						globally, as we ensure quality, quick delivery and competitive pricing to partners such as Sports Direct, Toys R Us, Argos,<br> S’COOL Bike and
						Tandem Group Cycle.
					</p>
				</div>
			</div>
			<div class="anim anim_small_gear"></div>
			<ul class="small_gear">
				<li><a href="#category">BIKES</a></li>
				<li><a href="display.php?cat=frame">ACCESSORIES</a></li>
				<li><a href="store.php">OUTLETS</a></li>
				<li><a href="partners.php">PARTNERS</a></li>
				<li><a href="contact.php">CONTACT</a></li>
			</ul>
		</div>
	<div id="category" class="category">
		<div class="row hide-pm ">
			<ul class="blur ashh">
				<?php
					$sql = "SELECT id, image, categories FROM category";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
					$html = '';
					while($row = $result->fetch_assoc()) {
						$html.='<li class="half fl">';
						$html.='<a href="'.url('pages.php?id='.$row['id']).'">';
						$html.='<img src="media/front-image/'.$row['image'].'" alt="image is failed to show">';
						$html.='<span class="tl">'.$row['categories'].'</span>';
						$html.='</a>';
						$html.='</li>';
					}   
					echo $html;
					} else {
					echo "0 results";
					}
					$conn->close();
				?>
			</ul>
		</div>
	</div>	
	</div>
<?php include 'footer.php';?>
</body>
</html>