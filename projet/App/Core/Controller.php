<?php
namespace Projet\App\Core;

use Projet\App\Config\Config;

class Controller
{
    protected function view(string $path, array $data = [])
    {
        // Convertir data en variables
        extract($data);

        // Inclure les helpers pour les vues
        require_once __DIR__ . "/../Views/helpers.php";

        // Path view - corriger le chemin vers Views avec majuscule
        $viewPath = __DIR__ . "/../Views/{$path}.php";
        if (!file_exists($viewPath)) {
            throw new \Exception("View not found: {$viewPath}");
        }
        require_once $viewPath;
    }

    protected function redirect(string $url)
    {
        header("Location: {$url}");
        exit;
    }
}
