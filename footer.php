<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WONDER WORLD the toyshop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <style>
.fa-snowman {
            width: 5.5rem;
            height: 5.5rem;
        }
        
        .logo1 {
            font-size: 3rem; /* Adjust this size as needed */
        }

        .footer-content {
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding: 1rem 0;
        }
</style>
</head>

<footer>
        <center>
            <p id="para"></p>

<script>
function updateTime() {
    var currentDate = new Date();
    document.getElementById('para').innerHTML = currentDate;
}

// Update time initially
updateTime();

// Update time every second (1000 milliseconds)
setInterval(updateTime, 1000);
</script>
        </center>
        
        <div class="footer-content">
        <div class="logo1">
          <i class="fas fa-snowman"></i>Wonder World</a>
          </div>
          <div class="footer-column">
            <h3>Customer Service</h3>
            <ul>
              <li><a href="contactus.php">Contact Us</a></li>
              <li><a href="privacypolicy.php">Privacy Policy</a></li>
              <li><a href="termsandcondition.php">Terms & Condition</a></li>
            </ul>
          </div>
          <div class="footer-column">
            <h3>Company</h3>
            <ul>
              <li><a href="aboutus.php">About Us</a></li>
              <li><a href="products.php">Products</a></li>
              <li><a href="categories.php">Categories</a></li>
              <li><a href="blog.php">Blog</a></li>
            </ul>
          </div>
          <div class="footer-column">
            <h3>Connect</h3>
            <ul>
              <li><a href="#"><ion-icon name="logo-facebook"></ion-icon>Facebook</a></li>
              <li><a href="#"><ion-icon name="logo-twitter"></ion-icon>Twitter</a></li>
              <li><a href="#"><ion-icon name="logo-instagram"></ion-icon>Instagram</a></li>
              <li><a href="#"><ion-icon name="logo-pinterest"></ion-icon>Pinterest</a></li>
            </ul>
          </div>
         
        </div>
        <div class="footer-copyright">
          <p>Copyright © 2024 Wonder World. All rights reserved.</p>
        </div>
      </footer>
         
