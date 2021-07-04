<?php
session_start();

if(isset($_POST['submit'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    // $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);

if(empty(trim($email))){
    echo 'Email cannot be empty';
}elseif(empty(trim($password))){
    echo 'Password cannot be empty';
}else{
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo '<p>Must be a valid email</p>';
    }elseif(!$lowercase || strlen($password) < 6) {
        echo '<p>Your password must letters and numbers & not less than 6</p>';
      }else{

        if (isset($_SESSION['email']) && isset($_SESSION['password'])) {
            $_SESSION['email'];
            $_SESSION['password'];
        
            if($email == $_SESSION['email'] && $password == $_SESSION['password'])
            {
                header('Location: index.php');
            }else{
                echo 'Credentials not found. Register Instead';
            }
    
            
            }
        }
         
        
        

    }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="container">
    
    <h1>Login Here</h1>
    <form action="login.php" method="POST">
    <label for="">Email</label>
    <input type="email" name="email" placeholder="Enter Email">

    <label for="">password</label>
    <input type="password" name="password" placeholder="Enter Password">

    <input type="submit" name="submit" value="Login">
    </form>
    <a href="register.php" style="text-decoration: none; border: solid 1px #fff; color: black; background: #fff">Register Here</a>
    
    </div>
</body>
</html>