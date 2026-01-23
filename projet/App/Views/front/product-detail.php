<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détail Produit - E-Commerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="<?= asset('css/style.css') ?>">
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
                        <a class="nav-link position-relative" href="cart.php">
                            <i class="fas fa-shopping-cart"></i>
                            <span class="badge bg-danger position-absolute top-0 start-100 translate-middle">0</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Product Detail Section -->
    <section class="py-5 mt-5">
        <div class="container">
            <nav aria-label="breadcrumb" class="mb-4">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Accueil</a></li>
                    <li class="breadcrumb-item"><a href="/#products">Produits</a></li>
                    <li class="breadcrumb-item active">Détail Produit</li>
                </ol>
            </nav>

            <div class="row">
                <!-- Product Images -->
                <div class="col-md-6">
                    <div class="product-images fade-in-left">
                        <div class="main-image mb-3">
                            <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=600&h=600&fit=crop" 
                                 class="img-fluid rounded shadow-lg" alt="Produit Électronique Premium" id="mainImage" style="height: 500px; object-fit: cover;">
                        </div>
                        <div class="thumbnail-images d-flex gap-2">
                            <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=150&h=150&fit=crop" 
                                 class="img-thumbnail thumbnail-img active" alt="Thumbnail 1" style="height: 100px; object-fit: cover;">
                            <img src="https://images.unsplash.com/photo-1527864550417-7fd91fc51a46?w=150&h=150&fit=crop" 
                                 class="img-thumbnail thumbnail-img" alt="Thumbnail 2" style="height: 100px; object-fit: cover;">
                            <img src="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?w=150&h=150&fit=crop" 
                                 class="img-thumbnail thumbnail-img" alt="Thumbnail 3" style="height: 100px; object-fit: cover;">
                            <img src="https://images.unsplash.com/photo-1496181133206-80ce9b88a853?w=150&h=150&fit=crop" 
                                 class="img-thumbnail thumbnail-img" alt="Thumbnail 4" style="height: 100px; object-fit: cover;">
                        </div>
                    </div>
                </div>

                <!-- Product Info -->
                <div class="col-md-6">
                    <div class="product-info fade-in-right">
                        <span class="badge bg-danger mb-2">-20%</span>
                        <h1 class="display-5 fw-bold mb-3">Produit Électronique Premium</h1>
                        
                        <div class="rating mb-3">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star-half-alt text-warning"></i>
                            <span class="ms-2 text-muted">(4.5) - 128 avis</span>
                        </div>

                        <div class="price mb-4">
                            <span class="text-decoration-line-through text-muted me-2 h5">199.99€</span>
                            <span class="h2 text-primary fw-bold">159.99€</span>
                        </div>

                        <div class="description mb-4">
                            <h5>Description</h5>
                            <p class="text-muted">
                                Découvrez ce produit électronique de haute qualité avec des fonctionnalités avancées. 
                                Conçu pour offrir une performance exceptionnelle et une durabilité à long terme.
                            </p>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check text-success me-2"></i>Garantie 2 ans</li>
                                <li><i class="fas fa-check text-success me-2"></i>Livraison gratuite</li>
                                <li><i class="fas fa-check text-success me-2"></i>Retour gratuit sous 30 jours</li>
                            </ul>
                        </div>

                        <div class="product-options mb-4">
                            <div class="mb-3">
                                <label class="form-label fw-bold">Couleur</label>
                                <div class="d-flex gap-2">
                                    <button class="btn btn-outline-primary active">Noir</button>
                                    <button class="btn btn-outline-primary">Blanc</button>
                                    <button class="btn btn-outline-primary">Bleu</button>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold">Quantité</label>
                                <div class="input-group" style="max-width: 150px;">
                                    <button class="btn btn-outline-secondary" type="button">-</button>
                                    <input type="number" class="form-control text-center" value="1" min="1" max="10">
                                    <button class="btn btn-outline-secondary" type="button">+</button>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex gap-3 mb-4">
                            <button class="btn btn-primary btn-lg flex-fill add-to-cart">
                                <i class="fas fa-cart-plus me-2"></i>Ajouter au panier
                            </button>
                            <button class="btn btn-outline-danger btn-lg">
                                <i class="fas fa-heart"></i>
                            </button>
                        </div>

                        <div class="product-features">
                            <div class="row g-3">
                                <div class="col-6">
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-shipping-fast fa-2x text-primary me-3"></i>
                                        <div>
                                            <strong>Livraison rapide</strong>
                                            <p class="small text-muted mb-0">Sous 24-48h</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-shield-alt fa-2x text-success me-3"></i>
                                        <div>
                                            <strong>Paiement sécurisé</strong>
                                            <p class="small text-muted mb-0">100% sécurisé</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Tabs -->
            <div class="row mt-5">
                <div class="col-12">
                    <ul class="nav nav-tabs" id="productTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description">
                                Description
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="specifications-tab" data-bs-toggle="tab" data-bs-target="#specifications">
                                Spécifications
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews">
                                Avis (128)
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content card shadow-sm" id="productTabsContent">
                        <div class="tab-pane fade show active card-body" id="description">
                            <h5>Description détaillée</h5>
                            <p>Ce produit électronique révolutionnaire combine innovation et performance. 
                            Avec ses fonctionnalités avancées et son design élégant, il répond à tous vos besoins.</p>
                        </div>
                        <div class="tab-pane fade card-body" id="specifications">
                            <h5>Spécifications techniques</h5>
                            <table class="table">
                                <tr><td>Dimensions</td><td>20 x 15 x 5 cm</td></tr>
                                <tr><td>Poids</td><td>500g</td></tr>
                                <tr><td>Matériau</td><td>Plastique premium</td></tr>
                                <tr><td>Garantie</td><td>2 ans</td></tr>
                            </table>
                        </div>
                        <div class="tab-pane fade card-body" id="reviews">
                            <h5>Avis clients</h5>
                            <div class="review-item border-bottom pb-3 mb-3">
                                <div class="d-flex justify-content-between mb-2">
                                    <strong>Jean Dupont</strong>
                                    <div>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                    </div>
                                </div>
                                <p class="text-muted">Excellent produit, je recommande!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Products -->
    <section class="py-5 bg-light">
        <div class="container">
            <h3 class="mb-4">Produits similaires</h3>
            <div class="row g-4">
                <!-- Related product cards would go here -->
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../public/asset/js/script.js"></script>
    <script>
        // Thumbnail image click handler
        document.querySelectorAll('.thumbnail-img').forEach(thumb => {
            thumb.addEventListener('click', function() {
                document.querySelectorAll('.thumbnail-img').forEach(t => t.classList.remove('active'));
                this.classList.add('active');
                // Replace thumbnail size with main image size for Unsplash URLs
                document.getElementById('mainImage').src = this.src.replace('w=150&h=150', 'w=600&h=600');
            });
        });
    </script>
</body>
</html>

