<?php 
include '../header.php';
check_login(); 
include 'navbar_admin.php';
?>

<main role="main">
  <div class="album py-5 bg-light admin">
    <div class="container">
      <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label for="exampleFormControlFile1">Upload image</label>
          <input name="uploadfile" type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>
        <div class="form-group">
          <label for="exampleFormControlFile1">Product Name</label>
          <input type="text" name="product_name" class="form-control" id="exampleFormControlFile1">
        </div>
        <div class="form-group">
          <label for="exampleFormControlFile1">Product Category</label>
          <select name="product_category" id="cars">
            <?php
              $sql = "SELECT * FROM category";
              $categories = $conn->query($sql);
              while($category = $categories->fetch_assoc()) {
                $cat_id = $category['id'];
                echo '<option value="'.$cat_id.'">'.$category['categories'].'</option>';
              }
            ?>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlFile1">Product Details</label>
          <textarea name="product_details" class="form-control" id="" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group">
          <button type="submit" name="submit" class="btn btn-primary">SUBMIT</button>
        </div>
      </form>
    </div>
  </div>
</main>

<?php
  if ( isset($_POST['submit'])){
    $filename = rand() . $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "../media/products/" . $filename;
    $product_name = $_POST['product_name'];
    $product_category = $_POST['product_category'];
    $product_details = $_POST['product_details'];
    $sql = "INSERT INTO products (`image`, `product_name`, `product_category`, `product_details`) VALUES ('$filename', '$product_name', '$product_category', '$product_details')";


    if(move_uploaded_file($tempname , $folder)){
      echo "<h3>  Image uploaded successfully!</h3>";
    } else {
      echo "<h3>  Failed to upload image!</h3>";
    }

    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
  }
?>


