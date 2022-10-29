<?php 
include '../header.php';
?>

<main role="main">
  <div class="album py-5 bg-light">
    <div class="container">
      <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label for="exampleFormControlFile1">Upload image</label>
          <input name="uploadfile" type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>
        <div class="form-group">
          <label for="exampleFormControlFile1">Bike Name</label>
          <input type="text" name="bike_name" class="form-control" id="exampleFormControlFile1">
        </div>
        <div class="form-group">
          <label for="exampleFormControlFile1">Bike Category</label>
          <select name="bike_category" id="cars">
            <option value="volvo">Volvo</option>
            <option value="saab">Saab</option>
            <option value="mercedes">Mercedes</option>
            <option value="audi">Audi</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlFile1">Bike Details</label>
          <textarea name="bike_details" class="form-control" id="" cols="30" rows="10"></textarea>
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
  $folder = "../media/bikes/" . $filename;
  $bike_name = $_POST['bike_name'];
  $bike_category = $_POST['bike_category'];
  $bike_details = $_POST['bike_details'];
$sql = "INSERT INTO bikes (`image`, `bike_name`, `bike_category`, `bike_details`) VALUES ('$filename', '$bike_name', '$bike_category', '$bike_details')";

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


