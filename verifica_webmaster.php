<?php

if(!$_SESSION['loginw']) {
	header('Location: index.php');
	exit();
}
?>