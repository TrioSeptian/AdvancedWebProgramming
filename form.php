<?php
if(isset($_POST['submit'])){

	$name = array("alexwawoo","maria","johdoe","nathan");

	$minimum = 5;
	$maximum = 10;

	$username = $_POST['username'];
	$password = $_POST['password'];

	if(strlen($username) < $minimum) {
			echo "username harus memiliki panjang 5 atau lebih";
		}

	if(strlen($username) > $maximum) {
			echo "username tidak boleh lebih panjang dari 10";
		}

if(!in_array($username, $name)){
			echo "maaf, akses ditolak";
		}else{
			echo "selamat datang";
		}

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP Forms</title>
</head>
<body>
<form action="form.php" method="post">
	<input type="text" name="username" placeholder="Enter Username"/>
	<input type="password" name="password" placeholder="Enter Password"/>
	<br/>
	<input type="submit" name="submit" />
</form>
	
</body>
</html>	