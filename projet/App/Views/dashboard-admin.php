<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard - ElectroShop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../public/asset/css/style.css">
</head>
<body class="bg-light">

<div class="d-flex" id="wrapper">
    <div class="bg-white border-end shadow-sm" id="sidebar-wrapper" style="width: 280px; min-height: 100vh;">
        <div class="p-4 border-bottom bg-dark text-white">
            <h4 class="mb-0 fw-bold">ADMIN PANEL</h4>
        </div>
        <div class="list-group list-group-flush p-2">
            <a href="#" class="list-group-item list-group-item-action border-0 py-3 active rounded"><i class="bi bi-speedometer2 me-2"></i>Dashboard</a>
            <a href="#" class="list-group-item list-group-item-action border-0 py-3"><i class="bi bi-box-seam me-2"></i>Produits (US-12)</a>
            <a href="#" class="list-group-item list-group-item-action border-0 py-3"><i class="bi bi-tags me-2"></i>Catégories (US-15)</a>
            <a href="#" class="list-group-item list-group-item-action border-0 py-3"><i class="bi bi-cart-check me-2"></i>Commandes (US-17)</a>
            <a href="#" class="list-group-item list-group-item-action border-0 py-3"><i class="bi bi-people me-2"></i>Utilisateurs (US-16)</a>
        </div>
    </div>

    <div id="page-content-wrapper" class="w-100 px-4 py-4">
        <header class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold">Aperçu de l'activité</h2>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addProductModal">
                <i class="bi bi-plus-circle me-2"></i>Nouveau Produit
            </button>
        </header>

        <div class="row g-3 mb-4">
            <div class="col-md-3">
                <div class="card border-0 shadow-sm p-3 border-start border-primary border-5">
                    <small class="text-muted fw-bold">VENTES TOTALES</small>
                    <h3 class="fw-bold mb-0">12,450 €</h3>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 shadow-sm p-3 border-start border-success border-5">
                    <small class="text-muted fw-bold">PRODUITS</small>
                    <h3 class="fw-bold mb-0">154</h3>
                </div>
            </div>
            </div>

        <div class="card border-0 shadow-sm">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="bg-dark text-white text-uppercase small">
                            <tr>
                                <th class="ps-4 py-3">ID</th>
                                <th>Produit</th>
                                <th>Catégorie</th>
                                <th>Prix</th>
                                <th>Stock</th>
                                <th class="text-end pe-4">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="ps-4">#102</td>
                                <td class="fw-bold">iPhone 15 Pro</td>
                                <td>Smartphones</td>
                                <td>1199 €</td>
                                <td><span class="badge bg-success">En stock (45)</span></td>
                                <td class="text-end pe-4">
                                    <button class="btn btn-sm btn-outline-info me-1"><i class="bi bi-pencil"></i></button>
                                    <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>