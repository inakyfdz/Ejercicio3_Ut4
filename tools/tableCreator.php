<?php
function cogerDatos (){
    return require_once __DIR__ . "/../data/datosTabla.php";
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
    $libros = $datosTabla[0];
    $text = '<thead>';
    foreach ($libros as $parte => $valor) {
        $text .= '<th> ' . $parte . ' </th>';

    }
    $text .= '</thead>';
    return $text;
}

function cuerpo(array $datosTabla) {
    $text = '<tbody>';
    foreach ($datosTabla as $libros ) {
        $text .= '<tr>';
        foreach ($libros as $libro => $valor ) {
            $text .= "<td>$valor</td>";
        }
        $text .= '</tr>';
    }
    $text .= '</tbody>';
    return $text;
}