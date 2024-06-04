<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <link rel="stylesheet" href="./style.css">
</head>

<body>
  <div class="login-container">
    <h2>Login</h2>
    <form action="./php/login.php" method="POST">
      <div class="input-group">
        <input type="text" name="username" required>
        <label for="username">Username</label>
      </div>
      <div class="input-group">
        <input type="password" name="password" required>
        <label for="password">Password</label>
      </div>
      <button type="submit">Login</button>
    </form>
    <div class="container">
      <p>Dont have an account? <a href="./pages/register.php" class="register-link">Register here</a></p>
    </div>
  </div>
</body>

</html>