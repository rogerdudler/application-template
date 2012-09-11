<?php

require getcwd() . '/../application/library/bootstrap.php';

// start session
session_start();

// define route
$route = str_replace('?' . $_SERVER['QUERY_STRING'], '', explode('/', $_SERVER['REQUEST_URI']));
if ($route[1] == "") { $route[1] = VIEW_INDEX; }

// view whitelisting, the pragmatic way...
$view = $route[1];
switch ($view) {
	case VIEW_API:
    case VIEW_INDEX:
        break;
    default:
    	// lock() for non-public apps
        break;
}

if ($view != 'empty' && is_file(VIEWS . $view . '.php')) {
    require VIEWS . $view . '.php';
}