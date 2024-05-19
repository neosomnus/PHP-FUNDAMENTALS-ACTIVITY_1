<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>GETTING THE DISCRIMINANT VALUE</title>
</head>
<body>
	<h1>Enter 3 values to solve the discriminant value:</h1>

	<h2>b^2 - 4ac</h2>

	 <!-- The form submits to the same page using GET method -->
	<form action="testGet.php" method="GET">

		<!-- Input field for the username. Take note of the value stored in the name attribute -->
		<p><label>a: <input type="text" name="a" /></label></p>
		<p><label>b: <input type="text" name="b" /></label></p>
		<p><label>c: <input type="text" name="c" /></label></p>

		<!-- Submit button -->
		<p><input type="submit" value="Submit" name="getAnswer"></p>
	</form>
</body>
</html>