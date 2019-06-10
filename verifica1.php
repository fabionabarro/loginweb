<?php
session_start();
if(isset($_SESSION['login'])) {
	header('Location: agenda.php');
	exit();
}
if(isset($_SESSION['loginw'])) {
	header('Location: webmaster.php');
	exit();
}
?>