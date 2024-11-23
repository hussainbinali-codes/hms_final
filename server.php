
<?php

$publicPath = __DIR__; // Set root as the public path

// Serve static files directly when using the built-in PHP server
$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
$fullPath = $publicPath . $path;

if (file_exists($fullPath) && is_file($fullPath)) {
    // Serve the file directly if it exists
    return false;
}

// Run the Laravel application
require_once __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);