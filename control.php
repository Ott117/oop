<?php
/**
 * Created by PhpStorm.
 * User: 96hro
 * Date: 31/01/2018
 * Time: 09:37
 */
$control = $http->get('control'); // kontrolleri nimi
// koostame vasatav faili nimi, kus kontrolleri sisu asumas
$file = CONTROL_DIR.$control.'.php';
if(file_exists($file) and is_file($file) and is_readable($file)){
    require_once $file;
} else {
    $file = CONTROL_DIR.DEFAULT_CONTROL.'.php';
    require_once $file;
}
