<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Contact</title>
		<script src="../javascript/contactValidation.js" type="text/javascript"></script>
		<link rel="stylesheet" href="../css/styles.css">
		<meta charset="utf-8">
	</head>
	
	<body>
    <?php include("nav.php"); ?>

    <form name="myForm" action="submitted.php" onsubmit="return isFormCorrect()" method="post">
			<section id="contact">
				First Name: <input type="text" name="firstName" "id="firstName" ><br><br>
				Last Name: <input type="text" name="lastName" id="lastName"><br><br>
				Email: <input type="text" name="email" id="email" ><br><br>
				Are you applying for a job?<br>
				<input type="radio" name="jobRadio" id="yes">Yes<br>
				<input type="radio" name="jobRadio" id="no">No<br><br>
				If yes, select the desired role:
				<select>
					<option value="none selected"></option>
					<option value="Marketing Coordinator">Marketing Coordinator</option>
					<option value="Front End Developer">Front End Developer</option>
					<option value="Back End Developer">Back End Developer</option>
					<option value="Graphic Designer">Graphic Designer</option>
					<option value="Product Tester">Product Tester</option>
					<option value="Sales Associate">Sales Associate</option>
					<option value="Project Manager">Project Manager</option>
				</select><br><br>
				Additional information/Reason for contact:<br>
				<textarea rows="8" cols="70"></textarea><br>
									
				<input type="submit" name="submit" value="submit">
			</section>
		</form>
			
		
	</body>
</html>