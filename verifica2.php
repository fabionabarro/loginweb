<?php

if(!$_SESSION['loginw']) {
	header('Location: webmaster.php');
	exit();
}
?>