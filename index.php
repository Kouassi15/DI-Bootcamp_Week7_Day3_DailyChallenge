<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <h1>Welcome Page</h1>
    <?php

// Start the session
session_start();

// Check if the session variable 'username' is set
// If it's not set, redirect to the login page
if(!isset($_SESSION['username'])){
  header("Location: index.php");
  exit;
}

// Store the value of the session variable 'username' in a variable
$username = $_SESSION['username'];

// Check if the logout button has been pressed
if(isset($_POST['logout'])){
  // Destroy the current session
  session_destroy();
  // Redirect to the login page
  header("Location: index.php");
  exit;
}

?>
 <p>Welcome, <?php echo $username; ?>!</p>
  <form action="welcome.php" method="post">
    <input type="submit" name="logout" value="Logout">
  </form>
    </div>
</body>