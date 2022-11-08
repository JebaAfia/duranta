<?php 
include '../header.php';
?>

<?php

if( !isset($_GET['post_id']) ){
echo "ERROR";
return;
}

$sql = "SELECT * FROM products WHERE id=".$_GET['post_id'];
$result = $conn->query($sql)->fetch_assoc();

if ( isset($_POST['submit'])){
  $filename = $result['image'];
  $tempname = $_FILES["uploadfile"]["tmp_name"];
  $folder = "../media/products/" . $filename;
  $product_name = $_POST['product_name'];
  $product_category = $_POST['product_category'];
  $product_details = $_POST['product_details'];

  $sql = "UPDATE products SET image='$filename', product_name='$product_name', product_category='$product_category', product_details='$product_details' WHERE id=".$_GET['post_id'];

  if(!empty($tempname)){
    if(move_uploaded_file($tempname , $folder)){
      echo "<h3>  Image uploaded successfully!</h3>";
    } else {
      echo "<h3>  Failed to upload image!</h3>";
    }
  }

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
?>
<main role="main">
  <div class="album py-5 bg-light">
    <div class="container">
      <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label for="exampleFormControlFile1">Upload image</label>
          <input name="uploadfile" accept="image/*" type="file" class="form-control-file" id="exampleFormControlFile1"> <img src=" ../media/products/<?php echo $result['image']?>" alt="">
        </div>
        <div class="form-group">
          <label for="exampleFormControlFile1">Bike Name</label>
          <input type="text" name="product_name" class="form-control" id="exampleFormControlFile1" value="<?php echo $result['product_name']?>">
        </div>
        <div class="form-group">
          <label for="exampleFormControlFile1">Bike Category</label>
          
          <select name="product_category">
            <?php
              $sql = "SELECT * FROM category;";
              $categories = $conn->query($sql);
              while($category = $categories->fetch_assoc()) {
                $cat_id = $category['id'];
                $selected = '';
                if($cat_id == $result['product_category']){
                  $selected = 'selected';
                }
                echo '<option '.$selected.' value="'.$cat_id.'">'.$category['categories'].'</option>';
              }
            ?>
            </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlFile1">Bike Details</label>
          <textarea name="product_details" class="form-control" id="" cols="30" rows="10"><?php echo $result['product_details']?></textarea>
        </div>
        <div class="form-group">
          <button type="submit" name="submit" class="btn btn-primary">SUBMIT</button>
        </div>
      </form>
    </div>
  </div>
</main>
