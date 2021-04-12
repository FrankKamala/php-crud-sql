<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "rsvps";

$connection = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
session_start();
$session_id = session_id();

if(!isset($_COOKIE["user_session"])){
    setcookie("user_session", "$session_id", time()+86400*30*12 );
    header("location:index.php");
    exit();
    }else{
        $cookie_id =  $_COOKIE["user_session"];
    }
    
    
    
    if(!$connection){
        echo "Connection Error".mysqli_connect_error();
        exit();
    }

    ?>
<?php
					if(isset($_SESSION['email'])){
						$s_email = $_SESSION['email'];
						$sel = "select c_name from clients where c_email ='$s_email'";
						$sel_query = mysqli_query($connection,$sel);
						$fetch = mysqli_fetch_array($sel_query);
						$user = $fetch['c_name'];
						$sign = "Logout";
						$nav = "account";
						$wish = "wishlist.php";
						$add_wish= "javascript:void(0)";
						
					}else{
						$user = "Guest";
						$sign = "Login";
						$nav = "Login";
						$wish = "Login.php?wish";
						$add_wish = "Login.php?wish";
						$s_email = 0;
						
					}
					?>