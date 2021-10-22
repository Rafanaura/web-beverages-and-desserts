<?php
if($_POST){
    $full_name=$_POST['full_name'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $confirm_password=$_POST['confirm_password'];

    if(empty($full_name)){
        echo "<script>alert('nama tidak boleh kosong');location.href='signup.php';</script>";
 
    } elseif(empty($email)){
        echo "<script>alert('email tidak boleh kosong');location.href='signup.php';</script>";
    } elseif(empty($username)){
        echo "<script>alert('username tidak boleh kosong');location.href='signup.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('password tidak boleh kosong');location.href='signup.php';</script>";
    } elseif(empty($confirm_password)){
        echo "<script>alert('password tidak boleh kosong');location.href='signup.php';</script>";

    } else {
        include "connection.php";
        $insert=mysqli_query($conn,"insert into register (full_name, email, username, password, confirm_password) value ('".$full_name."','".$email."','".$username."','".md5($password)."','".md5($confirm_password)."')");
        if($insert){
            echo "<script>alert('Sukses sign up');location.href='login.php';</script>";
        } else {
            echo "<script>alert('Gagal sign up');location.href='signup.php';</script>";
        }
    }
}
?>
