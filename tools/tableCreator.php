<?php
function cogerDatos (){
    require_once __DIR__ . "/../data/datosTabla.php";
}
function crearTabla() {
    $datosTabla = cogerDatos();
    $text = '<table>';
    $text .= cabecera($datosTabla);
    $text .= cuerpo($datosTabla);
    $text .= '</table>';
    return $text;
}

function cabecera(array $datosTabla) {
    $text = '<thead>';
    foreach ($datosTabla as $key => $value) {
        $text .= "<th>$key</th>";

    }
    $text .= '</thead>';
    return $text;
}

function cuerpo(array $datosTabla) {
    $text = '<tbody>';
    foreach ($datosTabla as $key => $value) {
        $text .= "<td>$value</td>";

    }
    $text .= '</tbody>';
    return $text;
}