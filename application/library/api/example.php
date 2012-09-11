<?php

lock();

// Example API
define('API_EXAMPLE_ACTION', 'example.action');

switch ($action) {

	case API_EXAMPLE_ACTION:
		$parameter = $route[4];
		break;

}