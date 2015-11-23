<?php

$form = filter_input_array(INPUT_POST);

if(!empty($form)) {
    require_once('formEnviado.php');
} else {
    require_once('formContato.php');
}