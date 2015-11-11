<?php

//Connection Constants to our mysqli Database
define ('DB_NAME', 'merkdoen_members');
define ('DB_USER', 'merkdoen_admin');
define ('DB_PASSWORD', '7363acX10');
define ('DB_HOST', 'localhost');

//Connection to the database
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);
//test the connection to the database
if (!$connection) {die('Could not connect: ' . mysqli_errno($connection));}

//Select which database table we wish to connect to
$db_select = mysqli_select_db($connection, DB_NAME);
//test the selection of the database
if (!$db_select) {die ('Can\'t use ' . DB_NAME . ': ' . mysqli_errno($db_select));}

$value = $_POST['FirstName'];
$value2 = $_POST['LastName'];
$value3 = $_POST['Email'];
$value4 = $_POST['UserName'];
$value5 = $_POST['Password'];

$sql = "INSERT INTO users (FirstName, LastName, Email, UserName, Password) VALUES ('$value', '$value2', '$value3', '$value4', '$value5')";
//test everything inserts to the table
if (!mysqli_query($connection, $sql)) {die ('Error: ' . mysqli_errno($connection));}

//echo '¡Registro Exitoso!';

            header('Location: iniciasesion.php');
            exit();
//mysqli_close($connection);
?>

