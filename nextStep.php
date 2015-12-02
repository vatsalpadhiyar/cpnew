<?php
//check the session status and
//Start the session if not started
if (session_status() != "2") {
	session_start();
}

//Database helper.
require_once 'account/dbhelper.php';
//Login functions.
require_once "account/login_functions.php";

$txtEmail = $_POST["txtEmail"];
$txtPassword = $_POST["txtPassword"];

// To protect MySQL injection (more detail about MySQL injection)
$txtEmail = stripslashes($txtEmail);
$txtPassword = stripslashes($txtPassword);


$txtEmail = mysqli_real_escape_string($con, $txtEmail);
$txtPassword = mysqli_real_escape_string($con, $txtPassword);

$sql = "SELECT * FROM $table_photographer_master WHERE `$field_photographer_email` = '$txtEmail'";

if ($result = mysqli_query($con, $sql)) {
	// Mysql_num_row is counting table row
	$count = mysqli_num_rows($result);

	if ($count >= 1)	{
		echo "registered";
	}
	else{
		$_SESSION["newPhotographerEmail"] = $txtEmail;
		$_SESSION["newPhotographerPassword"]= $txtPassword;

		//Query for inserting record in photographer master.
		$insert_slq_photographer_master = 
		"INSERT INTO $table_photographer_master
		(`$field_photographer_email`,
			`$field_photographer_registered`
			) VALUES (
			'$txtEmail', 
			CURRENT_TIMESTAMP)";
		//Performing the insert query in database

mysqli_query($con, $insert_slq_photographer_master);

		//Extracting the variables from post.
$txtPhotographerId = mysqli_insert_id($con);
$_SESSION["newPhotgrapherId"] = $txtPhotographerId;
 		//Creating the different salt
$txtSalt = createSalt();

		//Generating the encrypted password from password inserted by the user
		//and genereted salt.
$txtHashPassword = encryptPassword($txtPassword, $txtSalt);

		//Query for inserting record in photographer login.
$insert_sql_photographer_login = "INSERT INTO $table_photographer_login 
(`$field_photographer_login_id_FK` , `$field_photographer_login_salt`, `$field_photographer_login_hash_password`) VALUES 
('$txtPhotographerId', '$txtSalt', '$txtHashPassword')";

		//Performing the insert query in database
mysqli_query($con, $insert_sql_photographer_login);

echo "nextStep";
}

}
//else {
	//setcookie("cookieEmail",$txtEmail);
	//setcookie("cookiePassword", $txtPassword);
	//header("location:photographerRegistration_step2.php");	
//}

?>