<?php 
include '../header.php';
?>
<?php
  $cat_name = '';

  if(isset($_GET['edit'])){
    $cat_id = $_GET['edit'];
    $cat_query = "SELECT * FROM category WHERE `id` = '$cat_id'";
    $cat_data = $conn->query($cat_query)->fetch_assoc();
    $cat_name = $cat_data['categories'];
  }
?>

<main role="main">
  <div class="album py-5 bg-light">
    <div class="container">
      <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label for="exampleFormControlFile1">Category Type</label>
          <select name="category_type" id="cars">
          <option value="bike">BIKE</option>
          <option value="accessories">ACCESSORIES</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlFile1">Upload image</label>
          <input name="uploadfile" type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>
        <div class="form-group">
          <label for="exampleFormControlFile1">Category Name</label>
          <input type="text" value="<?php echo $cat_name;?>" name="categories" class="form-control" id="exampleFormControlFile1">
        </div>
        <div class="form-group">
          <label for="exampleFormControlFile1">Category Details</label>
          <textarea name="cat_details" class="form-control" id="" cols="30" rows="10"></textarea>
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
    $folder = "../media/front-image/" . $filename;
    $product_categories = $_POST['categories'];
    $cat_details = $_POST['cat_details'];
    $category_type = $_POST['category_type'];

    if(isset($_GET['edit'])){
      // update
      $sql = "UPDATE category SET categories = '$product_categories', cat_details = '$cat_details', image='$filename', category_type = '$category_type' WHERE id=".$_GET['edit'];
      if ($conn->query($sql)) {
        echo "New record updated successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      } 

    }else{
      //insert
        
      $check_exist = "SELECT * FROM category WHERE `categories` = '$product_categories'";
      if($conn->query($check_exist)->num_rows > 0){
        echo "Category already exists";
      }else{
        
        $sql = "INSERT INTO category (`categories`,`image`,`cat_details`,`category_type`) VALUES ('$product_categories','$filename','$cat_details','$category_type')";

        if(move_uploaded_file($tempname , $folder)){
          echo "<h3>  Image uploaded successfully!</h3>";
        } else {
          echo "<h3>  Failed to upload image!</h3>";
        }

        if ($conn->query($sql)) {
          echo "New record created successfully";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        } 
      }
    }

  }
?>


