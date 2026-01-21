<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ElectroShop - Boutique de produits électroniques</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../public/asset/css/style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#"><i class="bi bi-cpu me-2"></i>ElectroShop</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a class="nav-link active" href="#">Accueil</a></li>
                <li class="nav-item"><a class="nav-link" href="#categories">Produits</a></li>
            </ul>
            <div class="d-flex align-items-center">
                <a href="cart.php" class="btn btn-outline-light me-2 position-relative">
                    <i class="bi bi-cart3"></i>
                    <span id="cart-count" class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">0</span>
                </a>
                <a href="login.php" class="btn btn-primary btn-sm">Connexion</a>
            </div>
        </div>
    </div>
</nav>

<header class="bg-dark text-white py-5 text-center mb-5 reveal">
    <div class="container">
        <h1 class="display-4 fw-bold">Technologie de pointe, à portée de main</h1>
        <p class="lead">Découvrez notre sélection exclusive de smartphones, ordinateurs et accessoires.</p>
    </div>
</header>

<main class="container mb-5">
    <div class="row">
        <aside class="col-lg-3">
            <div class="card shadow-sm border-0 mb-4 p-3">
                <h5 class="fw-bold mb-3">Catégories</h5>
                <div class="list-group list-group-flush">
                    <button class="list-group-item list-group-item-action active border-0 rounded">Tous les produits</button>
                    <button class="list-group-item list-group-item-action border-0">Ordinateurs</button>
                    <button class="list-group-item list-group-item-action border-0">Smartphones</button>
                    <button class="list-group-item list-group-item-action border-0">Accessoires</button>
                </div>
            </div>
        </aside>

        <div class="col-lg-9">
            <div class="row g-4" id="product-grid">
                <div class="col-md-4 reveal">
    <div class="card h-100 border-0 shadow-sm product-card">
        <div class="position-relative">
            <span class="badge position-absolute top-0 start-0 m-3" style="background-color: var(--accent-orange);">Promo</span>
            <img src="https://images.unsplash.com/photo-1517336714731-489689fd1ca8" class="card-img-top p-3" alt="Produit">
        </div>
        <div class="card-body">
            <h5 class="fw-bold">Smartphone Pro X</h5>
            <div class="d-flex justify-content-between align-items-center mt-3">
                <span class="h5 fw-bold text-primary">899 €</span> <button class="btn btn-primary btn-sm rounded-pill px-3 btn-add-cart">
                    <i class="bi bi-cart-plus me-1"></i> Ajouter
                </button>
            </div>
        </div>
    </div>
</div>
                </div>
        </div>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="../public/asset/js/script.js"></script>
</body>
</html>