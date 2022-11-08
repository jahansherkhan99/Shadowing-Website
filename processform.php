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
		$specialty = $_GET["specialty"];
		$position = $_GET["shadowing/research"];
		$city = $_GET["City"];
		
	
		$result = $conn->query("SELECT * FROM Physicians");
		if ($result->num_rows > 0) {
		  // output data of each row
		  while($row = $result->fetch_assoc()) {
			if ($row["Specialty"] == $specialty && $row["City"] == $city && $row["Shadow/Research"] == $position) {
				echo "Name: " . $row["Name"]. " - Specialty: " . $row["Specialty"]. " - City:" . $row["City"]. " - Shadow/Research: "; echo $row["Shadow/Research"]. "<br>";
		  		}
  			}
		} else {
  			echo "0 results";
		}
		$conn->close();
	?>
</body>
</html>