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
            <div class="input-group mb-3 pl-2 pr-2">
                <input type="text" class="form-control" placeholder="Программирование на С#" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary bg-primary text-light" type="button">Найти</button>
                </div>
            </div>
            <div class="grid-container">
                <a class="course-btn" href="unity/unitystart.php">
                    <button class="btn btn-secondary btn-case bg-primary">
                        <span class="direction-progress">0%</span>
                        <p class="direction-text">Программирование на С#</p> 
                        <div class="direction-param">
                            <span>5 модулей</span>
                            <span>24 часа</span>
                            <span>1528 участников</span>
                        </div>
                    </button>
                </a>
                <a class="course-btn" href="unity/unitystart.php">
                    <button class="btn btn-secondary btn-case">
                        <span class="direction-progress">0%</span>
                        <p class="direction-text">Математика</p> 
                        <div class="direction-param">
                            <span>5 модулей</span>
                            <span>24 часа</span>
                            <span>1528 участников</span>
                        </div>
                    </button>
                </a>
                <a class="course-btn" href="unity/unitystart.php">
                    <button class="btn btn-secondary btn-case bg-primary">
                        <span class="direction-progress">0%</span>
                        <p class="direction-text">Физика</p> 
                        <div class="direction-param">
                            <span>5 модулей</span>
                            <span>24 часа</span>
                            <span>1528 участников</span>
                        </div>
                    </button>
                </a>
                <a class="course-btn" href="unity/unitystart.php">
                    <button class="btn btn-secondary btn-case bg-danger">
                        <span class="direction-progress">0%</span>
                        <p class="direction-text">Python</p> 
                        <div class="direction-param">
                            <span>5 модулей</span>
                            <span>24 часа</span>
                            <span>1528 участников</span>
                        </div>
                    </button>
                </a>
                <a class="course-btn" href="unity/unitystart.php">
                    <button class="btn btn-secondary btn-case bg-success">
                        <span class="direction-progress">0%</span>
                        <p class="direction-text">Unity</p> 
                        <div class="direction-param">
                            <span>5 модулей</span>
                            <span>24 часа</span>
                            <span>1528 участников</span>
                        </div>
                    </button>
                </a>
                <a class="course-btn" href="unity/unitystart.php">
                    <button class="btn btn-secondary btn-case bg-warning">
                        <span class="direction-progress">0%</span>
                        <p class="direction-text">Unreal Engine</p> 
                        <div class="direction-param">
                            <span>5 модулей</span>
                            <span>24 часа</span>
                            <span>1528 участников</span>
                        </div>
                    </button>
                </a>
                <a class="course-btn" href="unity/unitystart.php">
                    <button class="btn btn-secondary btn-case bg-success">
                        <span class="direction-progress">0%</span>
                        <p class="direction-text">3D моделирование в Blender</p> 
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