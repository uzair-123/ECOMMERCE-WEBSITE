
<?php


    $servername = "localhost";
			$username = "shopout_shopout";
			$password = "qwertyuiop";
			$dbname = "shopout_oswa_inv";
			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);

			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			} else {
				//echo "<p>Connected successfully</p>"; 
			}


			?>
		