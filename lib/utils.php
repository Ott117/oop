<?php
/**
 * Created by PhpStorm.
 * User: anna.karutina
 * Date: 28.01.2018
 * Time: 16:12
 */
function fixUrl($str){
    return urlencode($str);
}

function fixDb($value){
    return '"'.addslashes ($value).'"';
}