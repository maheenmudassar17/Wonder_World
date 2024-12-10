<!DOCTYPE html>
<html>
    <head>
        <title>WONDER WORLD the toyhsop</title>
       
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

       <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
       
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" text="text/css" href="css/style.css">
       <style>
        #snackbar {
  visibility: hidden;
  min-width: 250px;
  margin-left: -125px;
  background-color: #333;
  color: #fff;
  text-align: center;
  border-radius: 2px;
  padding: 16px;
  position: fixed;
  z-index: 1;
  left: 50%;
  bottom: 30px;
  font-size: 17px;
}

#snackbar.show {
  visibility: visible;
  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
  from {bottom: 0; opacity: 0;} 
  to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
  from {bottom: 30px; opacity: 1;} 
  to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}
        .cart-container {
            margin: 20px;
            padding: 10px;
            border: 1px solid #ddd;
            background-color: #fff;
            border-radius: 10px;
            width: 300px;
            
        }

        .cart-container h2 {
            color: #333;
            text-align: center;
        }

        .cart-item {
            display: flex;
            justify-content: space-between;
            padding: 5px 0;
        }

        .remove-from-cart {
            background-color: #ff4d4d;
            border: none;
            color: #fff;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 5px;
            margin-left: 10px;
        }

        .remove-from-cart:hover {
            background-color: #ff1a1a;
        }

        .total-amount {
            font-size: 18px;
            font-weight: bold;
            text-align: right;
            margin-top: 10px;
        }

        .checkout {
            display: block;
            text-align: center;
            margin: 20px 0;
            padding: 10px 20px;
            background-color: var(--blue);
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .checkout:hover {
            background-color: var(--light-color);
        }
        
       

       </style>
    </head>
    
    <?php
// This is the main PHP file where you want to include another PHP file
include 'header.php';
?>
<body>
    
<section class="homep" id="home">
        <div class="contentp">
        <center>
<h1> PRODUCTS </h1>

</center>

        </div>

    </section>           

    

<div class="product-heading">
    <h2 >stuff toys</h2>
</div>
    <section id="stuff-toys">

      <section class="main-content">
       

          <div class="product">
              <img src="image/cuddlycocomelon.webp" alt="Product 1">
              <h3>cuddle cocomelon</h3>
              <h3 class="price">$15</h3>
              <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>
                <button type="submit" onclick="myFunction()">Add to Cart</button>
            <?php else: ?>
                <p>Please <a href="login.php">log in</a> to add to cart.</p>
            <?php endif; ?>
                  </div>
  
          <div class="product">
              <img src="image/stuffbear.jpg" alt="Product 2">
              <h3>stuff bear</h3>
              <h3 class="price">$20</h3>
              <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>
                <button type="submit" onclick="myFunction()">Add to Cart</button>
            <?php else: ?>
                <p>Please <a href="login.php">log in</a> to add to cart.</p>
            <?php endif; ?>
                  </div>
  
          <div class="product">
              <img src="image/stuff1.webp" alt="Product 3">
              <h3>2-feet teddy bear</h3>
              <h3 class="price">$70</h3>
              <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>
                <button type="submit" onclick="myFunction()">Add to Cart</button>
            <?php else: ?>
                <p>Please <a href="login.php">log in</a> to add to cart.</p>
            <?php endif; ?>
          </div>
  
          <div class="product">
              <img src="image/stuff2.webp" alt="Product 4">
              <h3>stuff mickey mouse</h3>
              <h3 class="price">$70</h3>
              <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>
                <button type="submit" onclick="myFunction()">Add to Cart</button>
            <?php else: ?>
                <p>Please <a href="login.php">log in</a> to add to cart.</p>
            <?php endif; ?>
          </div>
  
          <div class="product">
              <img src="image/stuff3.webp" alt="Product 5">
              <h3>Stuff jerry</h3>
              <h3 class="price">$30</h3>
              <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>
                <button type="submit" onclick="myFunction()">Add to Cart</button>
            <?php else: ?>
                <p>Please <a href="login.php">log in</a> to add to cart.</p>
            <?php endif; ?>
          </div>
  
          <div class="product">
              <img src="image/stuff4.jpg" alt="Product 6">
              <h3>5-feet teddy bear </h3>
              <h3 class="price">$150</h3>
              <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>
                <button type="submit" onclick="myFunction()">Add to Cart</button>
            <?php else: ?>
                <p>Please <a href="login.php">log in</a> to add to cart.</p>
            <?php endif; ?>
          </div>
  
          
  
      </section>

    </section>


    
    <div class="product-heading">
  <center>
  <h2 >baby accessories</h2>
  </center>
</div>
<section id="baby-accessories">

        <section class="main-content">
         
  
            <div class="product">
                <img src="image/babycarseat.webp" alt="Product 1">
                <h3>baby car seat</h3>
                <h3 class="price">$240</h3>
                <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>
                <button type="submit" onclick="myFunction()">Add to Cart</button>
            <?php else: ?>
                <p>Please <a href="login.php">log in</a> to add to cart.</p>
            <?php endif; ?>
            </div>
    
            <div class="product">
                <img src="image/babystroller.webp" alt="Product 2">
                <h3>baby stroller</h3>
                <h3 class="price">$300</h3>
                <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>
                <button type="submit" onclick="myFunction()">Add to Cart</button>
            <?php else: ?>
                <p>Please <a href="login.php">log in</a> to add to cart.</p>
            <?php endif; ?>
            </div>
    
            <div class="product">
                <img src="image/babyswing.webp" alt="Product 3">
                <h3 >baby swing</h3>
                <h3 class="price">$130</h3>
                <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>
                <button type="submit" onclick="myFunction()">Add to Cart</button>
            <?php else: ?>
                <p>Please <a href="login.php">log in</a> to add to cart.</p>
            <?php endif; ?>
            </div>
    
            <div class="product">
                <img src="image/babyfeeding.webp" alt="Product 4">
                <h3>baby feeding chair</h3>
                <h3 class="price">$170</h3>
                <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>
                <button type="submit" onclick="myFunction()">Add to Cart</button>
            <?php else: ?>
                <p>Please <a href="login.php">log in</a> to add to cart.</p>
            <?php endif; ?>
            </div>
    
            <div class="product">
                <img src="image/handpick.webp" alt="Product 5">
                <h3>hand pick</h3>
                <h3 class="price">$30</h3>
                <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>
                <button type="submit" onclick="myFunction()">Add to Cart</button>
            <?php else: ?>
                <p>Please <a href="login.php">log in</a> to add to cart.</p>
            <?php endif; ?>
            </div>
    
            <div class="product">
                <img src="image/babywalker.png" alt="Product 6">
                <h3 class="price">baby walker</h3>
                <h3>$100</h3>
                <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>
                <button type="submit" onclick="myFunction()">Add to Cart</button>
            <?php else: ?>
                <p>Please <a href="login.php">log in</a> to add to cart.</p>
            <?php endif; ?>
            </div>
    
            
    
        </section>
  
      </section>

      
    <div class="product-heading">

  <center>
  <h2 >indoor games</h2>
  </center>
  </div>
  <section id="indoor-games">

        <section class="main-content">
         
  
            <div class="product">
                <img src="image/jenga.webp" alt="Product 1">
                <h3>jenga</h3>
                <h3 class="price">$50</h3>
                <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>
                <button type="submit" onclick="myFunction()">Add to Cart</button>
            <?php else: ?>
                <p>Please <a href="login.php">log in</a> to add to cart.</p>
            <?php endif; ?>
            </div>
    
            <div class="product">
                <img src="image/manualcopcar.webp" alt="Product 2">
                <h3>manual cop car</h3>
                <h3 class="price">$310</h3>
                <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>
                <button type="submit" onclick="myFunction()">Add to Cart</button>
            <?php else: ?>
                <p>Please <a href="login.php">log in</a> to add to cart.</p>
            <?php endif; ?>
            </div>
    
            <div class="product">
                <img src="image/uno.jpg" alt="Product 3">
                <h3>uno cards</h3>
                <h3 class="price">$40</h3>
                <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>
                <button type="submit" onclick="myFunction()">Add to Cart</button>
            <?php else: ?>
                <p>Please <a href="login.php">log in</a> to add to cart.</p>
            <?php endif; ?>
            </div>
    
            <div class="product">
                <img src="image/monoply.jpg" alt="Product 4">
                <h3>monoply board</h3>
                <h3 class="price">$70</h3>
                <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>
                <button type="submit" onclick="myFunction()">Add to Cart</button>
            <?php else: ?>
                <p>Please <a href="login.php">log in</a> to add to cart.</p>
            <?php endif; ?>
                    </div>
    
            <div class="product">
                <img src="image/carrom.webp" alt="Product 5">
                <h3>carrom board</h3>
                <h3 class="price">$300</h3>
                <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>
                <button type="submit" onclick="myFunction()">Add to Cart</button>
            <?php else: ?>
                <p>Please <a href="login.php">log in</a> to add to cart.</p>
            <?php endif; ?>
            </div>
    
            <div class="product">
                <img src="image/ifootball.jpg" alt="Product 6">
                <h3>indoor football game</h3>
                <h3 class="price">$190</h3>
                <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>
                <button type="submit" onclick="myFunction()">Add to Cart</button>
            <?php else: ?>
                <p>Please <a href="login.php">log in</a> to add to cart.</p>
            <?php endif; ?>
            </div>
    
            
    
        </section>
  
      </section>

      
    <div class="product-heading">

  <center>
      <h2 >outdoor games</h2>
  </center>
</div>
<section id="outdoor-games">

        <section class="main-content">
         
  
            <div class="product">
                <img src="image/playhouse.webp" alt="Product 1">
                <h3>play house</h3>
                <h3 class="price">$440</h3>
                <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>
                <button type="submit" onclick="myFunction()">Add to Cart</button>
            <?php else: ?>
                <p>Please <a href="login.php">log in</a> to add to cart.</p>
            <?php endif; ?>
            </div>
    
            <div class="product">
                <img src="image/slide.webp" alt="Product 2">
                <h3>plastic slide</h3>
                <h3 class="price">$120</h3>
                <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>
                <button type="submit" onclick="myFunction()">Add to Cart</button>
            <?php else: ?>
                <p>Please <a href="login.php">log in</a> to add to cart.</p>
            <?php endif; ?>
            </div>
    
            <div class="product">
                <img src="image/badm.jpg" alt="Product 3">
                <h3>badminton rackets</h3>
                <h3 class="price">$130</h3>
                <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>
                <button type="submit" onclick="myFunction()">Add to Cart</button>
            <?php else: ?>
                <p>Please <a href="login.php">log in</a> to add to cart.</p>
            <?php endif; ?>
            </div>
    
            <div class="product">
                <img src="image/bask.png" alt="Product 4">
                <h3>basketball for kids</h3>
                <h3 class="price">$370</h3>
                <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>
                <button type="submit" onclick="myFunction()">Add to Cart</button>
            <?php else: ?>
                <p>Please <a href="login.php">log in</a> to add to cart.</p>
            <?php endif; ?>
            </div>
    
            <div class="product">
                <img src="image/trampoline.webp" alt="Product 5">
                <h3>trampoline </h3>
                <h3 class="price">$400</h3>
                <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>
                <button type="submit" onclick="myFunction()">Add to Cart</button>
            <?php else: ?>
                <p>Please <a href="login.php">log in</a> to add to cart.</p>
            <?php endif; ?>
            </div>
    
            <div class="product">
                <img src="image/swim.png" alt="Product 6">
                <h3>swimming pool </h3>
                <h3 class="price">$590</h3>
                <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>
                <button type="submit" onclick="myFunction()">Add to Cart</button>
            <?php else: ?>
                <p>Please <a href="login.php">log in</a> to add to cart.</p>
            <?php endif; ?>
                    </div>
    
            
    
        </section>
  
      </section>


      
    <div class="product-heading">

  <center>
  <h2 >educational toys</h2>
  </center>
  </div>
  <section id="educational-toys">

        <section class="main-content">
         
  
            <div class="product">
                <img src="image/kitchenset.webp" alt="Product 1">
                <h3>kitchen set</h3>
                <h3 class="price">$140</h3>
                <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>
                <button type="submit" onclick="myFunction()">Add to Cart</button>
            <?php else: ?>
                <p>Please <a href="login.php">log in</a> to add to cart.</p>
            <?php endif; ?>
            </div>
    
            <div class="product">
                <img src="image/camptent.jpg" alt="Product 2">
                <h3>tent camp </h3>
                <h3 class="price">$200</h3>
                <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>
                <button type="submit" onclick="myFunction()">Add to Cart</button>
            <?php else: ?>
                <p>Please <a href="login.php">log in</a> to add to cart.</p>
            <?php endif; ?>
            </div>
    
            <div class="product">
                <img src="image/sensorybook.webp" alt="Product 3">
                <h3>sensory learning book</h3>
                <h3 class="price">$130</h3>
                <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>
                <button type="submit" onclick="myFunction()">Add to Cart</button>
            <?php else: ?>
                <p>Please <a href="login.php">log in</a> to add to cart.</p>
            <?php endif; ?>
            </div>
    
            <div class="product">
                <img src="image/digbox.jpg" alt="Product 4">
                <h3>multifunctional digital box</h3>
                <h3 class="price">$70</h3>
                <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>
                <button type="submit" onclick="myFunction()">Add to Cart</button>
            <?php else: ?>
                <p>Please <a href="login.php">log in</a> to add to cart.</p>
            <?php endif; ?>
            </div>
    
            <div class="product">
                <img src="image/smartpad.webp" alt="Product 5">
                <h3>Smart pad</h3>
                <h3 class="price">$230</h3>
                <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>
                <button type="submit" onclick="myFunction()">Add to Cart</button>
            <?php else: ?>
                <p>Please <a href="login.php">log in</a> to add to cart.</p>
            <?php endif; ?>
            </div>
    
            <div class="product">
                <img src="image/dancingcactus.webp" alt="Product 6">
                <h3>dancing cactus</h3>
                <h3 class="price">$190</h3>
                <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>
                <button type="submit" onclick="myFunction()">Add to Cart</button>
            <?php else: ?>
                <p>Please <a href="login.php">log in</a> to add to cart.</p>
            <?php endif; ?>
            </div>
    
            
    
        </section>
  
      </section>

     <div class="product-heading"> 
  <center>
  <h2 >electric toys</h2>
  </center>
</div>
  <section id="electric-toys">

        <section class="main-content">
         
  
            <div class="product">
                <img src="image/musicalpengui.webp" alt="Product 1">
                <h3>musical penguin</h3>
                <h3 class="price">$140</h3>
                <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>
                <button type="submit" onclick="myFunction()">Add to Cart</button>
            <?php else: ?>
                <p>Please <a href="login.php">log in</a> to add to cart.</p>
            <?php endif; ?>
            </div>
    
            <div class="product">
                <img src="image/toy2.jpeg" alt="Product 2">
                <h3>electric car</h3>
                <h3 class="price">$500</h3>
                <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>
                <button type="submit" onclick="myFunction()">Add to Cart</button>
            <?php else: ?>
                <p>Please <a href="login.php">log in</a> to add to cart.</p>
            <?php endif; ?>
            </div>
     
            <div class="product">
                <img src="image/activityrobot.jpg" alt="Product 3">
                <h3>activity robot</h3>
                <h3 class="price">$230</h3>
                <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>
                <button type="submit" onclick="myFunction()">Add to Cart</button>
            <?php else: ?>
                <p>Please <a href="login.php">log in</a> to add to cart.</p>
            <?php endif; ?>
            </div>
    
            <div class="product">
                <img src="image/musicpiano.webp" alt="Product 4">
                <h3>musical piano</h3>
                <h3 class="price">$170</h3>
                <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>
                <button type="submit" onclick="myFunction()">Add to Cart</button>
            <?php else: ?>
                <p>Please <a href="login.php">log in</a> to add to cart.</p>
            <?php endif; ?>
            </div>
    
            <div class="product">
                <img src="image/remotecar.webp" alt="Product 5">
                <h3>remote control car</h3>
                <h3 class="price">$330</h3>
                <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>
                <button type="submit" onclick="myFunction()">Add to Cart</button>
            <?php else: ?>
                <p>Please <a href="login.php">log in</a> to add to cart.</p>
            <?php endif; ?>
            </div>
    
            <div class="product">
                <img src="image/remh.jpg" alt="Product 6">
                <h3>remote control hellicoptor</h3>
                <h3 class="price">$390</h3>
                <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>
                <button type="submit" onclick="myFunction()">Add to Cart</button>
            <?php else: ?>
                <p>Please <a href="login.php">log in</a> to add to cart.</p>
            <?php endif; ?>
            </div>
    
            
    
        </section>
  
      </section>
      <center>
      <div class="cart-container">
        <h2>Shopping Cart</h2>
        <div id="cart-items"></div>
        <div class="total-amount">Total: $<span id="total-amount">0.00</span></div>
        <a href="checkout.php" class="checkout">Checkout</a>
    </div>
  
    </center> 
    <div id="snackbar">Product Added to Cart</div>

<script>
function myFunction() {
  var x = document.getElementById("snackbar");
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}
</script>

    <script>
    document.addEventListener('DOMContentLoaded', () => {
        const addToCartButtons = document.querySelectorAll('button[type="submit"]');
        const cartItemsContainer = document.getElementById('cart-items');
        const totalAmountElement = document.getElementById('total-amount');

        addToCartButtons.forEach(button => {
            button.addEventListener('click', addToCart);
        });

        function addToCart(event) {
            const button = event.target;
            const product = button.parentElement;
            const name = product.querySelector('h3').textContent;
            const price = parseFloat(product.querySelector('.price').textContent.replace('$', ''));

            let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
            cartItems.push({ name, price });
            localStorage.setItem('cartItems', JSON.stringify(cartItems));

            renderCartItems();
            
        }

        function renderCartItems() {
            const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
            cartItemsContainer.innerHTML = '';
            let totalAmount = 0;

            cartItems.forEach((item, index) => {
                totalAmount += item.price;

                const cartItem = document.createElement('div');
                cartItem.classList.add('cart-item');
                cartItem.innerHTML = `
                    <span>${item.name}</span>
                    <span>$${item.price.toFixed(2)}</span>
                    <button class="remove-from-cart" data-index="${index}">Remove</button>
                `;

                cartItem.querySelector('.remove-from-cart').addEventListener('click', (event) => {
                    removeFromCart(event.target.dataset.index);
                });

                cartItemsContainer.appendChild(cartItem);
            });

            totalAmountElement.textContent = `$${totalAmount.toFixed(2)}`;
        }

        function removeFromCart(index) {
            let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
            cartItems.splice(index, 1);
            localStorage.setItem('cartItems', JSON.stringify(cartItems));
            renderCartItems();
        }
       
   



        renderCartItems();
    });
</script>

</body>
    <?php
    include 'footer.php'
    ?>
   

   <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
   <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

   <script src="js/script.js"></script>

   
</html>
 