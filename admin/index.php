<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous" />
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"></script>
  </head>
  <body>
    <div
      class="container"
      style="
        width: 600px;
        padding: 30px;
        background-color: rgb(41, 206, 132);
        margin-top: 20px;
      ">
      <h3>Welcome to admin panel</h3>
      <form action="" method="post">


      
        <div class="form-group">
          <label for="">Username</label>
          <input
            type="name"
            class="form-control"
            name="Username"
            id="Password"
            placeholder="Username" required />
        </div>

        <div class="form-group">
          <label for="">Password</label>
          <input
            type="Password"
            class="form-control"
            name="Password"
            id="Password"
            placeholder="Password" required /> 
        </div>
        <div class="form-group">
          <button type="submit" name="Submit" class="btn btn-success">Submit</button>
          <button type="Reset" class="btn btn-danger">Cancel</button>
          <br /><br />
          <a href="signup.php" class="btn btn-info">Create New Account</a>
        </div>
      </form>
      <?php
      include 'connection.php';
      if(isset($_POST['Submit'])){
    $c=$_POST['Username'];
    $d=$_POST['Password'];
    $query="select * from users where Username='$c' && Password='$d'";
    $run=mysqli_query($conn,$query);
    if(mysqli_num_rows($run)>0)
    {
      $_SESSION['Username']=$c;
      echo "<script>window.open('main.php','_self')</script>";
    }
    else
    {
    echo "<script>window.alert('Invaid User')</script>";
    }
  }
      ?>
    </div>
  </body>
</html>
