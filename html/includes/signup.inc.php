<?php

if (isset($_POST["submit"])){
	echo "[*] A user submitted signup data.";

	$name = $_POST["name"];
	$uname = $_POST["uname"];
	$email = $_POST["email"];
	$pwd = $_POST["pwd"];
	$confpwd = $_POST["confpwd"];

	require_once 'dbh.inc.php';
	require_once 'functions.inc.php';

	if(emptyInputSignup($name,$uname,$email,$pwd,$confpwd) !== false){
		header("location: ../signup.php?error=emptyinput");
		exit();
	}
	if(invalidUname($uname) !== false){
		header("location: ../signup.php?error=invalidusername");
		exit();
	}
	if(invalidEmail($email) !== false){
		header("location: ../signup.php?error=invalidemail");
		exit();
	}
	if(pwdMatch($pwd, $confpwd) !== false){
		header("location: ../signup.php?error=passwordsdonotmatch");
		exit();
	}
	if(userExists($conn,$uname,$email) !== false){
		header("location: ../signup.php?error=userexists");
		exit();
	}

	createUser($conn,$name,$uname,$email,$pwd);

}else{
	header("location: ../signup.php");
	exit();
}