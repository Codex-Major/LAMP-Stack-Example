<?php

if (isset($_POST["submit"])){
	echo "[*] User submitted login data.";
}else{
	header("location: ../login.php");
}
