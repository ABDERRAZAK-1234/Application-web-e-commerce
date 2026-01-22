<?php
namespace Projet\App\Services;

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
        if ($this->userModel->findByEmail($data['email'])) {
            return ['error' => 'Email déjà utilisé'];
        }

        $data['password'] = password_hash($data['password'], PASSWORD_BCRYPT);
        $this->userModel->create($data);

        return ['success' => true];
    }
}
