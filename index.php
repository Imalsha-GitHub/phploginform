<?php 

    if($_SERVER['REQUEST_METHOD']=='POST'){
        include 'connect.php';
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $username=$_POST['username'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $cpassword=$_POST['cpassword'];

        

        $sql = "select * from `register` where username='$username'";
        $result = mysqli_query($conn, $sql);
        if($result){
            $num=mysqli_num_rows($result);
            if($num>0){
                echo "User already exist";
            }else{
                if($password===$cpassword){
                $sql="insert into `register` (firstname, lastname, username, email, password) values('$firstname','$lastname','$username','$email','$password')";

                $result=mysqli_query($conn, $sql);
                
                if($result){
                    echo "SignUp successfully";
                    header('location:login.php');
                }else{
                    die(mysqli_error($conn));
                }
                }else{
                    echo 'Password not matched!!!';
                }
            }
        }


    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="wrapper">
    <div class="container">
    <h1>Sign Up</h1>
        <form action="index.php" method="post">
            <div class="form-group">
                <label for="InputFirstName">First Name</label>
                <input type="text" class="form-control" name="firstname" placeholder="Enter Your First Name">
            </div>
            <div class="form-group">
                <label for="InputLastName">Last Name</label>
                <input type="text" class="form-control" name="lastname" placeholder="Enter Your Last Name">
            </div>
            <div class="form-group">
                <label for="InputUsername">Username</label>
                <input type="text" class="form-control" name="username" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label for="InputEmail">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Enter Your Email">
            </div>
            <div class="form-group">
                <label for="InputPassword">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Enter Your Password">
            </div>
            <div class="form-group">
                <label for="ConfirmPassword">Confirm Password</label>
                <input type="password" class="form-control" name="cpassword" placeholder="Confirm Password">
            </div>
            <button type="submit"  class="btn btn-primary w-100">Sign Up</button>
            <div class="signup-link">
                <label for="already-signedup">Already have an account?<a href="login.php">Login</a></label>
            </div>
        </form>
    </div>
    <footer>
        <p>Developed by: <a href="https://www.linkedin.com/in/imalsha-akalanka-698684252?jobid=1234&lipi=urn%3Ali%3Apage%3Ad_jobs_easyapply_pdfgenresume%3BYyupy5tVSgGywNY6HShEcg%3D%3D&licu=urn%3Ali%3Acontrol%3Ad_jobs_easyapply_pdfgenresume-v02_profile">Imalsha Jathunarachchi</a></p>
    </footer>
    </div>
    
</body>
</html>