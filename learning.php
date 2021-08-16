<?php 
    include_once "config.php";
?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" type="image/png" href="../media/logo.png"/>
        <title>GoGame</title>
    </head>
<body>
    
    <?php require "header.php"?>

    <main class="content-wrapper">
        <div class="container text-center">
            <h1 class="text-center mt-5 mb-3">Выбери направление</h1>
            <div class="course-row mt-5">
                <a class="course-btn shadow-lg mb-5 bg-white rounded" href="modulePage.php">
                    <button class="btn btn-case">
                        <div class="d-flex">
                            <img class="learn-img" src="../media/joystick.png" alt="">
                            <div class="learn-info text-left">
                                <h5 class="learn-card__title">Разработка игр</h5>
                                <p class="learn-card__text text-secondary">Программирование на С++</p> 
                                <p class="direction-param">
                                    <span><img class="mx-2" src="media/module_black.png" alt="">5 модулей</span>
                                    <span><img class="mx-2" src="media/clock_black.png" alt=""> 24 часа </span>
                                </p>
                            </div>
                        </div>
                        <!--<div class="progress">
                            <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">50%</div>
                        </div>-->
                    </button>
                </a>
            </div>
            <div class="course-row">
                <a class="course-btn shadow-lg mb-5 bg-white rounded" href="modulePage.php">
                    <button class="btn btn-case">
                        <div class="d-flex">
                            <img class="learn-img" src="../media/frontend.png" alt="">
                            <div class="learn-info text-left">
                                <h5 class="learn-card__title">FrontEnd</h5>
                                <p class="learn-card__text text-secondary">Программирование на С++</p> 
                                <p class="direction-param">
                                    <span><img class="mx-2" src="media/module_black.png" alt="">5 модулей</span>
                                    <span><img class="mx-2" src="media/clock_black.png" alt=""> 24 часа </span>
                                </p>
                            </div>
                        </div>
                        <!--<div class="progress">
                            <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">50%</div>
                        </div>-->
                    </button>
                </a>
            </div>
        </div>
    </main>

    <?php require "footer.php"?>
    
</body>
</html>