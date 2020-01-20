<?php
/*
// Turn off all error reporting
error_reporting(0);

// Report simple running errors
error_reporting(E_ERROR | E_WARNING | E_PARSE);

// Reporting E_NOTICE can be good too (to report uninitialized
// variables or catch variable name misspellings ...)
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

// Report all errors except E_NOTICE
error_reporting(E_ALL & ~E_NOTICE);
*/

// Report all PHP errors (see changelog)
//error_reporting(E_ALL);

// Report all PHP errors
//error_reporting(-1);


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// error_reporting(E_ALL);
// ini_set('display_errors', '1');


/* MySQL settings */
define( 'NEW_PHP_DB_NAME',     'new_php' );
define( 'NEW_PHP_DB_USER',     'root' );
define( 'NEW_PHP_DB_PASSWORD', '123456789' );
define( 'NEW_PHP_DB_HOST',     'localhost' );
define( 'NEW_PHP_DB_CHARSET',  'utf8mb4' );


require_once('db.php');
