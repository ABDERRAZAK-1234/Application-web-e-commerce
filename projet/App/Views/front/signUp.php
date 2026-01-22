<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - E-Commerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="/public/asset/css/style.css">
</head>

<body class="auth-page">
    <div class="auth-container">
        <div class="container">
            <div class="row justify-content-center align-items-center min-vh-100 py-4">
                <div class="col-md-6 col-lg-5 col-xl-4">
                    <div class="auth-card shadow-lg fade-in-up">
                        <div class="auth-header text-center mb-3">
                            <i class="fas fa-user-plus fa-3x text-primary mb-2"></i>
                            <h4 class="fw-bold mb-1">Créer un compte</h4>
                            <p class="text-muted small mb-0">Rejoignez-nous dès aujourd'hui</p>
                        </div>
                        <form id="signupForm" class="auth-form" method="POST" action="/register">
                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <label for="lastName" class="form-label small">
                                        <i class="fas fa-user me-1 text-primary"></i>Nom
                                    </label>
                                    <input type="text" class="form-control" id="lastName" name="lastName" required>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="firstName" class="form-label small">
                                        <i class="fas fa-user me-1 text-primary"></i>Prénom
                                    </label>
                                    <input type="text" class="form-control" id="firstName" name="firstName" required>
                                </div>
                            </div>
                            <div class="mb-2">
                                <label for="email" class="form-label small">
                                    <i class="fas fa-envelope me-1 text-primary"></i>Email
                                </label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-2">
                                <label for="phone" class="form-label small">
                                    <i class="fas fa-phone me-1 text-primary"></i>Téléphone
                                </label>
                                <input type="tel" class="form-control" id="phone" name="phone" required>
                            </div>
                            <div class="mb-2">
                                <label for="password" class="form-label small">
                                    <i class="fas fa-lock me-1 text-primary"></i>Mot de passe
                                </label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="password" name="password" required>
                                    <button class="btn btn-outline-secondary btn-sm" type="button" id="togglePassword">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                                <div class="form-text small">Minimum 8 caractères</div>
                            </div>
                            <button type="submit" class="btn btn-primary w-100 mb-2 pulse-animation">
                                <i class="fas fa-user-plus me-1"></i>S'inscrire
                            </button>
                            <div class="text-center">
                                <p class="mb-0 small">Déjà un compte ?
                                    <a href="login.php" class="text-primary text-decoration-none fw-bold">Se connecter</a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/public/asset/js/script.js"></script>
</body>

</html>