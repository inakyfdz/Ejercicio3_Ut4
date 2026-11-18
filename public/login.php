<?php
require_once __DIR__ . "/../app/bootstrap.php";

renderTool('loginPlantilla',[
    "titulo" => "loggin",
    "cabecera1" => "Bienvenido identificate guardador",
    ]);
$error =[];
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $password = isset($_POST["password"]) ? $_POST["password"] : 0;
    logging($email, $password);
}