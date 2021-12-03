<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
</head>
<style>
    nav{
    display:flex;
    justify-content:space-around;
    align-items:center;
    min-height:10vh;
    font-family:'Poppins', sans-serif;
    background-color:#2D2424;
}
.logo{
    color:#FFEBC9;
    text-transform: uppercase;
    letter-spacing:5px;
    font-size:20px;
    position:relative;
    left:0;
}
.logo h3{
    position:relative;
    right:0;
    left:0;
}
.navigation{
    display:flex;
    justify-content: space-around;
    width:20%;
    position:relative;
    left:120px;
}
.navigation li{
    list-style:none;
    padding-left:10px;
    padding-right:10px;
    margin-right:0;
}
.navigation a{
    text-align:right;
    color:#FFEBC9;
    text-decoration:none;
    letter-spacing:3px;
    font-weight:bold;
    font-size:18px;
    padding-top:10px;
}
.navigation li:hover{
    background-color:#c09696;
    padding-right:5px;
    padding-left:5px;
    border-radius:3px;
}
nav .sticky{
    background:white;
    padding:10px 10px;
    box-shadow:0 5px 20px rgba(0,0,0,0.05);
}
</style>
<body>
<nav>
        <div class="logo">
            <h3>Logo</h3>
        </div>
        <ul class="navigation">
            <li><a href="home.php">Home</a></li>
            <li><a href="#menu">Menu</a></li>
        </ul>
    </nav>
</body>
</html>