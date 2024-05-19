<?php  
if(isset($_GET['getAnswer'])) {

	// String passed inside our GET variable comes from the name attribute of our input element 
	$num1 = $_GET['a'];
	$num2 = $_GET['b'];
	$num3 = $_GET['c'];


	// Create a variable to store the sum.
	$answer = ($num2*$num2) - (4*$num1*$num3);

	// Print the result
	echo "<h2>The answer for the quadratic equation (" . $num2 . ")^2 - 4(" . $num1 .")(" . $num3 . ") is " . $answer . "</h2>";
}
?>