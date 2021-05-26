<?php
session_start();
unset($_SESSION["user_autenticated"]);
header("Location:login_user.php");
?>