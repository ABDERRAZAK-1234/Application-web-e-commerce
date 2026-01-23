<?php
namespace Projet\App\services;

use Projet\App\Models\UserModel;

class AuthService
{
    private UserModel $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function register(array $data): array
    {
        // Vérifier si l'email existe déjà
        $existingUser = $this->userModel->findBy('email', $data['email']);
        
        if ($existingUser) {
            return ['error' => 'Email déjà utilisé'];
        }

        // Hacher le mot de passe
        $data['password'] = password_hash($data['password'], PASSWORD_BCRYPT);
        
        // Ajouter des valeurs par défaut pour les colonnes obligatoires
        $data['adresse'] = $data['adresse'] ?? '';
        $data['id_commande'] = $data['id_commande'] ?? 0;

        if ($this->userModel->create($data)) {
            return ['success' => true];
        }
        
        return ['error' => 'Erreur lors de l\'inscription'];
    }

    public function login(string $email, string $password): array
    {
        $user = $this->userModel->findBy('email', $email);
        
        if (!$user) {
            return ['error' => 'Email ou mot de passe incorrect'];
        }

        if (!password_verify($password, $user['password'])) {
            return ['error' => 'Email ou mot de passe incorrect'];
        }

        // Démarrer la session si ce n'est pas déjà fait
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        // Stocker les informations de l'utilisateur en session
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_email'] = $user['email'];
        $_SESSION['user_name'] = $user['nom'] . ' ' . $user['prenom'];

        return ['success' => true, 'user' => $user];
    }

    public function logout(): void
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        // Détruire toutes les variables de session
        $_SESSION = [];

        // Détruire la session
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }

        session_destroy();
    }
}