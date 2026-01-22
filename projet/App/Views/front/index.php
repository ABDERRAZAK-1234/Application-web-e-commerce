<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce - Accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="/public/asset/css/style.css">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top shadow-lg">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">
                <i class="fas fa-shopping-bag me-2"></i>E-Shop
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="/">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#products">Produits</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#categories">Catégories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link position-relative" href="#cart">
                            <i class="fas fa-shopping-cart"></i>
                            <span class="badge bg-danger position-absolute top-0 start-100 translate-middle" id="cartCount">0</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown">
                            <i class="fas fa-user"></i> Mon Compte
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="login.php">Connexion</a></li>
                            <li><a class="dropdown-item" href="signUp.php">Inscription</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center min-vh-100">
                <div class="col-lg-6">
                    <div class="hero-content fade-in-left">
                        <h1 class="display-3 fw-bold text-white mb-4">Bienvenue dans notre Boutique</h1>
                        <p class="lead text-white mb-4">Découvrez une large gamme de produits de qualité à des prix imbattables</p>
                        <div class="d-flex gap-3 flex-wrap">
                            <a href="#products" class="btn btn-light btn-lg px-5 py-3 pulse-animation">
                                <i class="fas fa-shopping-bag me-2"></i>Découvrir les produits
                            </a>
                            <a href="login.php" class="btn btn-outline-light btn-lg px-5 py-3">
                                <i class="fas fa-sign-in-alt me-2"></i>Se connecter
                            </a>
                            <a href="signUp.php" class="btn btn-outline-light btn-lg px-5 py-3">
                                <i class="fas fa-user-plus me-2"></i>S'inscrire
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-image fade-in-right">
                        <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=800&h=600&fit=crop" alt="E-Commerce Hero" class="img-fluid rounded-4 shadow-lg">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section id="products" class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-4 fw-bold text-primary mb-3">Nos Produits</h2>
                <p class="lead text-muted">Découvrez notre sélection de produits</p>
            </div>
            
            <!-- Filter Buttons -->
            <div class="row mb-4">
                <div class="col-12">
                    <div class="d-flex justify-content-center flex-wrap gap-2">
                        <button class="btn btn-outline-primary filter-btn active" data-filter="all">Tous</button>
                        <button class="btn btn-outline-primary filter-btn" data-filter="electronics">Électronique</button>
                        <button class="btn btn-outline-primary filter-btn" data-filter="clothing">Vêtements</button>
                        <button class="btn btn-outline-primary filter-btn" data-filter="books">Livres</button>
                    </div>
                </div>
            </div>

            <!-- Products Grid -->
            <div class="row g-4" id="productsGrid">
                <!-- Product Card 1 -->
                <div class="col-md-6 col-lg-4 col-xl-3 product-item" data-category="electronics">
                    <div class="card product-card h-100 shadow-sm hover-lift">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=500&h=500&fit=crop" class="card-img-top" alt="Produit Électronique" style="height: 250px; object-fit: cover;">
                            <span class="badge bg-danger position-absolute top-0 end-0 m-2">-20%</span>
                            <button class="btn btn-sm btn-primary position-absolute bottom-0 end-0 m-2 quick-view">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                        <div class="card-body">
                            <a href="/product-detail" class="text-decoration-none text-dark">
                                <h5 class="card-title">Produit Électronique</h5>
                            </a>
                            <p class="text-muted small mb-2">Catégorie: Électronique</p>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                    <span class="text-decoration-line-through text-muted me-2">199.99€</span>
                                    <span class="h5 text-primary mb-0">159.99€</span>
                                </div>
                            </div>
                            <div class="d-flex gap-2">
                                <button class="btn btn-primary flex-fill add-to-cart">
                                    <i class="fas fa-cart-plus me-1"></i>Ajouter
                                </button>
                                <button class="btn btn-outline-danger">
                                    <i class="fas fa-heart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Card 2 -->
                <div class="col-md-6 col-lg-4 col-xl-3 product-item" data-category="clothing">
                    <div class="card product-card h-100 shadow-sm hover-lift">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=500&h=500&fit=crop" class="card-img-top" alt="Vêtement Premium" style="height: 250px; object-fit: cover;">
                            <button class="btn btn-sm btn-primary position-absolute bottom-0 end-0 m-2 quick-view">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Vêtement Premium</h5>
                            <p class="text-muted small mb-2">Catégorie: Vêtements</p>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="h5 text-primary mb-0">79.99€</span>
                            </div>
                            <div class="d-flex gap-2">
                                <button class="btn btn-primary flex-fill add-to-cart">
                                    <i class="fas fa-cart-plus me-1"></i>Ajouter
                                </button>
                                <button class="btn btn-outline-danger">
                                    <i class="fas fa-heart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Card 3 -->
                <div class="col-md-6 col-lg-4 col-xl-3 product-item" data-category="books">
                    <div class="card product-card h-100 shadow-sm hover-lift">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1544947950-fa07a98d237f?w=500&h=500&fit=crop" class="card-img-top" alt="Livre Best-Seller" style="height: 250px; object-fit: cover;">
                            <span class="badge bg-success position-absolute top-0 end-0 m-2">Nouveau</span>
                            <button class="btn btn-sm btn-primary position-absolute bottom-0 end-0 m-2 quick-view">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Livre Best-Seller</h5>
                            <p class="text-muted small mb-2">Catégorie: Livres</p>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="h5 text-primary mb-0">24.99€</span>
                            </div>
                            <div class="d-flex gap-2">
                                <button class="btn btn-primary flex-fill add-to-cart">
                                    <i class="fas fa-cart-plus me-1"></i>Ajouter
                                </button>
                                <button class="btn btn-outline-danger">
                                    <i class="fas fa-heart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Card 4 -->
                <div class="col-md-6 col-lg-4 col-xl-3 product-item" data-category="electronics">
                    <div class="card product-card h-100 shadow-sm hover-lift">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1527864550417-7fd91fc51a46?w=500&h=500&fit=crop" class="card-img-top" alt="Gadget Tech" style="height: 250px; object-fit: cover;">
                            <button class="btn btn-sm btn-primary position-absolute bottom-0 end-0 m-2 quick-view">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Gadget Tech</h5>
                            <p class="text-muted small mb-2">Catégorie: Électronique</p>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="h5 text-primary mb-0">129.99€</span>
                            </div>
                            <div class="d-flex gap-2">
                                <button class="btn btn-primary flex-fill add-to-cart">
                                    <i class="fas fa-cart-plus me-1"></i>Ajouter
                                </button>
                                <button class="btn btn-outline-danger">
                                    <i class="fas fa-heart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Card 5 - Smartphone -->
                <div class="col-md-6 col-lg-4 col-xl-3 product-item" data-category="electronics">
                    <div class="card product-card h-100 shadow-sm hover-lift">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?w=500&h=500&fit=crop" class="card-img-top" alt="Smartphone Premium" style="height: 250px; object-fit: cover;">
                            <span class="badge bg-success position-absolute top-0 end-0 m-2">Nouveau</span>
                            <button class="btn btn-sm btn-primary position-absolute bottom-0 end-0 m-2 quick-view">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Smartphone Premium</h5>
                            <p class="text-muted small mb-2">Catégorie: Électronique</p>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                    <span class="text-decoration-line-through text-muted me-2">899.99€</span>
                                    <span class="h5 text-primary mb-0">749.99€</span>
                                </div>
                            </div>
                            <div class="d-flex gap-2">
                                <button class="btn btn-primary flex-fill add-to-cart">
                                    <i class="fas fa-cart-plus me-1"></i>Ajouter
                                </button>
                                <button class="btn btn-outline-danger">
                                    <i class="fas fa-heart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Card 6 - Laptop -->
                <div class="col-md-6 col-lg-4 col-xl-3 product-item" data-category="electronics">
                    <div class="card product-card h-100 shadow-sm hover-lift">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1496181133206-80ce9b88a853?w=500&h=500&fit=crop" class="card-img-top" alt="Laptop Ultrabook" style="height: 250px; object-fit: cover;">
                            <span class="badge bg-danger position-absolute top-0 end-0 m-2">-15%</span>
                            <button class="btn btn-sm btn-primary position-absolute bottom-0 end-0 m-2 quick-view">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Laptop Ultrabook</h5>
                            <p class="text-muted small mb-2">Catégorie: Électronique</p>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                    <span class="text-decoration-line-through text-muted me-2">1299.99€</span>
                                    <span class="h5 text-primary mb-0">1099.99€</span>
                                </div>
                            </div>
                            <div class="d-flex gap-2">
                                <button class="btn btn-primary flex-fill add-to-cart">
                                    <i class="fas fa-cart-plus me-1"></i>Ajouter
                                </button>
                                <button class="btn btn-outline-danger">
                                    <i class="fas fa-heart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Card 7 - Écouteurs -->
                <div class="col-md-6 col-lg-4 col-xl-3 product-item" data-category="electronics">
                    <div class="card product-card h-100 shadow-sm hover-lift">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=500&h=500&fit=crop&q=80" class="card-img-top" alt="Écouteurs Sans Fil" style="height: 250px; object-fit: cover;">
                            <button class="btn btn-sm btn-primary position-absolute bottom-0 end-0 m-2 quick-view">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Écouteurs Sans Fil</h5>
                            <p class="text-muted small mb-2">Catégorie: Électronique</p>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="h5 text-primary mb-0">89.99€</span>
                            </div>
                            <div class="d-flex gap-2">
                                <button class="btn btn-primary flex-fill add-to-cart">
                                    <i class="fas fa-cart-plus me-1"></i>Ajouter
                                </button>
                                <button class="btn btn-outline-danger">
                                    <i class="fas fa-heart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Card 8 - Smartwatch -->
                <div class="col-md-6 col-lg-4 col-xl-3 product-item" data-category="electronics">
                    <div class="card product-card h-100 shadow-sm hover-lift">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=500&h=500&fit=crop&q=80" class="card-img-top" alt="Smartwatch Pro" style="height: 250px; object-fit: cover;">
                            <span class="badge bg-warning position-absolute top-0 end-0 m-2">Promo</span>
                            <button class="btn btn-sm btn-primary position-absolute bottom-0 end-0 m-2 quick-view">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Smartwatch Pro</h5>
                            <p class="text-muted small mb-2">Catégorie: Électronique</p>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                    <span class="text-decoration-line-through text-muted me-2">249.99€</span>
                                    <span class="h5 text-primary mb-0">199.99€</span>
                                </div>
                            </div>
                            <div class="d-flex gap-2">
                                <button class="btn btn-primary flex-fill add-to-cart">
                                    <i class="fas fa-cart-plus me-1"></i>Ajouter
                                </button>
                                <button class="btn btn-outline-danger">
                                    <i class="fas fa-heart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Card 9 - Tablette -->
                <div class="col-md-6 col-lg-4 col-xl-3 product-item" data-category="electronics">
                    <div class="card product-card h-100 shadow-sm hover-lift">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1544244015-0df4b3ffc6b0?w=500&h=500&fit=crop" class="card-img-top" alt="Tablette 10 Pouces" style="height: 250px; object-fit: cover;">
                            <span class="badge bg-success position-absolute top-0 end-0 m-2">Nouveau</span>
                            <button class="btn btn-sm btn-primary position-absolute bottom-0 end-0 m-2 quick-view">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Tablette 10 Pouces</h5>
                            <p class="text-muted small mb-2">Catégorie: Électronique</p>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="h5 text-primary mb-0">349.99€</span>
                            </div>
                            <div class="d-flex gap-2">
                                <button class="btn btn-primary flex-fill add-to-cart">
                                    <i class="fas fa-cart-plus me-1"></i>Ajouter
                                </button>
                                <button class="btn btn-outline-danger">
                                    <i class="fas fa-heart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Card 10 - Enceinte Bluetooth -->
                <div class="col-md-6 col-lg-4 col-xl-3 product-item" data-category="electronics">
                    <div class="card product-card h-100 shadow-sm hover-lift">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1608043152269-423dbba4e7e1?w=500&h=500&fit=crop" class="card-img-top" alt="Enceinte Bluetooth" style="height: 250px; object-fit: cover;">
                            <button class="btn btn-sm btn-primary position-absolute bottom-0 end-0 m-2 quick-view">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Enceinte Bluetooth</h5>
                            <p class="text-muted small mb-2">Catégorie: Électronique</p>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                    <span class="text-decoration-line-through text-muted me-2">129.99€</span>
                                    <span class="h5 text-primary mb-0">99.99€</span>
                                </div>
                            </div>
                            <div class="d-flex gap-2">
                                <button class="btn btn-primary flex-fill add-to-cart">
                                    <i class="fas fa-cart-plus me-1"></i>Ajouter
                                </button>
                                <button class="btn btn-outline-danger">
                                    <i class="fas fa-heart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Card 11 - Caméra -->
                <div class="col-md-6 col-lg-4 col-xl-3 product-item" data-category="electronics">
                    <div class="card product-card h-100 shadow-sm hover-lift">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1516035069371-29a1b244cc32?w=500&h=500&fit=crop" class="card-img-top" alt="Caméra 4K" style="height: 250px; object-fit: cover;">
                            <span class="badge bg-danger position-absolute top-0 end-0 m-2">-25%</span>
                            <button class="btn btn-sm btn-primary position-absolute bottom-0 end-0 m-2 quick-view">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Caméra 4K</h5>
                            <p class="text-muted small mb-2">Catégorie: Électronique</p>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                    <span class="text-decoration-line-through text-muted me-2">599.99€</span>
                                    <span class="h5 text-primary mb-0">449.99€</span>
                                </div>
                            </div>
                            <div class="d-flex gap-2">
                                <button class="btn btn-primary flex-fill add-to-cart">
                                    <i class="fas fa-cart-plus me-1"></i>Ajouter
                                </button>
                                <button class="btn btn-outline-danger">
                                    <i class="fas fa-heart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Card 12 - Clavier Mécanique -->
                <div class="col-md-6 col-lg-4 col-xl-3 product-item" data-category="electronics">
                    <div class="card product-card h-100 shadow-sm hover-lift">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1587829741301-dc798b83add3?w=500&h=500&fit=crop" class="card-img-top" alt="Clavier Mécanique RGB" style="height: 250px; object-fit: cover;">
                            <button class="btn btn-sm btn-primary position-absolute bottom-0 end-0 m-2 quick-view">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Clavier Mécanique RGB</h5>
                            <p class="text-muted small mb-2">Catégorie: Électronique</p>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="h5 text-primary mb-0">149.99€</span>
                            </div>
                            <div class="d-flex gap-2">
                                <button class="btn btn-primary flex-fill add-to-cart">
                                    <i class="fas fa-cart-plus me-1"></i>Ajouter
                                </button>
                                <button class="btn btn-outline-danger">
                                    <i class="fas fa-heart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-5 bg-white">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="text-center feature-box fade-in-up">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-shipping-fast fa-3x text-primary"></i>
                        </div>
                        <h4>Livraison Rapide</h4>
                        <p class="text-muted">Livraison gratuite pour les commandes supérieures à 50€</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center feature-box fade-in-up">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-shield-alt fa-3x text-primary"></i>
                        </div>
                        <h4>Paiement Sécurisé</h4>
                        <p class="text-muted">Transactions sécurisées et protégées</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center feature-box fade-in-up">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-undo fa-3x text-primary"></i>
                        </div>
                        <h4>Retour Gratuit</h4>
                        <p class="text-muted">30 jours pour retourner vos articles</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <h5 class="mb-3">E-Shop</h5>
                    <p>Votre destination pour tous vos besoins de shopping en ligne.</p>
                    <div class="social-links">
                        <a href="#" class="text-white me-3"><i class="fab fa-facebook fa-lg"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-twitter fa-lg"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-instagram fa-lg"></i></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <h5 class="mb-3">Liens Rapides</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white-50">À propos</a></li>
                        <li><a href="#" class="text-white-50">Contact</a></li>
                        <li><a href="#" class="text-white-50">FAQ</a></li>
                        <li><a href="#" class="text-white-50">Politique de confidentialité</a></li>
                        <li><a href="login.php" class="text-white-50"><i class="fas fa-sign-in-alt me-2"></i>Connexion</a></li>
                        <li><a href="signUp.php" class="text-white-50"><i class="fas fa-user-plus me-2"></i>Inscription</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5 class="mb-3">Newsletter</h5>
                    <p>Inscrivez-vous pour recevoir nos offres spéciales</p>
                    <div class="input-group">
                        <input type="email" class="form-control" placeholder="Votre email">
                        <button class="btn btn-primary" type="button">S'abonner</button>
                    </div>
                </div>
            </div>
            <hr class="my-4">
            <div class="text-center">
                <p class="mb-0">&copy; 2024 E-Shop. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button -->
    <button id="scrollTop" class="btn btn-primary rounded-circle position-fixed bottom-0 end-0 m-4" style="display: none; width: 50px; height: 50px;">
        <i class="fas fa-arrow-up"></i>
    </button>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/public/asset/js/script.js"></script>
</body>
</html>

