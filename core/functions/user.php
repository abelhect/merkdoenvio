<?php
//-------------function that picks up the result of a query------------------
function mysqli_result($res,$row=0,$col=0){ 
        $numrows = mysqli_num_rows($res); 
            if ($numrows && $row <= ($numrows-1) && $row >=0){
                        mysqli_data_seek($res,$row);
                                $resrow = (is_numeric($col)) ? mysqli_fetch_row($res) : mysqli_fetch_assoc($res);
                                if (isset($resrow[$col])){
                                                return $resrow[$col];
                                                        }
                                    }
            return false;
}
//--------------------------------------------------------------------------

function logged_in() {
return (isset($_SESSION['ID'])) ? true : false;
}


function user_exists($username){
require 'core/database/connect.php';//file that connects to database
    $username = sanitize($username);
    $query=mysqli_query($connect, "SELECT COUNT(`ID`) FROM `users` WHERE `UserName` = '$username'");
    return (mysqli_result($query, 0) == 1) ? true: false;
}

function user_active($username){
require 'core/database/connect.php';//file that connects to database
    $username = sanitize($username);
    $query=mysqli_query($connect, "SELECT COUNT(`ID`) FROM `users` WHERE `UserName` = '$username' AND `active` = 1");
    return (mysqli_result($query, 0) == 1) ? true: false;
}

function user_id_from_username($username){
require 'core/database/connect.php';//file that connects to database
    $username = sanitize($username);
    return mysqli_result(mysqli_query($connect, "SELECT `ID` FROM `users` WHERE `UserName` = '$username'"), 0, 'ID');
}

function login($username, $password){
require 'core/database/connect.php';//file that connects to database
    $user_id = user_id_from_username($username);

    $username = sanitize($username);
//    $password = md5($password); ideally we want to encrypt the password when the user registers

    return (mysqli_result(mysqli_query($connect, "SELECT COUNT(`ID`) FROM `users` WHERE `UserName` = '$username' AND `Password` = '$password'"), 0) == 1) ? $user_id : false;
}
?>
