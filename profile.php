<?php
require_once('core/start.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title> LimiSchool - Profile </title>
</head>
<body>

	<?php

if(session::exists('username')) {
	$username = Session::get('username');

	echo "pozdrav" . $username;
}	else {
	Redirect::to('index.php');
}

?>
<hr>
<a href="logout.php">logout</a>

</body>
</html>