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
				<li class="half fl"><a href="display.php?cat=junior_bike"><img src="media/cat1.jpg" alt=""><span class="tl">JUNIOR<br>BIKES</span></a></li>
				<li class="half fl"><a href="display.php?cat=mtb_dual_suspension_bike"><img src="media/cat2.jpg" alt=""><span class="bl">MTB DUAL<br>SUSPENSION BIKES</span></a></li>
				<li class="half fl"><a href="display.php?cat=kids_bike"><img src="media/cat3.jpg" alt=""><span class="tr">KIDS<br>BIKES</span></a></li>
				<li class="half fl"><a href="display.php?cat=racing_bike"><img src="media/cat4.jpg" alt=""><span class="br">ROAD/RACING<br>BIKES</span></a></li>
				<li class="half fl"><a href="display.php?cat=mtb_bike"><img src="media/cat5.jpg" alt=""><span class="tl">MTB<br>BIKES</span></a></li>
				<li class="half fl"><a href="display.php?cat=classic_bike"><img src="media/cat6.jpg" alt=""><span class="tl">CLASSIC<br>BIKES</span></a></li>

				<li class="half fl"><a href="display.php?cat=fat_bike"><img src="media/cat7.jpg" alt=""><span class="tr">FAT<br>BIKES</span></a></li>
				<li class="half fl"><a href="display.php?cat=bmx_bike"><img src="media/cat8.jpg" alt=""><span class="br">BMX<br>BIKES</span></a></li>
				<li class="half fl"><a href="display.php?cat=folding_bike"><img src="media/cat9.jpg" alt=""><span class="tl">FOLDING<br>BIKES</span></a></li>
				<li class="half fl"><a href="display.php?cat=e_bike"><img src="media/cat10.jpg" alt=""><span class="br">E BIKES</span></a></li>
				<li class="half fl"><a href="display.php?cat=scooty"><img src="media/cat12.jpg" alt=""><span class="br">SCOOTY</span></a></li>
			</ul>
		</div>
	</div>	
	</div>
<?php include 'footer.php';?>
</body>
</html>