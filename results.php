<?php 
include "./partials/functions.php";

$lengthPassword = $_GET['number'];

session_start();

$_SESSION['password'] = randomPassword($lengthPassword);



?>


<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password</title>
</head>
<body>
    <h1>Password Generata</h1>

    <?php echo "<p>Password generata: {$_SESSION['password']} </p>" ?>


    <br>

    <hr>

    <a href="index.php">Torna alla Pagina principale</a>
</body>
</html>