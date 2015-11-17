<?php
    function rotaValida($rota){
        $rotasValidas = ['home','empresa','produtos','servicos','contato','mostracontato'];

        if(in_array($rota,$rotasValidas)){
            return true;
        }else{
            return false;
        }
    }

    function qualRota(){
        $rota = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
        $rota = substr($rota['path'],1);
        return $rota;
    }
?>