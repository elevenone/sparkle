<?php
/**
 *
 * Setting enviroment paths here
 *
 */



// Set the PHP error reporting level.
// Dev: E_ALL | E_STRICT
// Production: E_ALL ^ E_NOTICE
// PHP >= 5.3  E_ALL & ~E_DEPRECATED
// error_reporting(E_ALL | E_STRICT);

// Get the start time and memory for use later
define('APP_START_TIME', microtime(TRUE));
define('APP_START_MEM', memory_get_usage());

$application = '../application';
$system = '../system';

define('DOCROOT', realpath(dirname(__FILE__)).DIRECTORY_SEPARATOR);

if ( ! is_dir($application) AND is_dir(DOCROOT.$application))
{
	$application = DOCROOT.$application;
}

if ( ! is_dir($system) AND is_dir(DOCROOT.$system))
{
	$system = DOCROOT.$system;
}

define('APPPATH', realpath($application).DIRECTORY_SEPARATOR);
define('SYSPATH', realpath($system).DIRECTORY_SEPARATOR);

unset($application, $system);



// Start
require SYSPATH.'autoload.php';

// Start the Application
require APPPATH.'bootstrap.php';
