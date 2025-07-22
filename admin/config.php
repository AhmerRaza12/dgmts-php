<?php
// Error Reporting Turn On
ini_set('error_reporting', E_ALL);

// Setting up the time zone
date_default_timezone_set('America/New_York');

// Host Name
$dbhost = 'localhost';

// Database Name
$dbname = 'u757952358_dgweb';

// Database Username
$dbuser = 'u757952358_dgweb';

// Database Password
$dbpass = 'kSU8Ke+RLl?1';

// Defining base url
// define("BASE_URL", "https://dgweb.myvintech.com/");

define("BASE_URL", "https://dgmtsphp.byethost24.com/dgmts/dgweb/");

// Getting Admin url
define("ADMIN_URL", BASE_URL . "admin" . "/");

try {
	$pdo = new PDO("mysql:host=sql309.byethost24.com;dbname=b24_39402776_dgmts", "b24_39402776", "dgmtsphp");
    // Set the PDO error mode to exception
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch( PDOException $ex ) {
    echo "Connection error :" . $ex->getMessage();
}