<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = $_POST['email'];
  $password = $_POST['password'];

  // TODO: validate user's credentials

  // Redirect the user to the home page if the login is successful
  header('Location: index.php');
  exit;
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
</head>
<body>
  <h1>Login</h1>
  <form action="login.php" method="post">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br><br>

    <input type="submit" value="Login">
  </form>
</body>
</html>

