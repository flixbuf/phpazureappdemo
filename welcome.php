<?php
// Initialize the session
session_start();

// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: index.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
</head>
<body>
        <form action="logout.php">
        <div><p> Welcome <?php echo ucwords($_SESSION['username']); ?>, You have successfully logged in! </p> <br>
        Click to <input type="submit" name="logout" value="Logout" class="logout-button">.
        </div>
        </form>
</body>
</html>
