<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css"
  rel="stylesheet"
/>
<div class="container">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
      <img
        src="https://image.pngaaa.com/208/906208-middle.png"
        height="30"
        alt=""
        loading="lazy"
      />

      </a>
      
    </div>
    <!-- Item -->
    <div class="container ">
    <!-- style="background-color:grey;" -->

      <a class="navbar-brand" href="#">Home</a>
    </div>
    <div class="container">
      <a class="navbar-brand" href="about.php">About Us</a>
    </div>

    <!-- icon -->
    <div class="container-fluid">
      <ul class ="navbar-nav d-flex flex-row">
      <li class="nav-item me-3 me-lg-0 dropdown">
        <a
          class="nav-link dropdown-toggle"
          href="#"
          id="navbarDropdown"
          role="button"
          data-mdb-toggle="dropdown"
          aria-expanded="false"
        >
          <i class="fas fa-user"></i>
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="login.php">Login</a></li>
          <li><a class="dropdown-item" href="register.php">Register</a></li>
          <li><hr class="dropdown-divider" /></li>
          
        </ul>
      </li>
      </ul>
    </div>
  </nav>
</div>

<div class="container my-5 z-depth-1">


  <!--Section: Content-->
  <section class="dark-grey-text">

    <div class="row pr-lg-5">
      <div class="col-md-7 mb-4">

        <div class="view">
          <img src="https://mdbootstrap.com/img/illustrations/graphics(4).png" class="img-fluid" alt="smaple image">
        </div>

      </div>
      <div class="col-md-5 d-flex align-items-center">
        <div>
          
          <h3 class="font-weight-bold mb-4">About US</h3>

        	<p>At RSVPs we believe that good reviews from meetup attendees begins from the ease of Reservation for that event. RSVPs provides a platform just for that where you can simply view all available events and book your reservations</p>

        	<button type="button" class="btn btn-orange btn-rounded mx-0"><a href="register.php">Try it out</a></button>

        </div>
      </div>
    </div>

  </section>
  <!--Section: Content-->


</div>

<div class="container mt-5">


  <!--Section: Content-->
  <section class="text-center">

    <!-- Section heading -->
    <h3 class="font-weight-bold mb-5">Recent Events</h3>

  	<!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">

        <!-- Card -->
        <div class="card hoverable">

          <!-- Card image -->
          <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/58.jpg" alt="Card image cap">

          <!-- Card content -->
          <div class="card-body">

            <!-- Title -->
            <p class="card-title text-muted text-uppercase font-small mt-1 mb-3">Poerty</p>
            <!-- Text -->
            <p class="mb-2">We relocated our office to a new designed garage</p>

          </div>

        </div>
        <!-- Card -->

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-lg-4 col-md-6 mb-md-0 mb-4">

        <!-- Card -->
        <div class="card hoverable">

          <!-- Card image -->
          <img class="card-img-top" src="img/mark.jpg" alt="Card image cap">

          <!-- Card content -->
          <div class="card-body">

            <!-- Title -->
            <p class="card-title text-muted text-uppercase font-small mt-1 mb-3">Marketing</p>
            <!-- Text -->
            <p class="mb-2">Top five brilliant content marketing strategies</p>

          </div>

        </div>
        <!-- Card -->

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-lg-4 col-md-6 mb-0">

        <!-- Card -->
        <div class="card hoverable">

          <!-- Card image -->
          <img class="card-img-top" src="img/ui.jpg" alt="Card image cap">

          <!-- Card content -->
          <div class="card-body">

            <!-- Title -->
            <p class="card-title text-muted text-uppercase font-small mt-1 mb-3">Design</p>
            <!-- Text -->
            <p class="mb-2">Best practices for minimalist design with example</p>

          </div>

        </div>
        <!-- Card -->

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </section>
  <!--Section: Content-->


</div>

<br>
<br>
<?php include 'footer.php';?>

<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"
></script>