<?php
session_start();
if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit;
}
$username = $_SESSION['username'];
if (isset($_POST['logout'])) {
  session_destroy();
  header("Location: login.php");
  exit;
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Page d'accueil </title>
  </head>
  <body>
    <h1>Bienvenue , <?php echo $username; ?>!</h1>
    <form action="" method="post">
      <input type="submit" name="logout" value="Logout">
    </form>
  </body>
</html>