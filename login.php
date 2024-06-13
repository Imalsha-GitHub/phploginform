<?php 

    if($_SERVER['REQUEST_METHOD']=='POST'){
        include 'connect.php';
        
        $username=$_POST['username'];
        $password=$_POST['password'];

        

        $sql = "select * from `register` where username='$username' and password='$password'";
        $result = mysqli_query($conn, $sql);
        if($result){
            $num=mysqli_num_rows($result);
            if($num>0){
                echo "Login Successful";
                session_start();
                $_SESSION['username']=$username;
                header('location:welcome.php');
            }else{
                echo "Invalid Data!";
            }
        }


    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="wrapper">
<div class="container">
    <h1>Login Page</h1>
        <form action="login.php" method="post">
            <div class="form-group">
                <label for="InputUsername">Username</label>
                <input type="text" name="username" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label for="InputPassword">Password</label>
                <input type="password" name="password" placeholder="Enter Your Password">
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
            <div class="signup-link">
                <label for="notSignedup">Don't have an account?<a href="index.php">Sign Up</a></label>
            </div>
        </form>
    </div>
    <footer>
        <p>Developed by: <a href="https://www.linkedin.com/in/imalsha-akalanka-698684252?jobid=1234&lipi=urn%3Ali%3Apage%3Ad_jobs_easyapply_pdfgenresume%3BYyupy5tVSgGywNY6HShEcg%3D%3D&licu=urn%3Ali%3Acontrol%3Ad_jobs_easyapply_pdfgenresume-v02_profile">Imalsha Jathunarachchi</a></p>
    </footer>
    </div>

    
    
</body>
</html>