document.addEventListener('DOMContentLoaded', () => {
    updateCartCount();

    // verificare daca suntem pe pagina cos si daca sunt chestii
    if (document.getElementById('cart-items-container')) {
        displayCartItems();
    }
});

function updateCartCount() {
    let cart = JSON.parse(localStorage.getItem('shoppingCart')) || [];
    
    let totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);//nr total produse

    // 'cart-count'
    const cartCountElement = document.getElementById('cart-count');
    if (cartCountElement) {
        cartCountElement.innerText = totalItems;
    }
}

function clearCart() {
        if (confirm("Esti sigur ca vrei sa golesti cosul?")) {
            localStorage.removeItem('shoppingCart');
            displayCartItems();
            updateCartCount();
        }
    }

function addToCart(id, name, price) {
    // '|| []' inseamna "daca nu exista cos, foloseste un array gol"
    let cart = JSON.parse(localStorage.getItem('shoppingCart')) || [];

    let existingItem = cart.find(item => item.id === id); // cautare produs in cos

    if (existingItem) {
        existingItem.quantity += 1;
    } else {
        cart.push({
            id: id,
            name: name,
            price: price,
            quantity: 1
        });
    }

	//salvare cos
    localStorage.setItem('shoppingCart', JSON.stringify(cart));
	
    alert(name + " a fost adăugat în coș!");
    updateCartCount();
}

function scadeCantitate(id) {
    let cart = JSON.parse(localStorage.getItem('shoppingCart')) || [];
    let existingItem = cart.find(item => item.id === id);

    if (existingItem) {
        existingItem.quantity -= 1;

        if (existingItem.quantity <= 0) {
            cart = cart.filter(item => item.id !== id);
        }

        localStorage.setItem('shoppingCart', JSON.stringify(cart));
        displayCartItems();
        updateCartCount();
    }
}

function cresteCantitate(id) {
		// luam cosul
        let cart = JSON.parse(localStorage.getItem('shoppingCart')) || [];
        
        // produs dupa id
        let existingItem = cart.find(item => item.id === id);

        if (existingItem) {
            existingItem.quantity += 1;
            
            localStorage.setItem('shoppingCart', JSON.stringify(cart));
            displayCartItems();
            updateCartCount();
        }
    }
	
function displayCartItems() {
    const container = document.getElementById('cart-items-container');
    const totalPriceElement = document.getElementById('cart-total-price');

    // daca nu e pagina de cos, oprim functia ca sa nu dea eroare
    if (!container) return;

    const cart = JSON.parse(localStorage.getItem('shoppingCart')) || [];
    container.innerHTML = ''; 
    let grandTotal = 0;

    if (cart.length === 0) {
        container.innerHTML = '<p>Coșul tău este gol.</p>';
        if(totalPriceElement) totalPriceElement.innerText = 0;
        return;
    }

    cart.forEach(item => {
        const itemTotal = item.quantity * item.price;
        grandTotal += itemTotal;

        const itemElement = document.createElement('div');
        itemElement.classList.add('cart-item');
        
        itemElement.innerHTML = `
            <div>
                <p class="item-name">${item.name}</p>
                <p class="item-details">Cantitate: <strong>${item.quantity}</strong> x ${item.price} lei</p>
            </div>
            <div style="display:flex; gap:10px; align-items:center;">
                <button onclick="scadeCantitate('${item.id}')" style="background:#dc2626;">-</button>
                
                <button onclick="cresteCantitate('${item.id}')" style="background:green;">+</button>
                
                <p style="margin:0; font-weight:bold;">Total: ${itemTotal} lei</p>
            </div>
        `;
        container.appendChild(itemElement);
})
};