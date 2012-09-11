<?php


define('BASE', dirname(__FILE__) . '/..');
define('CACHE', dirname(__FILE__) . '/');

require dirname(__FILE__) . '/../../../application/library/bootstrap.php';

// initialize
$core = file_get_contents(BASE . '/js/core/jquery.js');
$core .= file_get_contents(BASE . '/js/core/terrific.js');

$output = '';

// load libraries
foreach (glob(BASE . '/js/libraries/*.js') as $entry) {
    if (is_file($entry)) {
        $output .= file_get_contents($entry);
    }
}

// load plugins
foreach (glob(BASE . '/js/plugins/*.js') as $entry) {
    if (is_file($entry)) {
        $output .= file_get_contents($entry);
    }
}

// load connectors
foreach (glob(BASE . '/js/connectors/*.js') as $entry) {
    if (is_file($entry)) {
        $output .= file_get_contents($entry);
    }
}

// load modules
foreach (glob(APP . '/modules/*', GLOB_ONLYDIR) as $dir) {
    $module = basename($dir);
    $js = $dir . '/js/' . $module . '.js';
    if (is_file($js)) {
        $output .= file_get_contents($js);
    }
    foreach (glob($dir . '/js/skin/*.js') as $entry) {
        if (is_file($entry)) {
            $output .= file_get_contents($entry);
        }
    }
}
    
//require LIBRARY . 'thirdparty/jsmin/jsmin.php';
//$output = JSMin::minify($output);
file_put_contents(CACHE . 'app.js', $core . $output);
header("Content-Type: text/javascript; charset=utf-8");
echo $core . $output;