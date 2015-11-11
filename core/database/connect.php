<?php
$connect_error= 'Disculpe, estamos teniendo problemas de conexion.';

$connect = mysqli_connect('localhost', 'merkdoen_admin', '7363acX10') or die($connect_error);
mysqli_select_db($connect, 'merkdoen_members') or die($connect_error);

?>
