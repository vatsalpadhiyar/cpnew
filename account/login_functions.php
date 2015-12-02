<?php

function createSalt() {
	// generate a 16-character salt string

	$salt = substr(str_replace('+', '.', base64_encode(md5(mt_rand(), true))), 0, 16);
	//echo "SALT : " . $salt . "<br/>";

	return $salt;
}

function encryptPassword($password, $salt) {
	$algorithm = '5';
	$rounds = 10000;

	// pass in the password, the number of rounds, and the salt
	// $5$ specifies SHA256-CRYPT, use $6$ if you really want SHA512
	$crypted = crypt($password, sprintf('$%s$rounds=%d$%s$', $algorithm, $rounds, $salt));

	//echo "Crypted pass : " . $crypted . "<br>";

	$parts = explode('$', $crypted);

	return $parts[4];
}

function checkPassword($password, $given_salt, $given_hash) {
	$algorithm = '5';
	$rounds = 10000;

	$new_hash = crypt($password, sprintf('$%s$rounds=%d$%s$', $algorithm, $rounds, $given_salt));

	$parts = explode('$', $new_hash);
	// compare
	//echo $given_hash . "<br>" . $parts[4] . "<br>" . var_export($given_hash === $parts[4], true);

	return var_export($given_hash === $parts[4], true);
}
?>