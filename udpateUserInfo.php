<?php
//check the session status and
//Start the session if not started
if (session_status() != "2") {
	session_start();
}

//Database helper.
require_once 'account/dbhelper.php';

//Extracting the variables from post.
$txtFirstName = $_POST["txtFirstName"];
$txtLastName = $_POST["txtLastName"];
$selectGender = $_POST["male"];
$txtContact = $_POST["txtContact"];
$txtAbout = $_POST["txtAbout"];

echo $txtFirstName ;
echo $txtLastName ;
echo $selectGender ;
echo $txtContact ;
echo $txtAbout ;

// To protect MySQL injection (more detail about MySQL injection)
$txtFirstName = stripcslashes($txtFirstName);
$txtLastName =stripcslashes($txtLastName);
$selectGender = stripcslashes($selectGender);
$txtContact = stripcslashes($txtContact);
$txtAbout = stripcslashes($txtAbout);

$txtFirstName = mysqli_real_escape_string($con, $txtFirstName);
$txtLastName =mysqli_real_escape_string($con, $txtLastName);
$selectGender = mysqli_real_escape_string($con, $selectGender);
$txtContact = mysqli_real_escape_string($con, $txtContact);
$txtAbout = mysqli_real_escape_string($con, $txtAbout);

$txtEmail = $_SESSION['newPhotographerEmail'];
$txtNewPhotographerID = $_SESSION["newPhotgrapherId"];

?>