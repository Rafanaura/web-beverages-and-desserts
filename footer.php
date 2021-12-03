<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
    
    footer{
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
    position: relative;
    width: 100%;
    height: auto;
    padding: 5px 10px;
    background:#2D2424;
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}

footer .konten{
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    flex-direction: row;
}

footer .konten .sec{
    margin-right: 30px;
}

footer .konten .sec.aboutus{
    width: 40%;
}

footer .konten h2{
    position: relative;
    color: #FFEBC9;
    font-weight: 500;
    margin-bottom: 15px;
    margin-left: 7%;
}

footer .konten  h2:before{
    content: '';
    position: absolute;
    bottom: -5px;
    left: 0;
    width: 50px;
    height: 2px;
    background: #D79771;
}

footer p{
    color: #FFEBC9;
    margin-left: 7%;
    margin-right: 15%;
}

.akun{
    margin-top: 20px;
    display: flex;
}

.akun li{
    list-style: none;
}

.akun li a{
    display: inline-block;
    width: 40px;
    height: 40px;
    background: #D79771;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-right: 10px;
    text-decoration: none;
    border-radius: 4px;
}

.akun li a:hover{
    background: #B05B3B;
}

.akun li a .fa{
    color: #FFEBC9;
    font-size: 20px;
}

.quicklinks{
    position: relative;
    width: 25%;
}

.quicklinks ul li{
    list-style: none;
} 

.quicklinks ul li a{
    color: #FFEBC9;
    text-decoration: none;
    margin-bottom: 10px;
    display: inline-block;
    margin-left: -5%;
}

.quicklinks ul li a:hover{
    color: #B05B3B;
}

.kontak{
    width: calc(35% - 60px);
    margin-right: 0 !important;
}

.kontak .info{
    position: relative;
}

.kontak .info li{
    display: flex;
    margin-bottom: 16px;
}

.kontak .info li span:nth-child(1){
    color: #D79771;
    font-size: 20px;
    margin-right: 10px;
}

.kontak .info li span{
   color: #FFEBC9; 
}

.kontak .info li a{
    color: #FFEBC9;
    text-decoration: none;
}

.kontak .info li p{
    margin-left: 2%;
    margin-top: -1%;
}

.kontak .info li a:hover{
    color: #B05B3B;
}

.copyright{
    width: 86.8%;
    background: #B05B3B;
    padding: 8px 100px;
    text-align: center;
    color: #FFEBC9;
}
</style>
<footer>
        <div class="konten" id="footer">
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
                        <p><a href="tel.12345">+6281238224536</a></p>
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
