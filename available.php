
<?php include 'navbar.php';
include 'db.php';?>

<div class="row">
  <div class="col-sm-6">
  <?php
			$sql = "SELECT id, event_name, event_location, description FROM events";
			$resultset = mysqli_query($connection, $sql) or die("database error:". mysqli_error($connection));			
			while( $record = mysqli_fetch_assoc($resultset) ) {
			?>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><a href="#"><?php echo $record['event_name']; ?></a></h5>
        <p class="card-text">
        <?php echo $record['description']; ?>
        </p>
        <h3>Location:<span><?php echo $record['event_location']; ?></span></h3>
        <a href="book.php" class="btn btn-primary">RSVP</a>
      </div>
     
    </div>
    
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


