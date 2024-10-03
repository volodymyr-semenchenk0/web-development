<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/':
    case '/home':
        require __DIR__ . '/src/controllers/HomeController.php';
        break;
}