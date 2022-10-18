

<div id="about" class="about-text">
   <div class="row">
   <div class="columns fourteen center bikes">
<?php

$sql = "SELECT id, image, bike_name FROM bikes";
$result = $conn->query($sql);
   if( isset($_GET['deleted'])){
      echo 'Post deleted successfully!';
      echo '<hr>';
   }

   if ($result->num_rows > 0) {
   // output data of each row
   $html = '';
   while($row = $result->fetch_assoc()) {

   $html.='<ul>';
   $html.='<li class="bike_box">';
   $html.='<a  href="specification.php?product_id=804091">';
   $html.='<img src="media/bikes/'.$row['image'].'" alt="">';
   $html.='<div class="bike_name">';
   $html.='<p>'.$row['bike_name'].'</p>';
   $html.='</div>';
   $html.='</a>';
   $html.='</li>';
   $html.='</ul>';

          
      
   }   
      echo $html;
   } 
   else {
      echo "0 results";
   }
$conn->close();
?>

      </div>
   </div>
</div>

<div id="category" class="category">
</div>