<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        form {
            max-width: 300px;
            margin: 0 auto;
        }
        input[type="email"], input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: white;
            cursor: pointer;
            color: black;
            border-color: black;
        }

        input[type="submit"]:hover {
            background-color: black;
            color: white ;
            border-color:white;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Forgot your Password?</h2>
    <form action="password-reset-code.php" method="post">
        <input type="email" placeholder="Email" name="email" id="email" required>
        <input type="submit" value="Reset Password" name="pass_reset">
    </form>
</div>

</body>
</html>
