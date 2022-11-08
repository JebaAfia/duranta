<div id="about" class="about-text">
   <div class="row">
      <div class="columns fourteen center bikes">
         <?php
            $sql = "SELECT id, image, product_name FROM products WHERE product_category=".$_GET['id'];
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
               $html = '';
               while($row = $result->fetch_assoc()) {
                  $html.='<ul>';
                  $html.='<li class="bike_box">';
                  $html.='<a  href="'.url('product.php?id='.$row['id']).'">';
                  $html.='<img src="media/products/'.$row['image'].'" alt="">';
                  $html.='<div class="bike_name">';
                  $html.='<p>'.$row['product_name'].'</p>';
                  $html.='</div>';
                  $html.='</a>';
                  $html.='</li>';
                  $html.='</ul>';
               }   
               echo $html;
            } else {
               echo "0 results";
         }
         ?>
      </div>
   </div>
</div>
<div id="category" class="category">
</div>