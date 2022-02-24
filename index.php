<?php
session_start();

require 'vendor/autoload.php';

require 'core/bootstrap.php';

try {
    Router::load('routes.php')
        ->direct(Request::uri(), Request::method());
} catch (Exception $e) {
    header('location: /');
    exit;
}