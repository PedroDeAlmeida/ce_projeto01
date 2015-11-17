<?php
    require_once('func.php');
    require_once('header.php');

    $rota = qualRota();

    if(rotaValida($rota)){
        require_once($rota.".php");
    }else{
        require_once('home.php');
    }

    require_once('footer.php');

?>

