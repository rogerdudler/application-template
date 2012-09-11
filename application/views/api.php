<?php

define('API_EXAMPLE', 'example');

$api = $route[2];

switch ($api) {
    case API_EXAMPLE:
        $action = $api . '.' . $route[3];
        if (!is_file(LIBRARY . 'api/' . strtolower($api) . '.php')) {
            die('api not available');
        }
        require LIBRARY . 'api/' . strtolower($api) . '.php';
        break;
}

?>