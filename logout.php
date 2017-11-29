<?php
session_start();
session_destroy();
header("Location: http://helper.at.utep.edu/printlog/login.php");
?>
