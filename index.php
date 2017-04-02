<?php
ini_set('error_reporting', E_ALL);
$f3 = require('vendor/bcosca/fatfree/lib/base.php');

$f3->set('CACHE', 0);
$f3->set('DEBUG',2);

$uipaths = [
    'theme/',
    'theme/templates/',
];

$f3->set('UI', implode(',', $uipaths));

require_once('config/routes.inc');

$f3->run();