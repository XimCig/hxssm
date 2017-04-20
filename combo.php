<?php

/**
 *  Css combo
 */

ini_set("display_errors","on");

$query = $_SERVER['QUERY_STRING'];

$cssArr = explode(',',$query);

define("DS",DIRECTORY_SEPARATOR);
foreach ($cssArr as $v) {

    if( preg_match("/^(.*).css$/",$v)) {

        header('Content-type: text/css');
        echo "\n  /*  '.$v.'  */\n  /* CssCombo By Cig */\n";
        echo file_get_contents(dirname(__FILE__) . DS . 'public/css/' . $v);
    }else{

        echo "<h1>you do ?????</h1>";
        break;
    }
}