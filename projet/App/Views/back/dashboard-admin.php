<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - E-Commerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="/public/asset/css/style.css">
</head>
<body class="admin-body">
    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <h4 class="text-white mb-0">
                <i class="fas fa-tachometer-alt me-2"></i>Admin Panel
            </h4>
        </div>
        <nav class="sidebar-nav">
            <a href="#dashboard" class="nav-item active" data-section="dashboard">
                <i class="fas fa-home"></i>
                <span>Dashboard</span>
            </a>
            <a href="#products" class="nav-item" data-section="products">
                <i class="fas fa-box"></i>
                <span>Produits</span>
            </a>
            <a href="#categories" class="nav-item" data-section="categories">
                <i class="fas fa-tags"></i>
                <span>Catégories</span>
            </a>
            <a href="#orders" class="nav-item" data-section="orders">
                <i class="fas fa-shopping-cart"></i>
                <span>Commandes</span>
            </a>
            <a href="#clients" class="nav-item" data-section="clients">
                <i class="fas fa-users"></i>
                <span>Clients</span>
            </a>
            <a href="#reports" class="nav-item" data-section="reports">
                <i class="fas fa-chart-bar"></i>
                <span>Rapports</span>
            </a>
            <a href="#settings" class="nav-item" data-section="settings">
                <i class="fas fa-cog"></i>
                <span>Paramètres</span>
            </a>
        </nav>
        <div class="sidebar-footer">
            <a href="/" class="nav-item">
                <i class="fas fa-sign-out-alt"></i>
                <span>Déconnexion</span>
            </a>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content" id="mainContent">
        <!-- Top Navbar -->
        <nav class="top-navbar">
            <div class="d-flex justify-content-between align-items-center w-100">
                <button class="btn btn-link text-white" id="sidebarToggle">
                    <i class="fas fa-bars fa-lg"></i>
                </button>
                <div class="d-flex align-items-center gap-3">
                    <div class="dropdown">
                        <button class="btn btn-link text-white dropdown-toggle" type="button" data-bs-toggle="dropdown">
                            <i class="fas fa-bell"></i>
                            <span class="badge bg-danger">3</span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><h6 class="dropdown-header">Notifications</h6></li>
                            <li><a class="dropdown-item" href="#">Nouvelle commande #1234</a></li>
                            <li><a class="dropdown-item" href="#">Stock faible: Produit XYZ</a></li>
                            <li><a class="dropdown-item" href="#">Nouveau client inscrit</a></li>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-link text-white dropdown-toggle" type="button" data-bs-toggle="dropdown">
                            <i class="fas fa-user-circle fa-lg"></i> Admin
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#"><i class="fas fa-user me-2"></i>Profil</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-cog me-2"></i>Paramètres</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="/"><i class="fas fa-sign-out-alt me-2"></i>Déconnexion</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Dashboard Content -->
        <div class="content-wrapper">
            <!-- Dashboard Section -->
            <section id="dashboard" class="content-section active">
                <div class="container-fluid">
                    <h2 class="page-title mb-4">Dashboard</h2>
                    
                    <!-- Stats Cards -->
                    <div class="row g-4 mb-4">
                        <div class="col-md-6 col-lg-3">
                            <div class="stat-card stat-card-primary fade-in-up">
                                <div class="stat-icon">
                                    <i class="fas fa-dollar-sign"></i>
                                </div>
                                <div class="stat-content">
                                    <h3 class="stat-value">45,230€</h3>
                                    <p class="stat-label">Revenus totaux</p>
                                    <small class="text-success"><i class="fas fa-arrow-up"></i> 12% ce mois</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="stat-card stat-card-success fade-in-up">
                                <div class="stat-icon">
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
                                <div class="stat-content">
                                    <h3 class="stat-value">1,234</h3>
                                    <p class="stat-label">Commandes</p>
                                    <small class="text-success"><i class="fas fa-arrow-up"></i> 8% ce mois</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="stat-card stat-card-warning fade-in-up">
                                <div class="stat-icon">
                                    <i class="fas fa-users"></i>
                                </div>
                                <div class="stat-content">
                                    <h3 class="stat-value">5,678</h3>
                                    <p class="stat-label">Clients</p>
                                    <small class="text-success"><i class="fas fa-arrow-up"></i> 15% ce mois</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="stat-card stat-card-danger fade-in-up">
                                <div class="stat-icon">
                                    <i class="fas fa-box"></i>
                                </div>
                                <div class="stat-content">
                                    <h3 class="stat-value">890</h3>
                                    <p class="stat-label">Produits</p>
                                    <small class="text-danger"><i class="fas fa-arrow-down"></i> 3% ce mois</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Charts and Tables -->
                    <div class="row g-4">
                        <div class="col-lg-8">
                            <div class="card shadow-sm fade-in-left">
                                <div class="card-header bg-primary text-white">
                                    <h5 class="mb-0"><i class="fas fa-chart-line me-2"></i>Ventes des 30 derniers jours</h5>
                                </div>
                                <div class="card-body">
                                    <canvas id="salesChart" height="100"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card shadow-sm fade-in-right">
                                <div class="card-header bg-success text-white">
                                    <h5 class="mb-0"><i class="fas fa-chart-pie me-2"></i>Catégories populaires</h5>
                                </div>
                                <div class="card-body">
                                    <canvas id="categoryChart" height="200"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Recent Orders -->
                    <div class="row mt-4">
                        <div class="col-12">
                            <div class="card shadow-sm fade-in-up">
                                <div class="card-header bg-white">
                                    <h5 class="mb-0"><i class="fas fa-list me-2"></i>Commandes récentes</h5>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Client</th>
                                                    <th>Produit</th>
                                                    <th>Montant</th>
                                                    <th>Statut</th>
                                                    <th>Date</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>#1234</td>
                                                    <td>Jean Dupont</td>
                                                    <td>Produit A</td>
                                                    <td>129.99€</td>
                                                    <td><span class="badge bg-success">Livré</span></td>
                                                    <td>2024-01-15</td>
                                                    <td>
                                                        <button class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#1235</td>
                                                    <td>Marie Martin</td>
                                                    <td>Produit B</td>
                                                    <td>89.99€</td>
                                                    <td><span class="badge bg-warning">En cours</span></td>
                                                    <td>2024-01-15</td>
                                                    <td>
                                                        <button class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#1236</td>
                                                    <td>Pierre Durand</td>
                                                    <td>Produit C</td>
                                                    <td>199.99€</td>
                                                    <td><span class="badge bg-info">En attente</span></td>
                                                    <td>2024-01-14</td>
                                                    <td>
                                                        <button class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Products Section -->
            <section id="products" class="content-section">
                <div class="container-fluid">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h2 class="page-title">Gestion des Produits</h2>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addProductModal">
                            <i class="fas fa-plus me-2"></i>Ajouter un produit
                        </button>
                    </div>
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Image</th>
                                            <th>Nom</th>
                                            <th>Catégorie</th>
                                            <th>Prix</th>
                                            <th>Stock</th>
                                            <th>Statut</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=100&h=100&fit=crop" class="img-thumbnail" alt="Product" style="width: 50px; height: 50px; object-fit: cover;"></td>
                                            <td>Produit A</td>
                                            <td>Électronique</td>
                                            <td>129.99€</td>
                                            <td>45</td>
                                            <td><span class="badge bg-success">Actif</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></button>
                                                <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td><img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=100&h=100&fit=crop" class="img-thumbnail" alt="Product" style="width: 50px; height: 50px; object-fit: cover;"></td>
                                            <td>Produit B</td>
                                            <td>Vêtements</td>
                                            <td>79.99€</td>
                                            <td>12</td>
                                            <td><span class="badge bg-warning">Stock faible</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></button>
                                                <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Categories Section -->
            <section id="categories" class="content-section">
                <div class="container-fluid">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h2 class="page-title">Gestion des Catégories</h2>
                        <button class="btn btn-primary">
                            <i class="fas fa-plus me-2"></i>Ajouter une catégorie
                        </button>
                    </div>
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="card shadow-sm hover-lift">
                                <div class="card-body">
                                    <h5>Électronique</h5>
                                    <p class="text-muted">45 produits</p>
                                    <button class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></button>
                                    <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card shadow-sm hover-lift">
                                <div class="card-body">
                                    <h5>Vêtements</h5>
                                    <p class="text-muted">78 produits</p>
                                    <button class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></button>
                                    <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card shadow-sm hover-lift">
                                <div class="card-body">
                                    <h5>Livres</h5>
                                    <p class="text-muted">123 produits</p>
                                    <button class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></button>
                                    <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Orders Section -->
            <section id="orders" class="content-section">
                <div class="container-fluid">
                    <h2 class="page-title mb-4">Gestion des Commandes</h2>
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID Commande</th>
                                            <th>Client</th>
                                            <th>Montant</th>
                                            <th>Statut</th>
                                            <th>Date</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>#1234</td>
                                            <td>Jean Dupont</td>
                                            <td>129.99€</td>
                                            <td><span class="badge bg-success">Livré</span></td>
                                            <td>2024-01-15</td>
                                            <td>
                                                <button class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></button>
                                                <button class="btn btn-sm btn-success"><i class="fas fa-check"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Clients Section -->
            <section id="clients" class="content-section">
                <div class="container-fluid">
                    <h2 class="page-title mb-4">Gestion des Clients</h2>
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nom</th>
                                            <th>Email</th>
                                            <th>Téléphone</th>
                                            <th>Commandes</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Jean Dupont</td>
                                            <td>jean@example.com</td>
                                            <td>0123456789</td>
                                            <td>5</td>
                                            <td>
                                                <button class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></button>
                                                <button class="btn btn-sm btn-danger"><i class="fas fa-ban"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Reports Section -->
            <section id="reports" class="content-section">
                <div class="container-fluid">
                    <h2 class="page-title mb-4">Rapports</h2>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="card shadow-sm">
                                <div class="card-header bg-primary text-white">
                                    <h5>Rapport de ventes</h5>
                                </div>
                                <div class="card-body">
                                    <p>Générer un rapport détaillé des ventes</p>
                                    <button class="btn btn-primary">Générer le rapport</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card shadow-sm">
                                <div class="card-header bg-success text-white">
                                    <h5>Rapport de clients</h5>
                                </div>
                                <div class="card-body">
                                    <p>Générer un rapport des clients</p>
                                    <button class="btn btn-success">Générer le rapport</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Settings Section -->
            <section id="settings" class="content-section">
                <div class="container-fluid">
                    <h2 class="page-title mb-4">Paramètres</h2>
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <form>
                                <div class="mb-3">
                                    <label class="form-label">Nom du site</label>
                                    <input type="text" class="form-control" value="E-Shop">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Email de contact</label>
                                    <input type="email" class="form-control" value="contact@eshop.com">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Téléphone</label>
                                    <input type="tel" class="form-control" value="0123456789">
                                </div>
                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="/public/asset/js/script.js"></script>
</body>
</html>

