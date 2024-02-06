<?php
session_start();
unset($_SESSION['sid']);
unset($_SESSION['id']);
header('location:index.php');
?>