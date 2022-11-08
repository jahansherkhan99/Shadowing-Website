<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>
	<link href="style.css" rel="stylesheet">

<body>
	<nav class="navbar">
		<a href="index.html">
			<img class="logo" src="WhatsApp Image 2022-11-07 at 10.28.55 PM.jpeg"></img>
		</a>

        <a href="#" class="toggle-button">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </a>

        <div class = "header">
        <div class="navbar-links">
            <ul id="nav">
		   <li class="book" style="font-weight: bold"><a href="booking.html">About Us</a></li>
           <li class="book" style="font-weight: bold"><a href="booking.html">Contact Us</a></li>
       </ul>
        </div>
        </div>
    </nav>
		<h1 style="padding-top: 60px">Find a physician to</h1>
		<h1 style="padding-top: -20px">shadow in NYC or Boston</h1>

	<!-- <ul id = "topav">
	    <li> <a href="file:///Macintosh HD/Users/jahansherkhan/Documents/Shadowing Website Code/index.html">Log In/Sign Up</a></li>
		<li> <a href="file:///Macintosh HD/Users/jahansherkhan/Documents/Shadowing Website Code/Contact.html">Contact Us</a> </li>
		<li> <a href="file:///Macintosh HD/Users/jahansherkhan/Documents/Shadowing Website Code/Untitled-2.html">About</a> </li>
	</ul> -->


	<div class="head">
            <!-- <div class="head-content">
                <div class="head-text">
                    <strong>Find a Physician to Shadow in NYC or Boston!</strong>
                </div>
            </div> -->
    </div>

	<form align= "center" style = display:block action = "processform.php">
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
			<label for="shadowing/research">Shadowing or Research? </label>
			<select name = "shadowing/research" id = "shadowing/research">
				<option value = "Shadow">Shadowing</option>
				<option value = "Research">Research</option>
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



    </div>
  </div>


</body>
</html>
