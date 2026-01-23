<?php
namespace Projet\App\Models;

use Projet\App\Models\BaseModel;

class UserModel extends BaseModel
{
    protected string $table = 'clients';

    public int $id;
    public string $nom;
    public string $prenom;
    public string $email;
    public string $telephone;
    public ?string $adresse = null;
    public string $password;
}