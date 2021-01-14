<?php
require_once 'dbUtil.php';

function createNewUser($firstName, $lastName, $email, $passwordHash) {
	$conn = myPdo();
	$query = $conn->prepare('INSERT INTO Tbl_User (Nm_First, Nm_Last, Txt_Email, Txt_Password_Hash) VALUES (:firstName, :lastName, :email, :passwordHash)');
	$query->bindParam(':firstName', $firstName, PDO::PARAM_STR);
	$query->bindParam(':lastName', $lastName, PDO::PARAM_STR);
	$query->bindParam(':email', $email, PDO::PARAM_STR);
	$query->bindParam(':passwordHash', $passwordHash, PDO::PARAM_STR);
	$query->execute();
}
function login($email, $passwordHash) {
	$query = "select u.* from Tbl_User u where lower(u.Txt_Email) = '" . strtolower($email) . "' and u.Txt_Password_Hash = '" . $passwordHash . "'";
	echo '<br>' . $query . '<br>';
	return myPdo()->query($query)->fetch();
}