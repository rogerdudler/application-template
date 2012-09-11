<?php

define('BASE', dirname(__FILE__) . '/..');
define('CACHE', dirname(__FILE__) . '/');

require dirname(__FILE__) . '/../../../application/library/bootstrap.php';

// load reset css
$output = file_get_contents(BASE . '/css/core/reset.css');

// load plugin css
foreach (glob(BASE . '/css/elements/*.css') as $entry) {
    if (is_file($entry)) {
        $output .= file_get_contents($entry);
    }
}

// load module css including skins
foreach (glob(APP . '/modules/*', GLOB_ONLYDIR) as $dir) {
    $module = basename($dir);
    $css = $dir . '/css/' . strtolower($module) . '.css';
    if (is_file($css)) {
        $output .= file_get_contents($css);
    }
    foreach (glob($dir . '/css/skin/*') as $entry) {
        if (is_file($entry)) {
            $output .= file_get_contents($entry);
        }
    }
}

if (config('cache.css.enabled')) {
    require LIBRARY . 'thirdparty/cssmin/cssmin.php';
    $output = CssMin::minify($output);
}
file_put_contents(CACHE . 'app.css', $output);
header("Content-Type: text/css");
echo $output;

?>
