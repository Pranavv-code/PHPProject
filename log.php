<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .main {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 100%;
            max-width: 400px;
            box-sizing: border-box;
        }

        .main h2 {
            margin-top: 0;
            font-size: 24px;
            color: #333;
            text-align: center;
        }

        .main label {
            display: block;
            font-size: 14px;
            color: #555;
            margin-bottom: 5px;
        }

        .main input[type="email"],
        .main input[type="password"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 15px;
        }

        .main input[type="submit"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s;
        }

        .main input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .main input[type="submit"]:active {
            background-color: #004080;
        }
    </style>
</head>
<body>
   <div class="main">
       <h2>Log In</h2>
       <form action="/submit-login" method="post">
           <label for="email">Email:</label>
           <input type="email" id="email" name="em" required>

           <label for="password">Password:</label>
           <input type="password" id="password" name="pw" required>

           <input type="submit" value="Log In" name="log">
       </form>
   </div>
</body>
</html>
