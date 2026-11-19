<?php

function renderTool(string $sitio, ?array $datos = null)
{
    $plantilla = searchInViews($sitio);
    if ($plantilla == null){
        http_response_code(404);
        echo "<p> Error no se ha podido encontrar pagina </p>";
    }else{
        if($datos != null){
            extract($datos);
        }

        $raiz = dirname(__DIR__);

        require $raiz . '/views/common/header.php';
        require $plantilla;
        require $raiz . '/views/common/footer.php';
    }
}

function searchInViews($Sitio){
    $raiz = dirname(__DIR__);
    $ruta = $raiz. "/views/". $Sitio . ".php";
    if(file_exists($ruta) && is_file($ruta)){
        return $ruta;
    }
    return null;
}