
<?php


    $servername = "localhost";
			$username = "root";
			$password = "123456";
			$dbname = "ecommerce";
			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);

			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			} else {
				//echo "<p>Connected successfully</p>"; 
			}


			?>
		