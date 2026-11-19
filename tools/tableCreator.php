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
        foreach ($libros as $libros => $valor ) {
            $text .= "<td>$valor</td>";
        }
    }
    $text .= '</tbody>';
    return $text;
}