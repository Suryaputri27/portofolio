<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet"
     href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <title>about</title>
</head>
<body>
    <section class="header">
        <a href="home.php" class="logo">ShopPut.</a>

        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="Product.php">Product</a>
            <a href="contact.php">contact</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </section>

    <div class="heading" style="background:url(gambar/atas.jpg)no-repeat">
        <h1>Contact</h1>
    </div>
    

    <section class="booking">
        <div class="heading-title">Order your clothes!</div>
        <form action="contact_form.php" methot="post" class="contact-form">

            <div class="flex">
                <div class="inputBox">
                    <span>Name :</span>
                    <input type="text" placeholder="enter your name" name="name">
                </div>

                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" placeholder="enter your email" name="email">
                </div>
            

                <div class="inputBox">
                    <span>Phone :</span>
                    <input type="number" placeholder="enter your number" name="Phone">
                </div>

                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" placeholder="enter your adderss" name="adderss">
                </div>

                <div class="inputBox">
                    <span>Where to :</span>
                    <input type="text" placeholder="place youu want to visit" name="location">
                </div>

                <div class="inputBox">
                    <span>How many :</span>
                    <input type="number" placeholder="order quantity" name="guests">
                </div>

                <div class="inputBox">
                    <span>arrivals :</span>
                    <input type="date"  name="arrivals">
                </div>

                <div class="inputBox">
                    <span>leaving :</span>
                    <input type="date"  name="leaving">
                </div>

            </div>
                <input type="submit" value="submit" class="btn" name="send">
        </form>
    </section>

 


    












<section class="footer">
<div class="box-container">

    <div class="box">
        <h3>Quick Links</h3>
        <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
        <a href="about.php"><i class="fas fa-angle-right"></i> about</a>
        <a href="Product.php"><i class="fas fa-angle-right"></i> Product</a>
        <a href="contact.php"><i class="fas fa-angle-right"></i> contact</a>
    </div>

    <div class="box">
        <h3>Quick Links</h3>
        <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
        <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
        <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
        <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
    </div>

    <div class="box">
        <h3>Contact info</h3>
        <a href="#"> <i class="fas fa-phone"></i> 081239068428</a>
        <a href="#"> <i class="fas fa-envelope"></i> putrisainy@gmail.com</a>
        <a href="#"> <i class="fas fa-map"></i> Jl. Raya Ende-Bajawa Km 21</a>
    </div>
    <div class="box">
        <h3>Follow Us</h3>
        <a href="#"><i class="fab fa-facebook"></i>Facebook</a>
        <a href="#"><i class="fab fa-instagram"></i>Instagram</a>
    </div>

</div>
<div class="credit">creted by <span>miss. putri sainy</span> |Lop yuu</div>
</section>





<!-- java -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


<script src="script.js"></script>
</body>
</html>