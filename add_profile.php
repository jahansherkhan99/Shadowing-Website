<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
	<h1>Add a Physician to the Database!</h1>
	<form align= "center" style = display:block method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
			 <label for="name">Name:</label>
			 <input type="text" id="name" name="name" required
			 <br>
			 <br>
			 <br>
			 <label for="specialty">Specialty:</label>
   			 <select name="specialty" id="specialty">
				<option value="Immunology">Allergy and Immunology</option>
				<option value="Anesthesiology">Anesthesiology</option>
				<option value="Cardiology">Cardiology</option> 
				<option value="Dermatology">Dermatology</option>
				<option value="Radiology">Diagnostic Radiology</option>
				<option value="Emergency">Emergency Medicine</option>
				<option value="Family">Family Medicine</option>
				<option value="Internal">Internal Medicine</option>
				<option value="Genetics">Medical Genetics</option>
				<option value="Neurology">Neurology</option>
				<option value="Nuclear">Nuclear Medicine</option>
				<option value="Gynecology">Obstetrics and gynecology</option>
				<option value="Ophthalmology">Ophthalmology</option>
				<option value="Pathology">Pathology</option>
				<option value="Pediatrics">Pediatrics</option>
			    <option value="Physical">Physical medicine and rehabilitation</option>
				<option value="Preventive">Preventive medicine</option>
				<option value="Psychiatry">Psychiatry</option>
				<option value="Radiationonc">Radiation Oncology</option>
				<option value="Surgery">Surgery</option>
				<option value="Urology">Urology</option>
			</select>
			<br>
			<br>
		    <label for="City">City: </label>
			<select name = "City" id = "City">
				<option value = "New York City">New York City</option>
				<option value = "Boston">Boston</option>
			</select>
			<br>
			<br>
			<input type="submit" value="Submit">
	
		</form>
	<?php
		$servername = "localhost";
		$username = "uquf4ztabr66j";
		$password = "Narutoftw-99";
		$conn = mysqli_connect($servername, $username, $password, "dbzibjovibck8h");
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$name = $_POST["name"];
			$specialty = $_POST["specialty"];
			$city = $_POST["City"];
			$sql = "INSERT INTO Physicians (Name, Specialty, City)
			VALUES ('$name', '$specialty', '$city')";
			if ($conn->query($sql) === TRUE) {
			  echo "New record created successfully";
			} else {
			  echo "Error: " . $sql . "<br>" . $conn->error;
			}
	
		}
	
	?>
	
	
</body>
</html>