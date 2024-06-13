<?php 
    session_start();
    if(!isset($_SESSION["username"])){
        header('location:login.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome page</title>
</head>
<body>
    <h2>Hi! <?php echo $_SESSION['username'] ?></h2>
    <div>
        <a href="logout.php">Logout</a>
    </div>
    
</body>
</html>