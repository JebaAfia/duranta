<?php 
include '../header.php';
?>

<?php

if( !isset($_GET['post_id']) ){
echo "ERROR";
return;
}

$sql = "SELECT * FROM bikes WHERE id=".$_GET['post_id'];
$result = $conn->query($sql)->fetch_assoc();

if ( isset($_POST['submit'])){
  $filename = $result['image'];
  $tempname = $_FILES["uploadfile"]["tmp_name"];
  $folder = "../media/bikes/" . $filename;
  $bike_name = $_POST['bike_name'];
  $bike_category = $_POST['bike_category'];
  $bike_details = $_POST['bike_details'];

  $sql = "UPDATE bikes SET image='$filename', bike_name='$bike_name', bike_category='$bike_category', bike_details='$bike_details' WHERE id=".$_GET['post_id'];

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
          <input name="uploadfile" accept="image/*" type="file" class="form-control-file" id="exampleFormControlFile1"> <img src=" ../media/bikes/<?php echo $result['image']?>" alt="">
        </div>
        <div class="form-group">
          <label for="exampleFormControlFile1">Bike Name</label>
          <input type="text" name="bike_name" class="form-control" id="exampleFormControlFile1" value="<?php echo $result['bike_name']?>">
        </div>
        <div class="form-group">
          <label for="exampleFormControlFile1">Bike Category</label>
          
          <select name="bike_category">
            <?php
              $sql = "SELECT * FROM category;";
              $categories = $conn->query($sql);
              while($category = $categories->fetch_assoc()) {
                $cat_id = $category['id'];
                $selected = '';
                if($cat_id == $result['bike_category']){
                  $selected = 'selected';
                }
                echo '<option '.$selected.' value="'.$cat_id.'">'.$category['categories'].'</option>';
              }
            ?>
            </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlFile1">Bike Details</label>
          <textarea name="bike_details" class="form-control" id="" cols="30" rows="10"><?php echo $result['bike_details']?></textarea>
        </div>
        <div class="form-group">
          <button type="submit" name="submit" class="btn btn-primary">SUBMIT</button>
        </div>
      </form>
    </div>
  </div>
</main>
