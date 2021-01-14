<?php
require_once 'util.php';

session_start();
?>

<html>
<head></head>
<body>
	<?php
	if (isLogged()) {
		echo 'Logged with ' . getEmailUser();
		echo '<form method="post" role="form" action="./logout.php">';
		echo '<button type="submit">Logout</button>';
		echo '</form>';
	} else {
		echo '<form method="post" role="form" action="./login.php">';
		echo '<input type="text" name="email" placeholder="Email"><br>';
		echo '<input type="password" name="password" placeholder="Password"><br>';
		echo '<button type="submit">Login</button>';
		echo '</form>';
	}
	?>
</body>
</html>