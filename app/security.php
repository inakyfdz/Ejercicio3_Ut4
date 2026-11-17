<?php

function sanitary ($Raw){
    return htmlspecialchars($Raw, ENT_QUOTES, 'UTF-8');
}

function requestHTTPS (){
    return isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off';
}
