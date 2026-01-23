<?php
namespace Projet\App\Core;

class Router
{
    private array $routes = [];
    private array $currentRoute = [];
    
    public function get(string $path, string $action): void
    {
        $this->routes['GET'][$path] = $action;
    }
    
    public function post(string $path, string $action): void
    {
        $this->routes['POST'][$path] = $action;
    }
    
    public function dispatch(string $method, string $uri): void
    {
        $method = strtoupper($method);
        
        // Handle empty URI as root
        if ($uri === '') {
            $uri = '/';
        }
        
        if (isset($this->routes[$method][$uri])) {
            $action = $this->routes[$method][$uri];
            $this->callAction($action);
        } else {
            http_response_code(404);
            echo "Page not found: {$uri}";
            echo "<br><br>Available routes:";
            echo "<ul>";
            if (isset($this->routes[$method])) {
                foreach ($this->routes[$method] as $route => $action) {
                    echo "<li>{$route} -> {$action}</li>";
                }
            }
            echo "</ul>";
        }
    }
    
    private function callAction(string $action): void
    {
        [$controller, $method] = explode('@', $action);
        
        $controllerClass = "Projet\\App\\Controllers\\{$controller}";
        
        if (class_exists($controllerClass)) {
            $controllerInstance = new $controllerClass();
            
            if (method_exists($controllerInstance, $method)) {
                call_user_func([$controllerInstance, $method]);
            } else {
                throw new \Exception("Method {$method} not found in {$controllerClass}");
            }
        } else {
            throw new \Exception("Controller {$controllerClass} not found");
        }
    }
}