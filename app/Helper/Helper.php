<?php

/**
 * All View Share Title Data
 */

if (!function_exists('pageTitle')) {
    function pageTitle($title = ''){
       return view()->share(['title' => $title]);
    }
}

/**
 * Date Format
 */

if (!function_exists('dateFormat')) {
    function dateFormat($title,$date){
       return date($title, strtotime($date));
    }
}
    





?>