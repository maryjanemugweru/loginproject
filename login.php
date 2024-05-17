<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e0f7fa; /* Light blue background */
            margin: 0;
            padding: 0;
        }

        form {
            max-width: 300px;
            margin: 20px auto;
            background: #ffffff; /* White background for the form */
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #007acc; /* Blue text color */
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #007acc; /* Blue border color */
            border-radius: 3px;
            box-sizing: border-box;
        }

        button[type="submit"],
        button[type="button"] {
            background-color: #007acc; /* Blue background color */
            color: #fff; /* White text color */
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            margin-top: 10px;
        }

        button[type="submit"]:hover,
        button[type="button"]:hover {
            background-color: #005f99; /* Darker blue on hover */
        }
    </style>
</head>
<body>
    <!--login form -->
    <form id="loginForm" action="process_login.php" method="POST">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username"><br>
        
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"> <br>
        <br>
        <button type="submit">Login</button>
        <button id="signupButton" type="button" onclick="redirectSignUp()">Sign Up</button>
    </form>

    <script>
        function redirectSignUp() {
            window.location.href = "signup.php"; 
        };
    </script>
</body>
</html>
