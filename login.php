<?php
session_start();
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  if ($username == 'user' && $password == '1111') {
    $_SESSION['username'] = $username;
    header("Location: welcome.php");
    exit;
  } else {
    $error = "Nom d'utilisateur ou mot de passe incorrect";
  }
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Login Page</title>
  </head>
  <body>
    <?php if (isset($error)) { ?>
      <p style="color:red;"><?php echo $error; ?></p>
    <?php } ?>
    <form action="" method="post">
        <label for="username">Nom d'utilisateur : </label>
        <input type="text" id="username" name="username">
        <br><br>
        <label for="password">Mot de passe : </label>
        <input type="password" id="password" name="password">
        <br><br>
        <input type="submit" name="submit" value="Se connecter">
    </form>
  </body>
</html>