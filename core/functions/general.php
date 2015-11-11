<?php

function sanitize($data){
require 'core/database/connect.php';//file that connects to database
return mysqli_real_escape_string($connect, $data);
}
?>
