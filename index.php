<?php

$servername = "localhost";
$dBUsername = "mvsmhjmy_HEN";
$dBPassword = "Hen_12345_$";
$dBName = "mvsmhjmy_esp32";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}

$sql = "SELECT * FROM LED_status;";
$result   = mysqli_query($conn, $sql);
$row  = mysqli_fetch_assoc($result);	

?>

<style>
    * {
        margin: 0;
        padding: 0;
    }
    
    body {
        background-color: black;
        color: white;
        font-family: 'Jost', sans-serif;
    }
    
    #contest_img {
        width: 100px;
    }
    
    .bpm-box {
        margin
    }
    
    .container {
        margin-top: 20%;
    }
    
    .container table {
        margin-left: auto;
        margin-right: auto;
    }

</style>

<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js" type="text/javascript"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sono:wght@300&display=swap" rel="stylesheet"
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    
    <div id="refresh">
    
        <h4 style="margin-left: 5px; margin-top: 5px; font-family: 'Sono', sans-serif;">Heart Rate Montior - developed by Nicolas Salazar, Elias Treadway, & Heaven Stamps</h4>
        
        <div class=container>
            <table>
                <tr>
                    <td>
                        <img id="contest_img" src="heart-icon.png">
                    </td>
                    <td style="padding-left: 20px; padding-top: 10px">
                            <?php echo '<h1 class="bpm">'.$row['status'].'</h1>'?>
                            <h3 class="bpm-text">BPM</h3>
                    </td>
                </tr>
            </table>
        </div>
    
    </div>
      
			
			    
		<script type="text/javascript">
			$(document).ready (function () {
				var updater = setTimeout (function () {
					$('div#refresh').load ('index.php', 'update=true');
				}, 10);
			});
		</script>
				
</body>
</html>

</html>
