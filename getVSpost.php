<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<form method="post" action="getVSpost.php">
				Enter name
				<input type="text" name="x" />
				<br>
				<br>
				<input type="submit" value="click" />
				<input type="reset" value="reset" />
		</form>
</body>
</html>
<?php
	if(isset($_POST['x']))
	{
		$a=$_POST['x'];
		echo "your name is $a";
	}
	if(isset($_GET['y']))
	{
		$b=$_GET['y'];	
		echo "your name is $b";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<form method="get" action="getVSpost.php">
			Enter name
			<input type="text" name="y">
			<br>
			<br>
			<input type="submit" value="click" />
			<input type="reset" value="reset" />
		</form>
</body>
</html>