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


$f3->route('GET @home: /', function($f3, $params) {
    echo \Template::instance()->render('index.html');
});

$f3->route('GET @portfolio: /portfolio/@type', function($f3, $params) {
    print_r($f3->get('PARAMS.type'));
});

$f3->run();