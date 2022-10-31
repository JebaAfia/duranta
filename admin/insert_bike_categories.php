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
          <label for="exampleFormControlFile1">Bike Category</label>
          <input type="text" value="<?php echo $cat_name;?>" name="categories" class="form-control" id="exampleFormControlFile1">
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

    $bike_categories = $_POST['categories'];

    if(isset($_GET['edit'])){
      // update
      // $sql = "UPDATE bikes SET image='$filename', bike_name='$bike_name', bike_category='$bike_category', bike_details='$bike_details' WHERE id=".$_GET['post_id'];
      $sql = "UPDATE category SET categories = '$bike_categories' WHERE id=".$_GET['edit'];
      if ($conn->query($sql)) {
        echo "New record updated successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      } 

    }else{
      //insert
        
      $check_exist = "SELECT * FROM category WHERE `categories` = '$bike_categories'";
      if($conn->query($check_exist)->num_rows > 0){
        echo "Category already exists";
      }else{
        
        $sql = "INSERT INTO category (`categories`) VALUES ('$bike_categories')";
        if ($conn->query($sql)) {
          echo "New record created successfully";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        } 
      }
    }

  }
?>


