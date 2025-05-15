<?php 
  session_start();
  if(isset($_SESSION['login'])) {
    header("Location: dashboard.php"); // already logged in
    exit();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
</head>
<body>

  <h1>Login Page</h1>
  <form action="#" method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username"><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password"><br>
    <input type="submit" value="Login">
  </form>
</body>
</html>

<?php 
  if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    if ($username == "admin" && $password == "123456") {
      $_SESSION['login'] = true;
      $_SESSION['username'] = $username;
      header("Location: dashboard.php"); // login successful
    } else {
      echo "Invalid username or password";
    }
  }
?>