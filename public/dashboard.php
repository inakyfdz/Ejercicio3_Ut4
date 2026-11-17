<?php
require_once __DIR__ . "/../app/bootstrap.php";
$_site = currentUserRole() === "admin" ? "adminDashboard" : "usserDashboard";
renderTool($sitio = "$_site", [
    "titulo" =>"dashboard",
]);
