<?php
require_once 'fbConfig.php';
require_once 'User.php';
include 'head.php';
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$mysqli = new mysqli("localhost", "hotelfb_uid", "hoteldb_rtl&@fucK", "hotelfb");
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
// Prepare an insert statement
$sql = "INSERT INTO votes (uid, hotelname, 'timestamp' ) VALUES (?, ?)";
 
if($stmt = $mysqli->prepare($sql)){
    // Bind variables to the prepared statement as parameters
    $stmt->bind_param("sss", $uid, $hotelname);
    
    /* Set the parameters values and execute
    the statement again to insert another row */
    $uid = "11";
    $hotelname = "2";
    $stmt->execute();
    
    /* Set the parameters values and execute
    the statement to insert a row */
    $uid = "12";
    $hotelname = "4";
    $stmt->execute();
    
    echo "Beírtam.";
} else{
    echo "ERROR: Could not prepare query: $sql. " . $mysqli->error;
}
 
// Close statement
$stmt->close();
 
// Close connection
$mysqli->close();
?>