<?php
namespace Projet\App\Core;

class Router
{
    private array $routes = [];

    public function get(string $path, string $controllerAction)
    {
        $this->routes['GET'][$path] = $controllerAction;
    }

    public function post(string $path, string $controllerAction)
    {
        $this->routes['POST'][$path] = $controllerAction;
    }

    public function resolve()
    {
        $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $method = $_SERVER['REQUEST_METHOD'];

        if (!isset($this->routes[$method][$path])) {
            http_response_code(404);
            echo "Page not found";
            exit;
        }

        $controllerAction = $this->routes[$method][$path];
        [$controllerName, $action] = explode('@', $controllerAction);

        $controllerClass = "Projet\\App\\Controllers\\" . $controllerName;
        $controller = new $controllerClass();

        return $controller->$action();
    }
}
