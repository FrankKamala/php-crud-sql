<!-- CREATE TABLE attendants(
    attendant_id int(11) AUTO_INCREMENT PRIMARY KEY not null,
    attendant_firstName varchar(256) not nul,
    attendant_secondName varchar(256) not null,
    attendant_email varchar(256) not null,
    attendant_interest varchar(256) not null,


);

INSERT INTO attendants(attendant_firstName,attendant_secondName,attendant_email,attendant_interest)
  VALUES ('James','Ndugai','ndugs@mail.com','Web Development'); -->
<!-- 
  $sql = "INSERT INTO attendants (attendant_firstName, attendant_secondName, attendant_email, attendant_interest)
   VALUES ('$attendant_firstName', '$attendant_secondName', '$attendant_email', '$attendant_interest');"; -->

   <?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "rsvps";

$connection = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

// Escape user inputs for security
$attendant_firstName = mysqli_real_escape_string($connection, $_REQUEST['first_name']);
$attendant_secondName = mysqli_real_escape_string($connection, $_REQUEST['second_name']);
$attendant_email = mysqli_real_escape_string($connection, $_REQUEST['mail_address']);
$attendant_interest = mysqli_real_escape_string($connection, $_REQUEST['interest_in']);
 
// Attempt insert query execution
$sql = "INSERT INTO attendants (attendant_firstName, attendant_secondName, attendant_email, attendant_interest) VALUES ('$attendant_firstName', '$attendant_secondName', '$attendant_email', '$attendant_interest');";
if(mysqli_query($connection, $sql)){
    header("Location: success.php");
   
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
}

