<?php
 session_start();
 if (isset($_SESSION['cod'])) {
   header('Location: /seguimiento.php');
 }
 
 require 'conexion.php';

 if (!empty($_POST['user_name']) && !empty($_POST['user_pass'])) {
    $records = $conn->prepare('SELECT user_cod, user_name, user_pass FROM users WHERE user_cod = :user_cod');
    $records->bindParam(':cod', $_POST['user_cod']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);
    $message = '';
    if (count($results) > 0 && password_verify($_POST['user_pass'], $results['user_pass'])) {
      $_SESSION['user_cod'] = $results['user_cod'];
      header("Location: /seguimiento.php");
    } else {
      $message = 'Sorry, those credentials do not match';
    }
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>Login</h1>
    <span>or <a href="signup.php">SignUp</a></span>

    <form action="login.php" method="POST">
      <input name="user_name" type="text" placeholder="Enter your email">
      <input name="user_pass" type="password" placeholder="Enter your Password">
      <input type="submit" value="Submit">
    </form>
  </body>
</html>