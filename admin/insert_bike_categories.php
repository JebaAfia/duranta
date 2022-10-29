<?php 
include '../header.php';
?>

<main role="main">
  <div class="album py-5 bg-light">
    <div class="container">
      <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label for="exampleFormControlFile1">Bike Category</label>
          <input type="text" name="categories" class="form-control" id="exampleFormControlFile1">
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
$sql = "INSERT INTO category (`categories`) VALUES ('$bike_categories')";


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>


