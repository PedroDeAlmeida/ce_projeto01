<?php

$form = filter_input_array(INPUT_POST);

if(!empty($form)) {
    include 'formEnviado.php';
} else {
    include 'formContato.php';
}