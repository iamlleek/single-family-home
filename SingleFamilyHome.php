<!-- Chapter 1 : Exercise 1-3 (page 70) -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Single Family Home</title>
</head>
<body>
	<h1 style="text-align:center;">Single Family Home</h1>
	<h3 style="text-align:center;">Chapter Exercise 1-3</h3>
	<hr/>
	<?php
		$SingleFamilyHome = 399500;
		$SingleFamilyHome_Display = number_format($SingleFamilyHome, 2);

		echo "<p>The current median price of a single family home in pleasanon, CA is <span style='color: red; font-size: 18px;'>$$SingleFamilyHome_Display</span>.</p>";
	?>

</body>
</html>