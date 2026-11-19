<?php

require_once __DIR__ . "/security.php";
require_once __DIR__ . "/auth.php";

require_once __DIR__ ."/../tools/renderTool.php";
require_once __DIR__ ."/../tools/tableCreator.php";

ini_set('session.use_strict_mode', 1);

session_start();

$_SESSION['visitas'] = ($_SESSION['visitas'] ?? 0) + 1;

function renderErrors(array $error) {

    foreach ($error as $e) {
        echo "<p>$e</p>";
    }
}