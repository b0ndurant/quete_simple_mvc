<?php
// routing.php
$routes = [
    'Item' => [ // Controller
        ['index', '/', 'GET'], // action, url, HTTP method
        ['add', '/item/add', ['POST','GET']],
        ['edit', '/item/edit/{id}', ['POST','GET']],
        ['show', '/item/{id}', 'GET'], // action, url, HTTP method
        ['delete', '/item/delete', 'POST'],
    ],
    'Category' => [
    	['index', '/categories', 'GET'], // action, url, HTTP method
        ['show', '/category/{id}', 'GET'], // action, url, HTTP method
    ]
];