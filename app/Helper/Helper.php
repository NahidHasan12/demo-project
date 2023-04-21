<?php

/**
 * All View Share Title Data
 */

if (!function_exists('pageTitle')) {
    function pageTitle($title = ''){
       return view()->share(['title' => $title]);
    }
}
    





?>