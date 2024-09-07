<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grefana</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" style="border-radius: 100%" type="image/x-icon" href="logo.jpg" id="logo" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
            <h2>Organic farming</h2>
            <p style="color: rgb(10, 248, 10);">the beauty of nature and agriculture.<br>(Organic plants & crops)</p>
        </div>
    </section>

    <!-- About Us Section -->
    <section id="about">
        <div class="container">
            <h2>All about Organic fruits and vegetables</h2>
            <p>organic fruits are grown using methods that avoid synthetic chemicals, prioritize ecological balance, and promote biodiversity. These practices help produce fruits that are healthier for both consumers and the environment.</p>
        <div>
        <div class="div1">
            <div class="intro_to_organic_foods">
                Organic fruits are grown using agricultural practices that prioritize environmental sustainability and human health. They are cultivated without synthetic pesticides, herbicides, or fertilizers and are non-GMO. Organic farming focuses on soil health, biodiversity, and natural pest control, and it avoids practices like irradiation and the use of sewage sludge. Certification ensures these standards are met, making organic fruits a healthier and more eco-friendly option.
            </div>

            <div class="benefits">
                <b style="font-size: 20px;">Growing organic fruits offers several key benefits:</b><br><br>

                1. <b>Environmental Sustainability:</b> It promotes soil health, reduces pollution, and supports biodiversity.
                <br>
                2. <b>Healthier Produce:</b> Organic fruits have fewer chemicals and may contain higher nutrient levels.
                <br>
                3. <b>Supports Farmers:</b> It benefits small-scale farmers economically by allowing for fair pricing and sustainable practices.
                <br>
                4. <b>Pollinator Protection:</b> Provides a safer habitat for bees and other pollinators.
                <br>
                5. <b>Climate Action:</b> Organic farming helps sequester carbon and reduces reliance on   fossil fuels.
                <br>
                6. <b>Consumer Demand:</b> The growing market for organic products drives economic opportunities and consumer trust.
                <br>
                Overall, organic fruit farming contributes to a healthier environment, better human health, and a more sustainable agricultural system.
            
            </div>
        </div>


        <div class="div2">
            <div class="challenges">
                <h2>challenges</h2>
                Organic farming faces challenges like higher costs, lower yields, difficult pest management, complex certification processes, and limited market access. These factors make it more demanding but are balanced by its environmental and health benefits.
            </div>
            <div class="comparison">
                <h2>Organic green plants vs other types of farming</h2>
                Organic fruits are grown without synthetic chemicals, promoting better environmental health and potentially offering higher nutrient content. They tend to be more expensive but are favored for their natural cultivation methods. Conventional fruits are usually cheaper and more widely available, but they rely on synthetic pesticides and fertilizers, which can have environmental and health impacts.
            </div>
        </div>
       
        
    </section>


    <!-- Products Section -->
    <section id="products">
        <div class="container">
            <h2>Organic Products that we produce</h2>
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
                    <img src="Cassava.jfif" style="border-radius: 6px;" alt="Grains">
                    <h3>other green plants</h3>
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
