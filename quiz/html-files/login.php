<?php

if($_SERVER['REQUEST_METHOD']=="POST"){
    $user=$_POST['u_login'];
    $pass=$_POST['p_login'];

    $conn=mysqli_connect("localhost","root","","project");
    $res=mysqli_query($conn,"select * from data where '$user'=Name and '$pass'=Password");
    if(mysqli_num_rows($res)==1){
        header("location:content.html");
    }
    else{
        echo "<script>alert('Invalid Username or Password')</script>";
    }
}

?>



<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="./login.css">
</head>
<style>
    body {
        background-color:rgb(2, 2, 26);
        font-family: Arial, sans-serif;
        background:url(../200w\ \(2\).webp);
    }
    
    
    .login-container {
        width: 350px;
        height: 430px;
        padding: 20px 30px;
        background-color: white;
        margin: 0 auto;
        margin-top: 100px;
        box-shadow: 0px 0px 10px 0px;
    }
    
    .login-container h1 {
        text-align: center;
        color: #4a4a4a;
        font-size: 3em;
        
    }
    
    .login-container label {
        color: #9e9e9e;
    }
    
    .login-container input[type="text"],
    .login-container input[type="password"] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }
    
    .login-container input[type="submit"] {
        width: 100%;
        background-color: blue;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
    }
    
    .login-container input[type="submit"]:hover {
        opacity: 0.8;
    }
    
    .abc{
        text-decoration: none;
    }
    
    .xyz{
        display: flex;
        justify-content: space-around;
    }
    .loginbtn{
        width: 100%;
        background-color: blue;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        font-size: 1.2em;
    }
</style>
<body>
    <div class="login-container">
        <h1>Login</h1>
        <form action="" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="u_login" required><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="p_login" required><br>
            <a href="../html-files/content.html"><button class="loginbtn" type="submit">Login</button></a><br><br>

            <div class="xyz">
                <h5 style="margin-top: -.3px; font-weight: lighter; color: blueviolet;">Not a user?</h5>
                <a href="./register.php" class="abc">Register Now </a>
            </div>
            <center><a href="">Forgot Password?</a></center>
        </form>
    </div>
</body>
</htm


