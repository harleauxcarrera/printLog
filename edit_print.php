<?php
session_start();
if (!isset($_SESSION["authorized"]) || !$_SESSION["authorized"] || !isset($_GET["printID"])) {
  header("Location: http://helper.at.utep.edu/printlog/login.php");
}
?>
