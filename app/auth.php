<?php

function getUsersInfo() :array {
    return require __DIR__ . "data/user.php";
}

function getUserInfoByEmail($email) :? array {
    $users =getUsersInfo();
    foreach ($users as $user) {
        if ($user['email'] == $email) {
            return $user;
        };
    };
    return null;
}

function logging ($email, $password) :void {
    $buscado =getUserInfoByEmail($email);

    if( $buscado == null || $buscado['password'] != $password) {
        $error[] = 'Error en la autentificacion';
    }else{
        session_start();
        $_SESSION['user'] = [
            'id' => $buscado['id'],
            'name' => $buscado['name'],
            'email' => $buscado['email'],
            'role' => $buscado['role']

        ];
        header('Location: /public/dashboard.php');
    };

}

function isLoggedIn() :bool {
    return isset($_SESSION['user']) && is_array($_SESSION['user']);
}

function currentUser () :?array {
    if(!isLoggedIn()) {
        return null;
    }
    return $_SESSION['user'];
}
function currentUserRole() :?string {
    $userAsig = currentUser();
    if($userAsig == null) {
        return null;
    }
    return $userAsig['role'];
}
function logOut() :void {
    session_destroy();
    header('Location: /public/index.php');
}