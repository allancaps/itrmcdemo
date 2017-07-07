<!DOCTYPE html>
<html>
<head>
	<title>Second</title>
</head>
<body>
	<h1>Total</h1>
	<hr /><br />

	<center>
	<form method="post" action="third">
		Total: <input type="text" name="txt_total" value=<?php echo $total?>><br />
		<input type="submit" name="btn_submit" value="Pass Data">
	</form>
	<a href="/project1/public/first">Back to First</a>
	</center>
</body>
</html>