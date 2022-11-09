<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
		$servername = "localhost";
		$username = "uquf4ztabr66j";
		$password = "Narutoftw-99";
		
		$conn = mysqli_connect($servername, $username, $password, "dbzibjovibck8h");
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		
		}
		if(!function_exists("readline")) {
			function readline($prompt = null){
				if($prompt){
					echo $prompt;
				}
				$fp = fopen("php://stdin","r");
				$line = rtrim(fgets($fp, 1024));
				return $line;
			}
		}
		function get_physician($conn, $specialty, $city) {
			$result = $conn->query("SELECT * FROM Physicians");
			$output = 0;
			if ($result->num_rows > 0) {
			  // output data of each row
			  while($row = $result->fetch_assoc()) {
				if ($row["Specialty"] == $specialty && $row["City"] == $city) {
					echo "Name: " . $row["Name"]. " - Specialty: " . $row["Specialty"]. " - City:" . $row["City"]. "";
					$output = 1;
					}
				}
			} else {
					echo "Sorry no doctors available!";
			}
			if ($output == 0) {
				echo "Sorry there are no doctors available with your parameters <br>";
				echo "<a href='https://jahansherk2.sg-host.com/'>Try Again</a>";
			}
		}
		$specialty = $_GET["specialty"];
		$city = $_GET["City"];
		get_physician($conn, $specialty, $city);
		
		
		$conn->close();
	?>
</body>
</html>