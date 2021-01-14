<?php
require_once 'dao.php';

session_start();

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = strtolower($_POST['email']);
$password = $_POST['password'];
$passwordHash = md5($password);

createNewUser($firstName, $lastName, $email, $passwordHash);
?>