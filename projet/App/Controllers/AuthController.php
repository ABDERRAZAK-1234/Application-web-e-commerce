<?php
namespace Projet\App\Controllers;
use Projet\App\Core\Controller;
use Projet\App\services\AuthService;

class AuthController extends Controller
{
    private AuthService $authService;

    public function __construct()
    {
        $this->authService = new AuthService();
    }

public function register()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $data = [
            'nom'       => trim($_POST['lastName'] ?? ''),
            'prenom'    => trim($_POST['firstName'] ?? ''),
            'email'     => trim($_POST['email'] ?? ''),
            'telephone' => trim($_POST['phone'] ?? ''),
            'password'  => $_POST['password'] ?? '',
            'adresse'   => ''
        ];

        $result = $this->authService->register($data);

        if (isset($result['error'])) {
            return $this->view('front/signUp', [
                'error' => $result['error']
            ]);
        }

        $this->redirect('/login');
    }

    return $this->view('front/signUp');
}

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = trim($_POST['email'] ?? '');
            $password = $_POST['password'] ?? '';

            $result = $this->authService->login($email, $password);

            if (isset($result['error'])) {
                return $this->view('front/login', [
                    'error' => $result['error']
                ]);
            }

            // Redirection après connexion réussie
            $this->redirect('/');
        }

        return $this->view('front/login');
    }

    public function logout()
    {
        $this->authService->logout();
        $this->redirect('/login');
    }
}
