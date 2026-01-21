// Interaction Panier (US-07)
let cartCount = 0;

function addToCart(productName) {
    cartCount++;
    const badge = document.getElementById('cart-count');
    badge.innerText = cartCount;
    
    // Animation visuelle sur le badge
    badge.classList.add('pulse');
    setTimeout(() => badge.classList.remove('pulse'), 500);

    console.log(`${productName} ajouté au panier.`);
}

// Simulation de filtrage dynamique (US-03)
document.querySelectorAll('.list-group-item').forEach(item => {
    item.addEventListener('click', function() {
        // Logique UI pour changer l'état actif
        document.querySelector('.list-group-item.active').classList.remove('active');
        this.classList.add('active');
    });
});