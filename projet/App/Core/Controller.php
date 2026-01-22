<?php
namespace Projet\App\Core;

class Controller
{
    protected function view(string $path, array $data = [])
    {
        // Convertir data en variables
        extract($data);

        // Path view
        require_once __DIR__ . "/../views/{$path}.php";
    }

    protected function redirect(string $url)
    {
        header("Location: {$url}");
        exit;
    }
}
