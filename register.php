<?php
if(isset($_POST['submit'])){

    $email = $_POST['email'];
    $password = $_POST['password'];
    $conpassword = $_POST['con_password'];

    // $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number    = preg_match('@[0-9]@', $password);

if(empty(trim($email))){
    echo 'Email cannot be empty';
}elseif(empty(trim($password))){
    echo 'Password cannot be empty';
}elseif(empty(trim($conpassword))){
    echo 'Re-Enter Password';
}else{
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo '<p>Must be a valid email</p>';
    }elseif(!$lowercase || strlen($password) < 6) {
        echo '<p>Your password must contain letters and numbers & not less than 6</p>';
      }elseif($password !== $conpassword){
          echo 'Password do not match. Try again';
      }else{
          echo 'Success';
        session_start();

        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;

        header('Location: login.php');
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
    <title>Register</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="container">
    <h1>Register Here</h1>
    <form action="register.php" method="POST">
    <label for="">Email</label>
    <input type="email" name="email" placeholder="Enter Email">

    <label for="">password</label>
    <input type="password" name="password" placeholder="Enter Password">

    <label for="">password</label>
    <input type="password" name="con_password" placeholder="Confirm Password">

    <input type="submit" name="submit" value="Submit">
    </form>
    </div>
</body>
</html>