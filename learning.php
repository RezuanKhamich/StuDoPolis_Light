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
        <title>GoGame</title>
    </head>
<body>
    
    <?php require "header.php"?>

    <main class="content-wrapper">
        <div class="container">
            <h1 class="text-center">Обучение</h1>
            <div class="row mt-3">
                <a class="course-btn" href="unity/unitystart.php">
                    <button class="btn btn-secondary btn-case">
                        <span class="direction-progress">0%</span>
                        <p class="direction-text">Разработка игр</p> 
                        <div class="direction-param">
                            <span>5 модулей</span>
                            <span>24 часа</span>
                            <span>1528 участников</span>
                        </div>
                    </button>
                </a>
            </div>
        </div>
    </main>

    <?php require "footer.php"?>
    
</body>
</html>