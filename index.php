
<?php
session_start();

if (!isset($_SESSION['email']) && !isset($_SESSION['password'])) {
    header('Location: login.php');
}else{
   $email = $_SESSION['email'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=for, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<div class="container">
<h1>Welcome. <?php echo htmlspecialchars($email) ?> You have successfully logged in and registered</h1>
</div>
</body>
</html>