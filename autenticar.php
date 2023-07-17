<?php

session_start();

require_once 'config.php';
require_once 'auth.php';


$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE username = ? AND password = ? ";
$sql = $pdo->prepare($query);
if ($sql->execute([$username, $password])) {
    $user = $sql->fetch(PDO::FETCH_ASSOC);
} else {
    $user = [];
}

if (!empty($user)) {
    $_SESSION['is_authenticated'] = true;
    $_SESSION['user'] = $user;
    echo "<p class='msg'> I'M THE MASTER OF MY DOMAIN </p>"; 
} else {
    echo "<p class='msg'> NOT ALLOWED </p>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle ?></title>
    <link rel="stylesheet" href="./public/style.css">
</head>
<body>
<br>
    <br>
    <a id="a" href="index.php">Voltar ao Login</a>



</body>
</html>