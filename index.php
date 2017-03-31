<?php
require 'vendor/autoload.php';

Resque::setBackend('localhost:6379');
$args = [
    'name' => 'lcp0578'
];
Resque::enqueue('default', 'MyJob', $args);