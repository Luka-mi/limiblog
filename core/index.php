<?php

require_once('core/start.php');

$korisnici = [
	'ivan' => '123456',
	'dejan' => 'absdefg',
	'mika' => '65gd454'
];

if (Input::exists('post')) {
	$username = Input::get('usernsme');
	$password = Input::get('password');

	// upit u bazu - preskacemo

	if($korisnici[$username] == $password) {
		Session::set('username', $username);
		header('Location:profile.php');

	} else {
		echo "username ili password nisu validni";
	}


}
?>

<!DOCTYPE html>
<html>
<head>
	<title>LimiSchool</title>
</head>
<body>
<form method="POST" action="index.php">
	<input type="text" name="username">
	<input type="text" name="password">
	<button type="submit">Submit</button>
</form>
</body>
</html>