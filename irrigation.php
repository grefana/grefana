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
            <h1><a style="text-decoration: none;" href="index.html#home"><img src="logo.jpg" alt="" style="height: 1cm; width: 1cm;" id="logo"> <span style="font-size: 40px;">Grefana</span></a></h1>
            
            <nav>
                <ul>
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
            <h2>Get to know how irrigation is done</h2>
            <p style="color: rgb(10, 248, 10);">Irrigation practices in Grefana company.</p>
        </div>
    </section>

    <!-- About Us Section -->
    <section id="about">
        <div class="container">
            <h2>About Us</h2>
            <p>Grefana is committed to delivering sustainable farming solutions and the highest raw quality products from cattles and fresh organic foods such as vegetables and fruits. Our mission is to revolutionize agriculture through innovation and eco-friendly practices. We supply our products to many different markets,restaurants, subscription of meat(Butcheur) and individual at large. </p>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services">
        <div class="container">
            <h2>Irrigation and how it is done.</h2>
            <ul>
                <div style="border: none; border-radius: 10px; background: whitesmoke; padding: 20px; ">
                <b>Irrigation is the artificial application of water to support crops and vegetation, especially in areas with insufficient rainfall. The main methods include:</b>
<br>
1. Surface Irrigation: Water is distributed across the soil surface by gravity, including flood, furrow, and basin irrigation.
<br>
2. Sprinkler Irrigation: Water is sprayed into the air, mimicking rainfall, using systems like portable sprinklers, center pivots, and fixed sprinklers.
<br>
3. Drip Irrigation: Water is delivered directly to the plant's root zone through tubes, minimizing waste and evaporation.
<br>
4. Subsurface Irrigation: Water is applied below the soil surface, directly to roots, reducing evaporation losses.
<br>
5. Localized Irrigation: Water is applied directly to each plant at its roots using emitters or small sprinklers.
<br>
6. Automated Systems: Use sensors and timers to precisely control water application, improving efficiency.
<br>
Effective irrigation depends on factors like soil type, climate, and crop needs, and faces challenges such as water scarcity, salinization, and maintenance costs.
</div> </ul>
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
            <p>Address: kayonza-Mwiri Farm, Countryside, Rwanda</p>
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
