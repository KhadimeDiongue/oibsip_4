<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Register</h1>
        <form action="../php/register.php" method="post" class="register-form">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="email" id="username" name="username" placeholder="Enter your email address" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <button type="submit">Register</button>
        </form>
        <a href="../index.php" class="login-link">Back to login</a>
    </div>
</body>
</html>