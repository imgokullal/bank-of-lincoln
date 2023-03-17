<?php
session_start();
unset($_SESSION["username"]);
unset($_SESSION["password"]);
header("Location:http://localhost/bank-of-lincoln/login.php");
