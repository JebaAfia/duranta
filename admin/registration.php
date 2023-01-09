<?php 
  include '../header.php'; 
?>

<?php
  if( !empty($_SESSION['user']) ){
    redirect('index.php');
  }

  $errors = [];
  if ( isset($_POST['submit'])){
    $name = $_POST['fname'] . $_POST['lname'];
    $email = $_POST['email'];
    $contact_number = $_POST['contact_number'];
    $password = $_POST['password'];

    if(empty($_POST['fname'])) {
        $errors['fname'] = 'First name is required';
    }
    if(empty($_POST['lname'])) {
        $errors['lname'] = 'Last name is required';
    }
    if(empty($_POST['email'])) {
        $errors['email'] = 'Email field is required';
    }
    if(empty($_POST['contact_number'])) {
        $errors['contact_number'] = 'Contact Number is required';
    }
    if(empty($_POST['password'])) {
        $errors['password'] = 'password is required';
    }
    if(empty($errors)){
      $sql = "INSERT INTO users (`name`, `email`, `contact_number`,`password`) VALUES ('$name', '$email', '$contact_number','$password')";
      if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        $logged = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $result = $conn->query($logged);

        if ($result->num_rows > 0) {
          $_SESSION['user'] = $result->fetch_assoc();
          redirect('index.php');
        }
      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }
    }   
  }
?>
<main role="main">
  <div class="album py-5 bg-light admin">
    <div class="container">
      <form action="" method="POST" enctype="multipart/form-data">
        <div class="card-body">
          <div class="form-group">
            <label for="formGroupExampleInput">Name</label>
            <input type="text" class="form-control" name="fname" id="formGroupExampleInput" placeholder="Type Your First Name" required>
              <span class="errors"><?php if(isset($errors['fname'])) echo $errors['fname']?></span>
            <input type="text" class="form-control" name="lname" id="formGroupExampleInput" placeholder="Type Your Last Name" required>
              <span class="errors"><?php if(isset($errors['lname'])) echo $errors['lname']?></span>
          </div>

          <div class="form-group">
            <label for="formGroupExampleInput">Email Adress</label>
            <input type="email" class="form-control" name="email" id="formGroupExampleInput" placeholder="Email Adress" required>
              <span class="errors"><?php if(isset($errors['email'])) echo $errors['email']?></span>
          </div>

          <div class="form-group">
            <label for="formGroupExampleInput">Mobile Number</label>
            <input type="text" class="form-control" name="contact_number" id="formGroupExampleInput" placeholder="Type Your Mobile Number" required>
            <span class="errors"><?php if(isset($errors['contact_number'])) echo $errors['contact_number']?></span>
          </div>

          <div class="form-group">
            <label for="formGroupExampleInput2">Password</label>
            <input type="password" class="form-control" name="password" id="formGroupExampleInput2" placeholder="Password" required>
            <span class="errors"><?php if(isset($errors['password'])) echo $errors['password']?></span>
          </div>
          
          <div class="form-group">
            <button type="submit" name="submit" class="table_button">SUBMIT</button>
          </div>
        </div>  
      </form>
    </div>
  </div>
</main>


