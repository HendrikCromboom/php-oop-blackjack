<?php

spl_autoload_register('thisAutoloader');

function thisAutoloader($Class){
    $location = "ClassLibrary/";
    $extension = ".php";
    $path = $location . $Class . $extension;

    if(!file_exists($path)){
        return false;
    }
    include_once $path;

}