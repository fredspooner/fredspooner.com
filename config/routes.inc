<?php
$f3->route('GET @home: /', function($f3, $params) {
    echo \Template::instance()->render('index.html');
});

$f3->route('GET @portfolio: /portfolio', function($f3, $params) {
    print_r($f3->get('PARAMS'));
});

$f3->route('GET @project: /portfolio/@project', function($f3, $params) {
    print_r($f3->get('PARAMS'));
});