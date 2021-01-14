<?php
function isLogged() {
	return array_key_exists('idUser', $_SESSION);
}
function getEmailUser() {
	return $_SESSION['emailUser'];
}