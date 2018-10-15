<?php
$currency = $_GET["currency"];
session_start();
$_SESSION["currency"] = $currency;
header("Location: home.php");

?>
