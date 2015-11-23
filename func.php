<?php
    function rotaValida($rota){
        $rotasValidas = ['home','empresa','produtos','servicos','contato','mostracontato'];

        if(in_array($rota,$rotasValidas) && arquivoExiste($rota)){
            return true;
        }else{
            return false;
        }
    }

    function qualRota(){
        $rota = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
        $rota = substr($rota['path'],1);

        if (empty($rota)){
            $rota = 'home';
        }

        return $rota;
    }

    function arquivoExiste($rota){
        $dir_base = getcwd();
        $arquivo = $dir_base."\\"."$rota".".php";

        return file_exists($arquivo);
    }