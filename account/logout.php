<?php
	if (session_status() != "2") {
	session_start();
}

	session_unset();
    session_destroy();
	header ("location:../index.php");
?>