<?php
session_start();

if(isset($_SESSION['u_id'])) {
	session_destroy();
	unset($_SESSION['u_id']);
	unset($_SESSION['u_first']);
	unset($_SESSION['u_last']);
	unset($_SESSION['u_email']);
	unset($_SESSION['u_uid']);
	unset($_SESSION['Welc']);



}

	header("Location: https://a2bplumbingandelectrical.co.uk/index.php");

?>
