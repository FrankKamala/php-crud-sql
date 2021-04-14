



<!DOCTYPE html>
<html lang="en">
<?php include 'navbar.php';
include 'db.php';?>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Available Events</title>
  <link rel="stylesheet" href="style.css">
</head>
<body >

<div class="row ">
<?php
			$sql = "SELECT id, event_name, event_location, description FROM events";
			$resultset = mysqli_query($connection, $sql) or die("database error:". mysqli_error($connection));			
			while( $record = mysqli_fetch_assoc($resultset) ) {
			?>
  <div class="col-sm-6 ">
  
    <div class="card " >
    
      <div class="card-body">
        <h5 class="card-title"><a href="#"><?php echo $record['event_name']; ?></a></h5>
        <p class="card-text">
        <?php echo $record['description']; ?>
        </p>
        <h5>Location:<span><?php echo $record['event_location']; ?></span></h5>
        <a href="book.php" class="btn btn-primary">RSVP</a>
      </div>
     
    </div>
    <br>
    
  </div>
  <!-- <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Event 2 Title</h5>
        <p class="card-text">
          With supporting text below as a natural lead-in to additional content.
        </p>
        <h3>Location:<span>Online</span></h3>
        <a href="book.php" class="btn btn-primary">RSVP</a>
      </div>
    </div>
  </div> -->
  <?php } ?>
  <br>
  
</div>
  
</body>
</html>

