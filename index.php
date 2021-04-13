

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
<header>
  <!-- Intro settings -->
  <style>
    /* Default height for small devices */
    #intro-example {
      height: 400px;
    }

    /* Height for devices larger than 992px */
    @media (min-width: 992px) {
      #intro-example {
        height: 600px;
      }
    }
  </style>

  <!-- Navbar -->
  <div class="container">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">RSVPs</a>
    </div>
  </nav>
</div>
  <!-- Navbar -->

  <!-- Background image -->
  <div
    id="intro-example"
    class="p-5 text-center bg-image"
    style="background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/041.jpg');"
  >
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.7);">
      <div class="d-flex justify-content-center align-items-center h-100">
        <div class="text-white">
          <h1 class="mb-3">RSVPS </h1>
          <h5 class="mb-4">Making your event reservations smooth and simple</h5>
          <a
            class="btn btn-outline-light btn-lg m-2"
            href="book.php"
            role="button"
            rel="nofollow"
            target="_blank"
            >RSVP NOW</a
          >
          <a
            class="btn btn-outline-light btn-lg m-2"
            href="available.php"
            target="_blank"
            role="button"
            >Upcoming Events</a
          >
		  <!--  -->
        </div>
      </div>
    </div>
  </div>
  <!-- Background image -->
</header>
<?php include 'footer.php';?>

<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"
></script>
