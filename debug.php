<?php
/**
 * Debug
 */
function cy_dump($var){
    if(is_user_logged_in()) {
        echo '<pre>';
        var_dump($var);
        echo '</pre>';
    }
}

function cy_debug($var){
    if(is_user_logged_in()) {
        echo '<p><b>';
        echo $var;
        echo '</b></p>';
    }
}

function cy_dd($var){
    if(is_user_logged_in()) {
        echo '<pre>';
        var_dump($var);
        echo '</pre>';
        die();
    }
}

function cy_cl($var){
    if(is_user_logged_in()) {
        echo '<script>';
        echo 'console.log("' . $var . '")';
        echo '</script>';
    }
}
