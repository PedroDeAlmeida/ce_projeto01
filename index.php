<?php
    require_once('func.php');

    $rota = qualRota();
    if(!rotaValida($rota)){
        //http_response_code(404);
        http_response_code(500);
        die;
    }

    require_once('header.php');
    require_once($rota.".php");
    require_once('footer.php');
?>

