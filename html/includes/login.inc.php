<?php

if (isset($_POST["submit"])){
	echo "[*] A user submitted login data.";
}else{
	header("location: ../login.php");
}
