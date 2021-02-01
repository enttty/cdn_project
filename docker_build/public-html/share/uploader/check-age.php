<?php
echo realpath('path.php'); 
if($_POST != null)
{
	//var_dump($_POST);
	if($_POST['age']>18){
		echo "You are old enough";
	}else{
		echo "You are not old enough";
	}
}
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Check Age</title>
</head>
<body>
	<form action="check-age.php" method="POST">
		<input type="text" name="age">
		<input type="submit">
	</form>
</body>
</html>