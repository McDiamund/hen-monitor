<?php
$servername = "localhost";
$dBUsername = "mvsmhjmy_HEN";
$dBPassword = "Hen_12345_$";
$dBName = "mvsmhjmy_esp32";
$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);
if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
        
        foreach ($_POST as $name => $val) {
            mysqli_query($conn, "UPDATE LED_status SET status = {$_POST['bpm']} WHERE id = 1;");
        }
     
}
?>