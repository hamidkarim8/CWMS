<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-image: url('car-wash-login.jpg'); 
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .login-container {
            background-color: rgba(255, 255, 255, 0.8); 
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            max-width: 500px;
            width: 100%;
            text-align: center;
        }
        .login-container h2 {
            margin-bottom: 20px;
        }
        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .login-container input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-top: 20px;
            background-color: #007bff; 
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .login-container input[type="submit"]:hover {
            background-color: #0056b3; 
        }
        .forgot-password,
        .register {
            margin-top: 10px;
            display: block;
            text-align: right;
            color: #007bff;
        }
        .remember-me {
            margin-top: 10px;
            display: inline-block;
            text-align: left;
        }
        .remember-me label {
            margin-left: 5px;
        }
        .uniten-logo {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="SSEMS-logo">
      <img src="ssems.jpg" alt="UNITEN Logo" width="300">
        </div>
        <h2>Login</h2>
        <form action="getIn.php" method="post">
            <input type="text" name="email" placeholder="Email" required>
            <br>
            <input type="password" name="pass" placeholder="Password" required>
            <br>
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>