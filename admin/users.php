<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Admin Panel</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

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
    <!-- navbar start -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-success">
      <a class="navbar-brand" href="main.php"
        ><i
          class="fa fa-tachometer"
          aria-hidden="true"
          style="font-size: 20px"></i>
        Dashboard</a
      >
      <button
        class="navbar-toggler d-lg-none"
        type="button"
        data-toggle="collapse"
        data-target="#collapsibleNavId"
        aria-controls="collapsibleNavId"
        aria-expanded="false"
        aria-label="Toggle navigation"></button>
      <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
        <form class="form-inline my-2 my-lg-0">
          <i
            class="fa fa-user-circle-o"
            aria-hidden="true"
            style="font-size: 20px"
            >User</i
          >
          &nbsp; &nbsp;
          <a href="logout.php">
            <i
              class="fa fa-power-off"
              aria-hidden="true"
              style="font-size: 20px"
              >Log Out</i
            ></a
          >
        </form>
      </div>
    </nav>
    <!-- navbar end -->
    <!-- content start -->
    <div class="container" style="margin-top: 30px">
      <div class="row">
        <div class="col-md-3">
          <a href="add-post.php" class="btn btn-info btn-block"
            ><i class="fa fa-plus-square" aria-hidden="true"
              >&nbsp; Add Post</i
            ></a
          >

          <a href="view-post.php" class="btn btn-info btn-block"
            ><i class="fa fa-newspaper-o" aria-hidden="true"
              >&nbsp; View Post</i
            ></a
          >

          <a href="add-photo.php" class="btn btn-info btn-block"
            ><i class="fa fa-camera" aria-hidden="true">&nbsp; Add Photos</i></a
          >

          <a href="add-reservation.php" class="btn btn-info btn-block"
            ><i class="fa fa-bed" aria-hidden="true">&nbsp;Booking</i></a
          >
          <a href="users.php" class="btn btn-info btn-block"
            ><i class="fa fa-user" aria-hidden="true">&nbsp; Users</i></a
        >
        </div>
        <div class="col-md-9">
          <h2
            class="display-4 text-center"
            style="margin-top: 10px; transform: translate(-62px)">
        <i class="fa fa-user" aria-hidden="true"></i> Users
          </h2>
        <!-- now row start -->
          <div class="row">
            <table class="table table-dark table-bordered table-hover">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
              <?php
                // database connection
                include 'connection.php';
                $query='select * from users';
                $run=mysqli_query($conn,$query);
                while($row=mysqli_fetch_array($run))
                {
                  $a=$row['id'];
                  $b=$row['First_Name'];
                  $c=$row['Last_Name'];
                  $d=$row['username'];
                  $e=$row['password'];
                
                ?>
                <tr>
                  <td scope="row"><?php echo $a;?></td>
                  <td><?php echo $b;?></td>
                  <td><?php echo $c;?></td>
                  <td><?php echo $d;?></td>
                  <td><?php echo $e;?></td>
                  <td><a href="edit.php?id=<?php echo $a; ?> &fname=<?php echo  $b;?> 
                  & lname=<?php echo $c; ?>  &username=<?php echo $d;?> &pw=<?php echo $e;$e ?>">Edit</a></td>
                  <td><a href="delete.php?Del=<?php echo $a; ?>">Delete</a></td>
                </tr>
                <?php
                }
                ?>
              </tbody>
            </table>
          </div>
          <!-- now row end -->
        </div>
      </div>
    </div>
    <!-- content end -->
  </body>
</html>
