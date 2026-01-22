<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - E-Commerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="/public/asset/css/style.css">
</head>
<body class="auth-page">
    <div class="auth-container">
        <div class="container">
            <div class="row justify-content-center align-items-center min-vh-100">
                <div class="col-md-5 col-lg-4 col-xl-3">
                    <div class="auth-cardL shadow-lg fade-in-up">
                        <div class="auth-header text-center mb-3">
                            <i class="fas fa-user-circle fa-3x text-primary mb-2"></i>
                            <h4 class="fw-bold mb-1">Connexion</h4>
                            <p class="text-muted small mb-0">Connectez-vous à votre compte</p>
                        </div>
                        <form id="loginForm" class="auth-form">
                            <div class="mb-2">
                                <label for="email" class="form-label small">
                                    <i class="fas fa-envelope me-1 text-primary"></i>Email
                                </label>
                                <input type="email" class="form-control" id="email" name="email" required>
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
                            </div>
                            <div class="mb-2 form-check">
                                <input type="checkbox" class="form-check-input" id="remember">
                                <label class="form-check-label small" for="remember">Se souvenir de moi</label>
                            </div>
                            <button type="submit" class="btn btn-primary w-100 mb-2 pulse-animation">
                                <i class="fas fa-sign-in-alt me-1"></i>Se connecter
                            </button>
                            <div class="text-center">
                                <p class="mb-0 small">Pas encore de compte ? 
                                    <a href="signUp.php" class="text-primary text-decoration-none fw-bold">S'inscrire</a>
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

