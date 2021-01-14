<?php 
require_once 'dao.php';

session_start();

$email = $_POST['email'];
$password = $_POST['password'];
$passwordHash = md5($password);

$user = login($email, $passwordHash);
if ($user != null) {
	$_SESSION['idUser'] = $user['Id_User'];
	$_SESSION['emailUser'] = $user['Txt_Email'];
}

header('Location:index.php');
?>