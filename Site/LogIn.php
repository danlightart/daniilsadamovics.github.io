<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <meta charset="utf-8">
    <title>Log in</title>
    <style>
        /* Общий фон */
        body {
            background-color: #F8F8FA;
            margin: 0;
            padding: 0;
        }
        
        /* Логотип ссылка */
        .logo {
            position: absolute;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            text-decoration: none;
        }
        
        /* Поля для ввода */
        .input-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 70vh;
        }
        
        /* Названия полей ввода */
        .input-label {
            font-size: 18px;
            margin-bottom: 10px;
        }
        
        /* Поля ввода */
        .input-field {
            width: 300px;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #CCC;
            font-size: 16px;
        }
        
        /* Кнопка Log in */
        .login-button {
            background: linear-gradient(90deg, #ED3838 0%, #E02A2A 100%);
            border-radius: 999px;
            color: white;
            padding: 10px 20px;
            font-weight: bold;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }
        
        .login-button:hover {
            background-color: #FF5252;
        }
        
        /* Ссылка "Forgot password?" */
        .forgot-password {
            margin-top: 10px;
            text-decoration: none;
            color: #333;
            font-size: 14px;
        }
        
        /* Картинки машин */
        .car-left {
            position: fixed;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            max-height: 80vh;
            object-fit: cover;
        }
        
        .car-right {
            position: fixed;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            max-height: 80vh;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <a class="logo" href="#"><img src="logo.png" alt="Logo"></a>
    
    <div class="input-container">
        <h2>Log in</h2>
        
        <label class="input-label" for="email">Email:</label>
        <input class="input-field" type="email" id="email" placeholder="Enter your email">
        
        <label class="input-label" for="password">Password:</label>
        <input class="input-field" type="password" id="password" placeholder="Enter your password">
        
        <a class="login-button" href="#">Log in</a>
        
        <a class="forgot-password" href="#">Forgot password?</a>
    </div>
    
    <img class="car-left" src="car-left.png" alt="Car Left">
    <img class="car-right" src="car-right.png" alt="Car Right">
</body>
</html>
