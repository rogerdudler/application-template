<?php

// lock(); for non-public apis

// Example API
define('API_EXAMPLE_ACTION', 'example.action');

switch ($action) {

	case API_EXAMPLE_ACTION:
		$parameter = $route[4];
		header('Content-Type: application/json');
		echo '{}';
		break;

}