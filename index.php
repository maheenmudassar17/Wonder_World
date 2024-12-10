<!DOCTYPE html>
<html>
    <head>
        <title>WONDER WORLD the toyhsop</title>
        <link rel="icon" type="image/x-icon" href="favicon.jpg">

       
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

       <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
       
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" text="text/css" href="css/style.css">

<style>
   
  #snackbar {
  visibility: hidden;
  min-width: 250px;
  margin-left: -125px;
  background-color: blue;
  color: #fff;
  text-align: center;
  border-radius: 2rem;
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
    <body>
        <?php
// This is the main PHP file where you want to include another PHP file
include 'header.php';
?>


    <section class="home" id="home">
        <div class="content">
            <h3>THE WORLD OF TOYS AND JOYS ....!</h3>
            <p>Welcome to WONDER WORLD, the ultimate destination for all things toys! Step into a magical world where imagination knows no bounds. At WONDER WORLD, we believe that every child deserves to experience the joy and wonder of play. From classic toys to the latest trends, we've got it all! Explore our wide selection of toys, games, puzzles, and more, carefully curated to inspire creativity and spark endless adventures.WONDER WORLD is here to bring smiles and laughter to everyone. Get ready to embark on a journey of imagination and fun!
            </p>

            <a href="products.php" class="btnn">shop now </a>
        </div>

    </section>           

  <div>
            <section class="categories" id="categories">
              
<body> <center>
  <h1>CATEGORIES</h1>
</center>
  
<div class="features">

 

  <div class="feature">
 
      <img src="image/stuffbear.jpg" alt="stuff toys">
      <h3> <a href="products.php#stuff-toys" >stuff toys </a></h3>
      <p></p>
  </div>
  <div class="feature">
      <img src="image/babystroller.webp" alt="baby accessories">
      <h3> <a href="products.php#baby-accessories" >baby accessories</a> </h3>
      <p></p>
  </div>
  <div class="feature">
      <img src="image/jenga.webp" alt="indoor games">
      <h3> <a href="products.php#indoor-games" >indoor games</a> </h3>
      <p></p>
  </div>
  
<!--<button class="view-more-button">View More</button>-->
<b>
<a href="categories.php" class="view-more-button">View More</a>
</b>
</div>

            </section>
  </div> 

  <center>
    <h1>ABOUT US</h1><br>
  </center>
 
  <section class="about-us">
  
    <div class="about-us-content">
     
      <h2>WHO WE ARE ? </h2>
      <p>Welcome to our toyshop! We are a family-owned business that has been providing high-quality toys to children of all ages for over 20 years. Our mission is to inspire creativity, imagination, and learning through play. Our team of toy experts carefully selects each toy to ensure that it is safe, durable, and engaging. We believe that toys should be more than just entertainment - they should be a source of joy, discovery, and growth. That's why we are committed to providing the best toys and the best customer service to help you find the perfect toy for your child.</p>
      <a href="about.php " class="learn-more">Learn More</a>
    </div>
    <div class="about-us-image">
      <img src="image/about.jpg" alt="About Us image">
    </div>
  </section>
    









  <section class="categories" id="categories">
              
              <body> <center>
                <h1>FEATURED PRODUCTS</h1>
              </center>
                
              <div class="features">
              
               
              <br><br><br><br><br><br><br>
                <div class="feature">
               
                   
            <div >
                <img src="image/toy2.jpeg" alt="Product 2">
                <h3>electric car</h3>
                <h3 class="price">$500</h3>
                <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>
                <button class="view-more-button" type="submit" onclick="myFunction()">Add to Cart</button>
            <?php else: ?>
                <p>Please <a href="login.php">log in</a> to add to cart.</p>
            <?php endif; ?>
            </div>
                </div>
<br><br><br><br><br><br>
                <div class="feature">
                <div>
                <img src="image/playhouse.webp" alt="Product 1">
                <h3>play house</h3>
                <h3 class="price">$440</h3>
                <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>
                <button class="view-more-button" type="submit" onclick="myFunction()">Add to Cart</button>
            <?php else: ?>
                <p>Please <a href="login.php">log in</a> to add to cart.</p>
            <?php endif; ?>
            </div>
                </div>
                <br><br><br><br><br><br>


                <div class="feature">
                <div >
              <img src="image/stuff4.jpg" alt="Product 6">
              <h3>5-feet teddy bear </h3>
              <h3 class="price">$150</h3>
              <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>
                <button class="view-more-button" type="submit" onclick="myFunction()">Add to Cart</button>
            <?php else: ?>
                <p>Please <a href="login.php">log in</a> to add to cart.</p>
            <?php endif; ?>
          </div>
  
                </div>
                <br><br><br><br><br><br>

              <!--<button class="view-more-button">View More</button>-->
              <b>
              <a href="categories.php" class="view-more-button">View More</a>
              </b>
              </div>
              
                          </section>

<script>
                          <div id="snackbar">Product Added to Cart</div>

<script>

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
include 'footer.php';
?>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <script src="js/script.js"></script>

   
</html>
