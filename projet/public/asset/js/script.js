// ============================================
// E-COMMERCE JAVASCRIPT - INTERACTIONS & ANIMATIONS
// ============================================

document.addEventListener('DOMContentLoaded', function() {
    
    // ============================================
    // SCROLL TO TOP BUTTON
    // ============================================
    const scrollTopBtn = document.getElementById('scrollTop');
    if (scrollTopBtn) {
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                scrollTopBtn.style.display = 'block';
                scrollTopBtn.classList.add('fade-in');
            } else {
                scrollTopBtn.style.display = 'none';
            }
        });

        scrollTopBtn.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }

    // ============================================
    // PRODUCT FILTERING
    // ============================================
    const filterButtons = document.querySelectorAll('.filter-btn');
    const productItems = document.querySelectorAll('.product-item');

    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Remove active class from all buttons
            filterButtons.forEach(btn => btn.classList.remove('active'));
            // Add active class to clicked button
            this.classList.add('active');

            const filter = this.getAttribute('data-filter');

            productItems.forEach(item => {
                if (filter === 'all' || item.getAttribute('data-category') === filter) {
                    item.style.display = 'block';
                    item.style.animation = 'fadeInUp 0.5s ease';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });

    // ============================================
    // ADD TO CART FUNCTIONALITY
    // ============================================
    const addToCartButtons = document.querySelectorAll('.add-to-cart');
    const cartCount = document.getElementById('cartCount');
    let cartItems = 0;

    addToCartButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Animation
            this.classList.add('bounce-animation');
            setTimeout(() => {
                this.classList.remove('bounce-animation');
            }, 1000);

            // Update cart count
            cartItems++;
            if (cartCount) {
                cartCount.textContent = cartItems;
                cartCount.style.animation = 'pulse 0.5s ease';
            }

            // Show notification
            showNotification('Produit ajouté au panier!', 'success');
        });
    });

    // ============================================
    // QUICK VIEW MODAL
    // ============================================
    const quickViewButtons = document.querySelectorAll('.quick-view');
    
    quickViewButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            // You can implement a modal here
            showNotification('Vue rapide - Fonctionnalité à implémenter', 'info');
        });
    });

    // ============================================
    // WISHLIST FUNCTIONALITY
    // ============================================
    const wishlistButtons = document.querySelectorAll('.btn-outline-danger');
    
    wishlistButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const icon = this.querySelector('i');
            
            if (icon.classList.contains('fa-heart')) {
                icon.classList.remove('fa-heart');
                icon.classList.add('fas', 'fa-heart', 'text-danger');
                this.classList.remove('btn-outline-danger');
                this.classList.add('btn-danger');
                showNotification('Ajouté aux favoris!', 'success');
            } else {
                icon.classList.remove('fa-heart', 'text-danger');
                icon.classList.add('far', 'fa-heart');
                this.classList.remove('btn-danger');
                this.classList.add('btn-outline-danger');
                showNotification('Retiré des favoris', 'info');
            }
        });
    });

    // ============================================
    // PASSWORD TOGGLE (AUTH PAGES)
    // ============================================
    const togglePasswordButtons = document.querySelectorAll('#togglePassword');
    
    togglePasswordButtons.forEach(button => {
        button.addEventListener('click', function() {
            const passwordInput = this.previousElementSibling;
            const icon = this.querySelector('i');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        });
    });

    // ============================================
    // FORM VALIDATION & SUBMISSION
    // ============================================
    const loginForm = document.getElementById('loginForm');
    const signupForm = document.getElementById('signupForm');

    if (loginForm) {
        loginForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            if (email && password) {
                // Simulate loading
                const submitBtn = this.querySelector('button[type="submit"]');
                const originalText = submitBtn.innerHTML;
                submitBtn.innerHTML = '<span class="loading"></span> Connexion...';
                submitBtn.disabled = true;

                setTimeout(() => {
                    showNotification('Connexion réussie!', 'success');
                    submitBtn.innerHTML = originalText;
                    submitBtn.disabled = false;
                    // Redirect would happen here
                }, 1500);
            }
        });
    }

    if (signupForm) {
        signupForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirmPassword').value;

            if (password !== confirmPassword) {
                showNotification('Les mots de passe ne correspondent pas!', 'error');
                return;
            }

            // Simulate loading
            const submitBtn = this.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;
            submitBtn.innerHTML = '<span class="loading"></span> Inscription...';
            submitBtn.disabled = true;

            setTimeout(() => {
                showNotification('Inscription réussie!', 'success');
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
                // Redirect would happen here
            }, 1500);
        });
    }

    // ============================================
    // ADMIN SIDEBAR TOGGLE
    // ============================================
    const sidebarToggle = document.getElementById('sidebarToggle');
    const sidebar = document.getElementById('sidebar');
    const mainContent = document.getElementById('mainContent');

    if (sidebarToggle && sidebar) {
        sidebarToggle.addEventListener('click', function() {
            sidebar.classList.toggle('show');
            if (window.innerWidth > 768) {
                mainContent.classList.toggle('sidebar-collapsed');
            }
        });
    }

    // ============================================
    // ADMIN NAVIGATION
    // ============================================
    const navItems = document.querySelectorAll('.sidebar-nav .nav-item');
    const contentSections = document.querySelectorAll('.content-section');

    navItems.forEach(item => {
        item.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Remove active class from all items
            navItems.forEach(nav => nav.classList.remove('active'));
            contentSections.forEach(section => section.classList.remove('active'));

            // Add active class to clicked item
            this.classList.add('active');

            // Show corresponding section
            const sectionId = this.getAttribute('data-section');
            const targetSection = document.getElementById(sectionId);
            if (targetSection) {
                targetSection.classList.add('active');
            }

            // Close sidebar on mobile
            if (window.innerWidth <= 768) {
                sidebar.classList.remove('show');
            }
        });
    });

    // ============================================
    // CHARTS INITIALIZATION (ADMIN DASHBOARD)
    // ============================================
    const salesChart = document.getElementById('salesChart');
    const categoryChart = document.getElementById('categoryChart');

    if (salesChart) {
        const ctx = salesChart.getContext('2d');
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                    label: 'Ventes',
                    data: [12000, 19000, 15000, 25000, 22000, 30000],
                    borderColor: '#4A90E2',
                    backgroundColor: 'rgba(74, 144, 226, 0.1)',
                    tension: 0.4,
                    fill: true
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });
    }

    if (categoryChart) {
        const ctx = categoryChart.getContext('2d');
        new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Électronique', 'Vêtements', 'Livres', 'Autres'],
                datasets: [{
                    data: [35, 25, 30, 10],
                    backgroundColor: [
                        '#4A90E2',
                        '#50C878',
                        '#FF6B6B',
                        '#FFD93D'
                    ]
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false
            }
        });
    }

    // ============================================
    // SMOOTH SCROLL FOR ANCHOR LINKS
    // ============================================
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href !== '#' && href !== '') {
                e.preventDefault();
                const target = document.querySelector(href);
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            }
        });
    });

    // ============================================
    // INTERSECTION OBSERVER FOR ANIMATIONS
    // ============================================
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);

    // Observe elements with animation classes
    document.querySelectorAll('.fade-in-up, .fade-in-left, .fade-in-right').forEach(el => {
        el.style.opacity = '0';
        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(el);
    });

    // ============================================
    // NOTIFICATION SYSTEM
    // ============================================
    function showNotification(message, type = 'info') {
        // Remove existing notifications
        const existing = document.querySelector('.notification');
        if (existing) {
            existing.remove();
        }

        const notification = document.createElement('div');
        notification.className = `notification notification-${type}`;
        notification.innerHTML = `
            <div class="notification-content">
                <i class="fas ${getNotificationIcon(type)}"></i>
                <span>${message}</span>
            </div>
        `;

        // Add styles
        notification.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            background: ${getNotificationColor(type)};
            color: white;
            padding: 15px 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            z-index: 10000;
            animation: slideIn 0.3s ease;
            min-width: 300px;
        `;

        document.body.appendChild(notification);

        // Auto remove after 3 seconds
        setTimeout(() => {
            notification.style.animation = 'fadeOut 0.3s ease';
            setTimeout(() => notification.remove(), 300);
        }, 3000);
    }

    function getNotificationIcon(type) {
        const icons = {
            success: 'fa-check-circle',
            error: 'fa-exclamation-circle',
            info: 'fa-info-circle',
            warning: 'fa-exclamation-triangle'
        };
        return icons[type] || icons.info;
    }

    function getNotificationColor(type) {
        const colors = {
            success: '#2ECC71',
            error: '#FF4757',
            info: '#4A90E2',
            warning: '#FFD93D'
        };
        return colors[type] || colors.info;
    }

    // Add fadeOut animation
    const style = document.createElement('style');
    style.textContent = `
        @keyframes slideIn {
            from {
                transform: translateX(400px);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }
        @keyframes fadeOut {
            from {
                opacity: 1;
            }
            to {
                opacity: 0;
            }
        }
        .notification-content {
            display: flex;
            align-items: center;
            gap: 10px;
        }
    `;
    document.head.appendChild(style);

    // ============================================
    // SEARCH FUNCTIONALITY (if search bar exists)
    // ============================================
    const searchInput = document.querySelector('input[type="search"]');
    if (searchInput) {
        searchInput.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            // Implement search logic here
        });
    }

    // ============================================
    // RESPONSIVE HANDLING
    // ============================================
    window.addEventListener('resize', function() {
        if (window.innerWidth > 768 && sidebar) {
            sidebar.classList.remove('show');
            mainContent.classList.remove('sidebar-collapsed');
        }
    });

    // ============================================
    // LAZY LOADING FOR IMAGES
    // ============================================
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    if (img.dataset.src) {
                        img.src = img.dataset.src;
                        img.removeAttribute('data-src');
                        observer.unobserve(img);
                    }
                }
            });
        });

        document.querySelectorAll('img[data-src]').forEach(img => {
            imageObserver.observe(img);
        });
    }
});

