<?php
$help = $_POST["help"];
$message = $_POST["message"];
$name = $_POST["name"];
$email = $_POST["email"];
$sendTo = "musicgabriellima@gmail.com";

mail($sendTo, $help, $message, $name, $email);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gabriel Bertan</title>
    <!--CSS CONF-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css" integrity="sha512-NmLkDIU1C/C88wi324HBc+S2kLhi08PN5GDeUVVVC/BVt/9Izdsc9SVeVfA1UZbY3sHUlDSyRXhCzHfr6hmPPw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <!--FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&display=swap" rel="stylesheet">
</head>
<body>
    <main>
        <!--PAGE 1---------------------------------------------------->
        <div class="page1" id="page1">
            <div>    
                <a href="index.php">
                    <img id="thankyou" src="./LOGO/Thankyou.gif">
                    <img id="home" src="./LOGO/Home.gif">
                </a>
            </div>
        </div>
    <main>
</body>
</html>
