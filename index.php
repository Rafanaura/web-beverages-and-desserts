<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menu beverages and desserts</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
</head>
<body>
    <nav>
        <div class="logo">
            <h3>Logo</h3>
        </div>
        <ul class="navigation">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#menu">Menu</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="login.html">Login</a></li>
            <li><a href="sign up.html">SignUp</a></li>
        </ul>
    </nav>

    <section class="home" id="home">
        <div class="isi">
            <h1><b>Beverages And Desserts</b></h1>
            <p><b>Chill and fresh your day. Cause happiness is waiting for you ! </p>
            <a href="#about" class="coffee"><button class="learn">Learn More</button></a>
        </div>
    </section>

    <section class="content" id="menu">
        <div class="menu">
            <h1><b>MENU</b></h1>
        </div>
        <div class="container">
            <main class="grid">
                <article>
                    <img src="image/bgbeverages.jpg" width="400px" height="300px" alt="">
                    <div class="content-text">
                        <h2>Beverages</h2>
                        <p>There are many menu for beverages</p>
                        <a href="beverages.php" class="coffee"><button class="learn">Check Here ! </button></a>
                    </div>
                </article>
                <article>
                    <img src="image/bgdesserts.jpg" width="400px" height="300px" alt="">
                    <div class="content-text">
                        <h2>Desserts</h2>
                        <p>There are many menu for desserts</p>
                        <a href="desserts.php" class="coffee"><button class="learn">Check Here ! </button></a>

                    </div>
                </article>
        </main>
    </div>
</section>
    
    
    <section class="contact" id="contact">
        <div class="contentcontact">
            <h2><b>Contact Us !</b></h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae tempora ea eligendi cum ipsa. Officia asperiores, veniam, 
               consectetur hic doloribus temporibus.</p>
        </div>
            <div class="container">
            <div class="contactform">
                <form>
                    <div class="inputbox">
                        <input type="text" name="" required>
                        <span>Your Name</span>
                    </div>

                    <div class="inputbox">
                        <input type="text" name="" required>
                        <span>Email</span>
                    </div>

                    <div class="inputbox">
                        <input type="text" name="" required>
                        <span>Number Phone</span>
                    </div>

                    <div class="inputbox">
                        <textarea required="required"></textarea>
                        <span>Your Message</span>
                    </div>

                    <div class="inputbox">
                        <input type="submit" name="" values="Send">
                    </div>
                </form>
            </div>
        </div>
    </section>

    <footer>
        <div class="konten" id="about">
            <div class="sec aboutus">
                <h2><b>About Us</b></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo magni unde deserunt dicta 
                id provident obcaecati asperiores non maiores? Velit eaque earum at sunt maxime.</p>
                   <ul class="akun">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                    </ul>
            </div>

            <div class="sec quicklinks">
                <h2><b>Quick Links</b></h2>
                <ul>
                    <li><a href="#">About</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Help</a></li>
                    <li><a href="#">Terms and Conditions</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            
            <div class="sec kontak">
                <h2><b>Contact Info</b></h2>
                <ul class="info">
                    <li>
                       <span><i class="fa fa-map-marker" aria-hidden="true"></i></span> 
                       <span>Jl. Danau Kerinci, Kedungkandang<br>
                             Malang, Jawa Timur</span>
                    </li>
                    <li>
                        <span><i class="fa fa-phone" aria-hidden="true"></i></span>
                        <p><a href="tel.12345">+6281238224536</a><br>
                        <a href="tel.12345">+6281238224536</a></p>
                    </li>
                    <li>
                        <span><i class="fa fa-envelope" aria-hidden="true"></i></span>
                        <p><a href="knowmore@gmail.com">rafanaura354@gmail.com</a></p>
                    </li>
                </ul>
            </div>
    </div>
    </footer>
</body>
</html>