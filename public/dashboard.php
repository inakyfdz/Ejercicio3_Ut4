<?php
require_once __DIR__ . "/../app/bootstrap.php";

if(isLoggedIn()){
    $_site = currentUserRole() === "admin" ? "adminDashboard" : "usserDashboard";
    renderTool($sitio = "$_site", [
        "titulo" =>"dashboard",
    ]);
}else{
    http_response_code(401);
}
