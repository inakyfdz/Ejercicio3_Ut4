<?php
require_once __DIR__ . "/../app/bootstrap.php";

if(isLoggedIn()){
    $_site = currentUserRole() === "admin" ? "adminDashboard" : "usserDashboard";
    renderTool($sitio = "$_site", [
        "titulo" =>"dashboard",
        'cabecera1' => "Hola Desde el Dashboard",
        'parrafo1' => "",
        "pie1"=> ""
    ]);
}else{
    http_response_code(401);
}
