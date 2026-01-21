<?php 
namespace Projet\App\Models;
use Projet\App\Models\Categorie;
class Produit {
    protected string $nom;
    protected float $prixUnit;
    protected int $qte;
    protected string $description;
    protected ?Categorie $categorie; // composition

    public function __construct(
        string $nom,
        float $prixUnit,
        int $qte,
        string $description,
        ?Categorie $categorie = null
    ) {
        $this->nom = $nom;
        $this->prixUnit = $prixUnit;
        $this->qte = $qte;
        $this->description=$description;
        $this->categorie = $categorie;
    }

    public function getCategorie(): ?Categorie {
        return $this->categorie;
    }
}

?>