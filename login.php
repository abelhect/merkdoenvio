<?php
include 'core/init.php';

include 'includes/overall/header.php';

if (empty($_POST) === false) {
    $username = $_POST['UserName'];
    $password = $_POST['Password'];

    if (empty($username) === true || empty($password) === true){
        $errors[] = '<p style="color:white;text-align:center">Necesita entrar nombre de usuario y contrasena.</p>';
    }else if (user_exists($username) === false){
        $errors[] = '<p style="color:white;text-align:center">No encontramos su nombre de usuario. ¿Se ha registrado?</p>';
    }else if (user_active($username) === false) {
        $errors[] = '<p style="color:white;text-align:center">¡No a activado su cuenta!</p>';
    }else{
        $login = login($username, $password);
        if ($login === false){
        $errors[] = '<p style="color:white;text-align:center">Esta combinacion de usuario y contrasena es incorrecta</p>';
        }else {
            $_SESSION['ID'] = $login;
            header('Location: index.php');
            exit();
            //set the user session
            //redirect user to home
        }
    }
    print_r($errors);

}
include 'includes/overall/footer.php';
?>
