<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grefana</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="shortcut icon" style="border-radius: 100%" type="image/x-icon" href="logo.jpg" id="logo" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- Header Section -->
    <header>
        <div class="container">
            <h1><a style="text-decoration: none;" href="index.html#home"><img src="logo.jpg" alt="" style="height: 1cm; width: 1cm;" id="logo"> <span style="font-size: 40px;">Grefana</span></a></h1>
            
            <nav>
                <ul>
                <li><a href="index.php#home"><i class="fa fa-fw fa-home"></i> Home</a></li>
                    <li><a href="index.php#about"><i class="fas fa-user"></i> About Us</a></li>
                    <li><a href="index.php#services"><i class="fas fa-briefcase"></i> Services</a></li>
                    <li><a href="index.php#products"><i class="fas fa-box"></i> Products</a></li>
                    <li><a href="index.php#contact"><i class="fa fa-fw fa-envelope"></i> Contact</a></li>
                    <li><a href="market.php#home"><i class="fas fa-shopping-cart"></i> Market</a></li>


 

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>

                        </div>
                      
                      </div>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Home Section -->
    <section id="home">
        <div class="home-content">
            <h2>Welcome to Grefana</h2>
            <p style="color: rgb(10, 248, 10);">Your partner in sustainable agriculture.</p>
        </div>
    </section>

    <!-- About Us Section -->
    <section id="about" style="display: flex;">
        <div class="container">
            <h2 id="abouthead">About Us</h2>
            <p>Grefana is committed to delivering sustainable farming solutions and the highest raw quality products from cattles and fresh organic foods such as vegetables and fruits. Our mission is to revolutionize agriculture through innovation and eco-friendly practices. We supply our products to many different markets,restaurants, subscription of meat(Butcheur) and individual at large. </p>
        </div>
        <div class="card">
            <img src="ceo1.PNG" style="width:100%">
            <h1>Muhongerwa Odeth</h1>
                <p class="title">CEO & Founder</p>
                <p style="color: light !important">Grefana Agricultural company</p>
                <a href="#"><i class="fa fa-instagram" title="access instagram account"></i></a>
                <a href="#"><i class="fa fa-twitter" title="access twitter/ X account"></i></a>
                <a href="#"><i class="fa fa-linkedin" title="access linkedin account"></i></a>
                <a href="#"><i class="fa fa-facebook" title="access facebook account"></i></a>
        
        </div>
    </section>

    <!-- Services Section -->
    <section id="services">
        <div class="container">
            <h2>Our Services</h2>
            <ul>
                <a style="text-decoration: none; color: rgb(54, 52, 52);" href="organicfarming.php"><li>Organic Farming</li></a>
                <a style="text-decoration: none; color: rgb(54, 52, 52);" href="irrigation.php"><li>Irrigation Management</li></a>
                <a style="text-decoration: none; color: rgb(54, 52, 52);" href="soiltesting.php"><li>soil Testing</li></a>
                <a style="text-decoration: none; color: rgb(54, 52, 52);" href="consultancyservices.php"><li>Consultancy Services</li></a>
            </ul>
        </div>
    </section>

    <!-- Products Section -->
    <section id="products">
        <div class="container">
            <h2>Our Products</h2>
            <div class="products-grid">
                <div class="product">
                    <img src="fresh vegetables.jpeg" style="border-radius: 6px;" alt="Vegetables">
                    <h3>Fresh Vegetables</h3>
                </div>
                <div class="product">
                    <img src="fresh fruits.jpeg" style="border-radius: 6px;" alt="Fruits">
                    <h3>Fresh Fruits</h3>
                </div>
                <div class="product">
                    <img src="cattle products.jpeg" style="border-radius: 6px;" alt="Grains">
                    <h3>Animal products</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <h2>Contact Us</h2>
            <p>Email: grefana@gmail.com</p>
            <p>Phone: +250-793-413-005</p>
            <p>Address: kayonza-Mwiri, Countryside, Rwanda</p>
        </div>
        
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>Grefana agricultural company.</p>
        </div>
    </footer>
</body>
</html>
<script>
    window.addEventListener('scroll', function() {
    const header = document.querySelector('header');
    if (window.scrollY > 50) {
        header.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
    }
});


// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

function toggleMenu() {
    var navLinks = document.getElementById("nav-links");
    navLinks.classList.toggle("active");
}
document.addEventListener("DOMContentLoaded", function() {
    const menuIcon = document.getElementById("menu-icon");
    const navLinks = document.getElementById("nav-links");

    // Toggle navigation menu when the menu icon is clicked
    menuIcon.addEventListener("click", function() {
        navLinks.classList.toggle("active");
    });

    // Close the menu if clicked outside
    document.addEventListener("click", function(event) {
        if (!navLinks.contains(event.target) && !menuIcon.contains(event.target)) {
            navLinks.classList.remove("active");
        }
    });
});

</script>
<style>
    .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  background-color: lightseagreen;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}#stafflink:hover{
    color: darkred;
    background-color: rgba(0, 255, 0, 0.5) !important;
}
</style>