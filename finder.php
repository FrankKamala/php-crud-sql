 <?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "rsvps";

$connection = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

// Escape user inputs for security

$initial_secondName = mysqli_real_escape_string($connection, $_REQUEST['registeredSecondName']);
$initial_email = mysqli_real_escape_string($connection, $_REQUEST['registeredMail']);

 
// Attempt insert query execution
$sql = "SELECT * FROM `attendants` WHERE `attendant_secondName` = '$initial_email' && `attendant_email` = '$initial_email';";
if($result = mysqli_query($connection, $sql)){
    if (mysqli_num_rows($result)>0){
        echo "<table>";
        echo "<tr>";
            echo "<th>First Name</th>";
            echo "<th>Second Name</th>";
            echo "<th>Interest</th>";
            echo "<th>email</th>";
        echo "</tr>";
    while($row = mysqli_fetch_array($result)){
        echo "<tr>";
            echo "<td>" . $row['attendant_firstName'] . "</td>";
            echo "<td>" . $row['attendant_secondName'] . "</td>";
            echo "<td>" . $row['attendant_interest'] . "</td>";
            echo "<td>" . $row['attendant_email'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    // Free result set
    mysqli_free_result($result);
        
    }
    else{
        echo "No records matching your query were found.";
    }
  
  
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
}

//SELECT * FROM `attendants` WHERE `attendant_secondName` = '$initial_email' && `attendant_email` = $attendant_email


 