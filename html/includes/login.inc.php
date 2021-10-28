<?php

if (isset($_POST["submit"])){
	echo "[*] Submitted signup data.";
}else{
	header("location: ../login.php");
}