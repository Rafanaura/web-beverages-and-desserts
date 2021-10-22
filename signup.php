<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="sign up.css">
    <title>Sign Up Page</title>
</head>
<body>
    <form action="proses_signup.php" method="post">
    <div class="signupbox">
        <h1>Sign Up</h1>
       
    <div class="txt_field">
        <input type="text" name="full_name">
        <span></span>
        <label>Full Name</label>
        
    </div>
    <div class="txt_field">
        <input type="text" name="email">
        <span></span>
        <label>Email</label>
    </div>
    <div class="txt_field">
        <input type="text" name="username">
        <span></span>
        <label>Create Username</label>
    </div>
    <div class="txt_field">
        <input type="password" name="password">
        <span></span>
        <label>Create Password</label>
    </div>
    <div class="txt_field">
        <input type="password" name="confirm_password">
        <span></span>
        <label>Confirm Password</label>
    </div>
    <div class="tombol"></div>
    <input type="submit" value="Sign Up">
    </form>
    </div>
</body>
</html>