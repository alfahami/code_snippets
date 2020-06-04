<?php
$view = explode('/', $view);
$view = $view[1];
function showTitle($view) {
    switch ($view) {
    case 'about':
        return $title = "About US";
        break;

    default:
        return $title = "Home";
    }
}