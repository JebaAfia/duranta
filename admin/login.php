<?php
  include '../header.php'; 
  if( !empty($_SESSION['user']) ){
    redirect('index.php');
  }

  if (isset($_POST['submit'])) {

    $sql = "SELECT * FROM users WHERE email='".$_POST['email']."' AND password='".$_POST['password']."'";
    $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        $_SESSION['user'] = $result->fetch_assoc();
        redirect('index.php');
      }else{
        echo 'username or password is incorrect.';
      }
  }
?>
<main role="main">
  <div class="album py-5 bg-light">
    <div class="container">
      <form action="" method="POST">
        <div class="card-body">
          <div class="form-group">
            <a href="<?php echo url('admin/registration.php')?>" type="button" class="table_button">Registration</a>
          </div>

          <div class="form-group">
            <label for="formGroupExampleInput">User ID</label>
            <input type="text" name='email' class="form-control" id="formGroupExampleInput" placeholder="Username or Email">
          </div>

          <div class="form-group">
            <label for="formGroupExampleInput2">Password</label>
            <input type="password" name='password' class="form-control" id="formGroupExampleInput2" placeholder="Password">
          </div>

          <div class="form-group">
            <button type="submit" name="submit" class="table_button">Sign In</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</main>