<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Welcome to Mandarayu Farm House</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta
      name="description"
      content="Escape to Mandrayu Farm House, a serene retreat nestled in nature's embrace. Enjoy farm-fresh experiences, cozy accommodations, and picturesque views, perfect for relaxation and rejuvenation. Ideal for family getaways, romantic escapes, or simply unwinding in a tranquil rural setting." />
    <meta
      name="keywords"
      content="Mandarayu Farm House, Best hangout place in pokhara, Local food, paragaliding, lake view, asthetic food and  drinks," />
    <meta name="author" content="Bipin kafle" />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous" />
    <link rel="stylesheet" href="assests/css/style.css" />
    <link
      rel="shortcut icon"
      href="assests/image/icon.png"
      type="image/x-icon" />
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
      <a class="navbar-brand" href="#">
        <img src="assests/image/logo.png" alt="" height="65" width="65" />
        Mandrayu Farm House</a
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
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="index.php"
              >Home <span class="sr-only">(current)</span></a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="news.php">News and Events</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="services.php">Our Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="gallery.php">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="booking.php">Reservation</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <a href="admin/index.php" class="btn btn-outline-warning">Log in</a>
        </form>
      </div>
    </nav>

    <!-- navbar end -->
    <!-- galery start -->
    <div class="container-fluid" style="background-color: white; padding: 20px;">
        <div class="container">
        <?php
        // Fetch all image files from the directory with specified extensions
        $dir = glob('./assests/image/*.{jpg,png,jpeg}', GLOB_BRACE);

        // Loop through the images and display them
        foreach($dir as $value) {
            ?>
            <a href="<?php echo $value; ?>">
            <img src="<?php echo $value; ?>" alt="Gallery Image" style="width: 250px; height: 200px; padding: 10px;">
          </a>
            <?php
        }
        ?>
    </div>
</div>

      </div>
    <!-- gallery end  -->

    <!-- footer start -->

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <div
      class="container-fluid bg-success"
      style="padding: 20px 0px; margin-top: 5px">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h3>Contact Details</h3>
            <i class="fa fa-bed" aria-hidden="true"></i>Mandrayu Farm House
            <br />
            <i class="fa fa-map-marker" aria-hidden="true"></i>Chnakapur, pame
            Pokhara
            <br />
            <i class="fa fa-phone" aria-hidden="true"></i>9805868705 <br />Pro.
            BP Gurung
            <br />
            <i class="fa fa-envelope" aria-hidden="true"></i>Mandrayu Farm House
          </div>

          <div class="col-md-4">
            <h3>Social Media</h3>
            <i
              class="fa fa-facebook"
              aria-hidden="true"
              style="font-size: 30px"></i
            >Mandrayu Farm House <br />
            <hr />
            <a
              href="https://www.instagram.com/mandrayufarmhouse?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==">
              <i
                class="fa fa-instagram"
                aria-hidden="true"
                style="font-size: 30px"></i>
            </a>
            <a
              href="https://www.instagram.com/mandrayufarmhouse?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==">
              Mandrayu farm House </a
            ><br />

            <i
              class="fa fa-twitter"
              aria-hidden="true"
              style="font-size: 30px"></i
            >MFH <br />
            <i
              class="fa fa-whatsapp"
              aria-hidden="true"
              style="font-size: 30px"></i
            >9805868705 <br />
            <i
              class="fa fa-youtube"
              aria-hidden="true"
              style="font-size: 30px"></i>
            Mandrayu Farm House
          </div>

          <div class="col-md-4">
            <h3>Google Map</h3>
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2485.5846842939427!2d83.91509494686262!3d28.233200264255654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3995eb9b06e032e5%3A0xed921833cfafbdf8!2sMandrayu%20Farm%20House!5e0!3m2!1sen!2snp!4v1723781796815!5m2!1sen!2snp"
              width="300"
              height="250"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>

          <p>All right you reserved: &copy; Mandrayu Farm House 2025</p>
        </div>
      </div>
    </div>

    <!-- footer end -->
  </body>
</html>
