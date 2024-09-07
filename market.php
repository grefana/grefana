<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grefana</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" style="border-radius: 100%" type="image/x-icon" href="logo.jpg" id="logo" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <!-- Header Section -->
    <header>
        <div class="container">
            <h1><a style="text-decoration: none;" href="index.php#home"><img src="logo.jpg" alt="" style="height: 1cm; width: 1cm;" id="logo"> <span style="font-size: 40px;">Grefana</span></a></h1>
            
            <nav>
                <ul style="color: whitesmoke;">
                    <li><a href="index.php#home"><i class="fa fa-fw fa-home"></i> Home</a></li>
                    <li><a href="index.php#about"><i class="fas fa-user"></i> About Us</a></li>
                    <li><a href="index.php#services"><i class="fas fa-briefcase"></i> Services</a></li>
                    <li><a href="index.php#products"><i class="fas fa-box"></i> Products</a></li>
                    <li><a href="index.php#contact"><i class="fa fa-fw fa-envelope"></i> Contact</a></li>
                    <li><a href="market.php#home"><i class="fas fa-shopping-cart"></i> Market</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Home Section -->
    <section id="home">
        <div class="home-content">
            <h2><b>Do you want to market with us?</b></h2>
            <p style="color: rgb(10, 248, 10);">Get Access to raw products at a low price.</p>
        </div>
    </section>

    <!-- About Us Section -->
    <section id="about" style="display: flex;">
        <div class="container">
            <h2>How is our market safe?</h2>
            <p>Any individual or business or company that orders products from Grefana using ecommerce platforms or by contact, we can deliver it to them with in time needed of that product. Trust Grefana your home of agricultural products</p>
        </div>

    </section>

    <!-- Services Section -->
    <section id="services">
        <div class="container">
            <h2>Access our platforms</h2>
            <ul>
                <a style="text-decoration: none; color: rgb(54, 52, 52);" href="index.php#contact"><li>Send Us an email</li></a>
                <a style="text-decoration: none; color: rgb(54, 52, 52);" href="https://www.instagram.com/r4_william_clinton/"><li>You can reach us on instagram</li></a>
                <a style="text-decoration: none; color: rgb(54, 52, 52);" href="index.php#contact"><li>You can reach us on x (twitter)</li></a>
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

</script>
