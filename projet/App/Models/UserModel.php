<?php
namespace Projet\App\Models;

use Projet\App\Models\BaseModel;

class UserModel extends BaseModel
{
    protected string $table = 'users';

    public int $id;
    public string $nom;
    public string $prenom;
    public string $email;
    public string $telephone;
    public string $password;
}