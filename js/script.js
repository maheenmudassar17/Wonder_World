
// cart.js

function addToCart(name, price, image) {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    let existingProduct = cart.find(item => item.name === name);
    if (existingProduct) {
        existingProduct.quantity++;
    } else {
        cart.push({ name, price, image, quantity: 1 });
    }
    localStorage.setItem('cart', JSON.stringify(cart));
    window.location.href = 'product.php';
}

function loadCart() {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    let cartItems = document.getElementById('cart-items');
    let cartTotal = document.getElementById('cart-total');
    let total = 0;

    cartItems.innerHTML = '';
    cart.forEach((item, index) => {
        total += item.price * item.quantity;
        let li = document.createElement('li');
        li.innerHTML = `
            <div class="cart-item">
                <img src="${/image/item.image}" alt="${item.name}">
                <div class="cart-item-details">
                    <h4>${item.name}</h4>
                    <p>$${item.price} x ${item.quantity} = $${item.price * item.quantity}</p>
                </div>
                <div class="cart-item-controls">
                    <button onclick="decrementQuantity(${index})">-</button>
                    <span>${item.quantity}</span>
                    <button onclick="incrementQuantity(${index})">+</button>
                    <button onclick="removeFromCart(${index})">Delete</button>
                </div>
            </div>
        `;
        cartItems.appendChild(li);
    });

    cartTotal.textContent = total;
}

function incrementQuantity(index) {
    let cart = JSON.parse(localStorage.getItem('cart'));
    cart[index].quantity++;
    localStorage.setItem('cart', JSON.stringify(cart));
    loadCart();
}

function decrementQuantity(index) {
    let cart = JSON.parse(localStorage.getItem('cart'));
    if (cart[index].quantity > 1) {
        cart[index].quantity--;
    } else {
        cart.splice(index, 1);
    }
    localStorage.setItem('cart', JSON.stringify(cart));
    loadCart();
}

function removeFromCart(index) {
    let cart = JSON.parse(localStorage.getItem('cart'));
    cart.splice(index, 1);
    localStorage.setItem('cart', JSON.stringify(cart));
    loadCart();
}
