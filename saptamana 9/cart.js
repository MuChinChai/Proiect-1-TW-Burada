// Această funcție rulează când pagina s-a încărcat complet
document.addEventListener('DOMContentLoaded', () => {
    updateCartCount();
});

/**
 * Adaugă un produs în coș sau incrementează cantitatea dacă există deja.
 */
function addToCart(id, name, price) {
    // 1. Luăm coșul actual din localStorage sau creăm unul gol
    // '|| []' înseamnă "dacă nu există coș, folosește un array gol"
    let cart = JSON.parse(localStorage.getItem('shoppingCart')) || [];

    // 2. Căutăm dacă produsul există deja în coș
    let existingItem = cart.find(item => item.id === id);

    if (existingItem) {
        // Dacă există, creștem cantitatea
        existingItem.quantity += 1;
    } else {
        // Dacă nu există, îl adăugăm cu cantitatea 1
        cart.push({
            id: id,
            name: name,
            price: price,
            quantity: 1
        });
    }

    // 3. Salvăm coșul actualizat înapoi în localStorage
    localStorage.setItem('shoppingCart', JSON.stringify(cart));

    // 4. Alertăm utilizatorul și actualizăm numărul de pe iconița coșului
    alert(name + " a fost adăugat în coș!");
    updateCartCount();
}

/**
 * Actualizează numărul de produse de pe iconița coșului
 */
function updateCartCount() {
    let cart = JSON.parse(localStorage.getItem('shoppingCart')) || [];
    
    // Calculăm numărul total de articole (nu doar tipuri de produse)
    let totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);

    // Găsim elementul 'cart-count' din meniu și îl actualizăm
    const cartCountElement = document.getElementById('cart-count');
    if (cartCountElement) {
        cartCountElement.innerText = totalItems;
    }
}