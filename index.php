<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Check if maintenance mode is active
if (file_exists($maintenance = __DIR__.'/storage/framework/maintenance.php')) {
    require $maintenance;
}

// Require the Composer autoload file
require __DIR__.'/vendor/autoload.php';

// Set the correct paths for the app (public directory)
$app = require_once __DIR__.'/bootstrap/app.php';

// Create the application kernel
$kernel = $app->make(Kernel::class);

// Handle the incoming request
$response = $kernel->handle(
    $request = Request::capture()
)->send();

// Terminate the request
$kernel->terminate($request, $response);
