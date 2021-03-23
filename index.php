<?php
include_once 'db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <title>RSVP</title>
</head>
<body>
<?php
$sql = "SELECT * FROM attendants;";
$result = mysqli_query($connection,$sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck>0){
   while($row = mysqli_fetch_assoc($result)){
echo $row['attendant_email']. "<br>";

   }
}

?> 
<div class="global-container">
	<div class="card login-form">
	<div class="card-body">
		<h3 class="card-title text-center">Fill the Form to submit your reservation</h3>
		<div class="card-text">
			<!--
			<div class="alert alert-danger alert-dismissible fade show" role="alert">Incorrect username or password.</div> -->
			<form action="create.php" method="post">
				<!-- to error: add class "has-danger" -->
				<div class="form-group">
					<label for="enteredFName">First Name</label>
					<input type="text"  name ="first_name"class="form-control form-control-sm" id="enteredFName" >
				</div>
                <div class="form-group">
					<label for="enteredSName">Second Name</label>
					<input type="text"  name="second_name"class="form-control form-control-sm" id="enteredSName">
				</div>
                <div class="form-group">
					<label for="enteredEmail">Email address</label>
					<input type="email" name="mail_address" class="form-control form-control-sm" id="enteredEmail" aria-describedby="emailHelp">
				</div>
				<div class="form-group">
					<label for="enteredInterest">Interest</label>
					<!-- <a href="#" style="float:right;font-size:12px;">Forgot password?</a> -->
					<input type="text" name="interest_in" class="form-control form-control-sm" id="enteredInterest">
				</div>
				<button type="submit" class="btn btn-primary btn-block">RSVP</button>
				
				<div class="sign-up">
					Edit Submitted Response? <a href="edit.php">Change Details</a>
				</div>
			</form>
		</div>
	</div>
</div>
</div>



    
</body>
</html>