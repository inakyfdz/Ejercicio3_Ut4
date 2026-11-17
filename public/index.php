<?php

require_once __DIR__ . "/../app/bootstrap.php";

renderTool($sitio = "home", [
    "titulo" =>"index",
    'cabecera1' => "Sínodo de los Guardadores",
    'parrafo1' => "El archivo viviente de la humanidad. Preservamos en metal la historia, las ciencias y las religiones del mundo antiguo que el Imperio Final intentó destruir.",
    "pie1"=> "Escribo estas palabras en acero, pues todo lo que no esté grabado en metal es indigno de confianza"
]);