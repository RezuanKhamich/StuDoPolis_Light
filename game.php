<?php 
    include_once "config.php";
?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" type="image/png" href="../media/logo.png"/>
        <title>GoGame | Игра</title>
    </head>
<body>
    
    <?php require "header.php"?>

    <main class="content-wrapper" style="margin-bottom: 50px;">
        <div class="container-fluid">
            <h1 class="text-center">Ваш город</h1>
            <canvas id="canvas"></canvas>
        </div>
        
    </main>
    <script src="../js/town.js"></script>
    <?php require "footer.php"?>

</body>
</html>