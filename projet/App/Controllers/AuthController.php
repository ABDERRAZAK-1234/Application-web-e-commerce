<?php 

use Projet\App\Services\AuthService;
use Projet\App\Core\Controller;

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
            $result = $this->authService->register([
                'nom' => $_POST['lastName'],
                'prenom' => $_POST['firstName'],
                'email' => $_POST['email'],
                'telephone' => $_POST['phone'],
                'password' => $_POST['password']
            ]);

            if (isset($result['error'])) {
                return $this->view('auth/register', ['error' => $result['error']]);
            }

            $this->redirect('/login');
        }

        $this->view('auth/register');
    }
}


?>