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
    <?php
// Start the session
session_start();

// Check if the form has been submitted
if(isset($_POST['submit'])){
  // Get the values from the form
  $username = $_POST['username'];
  $password = $_POST['password'];
  
  // Validate the username and password
  if($username == "user1" && $password == "pass1"){
    // If the username and password are correct, set the username in the session
    $_SESSION['username'] = $username;
    
    // Redirect the user to the welcome page
    header("Location: welcome.php");
    exit;
  } elseif($username == "user2" && $password == "pass2"){
    // If the username and password are correct, set the username in the session
    $_SESSION['username'] = $username;
    
    // Redirect the user to the welcome page
    header("Location: welcome.php");
    exit;
  } else {
    // If the username or password are incorrect, set an error message
    $error = "Invalid username or password";
  }
}
?>

<h1>Login Page</h1>
  <?php if(isset($error)){
    echo "<p>$error</p>";
  }
  ?>
  <form action="index.php" method="post">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username" class="form-control" required>
    <br>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" class="form-control" required>
    <br>
    <input type="submit" class="btn btn-primary" name="submit" value="Login">
  </form>
    </div>
</body>
</html>