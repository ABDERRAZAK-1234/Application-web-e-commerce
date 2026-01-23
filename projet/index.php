<?php
// Start output buffering to prevent headers already sent errors
ob_start();

require_once __DIR__ . '/vendor/autoload.php';

use Projet\App\Core\Router;

session_start();

$router = new Router();

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Load routes
require_once __DIR__ . '/App/Config/routes.php';

// Get current URI and method
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];

// Remove trailing slash
$uri = rtrim($uri, '/');

// Dispatch the route
try {
    $router->dispatch($method, $uri);
} catch (Exception $e) {
    http_response_code(500);
    echo "Error: " . $e->getMessage();
    error_log($e->getMessage());
}

// Flush output buffer
ob_end_flush();