<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .index-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 100%;
            max-width: 400px;
        }

        .index-container h1 {
            margin-bottom: 20px;
            color: #333333;
        }

        .index-container button {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            background-color: #4caf50;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
        }

        .index-container button:hover {
            background-color: #45a049;
        }

        .index-container a {
            text-decoration: none;
            color: white;
            display: block;
        }
    </style>
</head>
<body>
    <div class="index-container">
        <h1>Welcome</h1>
        <button><a href="login.php">Login</a></button>
        <button><a href="register.php">Register</a></button>
    </div>
</body>
</html>
