<?php

global $config;
$config = array();
 
// Database
$config['database.name'] = 'clarify';
$config['database.server.type'] = 'mysql';
$config['database.server.host'] = 'localhost';
$config['database.server.port'] = 3306;
$config['database.server.username'] = 'root';
$config['database.server.password'] = '';

// Memcached
$config['memcached.server.name'] = 'localhost';
$config['memcached.server.port'] = 30001;
 
// Application
$config['application.baseurl'] = '/';
$config['application.domain'] = 'http://www.yourdomain.com';

// Security
$config['security.password.hash'] = 'mH284Nks';
$config['security.channel.hash'] = 'fdq23o42';
$config['security.general.hash'] = 'jksuh4882';

// Cache
$config['cache.css.enabled'] = false;
$config['cache.js.enabled'] = false;

// Mailservice
$config['postmark.api.key'] = '';
$config['postmark.from.address'] = '';
$config['postmark.from.name'] = '';
 
?>