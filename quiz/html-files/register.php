<?php 

if($_SERVER['REQUEST_METHOD']=="POST"){
  $conn=mysqli_connect("localhost","root","","project");
    $user=$_POST['Name'];
    $email=$_POST['Email'];
    $pass=$_POST['Password'];
    $reg=$_POST['reg'];

    
    $q="INSERT INTO `data` (`Sr.no.`, `Name`, `Email`, `Password`) VALUES (NULL, '$user', '$email', '$pass');";
    
    try{
        mysqli_query($conn,$q);

            echo("<script>
            alert('User registered successfully')
            </script>");
            header("location: content.html");
    }
    catch(mysqli_sql_exception $e) {
            if ($e->getCode() == 1062) {
                echo "<script>alert('Username or Email already taken \u{1F61E}');</script>";
            }
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Page</title>
  <style>
    body {
      
      font-family: Arial, sans-serif;
      background:url(../200w\ \(2\).webp);
      margin: 0;
      padding: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      
    }
    
    .container {
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      width: 400px;
    }

    .header {
      background-color: #3498db;
      color: #fff;
      padding: 20px;
      text-align: center;
    }

    .form-group {
      padding: 20px;
    }

    label {
      display: block;
      font-weight: bold;
      margin-bottom: 8px;
    }

    input {
      width: 100%;
      padding: 10px;
      margin-bottom: 16px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    button {
      background-color: #3498db;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
    }

    button:hover {
      background-color: #2980b9;
    }

    .footer {
      background-color: #f4f4f4;
      padding: 10px;
      text-align: center;
    }
  </style>
</head>
<body style="background-color:rgb(2, 2, 26);">
  <div class="main">
  <div class="container">
    <div class="header">
      <h2>Registration</h2>
    </div>
    <form action="" method="post">
    <div class="form-group">
      <label for="username">Username:</label>
      <input type="text" id="username" name="Name" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="Email" required>

      <label for="password">Password:</label>
      <input type="password" id="password" name="Password" required>

      <button type="submit" name="reg">Register</button>
    </div>
    <div class="footer">
      <p>Already have an account? <a href="login.php">Login here</a></p>
    </div>
    </form>
  </div>
</div>
</body>
</html>
