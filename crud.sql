CREATE TABLE IF NOT EXISTS `clients` 
( `c_id` int(250) NOT NULL,
 `c_session` varchar(200) NOT NULL,
  `c_name` varchar(200) NOT NULL, 
  `c_email` varchar(200) NOT NULL,
   `c_pass` varchar(200) NOT NULL 
   )
   CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `event_location` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `host_name` varchar(255) NOT NULL
    
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




CREATE TABLE  IF NOT EXISTS clients (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- <?php
-- $sql = "SELECT * FROM attendants;";
-- $result = mysqli_query($connection,$sql);
-- $resultCheck = mysqli_num_rows($result);

-- if($resultCheck>0){
--    while($row = mysqli_fetch_assoc($result)){
-- echo $row['attendant_email']. "<br>";

--    }
-- }

-- ?> 
-- 


INSERT INTO `events` (`id`, `event_name`, `event_location`, `description`, `host_name`) VALUES ('3', 'Digital Marketing', 'Bomas,Nairobi', 'Come learn from the best about digital marketing and its advantages', 'Gitabu');

