<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panier - E-Commerce</title>
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
                        <a class="nav-link" href="/">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#products">Produits</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link position-relative active" href="#cart">
                            <i class="fas fa-shopping-cart"></i>
                            <span class="badge bg-danger position-absolute top-0 start-100 translate-middle" id="cartCount">3</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Cart Section -->
    <section class="py-5 mt-5">
        <div class="container">
            <h2 class="display-5 fw-bold text-primary mb-4 fade-in-up">
                <i class="fas fa-shopping-cart me-2"></i>Mon Panier
            </h2>

            <div class="row">
                <!-- Cart Items -->
                <div class="col-lg-8">
                    <div class="card shadow-sm fade-in-left">
                        <div class="card-body">
                            <!-- Cart Item 1 -->
                            <div class="cart-item border-bottom pb-3 mb-3">
                                <div class="row align-items-center">
                                    <div class="col-md-2">
                                        <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=200&h=200&fit=crop" 
                                             class="img-fluid rounded" alt="Produit Électronique" style="height: 100px; width: 100px; object-fit: cover;">
                                    </div>
                                    <div class="col-md-4">
                                        <h5 class="mb-1">Produit Électronique</h5>
                                        <p class="text-muted small mb-0">Catégorie: Électronique</p>
                                    </div>
                                    <div class="col-md-2">
                                        <label class="form-label small">Quantité</label>
                                        <div class="input-group input-group-sm">
                                            <button class="btn btn-outline-secondary" type="button">-</button>
                                            <input type="number" class="form-control text-center" value="2" min="1">
                                            <button class="btn btn-outline-secondary" type="button">+</button>
                                        </div>
                                    </div>
                                    <div class="col-md-2 text-center">
                                        <h5 class="text-primary mb-0">159.99€</h5>
                                        <small class="text-muted text-decoration-line-through">199.99€</small>
                                    </div>
                                    <div class="col-md-2 text-end">
                                        <button class="btn btn-sm btn-danger">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Cart Item 2 -->
                            <div class="cart-item border-bottom pb-3 mb-3">
                                <div class="row align-items-center">
                                    <div class="col-md-2">
                                        <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=200&h=200&fit=crop" 
                                             class="img-fluid rounded" alt="Vêtement Premium" style="height: 100px; width: 100px; object-fit: cover;">
                                    </div>
                                    <div class="col-md-4">
                                        <h5 class="mb-1">Vêtement Premium</h5>
                                        <p class="text-muted small mb-0">Catégorie: Vêtements</p>
                                    </div>
                                    <div class="col-md-2">
                                        <label class="form-label small">Quantité</label>
                                        <div class="input-group input-group-sm">
                                            <button class="btn btn-outline-secondary" type="button">-</button>
                                            <input type="number" class="form-control text-center" value="1" min="1">
                                            <button class="btn btn-outline-secondary" type="button">+</button>
                                        </div>
                                    </div>
                                    <div class="col-md-2 text-center">
                                        <h5 class="text-primary mb-0">79.99€</h5>
                                    </div>
                                    <div class="col-md-2 text-end">
                                        <button class="btn btn-sm btn-danger">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between mt-4">
                                <a href="/#products" class="btn btn-outline-primary">
                                    <i class="fas fa-arrow-left me-2"></i>Continuer les achats
                                </a>
                                <button class="btn btn-danger">
                                    <i class="fas fa-trash-alt me-2"></i>Vider le panier
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Order Summary -->
                <div class="col-lg-4">
                    <div class="card shadow-sm sticky-top fade-in-right" style="top: 100px;">
                        <div class="card-header bg-primary text-white">
                            <h5 class="mb-0"><i class="fas fa-receipt me-2"></i>Résumé de la commande</h5>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-2">
                                <span>Sous-total</span>
                                <span>399.97€</span>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <span>Livraison</span>
                                <span class="text-success">Gratuit</span>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <span>Remise</span>
                                <span class="text-danger">-40.00€</span>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between mb-4">
                                <strong>Total</strong>
                                <strong class="text-primary h5 mb-0">359.97€</strong>
                            </div>
                            <button class="btn btn-primary btn-lg w-100 mb-3 pulse-animation">
                                <i class="fas fa-lock me-2"></i>Passer la commande
                            </button>
                            <div class="text-center">
                                <div class="d-flex gap-2 justify-content-center">
                                    <i class="fab fa-cc-visa fa-2x text-primary"></i>
                                    <i class="fab fa-cc-mastercard fa-2x text-danger"></i>
                                    <i class="fab fa-cc-paypal fa-2x text-info"></i>
                                    <i class="fab fa-cc-amex fa-2x text-success"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-5 mt-5">
        <div class="container">
            <div class="text-center">
                <p class="mb-0">&copy; 2024 E-Shop. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/public/asset/js/script.js"></script>
</body>
</html>

