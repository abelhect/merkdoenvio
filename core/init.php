<?php
session_start();
error_reporting(); //eliminates the ugly default error if database doesnt connect
require 'database/connect.php';//file that connects to database and adds users to it
require 'functions/general.php';//file that sanitizes user data
require 'functions/user.php';//file that relates to users logged on

$error = array();
?>
