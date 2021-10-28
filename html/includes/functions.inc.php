<?php

function emptyInputSignup($name,$uname,$email,$pwd){
	$result;
	if(empty($name) || empty($uname) || empty($email) || empty($email) || empty($pwd)){
		$result = true;
	}
	else{
		$result = false;
	}
	return $result;
}
function invalidUname($uname){
	$result;
	if(!preg_match("/^[a-zA-Z0-9]*$/"),$uname){
		$result = true;
	}
	else{
		$result = false;
	}
	return $result;
}
function invalidEmail($email){
	$result;
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$result = true;
	}
	else{
		$result = false;
	}
	return $result;
}
function pwdMatch(){
	$result;
	if($pwd !== $confpwd) {
		$result = true;
	}
	else{
		$result = false;
	}
	return $result;
}
function userExists($conn,$uname,$email){
	$sql = "SELECT * FROM users WHERE usersUname = ? OR usersEmail = ?;";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt,$sql)){
		header("location: ../signup.php?error=stmtfailure");
		exit();
	}
	mysqli_stmt_bind_param($stmt, "ss", $uname, $email);
	mysqli_stmt_execute($stmt);
	$resultData = mysqli_stmt_geT_result($stmt);
	if(mysqli_fetch_assoc($resultData)){

	}
	else{

	}
}